<?php
    require 'db.class.php';
    $DB = new DB('localhost','root','root','pizzayolo_db');
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Language" content="FR">

    <!-- Titre de la page-->
    <title>
        <?php
        echo isset($title)
            ? $title." - PizzaYolo"
            : "Commandez nos fabuleuses pizzas.";
        ?>
    </title>
    <!-- Référencement du site par page -->
    <meta name="description" content="<?php echo isset($description)
    ? $description
    :"Commande de pizza en ligne.";
    ?>">
    <meta name="keywords" content="<?php echo isset($keywords)
        ? $keywords . "commande, pizza, aix-en-provence, aix, pizzaiolo"
        : "pizza, commande, 4 fromages, royale, aix, pizzaiolo";
    ?>">
    <meta name="author" content="PizzaYolo">

    <!-- Icone -->
    <link rel="icon" href="assets/img/favicon.png">


    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>