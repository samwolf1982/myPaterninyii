<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\components\paterns\abstractfactory\Factory1;
use app\components\paterns\abstractfactory\Factory2;
use app\components\paterns\prototype\MagazineBook;
use app\components\paterns\prototype\ReadBook;
use app\components\paterns\abstractfactory\Textfactory1;
use app\components\paterns\singelton\Singlebob;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        $ob=new Textfactory1();
        $ob->go();
        echo $message . "\n";
    }

    public function actionAbsfactory()
    {

        $factory=new Factory1();
        $text_param=$factory->convertsome('dfdsfsdafsdafasdf');
        echo  get_class($text_param).'   '. spl_object_hash($factory) .PHP_EOL;
        echo PHP_EOL;
        $factory=new Factory2();
        $text_param=$factory->convertsome('dfdsfsdafsdafasdf');
        echo  get_class($text_param).'   '. spl_object_hash($factory) .PHP_EOL;

        $factory2=new Factory2();
        $text_param2=$factory->convertsome('dfdsfsdafsdafasdf');
        echo  get_class($text_param2).'   '. spl_object_hash($factory2) .PHP_EOL;
        echo PHP_EOL;
    }

    /**
     * singelton
     */
    public function actionSingelton()
    {

        $single1=Singlebob::getInstance();
        echo 'single '.get_class($single1).'   '. spl_object_hash($single1) .PHP_EOL;
        $single2=Singlebob::getInstance();
        echo 'single '.get_class($single2).'   '. spl_object_hash($single2).PHP_EOL;
        echo PHP_EOL;
    }



    /**
     * prototype
     */
    public function actionPrototype()
    {

          $book1=new ReadBook();
          $book1->setTitle('ReadBook book1');
        $book2=new MagazineBook();
        $book2->setTitle('Magazine book2');


        for($i=0; $i<10;$i++){
            $book=clone $book1;
            $book->setTitle('read book '.$i);
            echo  printf('book1: %s,  bookcloned %s ', $book1->getTitle(),$book->getTitle()).PHP_EOL;

        }
echo '---------------'.PHP_EOL;
        for($i=0; $i<10;$i++){
            $book=clone $book2;
            $book->setTitle('magazine book '.$i);
            echo  printf('book1: %s,  bookcloned %s  ', $book2->getTitle(),$book->getTitle()).PHP_EOL;;

        }
    }
}
