</div> <!--/id container-->
    <div id="footer">
    <?php if (function_exists('my_omeka_user_status')) { echo '<div id="myomeka-status" style="float: right;">'.my_omeka_user_status().'</div>';}?>
    
    <h3><a href="http://library.gmu.edu" title="George Mason University Libraries">George Mason University Libraries</a> <a href="http://sca.gmu.edu" title="Special Collections & archives">Special Collections & Archives</a><br /> Proudly Powered by <a href="http://omeka.org">Omeka</a>  <?php echo deco_display_theme_credit();?> </h3>
    	
        <p> &copy;<?php echo date(Y);?>  <a href="http://library.gmu.edu" title="George Mason University Libraries">George Mason University Libraries</a>   </p>
    </div>
  </div> <!--/class wrapper-->
</div> <!-- /id wrapper-->
</body>
</html>
