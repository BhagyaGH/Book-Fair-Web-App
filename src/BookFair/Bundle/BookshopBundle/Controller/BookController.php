<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use BookFair\Bundle\BookshopBundle\Entity\Book;
use BookFair\Bundle\BookshopBundle\Form\Type\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller {

    public function indexAction($bookshop_id) {
        $bookshop = $this->getDoctrine()->getManager()->getRepository(
                'BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        $books = $this->listAllBooksAction();
        return $this->render('BookFairBookshopBundle:Book:updateBook1.html.twig', array(
            'bookshop_id' => $bookshop_id, 'bookshop' => $bookshop, 'books' => $books));
    }
    
    public function addBookAction(Request $request, $bookshop_id) {
        
        $book = new Book();
        $form = $this->createForm(new BookType(), $book, array(
            'action' => $this->generateUrl('bookshop_book_add', array('bookshop_id' => $bookshop_id))
        ));
        $form->handleRequest($request);
        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return $this->render('BookFairBookshopBundle:Book:successfuladd.html.twig', array('bookshop_id' => $bookshop_id, 'isbn' => $book->getBookId(), 'bookTitle' => $book->getTitle()));
        }
        
        return $this->render('BookFairBookshopBundle:Book:index.html.twig', array('form' => $form->createView(), 'bookshop_id' => $bookshop_id));
        
    }
    
    private function listAllBooksAction() {
        
        // Entity Manager to access the database
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        // Statement to all the books in the database
        $statement = $connection->prepare("SELECT * FROM book ORDER BY title");
        $statement->execute();
        $results = $statement->fetchAll();
        
        return $results;
    }
    
    public function showBookAction(Request $request, $bookshop_id) {
        $book_id = $request->get('book_id');
        
        // Find the bookshop with the given bookshop_id in the bookshop table in the database
        $bookshop = $this->getDoctrine()->getManager()->getRepository(
                'BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        
        $book = $this->getDoctrine()->getManager()->getRepository(
                'BookFairBookshopBundle:Book')->findOneBy(array('bookId' => $book_id));
        
        return $this->render('BookFairBookshopBundle:Book:showbook.html.twig', array(
            'bookshop_id' => $bookshop_id,
            'bookshop' => $bookshop,
            'book' => $book
            ));
        
        
    }
}
