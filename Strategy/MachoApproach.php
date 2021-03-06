<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */

namespace Pattern\Strategy;

class MachoApproach implements ApproachStrategyInterface
{
    /**
     * @return string
     */
    public function approachABeautifulWoman()
    {
        return "Hey Baby, I'm so cool. Give me your phone number.";
    }
}
