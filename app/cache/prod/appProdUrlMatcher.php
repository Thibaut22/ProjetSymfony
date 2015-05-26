<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/platform')) {
            // nf_platform_home
            if (preg_match('#^/platform(?:/(?P<year>\\d+)(?:/(?P<month>\\d+)(?:/(?P<day>\\d+)(?:/(?P<param>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nf_platform_home')), array (  '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::indexAction',  'year' => '2015',  'month' => '05',  'day' => '16',  'param' => NULL,));
            }

            // nf_platform_add
            if ($pathinfo === '/platform/add') {
                return array (  '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::addAction',  '_route' => 'nf_platform_add',);
            }

            // nf_platform_excel
            if ($pathinfo === '/platform/excel') {
                return array (  '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::createExcelAction',  '_route' => 'nf_platform_excel',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
