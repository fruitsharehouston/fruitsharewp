<!DOCTYPE html>
<html>
<head>
  <title>Fruit Share Houston</title>
  <meta name="description" content="FruitShare Houston is a Houston non-profit organization that helps you share excess fruits from your garden with local food pantries to those who need it.">
  <link id="favicon" rel="icon" href="//fruitsharehouston.github.io/images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/font.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
<?php wp_head();?>
</head>
<body class="home">
  <header>
    <nav class="navbar navbar-default navbar-fruit-share">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="//fruitsharehouston.org">
            <img alt="Fruit Share Logo" src="//fruitsharehouston.github.io/images/logo-branch-menu.png">
            <span class="brand-type">F<span class="hidden-xs">ruit</span> S<span class="hidden-xs">hare</span> H<span class="hidden-xs">ouston</span></span>
          </a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fruit-share-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <img src="//fruitsharehouston.github.io/images/elements/leaf-02.png" width="24"/>
          </button>
      
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="fruit-share-nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="//fruitsharehouston.org">Home</a></li>
            	<?php wp_list_pages( '&title_li=' ); ?>              
            </li>
           
        </div><!-- /.navbar-collapse -->

      </div>
    </nav>
  </header>
