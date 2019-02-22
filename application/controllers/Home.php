<?php

Class Home extends CI_Controller
{
    function index()
    {
        echo  "Hello World";
    }

    function test()
    {
        $a = $this->uri->segment(1);
        $b = $this->uri->segment(2);
        $c = $this->uri->segment(3);
        echo "Đây là tham số 1 trên URL: ". $a;
        echo "<br>";
        echo "Đây là tham số 2 trên URL: ". $b;
        echo "<br>";
        echo "Đây là tham số 3 trên URL: ". $c;
    }
}