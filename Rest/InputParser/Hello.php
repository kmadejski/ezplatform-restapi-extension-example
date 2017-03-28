<?php

namespace EzSystems\RESTAPIExtensionExampleBundle\Rest\InputParser;

use eZ\Publish\Core\REST\Common\Input\BaseParser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\Exceptions;
use EzSystems\RESTAPIExtensionExampleBundle\Rest\Values\Hello as HelloValue;

/**
 * Class Hello
 * @package EzSystems\RESTAPIExtensionExampleBundle\Rest\InputParser
 */
class Hello extends BaseParser
{
    /**
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \EzSystems\RESTAPIExtensionExampleBundle\Rest\Values\Hello
     */
    public function parse(array $data, ParsingDispatcher $parsingDispatcher)
    {
        if (!isset($data['name'])) {
            throw new Exceptions\Parser("Missing or ivalid 'name' element for Hello.");
        }
        return new HelloValue($data['name']);
    }
}