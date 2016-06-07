<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/javascripts/jquery.bxSlider.min.js" type="text/javascript"></script>
<script src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/javascripts/jquery.media.js" type="text/javascript"></script>

<script type="text/javascript" src="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/javascripts/common.js"></script>
<link rel="stylesheet" type="text/css" href="http://ahistoryofmason.gmu.edu/themes/pari-joanna-edits/css/style.css"/>
<title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>


<!-- Plugin Stuff -->
<?php echo plugin_header(); ?>

</head>
<body>
<div id="wrapper">
  <div class="wrapper">
    <div id="header">
      <div class="logo">
      	 <a href="/index"><img src="<?php echo img('logo.png'); ?>" /></a>
      </div> <!--/class logo-->
      <ul id="navTop">
      <?php echo nav(array('Home' => uri('index'))); ?>
       
<li><a href="http://ahistoryofmason.gmu.edu/about">About</a>
  <ul>

    <li><a href="http://ahistoryofmason.gmu.edu/about">The Project</a></li>
     <li><a href="http://ahistoryofmason.gmu.edu/historians">The Historians</a></li>
      <li><a href="http://ahistoryofmason.gmu.edu/mhpstaff">The Team</a></li>
  </ul></li>
<li><a href="/exhibits?sort_field=title&sort_dir=a">Contents</a>
<ul><li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/idea">The Idea: 1949-1954</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/difficulties">Terra Incognita: 1954-1958</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/schoolhouse">The Little Red Schoolhouse: 1957-1964 </a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/permanence">Permanence: 1964-1972</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/independence">Independence: 1972-1978</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/prominence">Emergence: 1979-1996</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/presence">Prominence: 1996-2012</a></li>
  <li><a href="http://ahistoryofmason.gmu.edu/exhibits/show/vision">Vision: 2012-Present</a></li>
</ul>
       </li> 
<li><a href="http://ahistoryofmason.gmu.edu/items">Browse</a>
  <ul>

    <li><a href="http://ahistoryofmason.gmu.edu/items">Items</a></li>
     <li><a href="http://ahistoryofmason.gmu.edu/items/tags">Tags</a></li>
     
  </ul></li>

                  <?php echo nav(array('Contact us' => uri('contact'))); ?>
      </ul> <!--/id navTop-->
      <div class="clear"> </div>
    </div> <!--/id header-->
    <div id="container">
     
    
	
