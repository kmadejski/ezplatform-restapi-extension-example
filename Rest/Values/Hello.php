<?php

namespace EzSystems\RESTAPIExtensionExampleBundle\Rest\Values;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Class Hello
 * @package EzSystems\RESTAPIExtensionExampleBundle\Rest\Values
 */
class Hello extends ValueObject
{
    /**
     * @var string
     */
    public $name;

    /**
     * Hello constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct();
        $this->name = $name;
    }
}