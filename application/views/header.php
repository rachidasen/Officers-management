<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url("asset/css/bootstrap.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url("asset/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("asset/css/zabuto_calendar.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("asset/js/gritter/css/jquery.gritter.css")?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("asset/lineicons/style.css")?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url("asset/css/style.css")?>" rel="stylesheet">
    <link href="<?=base_url("asset/css/style-responsive.css")?>" rel="stylesheet">
     <script type="text/javascript" src="<?=base_url("assets/js/jquery-1.11.3.js")?>"></script>
<script src="<?=base_url("assets/js/styles.js")?>"></script> 
    <script src="<?=base_url("asset/js/chart-master/Chart.js")?>"></script>
   
     <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
           
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button> <a class="navbar-brand" href="#">Admin</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="<?php echo site_url('Admin/manage');?>">Manage</a>
            </li>
           
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input class="form-control" type="text" />
            </div> 
            <button type="submit" class="btn btn-default">
              Submit
            </button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Logout</a>
            </li>
           
          </ul>
        </div>
        
      </nav>