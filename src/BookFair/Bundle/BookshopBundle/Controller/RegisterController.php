<?php
namespace BookFair\Bundle\BookshopBundle\Controller;

use BookFair\Bundle\BookshopBundle\Entity\Manages;
use BookFair\Bundle\BookshopBundle\Entity\UserAdmin;
use BookFair\Bundle\BookshopBundle\Entity\UserBookshop;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller {

    public function keyEnterAction() {
        return $this->render('BookFairBookshopBundle:Register:enterKey.html.twig');
    }

    public function keyCheckAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $vkey = $request->get('vkey');

            $em1 = $this->getDoctrine()->getEntityManager();
            $rep = $em1->getRepository('BookFairBookshopBundle:Validation');
            $record = $rep->findOneBy(array('keyId' => $vkey));

            if (is_null($record)) {
                return $this->render('BookFairBookshopBundle:Register:error.html.twig');
            } else {
                $isValid = $record->getIsValid();
                $type = $record->getAccType();
                
                if ($isValid == "1") {
                    if ($type == "bookshop") {
                        $em2 = $this->getDoctrine()->getEntityManager();
                        $rep1 = $em2->getRepository('BookFairBookshopBundle:Bookshop');
                        $bookshops = $rep1->findAll();
                        
                        foreach ($bookshops as $b) {
                            $bookshopNames[] = $b->getBookshopName();
                        }
                        if(!$bookshopNames) {
                            return $this->render('BookFairBookshopBundle:Register:error.html.twig');
                        }
                        $em3 = $this->getDoctrine()->getEntityManager();
                        $rep = $em3->getRepository('BookFairBookshopBundle:UserBookshop');
                        $users = $rep->findAll();
                        foreach ($users as $u) {
                            $usernames[] = $u->getUsername();
                        }
                        if(!$users) {
                            return $this->render('BookFairBookshopBundle:Register:error.html.twig');
                        }
                        return $this->render('BookFairBookshopBundle:Register:registerBookshopAcc.html.twig', array('vkey' => $vkey, 'bookshopNames' => $bookshopNames, 'users' => $usernames));
                    } elseif ($type == "admin") {
                        $em3 = $this->getDoctrine()->getEntityManager();
                        $rep = $em3->getRepository('BookFairBookshopBundle:UserAdmin');
                        $users = $rep->findAll();
                        foreach ($users as $u) {
                            $usernames[] = $u->getUsername();
                        }
                        if(!$users) {
                            return $this->render('BookFairBookshopBundle:Register:error.html.twig');
                        }
                        return $this->render('BookFairBookshopBundle:Register:registerAdminAcc.html.twig', array('vkey' => $vkey, 'users' => $usernames));
                    }
                }
            }
        }
        return $this->render('BookFairBookshopBundle:Register:error.html.twig');
    }
    
    public function registerBookshopAccAction(Request $request) {
        if($request->getMethod() == 'POST') {
            $vkey = $request->get('vkey');
            
            $em1 = $this->getDoctrine()->getEntityManager();
            $rep = $em1->getRepository('BookFairBookshopBundle:Validation');
            $record = $rep->findOneBy(array('keyId' => $vkey));
            
            $em2 = $this->getDoctrine()->getEntityManager();
            $record->setIsValid("0");
            $em2->persist($record);
            $em2->flush();
            
            $username = $request->get('username');
            $password = $request->get('password');
            $bookshopName = $request->get('bookshop');
            $email = $request->get('email');
            
            $bookManager = new UserBookshop();
            $bookManager->setUsername($username);
            $bookManager->setHash($this->hashPassword($password));
            $bookManager->setEmail($email);
            
            $em3 = $this->getDoctrine()->getEntityManager();
            $em3->persist($bookManager);
            $em3->flush();
            
            $em3 = $this->getDoctrine()->getEntityManager();
            $rep = $em3->getRepository('BookFairBookshopBundle:Bookshop');
            $bookshop = $rep->findOneBy(array('bookshopName' => $bookshopName));
            
            $manages = new Manages();
            $manages->setId($bookManager);
            $manages->setBookshop($bookshop);
            
            $em3->persist($manages);
            $em3->flush();
            
            return $this->render('BookFairBookshopBundle:Register:successfullReg.html.twig', array('bookshop_id' => $bookshop->getBookshopId(), 'id' => $bookManager->getId()));
        }
        return $this->render('BookFairBookshopBundle:Register:errorReg.html.twig');
    }
    
    public function registerAdminAccAction(Request $request) {
        if($request->getMethod() == 'POST') {
            $vkey = $request->get('vkey');
            
            $em1 = $this->getDoctrine()->getEntityManager();
            $rep = $em1->getRepository('BookFairBookshopBundle:Validation');
            $record = $rep->findOneBy(array('keyId' => $vkey));
            
            $em2 = $this->getDoctrine()->getEntityManager();
            $record->setIsValid("0");
            $em2->persist($record);
            $em2->flush();
            
            $username = $request->get('username');
            $password = $request->get('password');
            
            $admin = new UserAdmin();
            $admin->setUsername($username);
            $admin->setHash($this->hashPassword($password));
            
            $em3 = $this->getDoctrine()->getEntityManager();
            $em3->persist($admin);
            $em3->flush();
            
            return $this->render('BookFairBookshopBundle:Admin:index.html.twig', array('id' => $admin->getId()));
        }
        return $this->render('BookFairBookshopBundle:Register:errorReg.html.twig');
    }
    
    private function hashPassword($password) {
        $cost = 10;
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        $salt = sprintf("$2a$%02d$", $cost) . $salt;
        $hash = crypt($password, $salt);
        return $hash;
    }
}
