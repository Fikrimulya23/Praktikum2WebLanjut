<?php namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index($name, $npm)
    {
        echo $name ."<br>";
        echo $npm ."<br>";
        //echo "Hello" ;
    }
    public function show()
    {
        echo "Fikri Mulya P";
        echo "1857051011";
    }
}