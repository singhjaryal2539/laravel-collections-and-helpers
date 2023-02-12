<?php


require ('vendor/autoload.php');

use SinghJaryal\Illuminate\Support\Str;

dd(collect(['dsf'])->first());

print_r(Str::plural('test', 2));