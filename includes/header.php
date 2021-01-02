<?php require_once ("includes/config.php");?>
<!doctype html>
<html lang="en">
<head>
    <title>VideoTube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/js/commonJs.js" ></script>
</head>
<body>
<div id="pageContainer">
    <div id="mastHeadContainer">

        <button class="navShowHide">
            <img src="assets/images/icons/menu.png" alt="">
        </button>

        <a class="logoContainer" href="index.php">
            <img src="assets/images/icons/VideoTubeLogo.png" title="logo" alt="site-logo">
        </a>

        <div class="searchBarContainer">
            <form action="search.php" method="GET">
                <input type="text" name="term" placeholder="Search..." class="searchBar">
                <button class="searchButton" >
                    <img src="assets/images/icons/search.png" alt="">
                </button>
            </form>
        </div>

        <div class="rightIcons">
            <a href="upload.php">
                <img class="upload" src="assets/images/icons/upload.png" alt="">
            </a>
            <a href="#">
                <img class="upload" src="assets/images/profilePictures/default.png" alt="">
            </a>
        </div>

    </div>
    <div id="sideNavContainer" style="display: none;">

    </div>
    <div id="mainSectionContainer">
        <div id="mainContainContainer">