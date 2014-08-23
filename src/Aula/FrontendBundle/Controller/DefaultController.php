<?php

namespace Aula\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\Session\Session;
use Aula\BackendBundle\Form\UserType;
use Aula\FrontendBundle\Form\MyGradeType;
use Aula\BackendBundle\Entity\TeacherGrade;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AulaFrontendBundle:Default:index.html.twig');
    }

    public function myGradesAction()
    {
    	$user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $grades    = $em->getRepository('AulaBackendBundle:TeacherGrade')->findAll();
        $my_grades = $em->getRepository('AulaBackendBundle:TeacherGrade')->findAll();//(array('toUser' => $user), array('createdAt' => 'DESC'));

        /*$form_grade = $this->createForm(new UserType(), $user, array(
            'action' => $this->generateUrl('aula_frontend_grade_create'),
            'method' => 'POST',
        ));*/
        //$form_grade->add('pic', 'file', array('data_class' => 'Symfony\Component\HttpFoundation\File\File'));
        $form_grade->add('submit', 'submit', array('label' => 'Enviar'));

        
        return $this->render('AulaFrontendBundle:Default:my_grades.html.twig', array('grades' => $grades, 'form_grade' => $form_grade->createView()));
    }

    public function myGradeCreateAction(Request $request)
    {
    	$user = $this->getUser();

        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('aula_frontend_grade_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Enviar'));
        
        $form->handleRequest($request);

        
        var_dump($form->isValid());exit;
        if ($form->isValid()) {
        	//echo "<pre>";
	        //\Doctrine\Common\Util\Debug::dump($entity);
	        //exit;
	        $em = $this->getDoctrine()->getManager();

	        $user = $this->getUser();
	        $entity->setUser($user);
	        $em->persist($entity);
            //exit;
            
            
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }
        $em = $this->getDoctrine()->getManager();
        $grades    = $em->getRepository('AulaBackendBundle:TeacherGrade')->findAll();
        return $this->render('AulaFrontendBundle:Default:my_grades.html.twig', array(
            'entity' => $entity,
            'form_grade'   => $form->createView(),
            'grades' => $grades
        ));
    }



    /**
    * Creates a form to create a Ad entity.
    *
    * @param Ad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TeacherGrade $entity)
    {
        $form = $this->createForm(new MyGradeType(), $entity, array(
            'action' => $this->generateUrl('aula_frontend_grade_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enviar'));

        return $form;
    }


    public function registerAction(Request $request)
    {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');
    	
    	$user = $this->get('security.context')->getToken()->getUser();


        //var_dump($user);exit;
        
        if ($user == "anon.")
			$user = $userManager->createUser();
		//var_dump($user);exit;
        //$user->setEnabled(true);

    
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, new UserEvent($user, $request));
    
        $form = $formFactory->createForm();
        /*$form = $this->createForm(new UserType(), $user, array(
            'action' => $this->generateUrl('fos_user_registration_register'),
            'method' => 'POST',
        ));*/
        $form->setData($user);

        //var_dump($form);exit;



        return $this->render('FOSUserBundle:Registration:register.html.twig',array('form' => $form->createView()));
    }


    public function classesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $teachers = $em->getRepository('AulaBackendBundle:User')->findBy(array('type' => 'professor'));

        foreach ($teachers as $t) {
            $professores[$t->getId()]['name'] = $t->getName();
            $professores[$t->getId()]['pic'] = $t->getPic();
            $professores[$t->getId()]['id'] = $t->getId();
            $professores[$t->getId()]['price'] = $t->getPrice();
            $grade = $em->getRepository('AulaBackendBundle:Grade')->findOneById($t->getGradeId());
            
            
            $professores[$t->getId()]['grade'] = $grade->getName();
        }
        //echo "<pre>";
        //\Doctrine\Common\Util\Debug::dump($teachers);
        //exit;
        return $this->render('AulaFrontendBundle:Default:classes.html.twig', array('teachers' => $professores));
    }

    public function viewTeacherAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AulaBackendBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find entity.');
        }

        $grade = $em->getRepository('AulaBackendBundle:Grade')->findOneById($entity->getGradeId());

        $related = $em->getRepository('AulaBackendBundle:User')->findBy(array('grade_id' => $entity->getGradeId()));

        return $this->render('AulaFrontendBundle:Default:view_teacher.html.twig', array(
            'teacher'      => $entity,
            'grade'        => $grade->getName(),
            'related'      => $related
            ));
    }


}
