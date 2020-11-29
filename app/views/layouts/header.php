<?php
$action = $this->getAction();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a424e00da0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $this->pageTitle ?></title>
</head>


<header class="header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand border-logo" href="/home/index">
            <!-- <img src="" class="" alt="Candace and Jess "> -->
            Candace and Jess
        </a>

        <a href="/home/contact" class="btn d-none d-lg-block align-middle btn-warning ml-auto mr-2 order-lg-last" type="button">Get In Touch</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav mx-lg-5 sv-nav">
                <li class="nav-item
      <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'index') {
            echo 'active';
        }
        ?>
      ">
                    <a class="nav-link" href="/home/index">Home </a>
                </li>



                <li class="nav-item
       <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'about') {
            echo 'active';
        }
        ?>
  ">
                    <a class="nav-link" href="/home/about">About</a>
                </li>
                <li class="nav-item 
      <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'episode') {
            echo 'active';
        }
        ?>
">
                    <a class="nav-link" href="/home/episode">Episode</a>
                </li>
                <li class="nav-item 
      <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'blog') {
            echo 'active';
        }
        ?>
">
                    <a class="nav-link " target="_blank" href="https://cnjblogwastaken.wordpress.com/">Blog</a>
                </li>


                <li class="nav-item 
      <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'contact') {
            echo 'active';
        }
        ?>
">
                    <a class="nav-link " href="/home/contact">Contact</a>
                </li>

            </ul>
        </div>
    </nav>

</header>

<div class="container-fluid">