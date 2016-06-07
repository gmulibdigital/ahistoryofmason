
<?php head(array('title'=>html_escape('Summary of ' . exhibit('title')))); ?>

 <div class="wrapper">
        <div class="post-wrap">
          <div class="post-wrap-top">
            <div class="post-wrap-bottom">
            <p style="height:30px;"></p>
            <div class="divider"> </div>
           <div id="tnt_pagination">
           	<ul><?php echo nav(array('Browse All' => uri('exhibits/browse'))); ?></ul>

</div>
<div class="divider"> </div>

<div class="post" > 
                                  <div class="ex-image"> 
                                  
                                  <img src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/<?php	 echo substr(exhibit('title'), 0, 4);?>.jpg" width="668"  alt="" /> </div><div class="clear"></div>
                
                <div class="exhibit">
                	<div class="right-col">
                    	<h2><?php echo html_escape(exhibit('title')); ?></h2>
                      <?php echo exhibit('description'); ?>
                         
                        	<?php set_exhibit_sections_for_loop_by_exhibit(get_current_exhibit()); ?>

                        
                        <?php while(loop_exhibit_sections()): ?>
	<?php if (exhibit_builder_section_has_pages()): ?>
                     <h3><a href="<?php echo exhibit_builder_exhibit_uri(get_current_exhibit(), get_current_exhibit_section()); ?>"><?php echo html_escape(exhibit_section('title')); ?></a></h3> <ul>
<li><?php echo exhibit_section('description'); ?></li>
	<?php endif; ?>
</ul>
         	<?php endwhile; ?>
              
                    </div><!--/class right-col -->
                  
                </div>
               
              </div> <!--/ .post--> 
              
              
              <p style="height:30px;"></p>

                <div class="divider"> </div>
          <div id="tnt_pagination">

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


	
		
	
