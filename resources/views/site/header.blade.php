<?php  $d = new \App\Web_data(); $d=$d->find(1);?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./img/logo.png"/>
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  {{$d->site_name}}  </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" type="text/css" href="hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="animsition.min.css">
    <link rel="stylesheet" type="text/css" href="select2.min.css">
    <link rel="stylesheet" type="text/css" href="daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<header class="header-section"><div class="container"><div class="logo">
<a href="home"><img src="./img/TIMGYM2.png" style="width: 210px;height: 79px;margin: -21px;" alt="TIM GYM"></a>
</div><div class="nav-menu">
<nav class="mainmenu mobile-menu" style="margin: 30px;">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="aboutUs">About</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="contact">Contacts</a></li>
<?php $x=0;?> 
@if(Auth::guard()->user())                              <li> <a  href="admin">{{Auth::user()->name}}</a></li> <li>  <a href="logout"> Logout</a></li><?php $x=1;?>
@elseif(Auth::guard('trainer')->check())                <li> <a  href="trainer">{{Auth::guard('trainer')->user()->name}}</a></li> <li>  <a href="logout"> Logout</a></li><?php $x=1;?>  elseif
@elseif(Auth::guard('member')->check()!=null)           <li> <a  href="profile">{{Auth::guard('member')->user()->name}}</a></li> <li>  <a href="logout"> Logout</a></li><?php $x=1;?>  elseif
@else<li><a href="login">Login</a></li>
@endif        
                    </ul>
</nav></div></div></header>
