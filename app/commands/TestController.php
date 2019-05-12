<?php

namespace app\commands;

class TestController
{
    public function index($a=null, $b='')
    {
        echo "Hit\n";

        echo "A: {$a}\n";
        echo "B: {$b}\n";

        return 'aaa';
    }
}
