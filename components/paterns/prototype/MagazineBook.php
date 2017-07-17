<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/17/17
 * Time: 3:27 PM
 */

namespace app\components\paterns\prototype;


class MagazineBook extends BookProtototype
{
    protected $category="MagazineBook";
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}