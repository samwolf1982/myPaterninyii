<?php
namespace app\components\paterns\prototype;
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/17/17
 * Time: 3:21 PM
 */
abstract class BookProtototype
{
    protected  $title;
    protected $category;


     abstract public function __clone();

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}