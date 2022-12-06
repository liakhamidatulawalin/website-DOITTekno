<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php
        $title = $_GET['page'];
        if ($title == 'home') {
            echo 'Home';
        } else if ($title == 'about') {
            echo 'About Us';
        } else if ($title == 'service') {
            echo 'Services';
        } else if ($title == 'portfolio') {
            echo 'Portfolio';
        } else if ($title == 'blog') {
            echo 'DO IT Blog';
        }
        ?>
    </title>
    <link rel="icon" href="assets/img/logo.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="assets/js/jquery.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/portfolio.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/learn_more.css">
    <link rel="stylesheet" href="assets/css/contact.css">

</head>