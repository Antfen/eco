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
         hide($content['field_image_pod']);
         hide($content['field_text_pod']);
         print render($content);
         ?>

     <style type="text/css">
     .pod {
      padding-top: 12px;
      padding-bottom: 12px;
      }
     .pod img {
      width: 100%;
      border: 1px solid #666666;
      border-radius: 7px;
      -moz-border-radius: 7px;
      -webkit-border-radius: 7px;
      overflow: hidden;
      }
      .pod .grid-5 h3 {
      border-bottom: 1px solid #666;
      margin-bottom: 20px;
      }
      .pod .grid-6 {
      float: right;
      }
     </style>

     

       <div class="pod">

         <div class="grid-5"><?php print render($content['field_text_pod']); ?></div>
             <div class="grid-6">
               <?php print render($content['field_image_pod']); ?>
             </div>
           <div class="clearfix"></div>
        </div>
     
   </div>
</article>