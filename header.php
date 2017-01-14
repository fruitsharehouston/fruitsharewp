<!DOCTYPE html>
<html>
<head>
  <title><?php echo get_bloginfo( 'Fruit Share Houston' ); ?></title>
  <meta name="description" content="FruitShare Houston">
  <link id="favicon" rel="icon" href="//fruitsharehouston.github.io/images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
          <a class="navbar-brand" href="//fruitsharehouston.github.io">
            <img alt="Fruit Share Logo" src="//fruitsharehouston.github.io/images/logo-branch-menu.png">
            <span class="brand-type">F<span class="hidden-xs">ruit</span> S<span class="hidden-xs">hare</span> H<span class="hidden-xs">ouston</span></span>
          </a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fruit-share-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <img src="//fruitsharehouston.github.io/images/elements/leaf-02.png" width="24"/>
          </button>

          <a class="social">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a class="social">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a class="social">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="fruit-share-nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="//fruitsharehouston.github.io">Home</a></li>
            <li class="dropdown">
              <a href="//fruitsharehouston.github.io/about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="//fruitsharehouston.github.io/about#mission">Mission</a></li>
                <li><a href="//fruitsharehouston.github.io/about#our-story">Our Story</a></li>
                <li><a href="//fruitsharehouston.github.io/about#faq">FAQ</a></li>
                <li><a href="//fruitsharehouston.github.io/about#press">Press</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="//fruitsharehouston.github.io/volunteer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Volunteer <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="//fruitsharehouston.github.io/volunteer#pick-with-us">Pick with Us!</a></li>
                <li><a href="//fruitsharehouston.github.io/volunteer#upcoming">Upcoming Harvests</a></li>
              </ul>
            </li>
            <li><a href="//fruitsharehouston.github.io/donate">Donate</a></li>
            <li><a href="//fruitsharehouston.github.io/tree">Got Citrus Fruit?</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div>
    </nav>
  </header>