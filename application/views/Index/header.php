
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>微软学生俱乐部-苏州大学</title>
        <meta charset="utf-8">
        <meta name="description" content="Soochow University Online Judge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="icon" href="<?php echo APP_URL ?>/images/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo APP_URL ?>/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo APP_URL ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo APP_URL ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo APP_URL ?>/css/google-code-prettify/prettify.css" />

        <link rel="stylesheet" href="<?php echo APP_URL ?>/css/msc.css">
        <script src="<?php echo APP_URL ?>/js/jquery-3.2.1.min.js"></script>
<!--        <script src="<?php echo APP_URL ?>/js/bootstrap.min.js"></script>-->

    </head>

    <body onload="prettyPrint()">

<!-- header bar -->
<nav class="navbar" id="header">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand brand" href="<?php echo APP_URL ?>"><img class="logo" alt="SUMSC" src="<?php echo APP_URL?>/images/logo.png" /></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo APP_URL?>/">首页 <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo APP_URL?>/PfFaq/">电脑义修</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Unit <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo APP_URL?>/TU_Index/">Tu</a></li>
          <li><a href="<?php echo APP_URL?>/GT_Index/">Wu</a></li>
          <li><a href="<?php echo APP_URL?>/ACT/">Gao</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo APP_URL?>/GT_Index/book" >book</a></li>
            <li><a href="<?php echo APP_URL?>/GT_Index/software">software</a></li>
            <li><a href="<?php echo APP_URL?>/GT_Index/web">web</a></li>
            <li role="separator" class="divider"></li>
            <li><a  href="<?php if(isset($_SESSION['username']))  echo "GT_Index/update" ; else echo "";?>">update</a></li>
          </ul>
        </li>
      </ul>
       <!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div id="body">


