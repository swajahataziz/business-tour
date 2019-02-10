<?php

namespace App\Utils;

class XmlUtil {

	/**
	 * A method to append a simpleXML object to another simpleXML object
	 * todo: method needs deprecating by replacing it with a more efficient XML lib
	 * @param $xmlTo
	 * @param $xmlFrom 
	 */

	function append($xmlTo, $xmlFrom, $firstLoop = true) {

        if ($firstLoop) {
            foreach ($xmlFrom->attributes() as $attrKey => $attrValue) {
                $xmlTo->addAttribute($attrKey, $attrValue);
            }
        }
        foreach ($xmlFrom->children() as $xmlChild) {
            $xmlTemp = $xmlTo->addChild($xmlChild->getName(), (string)$xmlChild);
            foreach ($xmlChild->attributes() as $attrKey => $attrValue) {
                $xmlTemp->addAttribute($attrKey, $attrValue);
            }
            $this->append($xmlTemp, $xmlChild, false);
        }
	}
}