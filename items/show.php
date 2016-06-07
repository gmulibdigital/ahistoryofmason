<?php head(array('title'=>item('Dublin Core', 'Title'))); ?>
 <div class="wrapper">
        <div class="post-wrap">
          <div class="post-wrap-top">
            <div class="post-wrap-bottom">
            <p style="height:30px;"></p>
            <div class="divider"> </div>
           <div id="tnt_pagination">
<span style="float:left;"><?php echo link_to_previous_item('Previous Item'); ?>	</span><span style="float:right;">	<?php echo link_to_next_item('Next Item'); ?></span>

</div>
<div class="divider"> </div>


 <div class="post" >                 
                <div class="post-header"> 
                <script type="text/javascript">
    $(function() {
        $('a.media').media({width:700, height:600});
		$('a.video').media({width:700, height:400});
		$('a.audio').media({width:700, height:100});
    });
</script>
                <?php
				$index = 0; 
				 while(loop_files_for_item()):$file = get_current_file();
				 
				 $mime = item_file('MIME Type');
				 $videoJS = array('video/mp4','video/mpeg','video/ogg','video/quicktime','video/webm','video/mp4','video/mpeg','video/quicktime','video/webm','video/ogg','audio/wma','audio/x-ms-wma','video/avi','video/msvideo','video/x-msvideo','video/x-ms-wmv');
				 $audio = array('application/ogg','audio/aac','audio/aiff','audio/midi','audio/mp3','audio/mp4','audio/mpeg','audio/mpeg3','audio/mpegaudio','audio/mpg','audio/ogg','audio/wav','audio/x-mp3','audio/x-mp4','audio/x-mpeg','audio/x-mpeg3','audio/x-midi','audio/x-mpegaudio','audio/x-mpg','audio/x-ogg','audio/x-wav','audio/x-aac','audio/x-aiff','audio/x-midi','audio/x-mp3','audio/x-mp4','audio/x-mpeg','audio/x-mpeg3','audio/x-mpegaudio','audio/x-mpg');
				 $pdf=array('application/pdf');
				 
if (($file->hasThumbnail()&&($index == 0))):
			            echo display_file($file, array('imageSize'=>'fullsize','linkAttributes'=>array('rel'=>'fancy_group', 'class'=>'fancyitem','title' => item('Dublin Core', 'Title')),'imgAttributes'=>array('width'=>'700px', 'height'=>'','alt' => item('Dublin Core', 'Title'))));
						elseif (($file->hasThumbnail()&&($index == 1))): 
		 echo display_file($file, array('imageSize'=>'square_thumbnail','linkAttributes'=>array('rel'=>'fancy_group', 'class'=>'fancyitem','title' => item('Dublin Core', 'Title')),'imgAttributes'=>array('width'=>'150px', 'height'=>'100px','style'=>'margin-top:10px;','alt' => item('Dublin Core', 'Title'))));
						elseif 
		(array_search($mime,$videoJS) !== false): 
				echo'<a class="video" href="'.file_download_uri($file).'"></a>';				
		
		elseif 
		(array_search($mime,$audio) !== false): 
				echo'<a class="audio" href="'.file_download_uri($file).'"></a>';				
			elseif 
		(array_search($mime,$pdf) !== false): 
				echo'<a class="media" href="'.file_download_uri($file).'"></a>';				
						
			            endif;
			       	$index ++;					
				 endwhile;
				echo' <a href="'. file_download_uri($file). '" class="download-file">'. $file->original_filename. '</a>&nbsp; ';
				 
				  ?>
                 
                   
                    <span class="hanger-left"></span> 
                    <span class="hanger-right"></span> 
                </div>    <!--/.post-header -->                

                <div class="entry-header">
                             
                </div><!--/ entry-header --> 
                                
                <div class="entry-content clearfix">
                <h2 class="entry-title"><?php echo item('Dublin Core', 'Title'); ?></h2>  
                 <p> <?php echo item('Dublin Core', 'Description'); ?></p>
                                  <p><span class="bbspan">Creator :</span>  <?php echo item('Dublin Core', 'Creator'); ?></p>
                                    <p><span class="bbspan">Date  :</span>
                                                      <?php echo item('Dublin Core', 'Date'); ?></p>
                                                      <p><span class="bbspan">Source :</span> 
 <?php echo item('Dublin Core', 'Source'); ?></p>
 <p><span class="bbspan">Rights :</span> 
 <?php echo item('Dublin Core', 'Rights'); ?></p>

                  <?php if (item_has_tags()): ?>
                  <div class="tag-c">
                        	<p><span class="bbspan">TAGS:</span> <?php echo item_tags_as_string(); ?><p></p>
                        </div>	<?php endif;?>

                      <div class="tag-c">
                        	<p><span class="bbspan">Citation:</span> <?php echo item_citation(); ?></p>
                        </div>   
                        <!-- If the item belongs to a collection, the following creates a link to that collection. -->
	<?php if (item_belongs_to_collection()): ?>
        <div class="tag-c">
                        	<p><span class="bbspan">Collection:</span><?php echo link_to_collection_for_item(); ?></p>
                        </div>  
    <?php endif; ?>

                    
                        
                        <?php deco_display_related_exhibits(); ?>


                </div> <!--/ .entry-content --> 
                
                 <div class="entry-footer clearfix"> 
                 	 
                     
                    
                     
               
                </div>   <!--/ .entry-footer--> 
                
               
              </div> <!--/ .post--> 
              
              
              <p style="height:30px;"></p>

                <div class="divider"> </div>
          <div id="tnt_pagination">
<span style="float:left;"><?php echo link_to_previous_item('Previous Item'); ?>	</span><span style="float:right;">	<?php echo link_to_next_item('Next Item'); ?></span>
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
