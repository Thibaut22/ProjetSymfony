<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'nf_platform_home' => array (  0 =>   array (    0 => 'year',    1 => 'month',    2 => 'day',    3 => 'param',  ),  1 =>   array (    '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::indexAction',    'year' => '2015',    'month' => '05',    'day' => '16',    'param' => NULL,  ),  2 =>   array (    'year' => '\\d+',    'month' => '\\d+',    'day' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'param',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'day',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'month',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'year',    ),    4 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nf_platform_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nf_platform_excel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::createExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NF\\PlatformBundle\\Controller\\ActivitiesController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
