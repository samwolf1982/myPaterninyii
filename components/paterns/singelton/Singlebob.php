<?php
namespace app\components\paterns\singelton;
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/16/17
 * Time: 2:21 AM
 */
final class Singlebob
{

     private static $instance;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
         //       return self::$instance;
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;

    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }


}