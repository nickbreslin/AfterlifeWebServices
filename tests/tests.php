<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Access-Control-Allow-Origin: *");

//todo -- ini file for config

require 'vendor/autoload.php';

class Bob 
{
    public function Frank() {
        echo "here";
    }
}
class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testSwitch()
    {
        $expr = 0;
        /*
        switch ($expr) {
            default:
                 //echo "Hello World";
                 break;
            default:
                 //echo "Goodbye Moon!";
                 break;
        }

        $this->assertEquals(0, 0);
        */
    }

    public function bob()
    {
        $expr = 0;

        switch ($expr) {
            default:
                 //echo "Hello World";
                 break;
            default:
                 //echo "Goodbye Moon!";
                 break;
        }

        $this->assertEquals(0, 0);
    }
}