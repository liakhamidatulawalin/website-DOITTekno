<?php
include 'templates/head.php';
include 'templates/navbar.php';
?>

<body>
    <?php
    @$page = $_GET['page'];
    if (!empty($page)) {
        switch ($page) {
            case 'home':
                include "page/home.php";
                break;
            case 'about':
                include "page/about.php";
                break;
            case 'service':
                include "page/service.php";
                break;
            case "portfolio":
                include "page/portfolio.php";
                break;
            case "blog":
                include "page/blog.php";
                break;
            case "learn_more":
                include "page/learn_more.php";
                break;
            case "contact":
                include "templates/contact.php";
                break;
            default:
                include "page/home.php";
                break;
        }
    } else {
        include "page/home.php";
    }
    ?>
</body>