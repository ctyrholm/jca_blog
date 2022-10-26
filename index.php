<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <style>
        .navstyle {
            padding-top: 5px;
            padding-bottom: 5px
        }
    </style>
</head>
<body style = "background-color: black;">
<!--==========
LOGO HEADER
============-->
   <div class="container" style = "margin-top:30px; background-color: white;">
        <div class="row" >
            <div class="col-md-12 text-center" style = "background-color: #555555; font-size: 55px; color: white;">
            <div class = "text-right"><img src = "images/header-img.jpg"></div>
                LOGO<br>
            </div>
        </div>
   </div>
<!--==========
NAVBAR
============--> 
   <div class = "container" style = "background-color: white;">
        <div class="row text-center navstyle">
            <div class="col-md-12" style = "background-color: #ffffff;">
                <div class="col-md-2 navstyle">
                    <a href = "#">Categories</a>
                </div>
                <div class="col-md-2 navstyle">
                <a href = "#">About Us</a>
                </div>
                <div class="col-md-2 navstyle">
                <a href = "#">Manifesto</a>
                </div>
                <div class="col-md-2 navstyle">
                <a href = "#">Subscribe</a>
                </div>
                <div class="col-md-2 navstyle">
                <a href = "#">Contact</a>
                </div>
                <div class="col-md-2 text-right navstyle">
                <a href = "#"><span class="glyphicon glyphicon-search"></span></a>
                </div>
            </div>
        </div>
   </div>
<!--==========
SLIDER
============-->
<div class="container" style = "background-color: white;">
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                <img src="images/la.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                <img src="images/chicago.jpg" alt="Chicago">
                </div>

                <div class="item">
                <img src="images/ny.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div><br>
        </div>
    </div>
</div>
<!--==========
BLOG SECTION
============-->
<div class="container">
    <div class="row" style = "border-top: 1px #f1f1f1 solid; border-bottom: 1px #f1f1f1 solid; background-color: #ffffff;">
        <div class="col-md-12">
            <div class="col-md-9">
                <!--==========
                BLOG DATABASE POST START
                ============-->

                <?php
                    include 'db.php';
                ?>

                <!--==========
                BLOG DATABASE POST END
                ============-->

            </div>

            <!--==========
            RIGHT SIDE PANEL
            ============-->
            <br><br>
            <div class="col-md-3">
            We are on Facebook
                <br>
                <img src = "images/fb.jpg" class = "img-responsive" alt = "">
                <br>
                <ul class = "nav nav-tabs">
                    <li class = "active"><a href="#1" data-toggle = "tab">Popular</a></li>
                    <li><a href="#2" data-toggle = "tab">Recent</a></li>
                    <li><a href="#3" data-toggle = "tab"><span class="glyphicon glyphicon-envelope"></span></a></li>
                </ul>

                <div class = "tab-content">
                    <div class = "tab-pane active" id = "1">
                        <h3>Popular</h3>
                        <P>Here is some conent for page 1</p>
                        <hr>
                        <P>Here is some more conent for page 1</p>
                        <hr>
                        <P>Here is some more conent for page 1</p>
                        <hr>
                    </div>
                    <div class = "tab-pane" id = "2">
                        <h3>Recent Stuff</h3>
                        <P>Here is some conent for page 2</p>
                        <hr>
                        <P>Here is some more conent for page 2</p>
                        <hr>
                        <P>Here is some more conent for page 2</p>
                        <hr>
                    </div>
                    <div class = "tab-pane" id = "3">
                        <h3>Content 3</h3>
                        <P>Here is some conent for page 3</p>
                        <hr>
                        <P>Here is some more conent for page 3</p>
                        <hr>
                        <P>Here is some more conent for page 3</p>
                        <hr>
                    </div>
                </div>
                <br>
                <img src = "images/right-img1.jpg" class = "img-responsive" alt = "">
                <br>
                <br>
                <img src = "images/right-img2.jpg" class = "img-responsive" alt = "">
                <br>
            </div>
        </div>
   </div>
    </div>   
<!--==========
LOGO FOOTER 
============-->
    <div class="container text-center" style = "margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-12 text-center" style = "background-color: #2c2d2f; font-size: 14px; color: white; padding: 100px;">
            &copy; Copyright 2022 | Company name<br><br>All Rights Reserved | Powedered by Agency Name<br><br>
                <img src = "images/socials.jpg">
            </div>
        </div>
   </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>