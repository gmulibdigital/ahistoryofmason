<?php head(array('title'=>'Browse Tags')); ?>

 <div class="wrapper">
        <div class="post-wrap">
          <div class="post-wrap-top">
            <div class="post-wrap-bottom">
            <p style="height:30px;"></p>
            <div class="divider"> </div>
           <div id="tnt_pagination">
           	<ul><?php echo nav(array('Browse All' => uri('exhibits/browse'), 'Browse by Tag' => uri('exhibits/tags'))); ?></ul>

</div>
<div class="divider"> </div>

<div class="tags-post">     

<?php
$tags = get_tags(array('sort' => 'alpha'), 400); 
echo tag_cloud($tags, uri('exhibits/browse'));
?>
        
           

   </div>
             
              
              
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


	
		
	
