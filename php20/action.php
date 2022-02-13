<?php

require_once 'vendor/autoload.php';

use App\classes\Word;
use App\classes\Series;
use App\classes\Product;

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
}
//elseif (isset($_POST['btn']))
//{
//    $word = new Word($_POST);
//    $result = $word->index();
//    extract($result);
//    include 'pages/home.php';
//} elseif (isset($_POST['seriesBtn']))
//{
//    $word = new Word();
//    $result = $word->series();
//}
  elseif (isset($_POST['btn']))
  {
      $series = new Series($_POST);
      $result =$series->index();

      include 'pages/home.php';
  }