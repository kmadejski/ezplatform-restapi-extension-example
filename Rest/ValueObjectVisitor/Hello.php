<?php

namespace EzSystems\RESTAPIExtensionExampleBundle\Rest\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * Class Hello
 * @package EzSystems\RESTAPIExtensionExampleBundle\Rest\ValueObjectVisitor
 */
class Hello extends ValueObjectVisitor
{
    /**
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param mixed $data
     */
    public function visit(Visitor $visitor, Generator $generator, $data)
    {
        $generator->startHashElement("Hello");
        $generator->startAttribute("name", $data->name);
        $generator->endAttribute("name");
        $generator->endHashElement("Hello");
    }
}