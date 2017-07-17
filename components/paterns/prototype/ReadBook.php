<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/17/17
 * Time: 3:25 PM
 */

namespace app\components\paterns\prototype;


class ReadBook extends BookProtototype
{

    protected $category="ReadBook";
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}