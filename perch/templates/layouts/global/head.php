<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="/assets/css/master.css?v1.31" />

  <title><?php perch_pages_title(); ?></title>
  

  <?php
  
  $domain        = 'http://'.$_SERVER["HTTP_HOST"];
  $url           = $domain.$_SERVER["REQUEST_URI"];
  $sitename      = "My Language School";
  $sharing_image = '/assets/img/social.jpg';

  PerchSystem::set_var('domain',$domain);
  PerchSystem::set_var('url',$url);
  PerchSystem::set_var('sitename',$sitename);
  PerchSystem::set_var('sharing_image',$sharing_image);
  
  perch_page_attributes(); 
  
  ?>
</head>

<body class="<?php perch_layout_var('class'); ?>">
  
