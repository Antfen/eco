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


   

	<h2 style="color:#ff4400;">my test content from page--front-tpl</h2>



  
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>