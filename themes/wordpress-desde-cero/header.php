


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('name');?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title><?php bloginfo('name')?>Jumbotron Template · Bootstrap</title>
    

   

    <!-- Bootstrap core CSS -->


  <!-- Favicons -->


    <!-- Custom styles for this template -->

  <?php wp_head() ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="<?php bloginfo('url')?>">desarrollo wordpress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  
    <ul class="navbar-nav mr-auto">
        <?php mostrar_menu_principal() ?>
     
    </ul>
    <form method='get' action='<?php bloginfo('url') ?>' class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search" 
      name="s" id="search" value="<?php the_search_query(); ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
   
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3"><?php bloginfo('name');?></h1>
      <h2><?php bloginfo('description');?></h2>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">