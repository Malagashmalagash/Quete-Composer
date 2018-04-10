<?php
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 09/04/18
 * Time: 17:16
 */

require '../vendor/autoload.php';
use Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();

echo $hello->talk() . '</BR>';

$hello2 = new SayHello();
echo $hello2->world();