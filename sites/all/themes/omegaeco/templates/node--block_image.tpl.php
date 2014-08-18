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
         hide($content['field_image_block']);
         hide($content['field_sub_title_block']);
         hide($content['field_description_block']);
         print render($content);
         ?>

     <style type="text/css">
     .block_image {
  position: relative;
  margin:0.7em;
  border: 1px solid #666666;  
  border-radius: 7px; 
  -moz-border-radius: 7px; 
  -webkit-border-radius: 7px;
  overflow: hidden;
}
/*.block_image { this is a fix for Safari & other mobile devices. This will force Safari to roud corners; by using the 'clear:both;" attribute.
  overflow: hidden;
  clear: both;
  border-radius: 7px; 
  -moz-border-radius: 7px; 
  -webkit-border-radius: 7px;
}*/
.block_image .title_holder {
  background: url("../sites/all/themes/omegaeco/images/content_bg.png");
  padding: 0.2em 0;
  bottom: 0;
  overflow: hidden;
  text-align: left;
  position: absolute;
  width: 100%;
}
.block_image .title_holder h4 {
  line-height: 1.5em;
  font-size: 1.5em;
  font-weight: normal;
  padding-left: 0.4em;
  padding-right: 0.4em;
}
.block_image .title_holder h5 {
  line-height: 1.2em;
  font-size: 1.1em;
  font-weight: normal;
  padding-left: 0.5em;
  padding-right: 0.5em;
  padding-bottom: 0.5em;
}
.block_image img  {
  width: 100%;
  height: auto;
}
     
     </style>

     

       <div class="block_image">
         <?php print render($content['field_image_block']); ?>


          <div class="title_holder">

          <h4><?php print render($content['field_sub_title_block']); ?></h4>
          <h5><?php print render($content['field_description_block']); ?></h5>

          </div>

       </div> 


      <!--  <h3>Eco Tech</h3><div class="block_img_holder"><div class="posn_type"><img alt="Electric powered skinoe" class="block_img" src="sites/default/files/images/front_page_blocks/eco-page-front-block.jpg" title="Electric powered skinoe" /><div class="title_holder"><h4>Electric Skinoe</h4><p>Demonstrates the use of &#39;skinoe&#39; driven by an electric outboard motor.</p></div></div></div> -->
        
     
   </div>
</article>