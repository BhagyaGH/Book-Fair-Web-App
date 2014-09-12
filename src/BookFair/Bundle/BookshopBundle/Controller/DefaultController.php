<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BookFairBookshopBundle:Login:main.html.twig');
    }
    
    public function aboutAction() {
        return $this->render('BookFairBookshopBundle:About:index.html.twig');
    }
    
}
