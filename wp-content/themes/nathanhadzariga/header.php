<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nathan Hadzariga Template</title>
    <?php wp_head(); ?>
  </head>
  <body>

  <header id="header">
    <div class="container">
      <h1>Header Demo</h1>
      <nav id="nav">
        <?php wp_nav_menu(array('theme_location' => 'header_nav')); ?>
      </nav>
    </div>
  </header>
