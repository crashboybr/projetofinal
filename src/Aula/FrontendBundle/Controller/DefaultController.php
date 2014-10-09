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
use Aula\BackendBundle\Entity\User;
use Aula\FrontendBundle\Vline\Vline;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $teachers = $em->getRepository('AulaBackendBundle:User')->findBy(array('type' => 'professor'),array(),4,0);
            
        return $this->render('AulaFrontendBundle:Default:index.html.twig', array('teachers' => $teachers));
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
        /*
        foreach ($teachers as $t) {
            $professores[$t->getId()]['name'] = $t->getName();
            $professores[$t->getId()]['pic'] = $t->getPic();
            $professores[$t->getId()]['id'] = $t->getId();
            $professores[$t->getId()]['price'] = $t->getPrice();
            $grade = $em->getRepository('AulaBackendBundle:Grade')->findOneById($t->getGradeId());
            
            
            $professores[$t->getId()]['grade'] = $grade->getName();
        }*/
        //echo "<pre>";
        //\Doctrine\Common\Util\Debug::dump($teachers);
        //exit;
        return $this->render('AulaFrontendBundle:Default:classes.html.twig', array('teachers' => $teachers));
    }

    public function viewTeacherAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AulaBackendBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find entity.');
        }
        //echo "<pre>";
        //var_dump($entity);exit;
        //$grade = $em->getRepository('AulaBackendBundle:Grade')->findOneById($entity->getGradeId());
        $user = $this->getUser();
        $schedule = null;

        if ($user) {
            //$schedule = $em->getRepository('AulaBackendBundle:Schedule')->findOneBy(array('teacherId' => $id, 'studentId' => $user->getId(), 'status' ));
            $repository = $this->getDoctrine()
                ->getRepository('AulaBackendBundle:Schedule');

            $qb = $repository->createQueryBuilder('u');
            
            $qb->where('u.status != :status AND u.teacherId = :teacher_id AND u.studentId = :student_id')
               ->setParameter('status', -10)
               ->setParameter('teacher_id', $id)
               ->setParameter('student_id', $user->getId());
            $qb->setMaxResults(1);

            $schedule = $qb->getQuery()
                ->getResult();

            if ($schedule) $schedule = $schedule[0];

        }

        $ratings = $em->getRepository('AulaBackendBundle:Rating')->findBy(array('teacher' => $entity));
        $schedules = $em->getRepository('AulaBackendBundle:Schedule')->findBy(array('teacher' => $entity));
        $total = 0;

        foreach ($ratings as $rating) 
            $total += $rating->getRating();
        if (count($ratings))
            $total_ratings = $total / count($ratings);
        else 
            $total_ratings = 0;

        $related = $em->getRepository('AulaBackendBundle:User')->findBy(array('grade' => $entity->getGrade()));

        return $this->render('AulaFrontendBundle:Default:view_teacher.html.twig', array(
            'teacher'           => $entity,
            'schedule'          => $schedule,
            'related'           => $related,
            'ratings'           => $ratings,
            'total_ratings'     => $total_ratings,
            'schedules'         => $schedules,
            ));
    }


    public function myRequestAction()
    {
        $em = $this->getDoctrine()->getManager();
        //echo "<pre>";
        $user = $this->getUser();
        
        if ($user->getType() == 'professor')
            $schedules = $em->getRepository('AulaBackendBundle:Schedule')->findBy(array('teacherId' => $user->getId()));
        else
            $schedules = $em->getRepository('AulaBackendBundle:Schedule')->findBy(array('studentId' => $user->getId()));
        
        return $this->render('AulaFrontendBundle:Default:schedules.html.twig', array(
            'schedules'      => $schedules,
            'user' => $user
            ));
    }

    public function redirClassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        //echo "<pre>";
        $user = $this->getUser();
        
        
        $schedule = $em->getRepository('AulaBackendBundle:Schedule')->find($id);

        $schedule->setStatus(100);
        $em->persist($schedule);
        $em->flush();
        
        return $this->redirect('http://162.248.161.219/');
    }

    public function acceptRequestAction($id, $accept)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->getUser();
        
        $schedule = $em->getRepository('AulaBackendBundle:Schedule')->find($id);

        if ($accept)
            $schedule->setStatus(10);
        else 
            $schedule->setStatus(-10);

        $em->persist($schedule);
        $em->flush();

        return $this->redirect($this->generateUrl('fos_user_profile_show'));
    }

    public function agendaAction()
    {
        $em = $this->getDoctrine()->getManager();
        //echo "<pre>";
        $user = $this->getUser();
        
        if ($user->getType() == 'professor')
            $schedules = $em->getRepository('AulaBackendBundle:Schedule')->findBy(
                array('teacherId' => $user->getId(), 'status' => 10)
                );
        else
            $schedules = $em->getRepository('AulaBackendBundle:Schedule')->findBy(array('studentId' => $user->getId()));
        
        return $this->render('AulaFrontendBundle:Default:agenda.html.twig', array(
            'schedules'      => $schedules,
            'user' => $user
            ));
    }

    public function startClassAction() {
        $vline = new Vline();
        $vline->setUser(2, 'teste');
        $vline->init();
        return $this->render('AulaFrontendBundle:Default:start-class-test.html.twig', array('vline' => $vline));
    }



}
