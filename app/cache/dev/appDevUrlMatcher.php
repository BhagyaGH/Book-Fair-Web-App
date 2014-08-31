<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // book_fair_bookshop_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::indexAction',  '_route' => 'book_fair_bookshop_homepage',);
        }

        // book_fair_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::indexAction',  '_route' => 'book_fair_login',);
        }

        // book_fair_login_validation
        if ($pathinfo === '/account') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_book_fair_login_validation;
            }

            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\LoginController::loginAction',  '_route' => 'book_fair_login_validation',);
        }
        not_book_fair_login_validation:

        // book_fair_register_key
        if ($pathinfo === '/entervalidationkey') {
            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\RegisterController::keyEnterAction',  '_route' => 'book_fair_register_key',);
        }

        // book_fair_register_key_check
        if ($pathinfo === '/validationkey') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_book_fair_register_key_check;
            }

            return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\RegisterController::keyCheckAction',  '_route' => 'book_fair_register_key_check',);
        }
        not_book_fair_register_key_check:

        if (0 === strpos($pathinfo, '/register')) {
            // book_fair_register_bookshopacc
            if ($pathinfo === '/registerBookshopAccount') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_book_fair_register_bookshopacc;
                }

                return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\RegisterController::registerBookshopAccAction',  '_route' => 'book_fair_register_bookshopacc',);
            }
            not_book_fair_register_bookshopacc:

            // book_fair_register_adminacc
            if ($pathinfo === '/registerAdminAccount') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_book_fair_register_adminacc;
                }

                return array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\RegisterController::registerAdminAccAction',  '_route' => 'book_fair_register_adminacc',);
            }
            not_book_fair_register_adminacc:

        }

        if (0 === strpos($pathinfo, '/bookshop')) {
            // bookshop_account
            if (preg_match('#^/bookshop/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_account')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::indexAction',));
            }

            // bookshop_account_prof
            if (0 === strpos($pathinfo, '/bookshopProfile') && preg_match('#^/bookshopProfile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_account_prof')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::profileAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // bookshop_book_add
            if (0 === strpos($pathinfo, '/addNewBook') && preg_match('#^/addNewBook/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_add')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookController::addBookAction',));
            }

            // bookshop_book_available
            if (0 === strpos($pathinfo, '/availableBooks') && preg_match('#^/availableBooks/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_available')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::availableBooksAction',));
            }

        }

        // bookshop_book_notavailable
        if (0 === strpos($pathinfo, '/notAvailableBooks') && preg_match('#^/notAvailableBooks/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_notavailable')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::notAvailableBooksAction',));
        }

        if (0 === strpos($pathinfo, '/update')) {
            // bookshop_book_update
            if (0 === strpos($pathinfo, '/updateBooks') && preg_match('#^/updateBooks/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_update')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookController::indexAction',));
            }

            // bookshop_book_update2
            if (preg_match('#^/update/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_update2')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::updateBookAction',));
            }

        }

        // bookshop_book_update3
        if (0 === strpos($pathinfo, '/insert') && preg_match('#^/insert/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_book_update3')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::updateNewBookAction',));
        }

        // bookshop_add_discount
        if (0 === strpos($pathinfo, '/discount') && preg_match('#^/discount/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookshop_add_discount')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookshopAccountController::addDiscountAction',));
        }

        // book_show
        if (0 === strpos($pathinfo, '/showbook') && preg_match('#^/showbook/(?P<bookshop_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_show')), array (  '_controller' => 'BookFair\\Bundle\\BookshopBundle\\Controller\\BookController::showBookAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
