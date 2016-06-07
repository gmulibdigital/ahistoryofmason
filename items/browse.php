<?php head(array('title'=>'Browse Items')); ?>
 <div class="wrapper">
        <div class="post-wrap">
          <div class="post-wrap-top">
            <div class="post-wrap-bottom">
            <p style="height:30px;"></p>
            <div class="divider"> </div>
           <div id="tnt_pagination">
<span class="disabled_tnt_pagination">Browse Items (<?php echo total_results(); ?> total)</span>           	<ul><?php echo nav(array('Browse All' => uri('items/browse'), 'Browse by Tag' => uri('items/tags'))); ?></ul>
<?php echo pagination_links(); ?>
</div>
<div class="divider"> </div>
 <ul id="post">
<?php while (loop_items()): ?>

                <li>
                  <div class="post-content">
                    <div class="title">
                      <div class="title-right">
                        <h1><?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'permalink')); ?></h1>
                      </div> <!-- / title-right -->
                      <div class="clear"> </div>
                    </div> <!-- /title -->
                    <div class="post-info">
					
					<?php if (item_has_thumbnail()): ?>
    						
                    <div class="post-image">     				
					<?php echo link_to_item(item_square_thumbnail()); ?>						
 </div> <!-- /post-image -->

 <?php else: ?>
                 <div class="post-image"> </div> 
                    <?php endif; ?>
                    <?php if ($text = item('Item Type Metadata', 'Text', array('snippet'=>50))): ?>
    				<div class="post-summary">
    				<p><?php echo $text; ?></p><?php echo link_to_item('Read more...'); ?>  
    				</div>
				<?php elseif ($description = item('Dublin Core', 'Description', array('snippet'=>250))): ?>
                    <div class="post-summary">
    				<p><?php echo $description; ?></p><?php echo link_to_item('Read more...'); ?>  
    				</div>
				<?php endif; ?>
<div class="tag-continue"> 
				<?php if (item_has_tags()): ?>
<div class="tag">
                        	<h2><span>Tags:</span>    				<?php echo item_tags_as_string(); ?></h2>
    				</div>				<?php endif; ?>

                    
                        <div class="clear">
                        </div>
                    </div>
                    
                    
                    
                    </div>
                  </div>
                </li>
				
				<?php echo plugin_append_to_items_browse_each(); ?>
                     	<?php endwhile; ?>
                      
                    
                    
                       

	</ul>
               
               <div class="clear"></div>
               
                                          <p style="height:30px;"></p>

                <div class="divider"> </div>
          <div id="tnt_pagination">
<span class="disabled_tnt_pagination">Browse Items (<?php echo total_results(); ?> total)</span><a href="#">Browse All</a><a href="tags">Browse by Tag</a>		<?php echo pagination_links(); ?>
</div>
<div class="divider"> </div>
               
                           <p style="height:30px;"></p>

            </div>
          </div>
        </div> <!--/class slider-wrap-->
      </div> <!--/class content-right-->
      <div class="clear">
      </div>
	
		
	
<?php foot(); ?>