<?php

namespace Sonata\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SonataCatalogBundle:Default:index.html.twig', array('name' => $name));
    }
}
