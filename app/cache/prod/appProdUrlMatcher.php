<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // book_fair_bookshop_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::indexAction',  '_route' => 'book_fair_bookshop_homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // book_fair_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::indexAction',  '_route' => 'book_fair_login',);
            }

            // book_fair_login_validation
            if ($pathinfo === '/login2') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_book_fair_login_validation;
                }

                return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::loginAction',  '_route' => 'book_fair_login_validation',);
            }
            not_book_fair_login_validation:

        }

        // bookshop_account
        if (0 === strpos($pathinfo, '/bookshop') && preg_match('#^/bookshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_account')), array (  '_controller' => 'BookFairBookshopBundle:BookshopAccount:index',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
