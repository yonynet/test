<?php

namespace yony\netBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('yonynetBundle:Default:index.html.twig', array('name' => $name));
    }
}
