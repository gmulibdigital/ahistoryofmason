<?php head(array('title'=>html_escape(exhibit('title') . ' : '. exhibit_page('title')))); ?>

 <div class="wrapper">
        <div class="post-wrap">
          <div class="post-wrap-top">
            <div class="post-wrap-bottom">
            <p style="height:30px;"></p>
            <div class="divider"> </div>
           <div id="tnt_pagination">
           		
				<span style="float:left;"><?php echo exhibit_builder_link_to_previous_exhibit_page(); ?>	</span><span style="float:right;">	<?php echo exhibit_builder_link_to_next_exhibit_page(); ?></span>
    	
</div>
<div class="divider"> </div>


              
               
             <h2 style="margin:5px 120px 5px 60px;font-size:18px;"><?php echo strip_tags(link_to_exhibit()); ?></h2>

  <p style="margin:0px 120px 0px 60px;font-size:16px;">
<?php echo exhibit_page('title'); ?></p>

              <div class="info-left">
	<?php exhibit_builder_render_exhibit_page(); ?>


                   


                    
</div>



               
               <div class="clear"></div>

              
              <p style="height:30px;"></p>

                <div class="divider"> </div>
          <div id="tnt_pagination">
	
				<span style="float:left;"><?php echo exhibit_builder_link_to_previous_exhibit_page(); ?>	</span><span style="float:right;">	<?php echo exhibit_builder_link_to_next_exhibit_page(); ?></span>
    	
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


	
		
	
