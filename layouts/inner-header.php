<?php

use Utility\Navbar;

global $navbar, $levels;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maternal-Child Specialists' Clinics | <?= @TITLE ?></title>
  <meta content="Maternal-Child Specialists' Clinics is a rapidly growing hospital in Ado-Ekiti, the capital city of Ekiti State, Southwest Nigeria with special interest in Comprehensive Maternity Care, Fetomaternal Medicine, Minimal Access Surgery, Advanced Fertility Management and General Gynaecology. We also offer specialised care in Paediatrics, Internal Medicine, General Surgery, Orthopaedics, Urology, Ophthalmology, Oral and Maxillofacial Surgery, Dental Surgery, Ear, Nose and Throat (ENT) Surgery, Laboratory Medicine, Pharmacy and other relevant fields of Medicine and Surgery." name="description">
  <meta content="antenatal care, pregnancy, hospitals in ado-ekiti, hospitals in ekiti, hospitals in nigeria, top hospitals in nigeria, nhis, health insurance" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Mon - Sun, 8AM to 10PM
      </div>
      <!-- <div class="d-none d-md-flex align-items-center">
        <a href="/covid-19.php" class="text-white text-decoration-underline">Read about our responses to COVID-19 in our communitites</a>
      </div> -->
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +234 810 349 0675
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php require 'nav.php' ?>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?= TITLE ?></h2>
        <ol>
          <li><a href="/">Home</a></li>
          <?php
          foreach ($levels as $level) {
            echo "<li>";
            if (isset($level['link'])) {
              echo "<a href='$level[link]'>$level[title]</a>";
            } else {
              echo "$level[title]";
            }
            echo "</li>";
          }
          ?>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->