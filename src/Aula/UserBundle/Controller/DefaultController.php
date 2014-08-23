<?php

namespace Aula\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AulaUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
