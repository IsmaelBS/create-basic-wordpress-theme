<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class('classs1 class2 class3');?>>
  <header>
    <?php 
      if (has_nav_menu('primary')) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'container' => 'nav',
              'container_class' => 'main_menu',
              'fallback_cb' => false
          ]);
      }
    ?>
  </header>