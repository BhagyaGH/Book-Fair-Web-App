<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminAccountController extends Controller {

    public function indexAction() {
        return $this->render('BookFairBookshopBundle:Admin:index.html.twig');
    }

    public function booksAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository('BookFairBookshopBundle:Book');
        $books = $rep->findAll();
        return $this->render('BookFairBookshopBundle:Admin:books.html.twig', array('books' => $books));
    }

    public function bookshopsAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository('BookFairBookshopBundle:Bookshop');
        $bookshops = $rep->findAll();
        return $this->render('BookFairBookshopBundle:Admin:bookshops.html.twig', array('bookshops' => $bookshops));
    }
    
    public function bookDetailsAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository('BookFairBookshopBundle:Book');
        $book = $rep->findOneBy(array('bookId' => $request->get('book_id')));

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM has natural join bookshop where book_id = :id ORDER BY bookshop_name");
        $statement->bindValue('id', $request->get('book_id'));
        $statement->execute();
        $bookshops = $statement->fetchAll();

        return $this->render('BookFairBookshopBundle:Admin:bookshow.html.twig', array('book' => $book, 'bookshops' => $bookshops));
    }

    public function bookshopDetailsAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $rep = $em->getRepository('BookFairBookshopBundle:Bookshop');
        $bookshop = $rep->findOneBy(array('bookshopId' => $request->get('bookshop_id')));

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM has natural join book where bookshop_id = :id ORDER BY title");
        $statement->bindValue('id', $request->get('bookshop_id'));
        
        $statement->execute();
        $books = $statement->fetchAll();

        return $this->render('BookFairBookshopBundle:Admin:bookshopshow.html.twig', array('bookshop' => $bookshop, 'books' => $books));
    }
    
    public function validationAction() {
        return $this->render('BookFairBookshopBundle:Admin:validation.html.twig');
    }
    
    public function bookshopKeysAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM validation where acctype = 'bookshop' order by key_id");
        
        $statement->execute();
        $keys = $statement->fetchAll();
        
        return $this->render('BookFairBookshopBundle:Admin:bookshopkeys.html.twig', array('keys' => $keys));
    }

    public function adminKeysAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM validation where acctype = 'admin' order by key_id");
        
        $statement->execute();
        $keys = $statement->fetchAll();
        
        return $this->render('BookFairBookshopBundle:Admin:adminkeys.html.twig', array('keys' => $keys));
    }
    
    public function keyDeleteAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $key = $em->getRepository('BookFairBookshopBundle:Validation')->findOneBy(array('keyId' => $request->get('key')));
        $em->remove($key);
        $em->persist($key);
        $em->flush();
        
        return $this->render('BookFairBookshopBundle:Admin:validation.html.twig');
    }
    
    public function keyAddAction() {
        return $this->render('BookFairBookshopBundle:Admin:addkeys.html.twig');
    }
    
    public function keySaveAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        
        $connection = $em->getConnection();
        $statement = $connection->prepare("INSERT into validation values('".$request->get("key")."', 1, '".$request->get('acctype')."')");
        $statement->execute();
        
        return $this->render('BookFairBookshopBundle:Admin:validation.html.twig');
    }
    
}
