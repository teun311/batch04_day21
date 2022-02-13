<?php

require_once 'vendor/autoload.php';

use App\classes\Word;
use App\classes\Series;
use App\classes\Product;
use App\classes\Calculator;
use App\classes\ODD;
use App\classes\Prime;

//echo '<pre/>';
//print_r($_POST);
//exit();

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
    elseif ($_GET['pages'] == 'all-product')
    {
        $product = new Product();
        $product = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'ODD')
    {
        include 'pages/oddEven.php';
    }
    elseif ($_GET['pages'] == 'prime')
    {
        include 'pages/prime.php';
    }
}
    //====CAlCULATOR===
elseif (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages\home.php';
}
elseif (isset($_POST['oddbtn']))
{
    $odd = new ODD($_POST);
    $result = $odd -> index();
    include 'pages\oddEven.php';
}
 //====prime number==
elseif (isset($_POST['primebtn']))
{
    $prime =new Prime($_POST);
    $result = $prime->index();
    include 'pages\prime.php';
}
elseif (isset($_POST['serisbtn']))
{
      $series = new Series($_POST);
      $result =$series->index();

      include 'pages/home.php';
}