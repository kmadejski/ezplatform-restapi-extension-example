<?php

namespace EzSystems\RESTAPIExtensionExampleBundle\Rest\Controller;

use EzSystems\RESTAPIExtensionExampleBundle\Rest\Values\Hello;
use eZ\Publish\Core\REST\Server\Controller;

/**
 * Class RESTExampleController
 * @package EzSystems\RESTAPIExtensionExampleBundle\Rest\Controller
 */
class RESTExampleController extends Controller
{
    /**
     * @param $name
     * @return \EzSystems\RESTAPIExtensionExampleBundle\Rest\Values\Hello
     */
    public function hello($name)
    {
        return new Hello($name);
    }
}