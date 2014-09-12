<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookshopAccountController extends Controller {

    public function indexAction($bookshop_id) {
        $em = $this->getDoctrine()->getEntityManager();
        $bookshop = $em->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));

        return $this->render('BookFairBookshopBundle:Bookshop:index.html.twig', array('bookshop_id' => $bookshop_id, 'bookshop' => $bookshop));
    }

    public function booksAction($bookshop_id) {
        $em = $this->getDoctrine()->getEntityManager();
        $bookshop = $em->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));

        return $this->render('BookFairBookshopBundle:Bookshop:books.html.twig', array('bookshop_id' => $bookshop_id, 'bookshop' => $bookshop));
    }
    
    public function profUpdateStallAction($bookshop_id) {
        return $this->render('BookFairBookshopBundle:Bookshop:updatestall.html.twig', array('bookshop_id' => $bookshop_id));
    }
    
    public function profSaveStallAction($bookshop_id, Request $request) {
        $stall = $request->get('stall');
        
        $em = $this->getDoctrine()->getEntityManager();
        $bookshop = $em->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        
        $bookshop->setStallNo($stall);
        $em->persist($bookshop);
        $em->flush();
        
        return $this->render('BookFairBookshopBundle:Bookshop:profile.html.twig', array('bookshop_id' => $bookshop_id, 'bookshop' => $bookshop));
    }

    public function availableBooksAction($bookshop_id) {
        $bookshop = $this->getDoctrine()->getEntityManager()->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        $books = $this->listBooksAction($bookshop_id);
        return $this->render('BookFairBookshopBundle:Bookshop:availablebooklist.html.twig', array(
                    'bookshop_id' => $bookshop_id, 'bookshop' => $bookshop, 'books' => $books));
    }

    public function notAvailableBooksAction($bookshop_id) {
        $bookshop = $this->getDoctrine()->getEntityManager()->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        $books = $this->listBooksAction($bookshop_id);
        return $this->render('BookFairBookshopBundle:Bookshop:notavailablebooklist.html.twig', array(
                    'bookshop_id' => $bookshop_id, 'bookshop' => $bookshop, 'books' => $books));
    }

    public function profileAction($bookshop_id) {
        $bookshop = $this->getDoctrine()->getEntityManager()->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
        return $this->render('BookFairBookshopBundle:Bookshop:profile.html.twig', array('bookshop_id' => $bookshop_id, 'bookshop' => $bookshop));
    }

    private function listBooksAction($bookshop_id) {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT book_id, title, author, isAvailable, price, discount FROM has natural join book where bookshop_id = :id ORDER BY title");
        $statement->bindValue('id', $bookshop_id);
        $statement->execute();
        $results = $statement->fetchAll();

        return $results;
    }

    public function addDiscountAction(Request $request, $bookshop_id) {
        $title = $request->get('book');
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM has natural join book where bookshop_id = :id and title = :book");
        $statement->bindValue('id', $bookshop_id);
        $statement->bindValue('book', $title);
        $statement->execute();
        $results = $statement->fetchAll();

        $bookEntity = $em->getRepository('BookFairBookshopBundle:Book')->findOneBy(array('title' => $title));

        if ($results) {
            $isbn = $results[0]['isbn'];
            $title = $results[0]['title'];
            $author = $results[0]['author'];
            $isAvailable = $results[0]['isAvailable'];
            $oldDis = $results[0]['discount'];
            $price = $results[0]['price'];

            return $this->render('BookFairBookshopBundle:Book:updatebook2.html.twig', array(
                        'bookshop_id' => $bookshop_id,
                        'book_id' => $bookEntity->getBookId(),
                        'isbn' => $isbn,
                        'title' => $title,
                        'author' => $author,
                        'isAvailable' => $isAvailable,
                        'oldDis' => $oldDis,
                        'price' => $price
            ));
        } else {
            $book_title = $request->get('book');
            $title = $this->getDoctrine()->getManager()->getRepository('BookFairBookshopBundle:Book')->findOneBy(array('title' => $book_title));
            return $this->render('BookFairBookshopBundle:Book:updatebook3.html.twig', array(
                        'bookshop_id' => $bookshop_id,
                        'book' => $title
            ));
        }
    }

    public function updateBookAction(Request $request, $bookshop_id, $book_id) {
        $book = $this->getDoctrine()->getManager()->getRepository('BookFairBookshopBundle:Book')->findOneBy(array(
            'bookId' => $book_id));

        $isAvailable = (string) $request->get('newAvailable');
        $discount = (string) $request->get('newDis');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "UPDATE has SET isAvailable = " . $isAvailable . ", discount = " . $discount . " where bookshop_id = " . $bookshop_id . " and book_id = " . $book_id;

        $statement = $connection->prepare($sql);
        $statement->execute();

        return $this->render('BookFairBookshopBundle:Book:successfulupdate.html.twig', array(
                    'bookshop_id' => $bookshop_id,
                    'book' => $book,
                    'discount' => $request->get('newDis'),
                    'isAvailable' => $request->get('newAvailable')
        ));
    }

    public function updateNewBookAction(Request $request, $bookshop_id, $book_id) {

        $book = $this->getDoctrine()->getManager()->getRepository('BookFairBookshopBundle:Book')->findOneBy(array(
            'bookId' => $book_id));

        $isAvailable = (string) $request->get('newAvailable');
        $discount = (string) $request->get('newDis');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "INSERT INTO has(bookshop_id, book_id, discount, isAvailable) values(" . $bookshop_id . "," . $book_id . "," . $discount . "," . $isAvailable . ")";

        $statement = $connection->prepare($sql);
        $statement->execute();

        return $this->render('BookFairBookshopBundle:Book:successfulupdate.html.twig', array(
                    'bookshop_id' => $bookshop_id,
                    'book' => $book,
                    'discount' => $request->get('newDis'),
                    'isAvailable' => $request->get('newAvailable')
        ));
    }

}
