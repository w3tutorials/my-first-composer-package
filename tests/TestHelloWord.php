<?php
/**
 * User: constantinos
 * Date: 4/14/2015
 * Time: 4:58 PM
 */

use Constantinos\HelloWord\HelloWord;

require_once __DIR__.'/../vendor/autoload.php';

class TestHelloWord extends PHPUnit_Framework_TestCase
{
    public function test_HelloWord(){

         $helloWord=new HelloWord();
         $this->assertEquals($helloWord->say(), 'Hello Word', "Correct results");
    }

}