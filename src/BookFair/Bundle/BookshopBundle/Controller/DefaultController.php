<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $age)
    {
        return $this->render('BookFairBookshopBundle:Default:index.html.twig', array('name' => $name, 'age' => $age));
    }
}
