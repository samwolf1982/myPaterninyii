<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/15/17
 * Time: 8:01 PM
**/
 namespace app\components\paterns\abstractfactory;


    class Textfactory2 extends AbstractText
    {
        /**
         * Jsontext constructor.
         */
        public function __construct($text='jstext')
        {
            parent::__construct($text);
        }

        public function go(){
          return 'text factory 2';
        }
    }

