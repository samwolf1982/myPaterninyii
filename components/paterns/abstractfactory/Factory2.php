<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/15/17
 * Time: 7:27 PM
 */

namespace app\components\paterns\abstractfactory;

class Factory2 extends AbstractfactoryClassname
{

    function convertsome($param)
    {
        // TODO: Implement convertsome() method.
        $text=new Textfactory2($param);
        return $text;
    }
}