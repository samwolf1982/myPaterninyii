<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/15/17
 * Time: 7:27 PM
 */

namespace app\components\paterns\abstractfactory;


abstract class AbstractText
{

    private $text;

    /**
     * AbstractText constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }
}