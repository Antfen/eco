<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  

 <?php if (drupal_is_front_page())

  {
      unset($page['content']['system_main']['default_message']['sidebar_first']);

   }

  print render($page['content']);

 ?>

  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>