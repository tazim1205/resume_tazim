<?php 
include('../database/connection.php');
$db=new database();

// $data = $db->link->query("SELECT * FROM `settings` WHERE `id`=1");
// if($data)
// {
//  $showdata = $data->fetch_assoc();
// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resume Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="../assets/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../assets/lib/slick/slick.css" rel="stylesheet">
        <link href="../assets/lib/slick/slick-theme.css" rel="stylesheet">
        <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-header">
                    <?php 
                    $sql = $db->link->query("SELECT * FROM about_us WHERE `id`=1");

                    if($sql)
                    {
                        $showdata = $sql->fetch_assoc();
                    }
                    ?>
                    <img src="../backend/asset/img/about_us/<?php print $showdata['image']; ?>" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <?php 
                    $sql = $db->link->query("SELECT * FROM profile_information WHERE `id`=1");
                    
                    if($sql)
                    {
                        $showdata = $sql->fetch_assoc();
                    }
                    ?>
                    <a href="<?php print $showdata['twitter']; ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php print $showdata['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php print $showdata['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>Tazim</h1>
                        <h2></h2>
                        <div class="typed-text">Web Designer, Web Developer, Front End Developer, Back End Developer, Php Developer</div>
                    </div>
                </div>
                <!-- Header End -->