<?php head(array('bodyid'=>'home')); ?> 
 <div class="content-left">
        <div class="welcome">

          <p>            <?php echo deco_get_about(); ?>
</p>
        </div> <!--/class welcome-->
        <div class="search">
          <div class="input">
            <?php echo simple_search(); ?>
          </div>
          
        </div>  <!--/class search-->
      <div class="recent">
         <h2><a href="exhibits?sort_field=title&sort_dir=a">Browse Exhibits</a></h2>
                                             <ul>
                          
            <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/idea"><img alt="The Idea: 1949-1954" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1949.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/idea">The Idea: 1949-1954</a></h2>
               
              </div>
            </li>
                        
            <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/difficulties"><img alt="Initial Difficulties: 1954-1956" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1954.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/difficulties">Terra Incognita: 1954-1958</a></h2>
               
              </div>
            </li>
                            
            <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/schoolhouse"><img alt="The Little Red Schoolhouse: 1957-1964" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1957.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/schoolhouse">The Little Red Schoolhouse: 1957-1964 </a></h2>
               
              </div>
            </li>
                            
            <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/permanence"><img alt="Permanence: 1964-1972" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1964.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/permanence">Permanence: 1964-1972</a></h2>
               
              </div>
            </li>
                            
            <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/independence"><img alt="Independence: 1972-1978" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1972.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/independence">Independence: 1972-1978</a></h2>
               
              </div>
            </li>
                  <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/prominence"><img alt="Prominence: 1978-1996" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1978.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/prominence">Emergence: 1978-1996</a></h2>
               
              </div>
            </li>            
                    
                     <li>                    
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/presence"><img alt="Presence: 1996 – 2012" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/1996.jpg">
</a> </div>             
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/presence">Prominence: 1996-2012</a></h2>
               
              </div>
            </li>                       
<li>
              <div class="image"><a href="http://ahistoryofmason.gmu.edu/exhibits/show/vision"><img alt="Vision: 2012-Present" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/images/2012.png">
</a> </div>
              <div class="summary">
                <h2><a href="http://ahistoryofmason.gmu.edu/exhibits/show/vision">Vision: 2012-Present</a></h2>

              </div>
            </li>      
</ul>
          <div class="clear"> </div>
        </div>
      </div> <!--/class content-left-->
      
      
      
      <div class="content-right">
        <div class="slider-wrap">
          <div class="slider-wrap-top">
            <div class="slider-wrap-bottom">
              <ul id="slider">
              <?php deco_awkward_gallery();?> 

               
                
              </ul> <!--/id slider-->
            </div>
          </div>
        </div> <!--/class slider-wrap-->
      </div> <!--/class content-right-->
      <div class="clear">
      </div>


   
<?php foot(); ?>
