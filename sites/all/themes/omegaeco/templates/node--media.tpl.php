<article<?php print $attributes; ?>>
   <?php print $user_picture; ?>
   <?php print render($title_prefix); ?>
   <?php if (!$page && $title): ?>
   <header>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
   </header>
   <?php endif; ?>
   <?php print render($title_suffix); ?>
   <?php if ($display_submitted): ?>
   <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?>the footer</footer>
   <?php endif; ?>  
   <div<?php print $content_attributes; ?>>
      <?php
         // We hide the comments and links now so that we can render them later.
         hide($content['comments']);
         hide($content['links']);
         hide($content['field_media']);
         print render($content);
         ?>
      <style type="text/css">
         .grid-12 .eco_video .home_page_block_btn {
         max-width: 640px;
         margin-top: 15px;
         }
         .grid-12 .eco_video .links {
         padding-top: 15px;
         }
         .grid-12 .eco_video.field-item p {
         width:640px;
         }
      </style>
      <div class="eco_video">
         <div class="clearfix">
            <?php print render($content['field_media']); ?>
            <?php if (!empty($content['links'])): ?>
            <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
            <?php endif; ?>
            <div class="home_page_block_btn"><a href="../video">Return to video list</a></div>
            <?php print render($content['comments']); ?>
         </div>
      </div>
   </div>
</article>