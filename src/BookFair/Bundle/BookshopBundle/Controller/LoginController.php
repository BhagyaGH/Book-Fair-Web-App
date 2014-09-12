<?php

namespace BookFair\Bundle\BookshopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller {

    public function indexAction() {
        return $this->render('BookFairBookshopBundle:Login:login.html.twig');
    }

    public function loginAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = $request->get('password');

            $em = $this->getDoctrine()->getEntityManager();

            if ($request->get('acc_type') == 'admin') {
                $rep = $em->getRepository('BookFairBookshopBundle:UserAdmin');

                $user = $rep->findOneBy(array('username' => $username));

                if ($user and crypt($password, $user->getHash()) === $user->getHash()) {
                    return $this->render('BookFairBookshopBundle:Admin:index.html.twig', array('id' => $user->getId()));
                }
                return $this->render('BookFairBookshopBundle:Login:error.html.twig', array('msg' => "Login Error!"));
            }
            if ($request->get('acc_type') == 'bookshop') {
                $rep = $em->getRepository('BookFairBookshopBundle:UserBookshop');

                $user = $rep->findOneBy(array('username' => $username));

                if ($user and crypt($password, $user->getHash()) === $user->getHash()) {
                    $id = $user->getId();
                    $em = $this->getDoctrine()->getEntityManager();
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("SELECT bookshop_id, bookshop_name FROM bookshop natural join manages where id = :id");
                    $statement->bindValue('id', $id);
                    $statement->execute();
                    $result = $statement->fetchAll();

                    if ($result) {
                        $bookshop_id = $result[0]['bookshop_id'];
                        $bookshop = $em->getRepository('BookFairBookshopBundle:Bookshop')->findOneBy(array('bookshopId' => $bookshop_id));
                        return $this->render('BookFairBookshopBundle:Bookshop:index.html.twig', array('bookshop_id' => $bookshop_id, 'bookshop' => $bookshop));
                    }
                }
                return $this->render('BookFairBookshopBundle:Login:error.html.twig', array('msg' => "Login Error!"));
            }
            return $this->render('BookFairBookshopBundle:Login:error.html.twig', array('msg' => "Login Error!"));
        }
    }

}
