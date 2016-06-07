<?php
// Use this file to define customized helper functions, filters or 'hacks' defined
// specifically for use in your Omeka theme. Note that helper functions that are
// designed for portability across themes should be grouped into a plugin whenever
// possible.


/**
 * Custom function to retrieve any number of random featured items.
 * via Jeremy Boggs
 * This functionality will likely be incorporated into future versions of Omeka (1.4?)
 * @param int $num The number of random featured items to return
 * @param boolean $withImage Whether to return items with derivative images. True by default.
 */
function deco_get_random_featured_items($num = '10', $withImage = true)
{
    // Get the database.
    $db = get_db();

    // Get the Item table.
    $table = $db->getTable('Item');

    // Build the select query.
    $select = $table->getSelect();
    $select->from(array(), 'RAND() as rand');
    $select->where('i.featured = 1');
    $select->order('rand DESC');
    $select->limit($num);

    // If we only want items with derivative image files, join the File table.
    if ($withImage) {
        $select->joinLeft(array('f'=>"$db->File"), 'f.item_id = i.id', array());
        $select->where('f.has_derivative_image = 1');
    }

    // Fetch some items with our select.
    $items = $table->fetchObjects($select);

    return $items;
}

// initialize Awkward Gallery on homepage
// AwkwardGallery is jQuery must use HTML that looks like this...
//
// <div id="showcase" class="showcase">
//	<div>
//		<img src="IMAGE.JPG" alt="IMAGE" />
//		<div class="showcase-thumbnail">
//			<img src="IMAGE.JPG" alt="IMAGE" width="140px" />
//			<div class="showcase-thumbnail-caption">THUMB CAPTION</div>
//			<div class="showcase-thumbnail-cover"></div>
//		</div>
//		<div class="showcase-caption">
//			<a href=""><h3>OVERLAY TITLE</h3></a><br/><p>OVERLAY DESCRIPTION</p>
//		</div>
//	</div>
// </div>

function deco_display_awkward_gallery(){
		//this loops the most recent featured items
		$items = deco_get_random_featured_items(10);
		if ($items!=null) 
		{
		set_items_for_loop($items);
		while(loop_items()):
	      echo'<li><div class="slider-content"><div class="title">';
          echo'<div class="date">'.substr( item('Dublin Core', 'Date'),-4).'</div>';
		  echo'     <div class="title-right"><h1>a look back...'.link_to_item(' ').'</h1></div>
		  <div class="clear"> </div>
                    </div>';  
			
			$index = 0; 
					while ($file = loop_files_for_item()):
			    if ($file->hasThumbnail()):
			    //this makes sure the loop grabs only the first image for the item 
			        if ($index == 0): 
			           //item_file('fullsize uri') broke in Omeka version 1.3, so I use getWebPath instead...
		    	    //   echo '<div class="image"> '.link_to_item('<img src="http://ibo3.gmu.edu/timthumb/timthumb.php?src='.item_file('fullsize uri').'&w=510" width="510" height="350" alt="" />').' </div>'; 
					   echo '<div class="image"> '.link_to_item(item_square_thumbnail()).' </div>';
		    	    endif;
			    endif; $index++;
			endwhile;                 

			
			echo ' <div class="summary">
                      <p>'.item('Dublin Core', 'Description',array('snippet'=>290)).'</p>
                    </div>';
					
				
		
			
			endwhile; 
}else 
			{
        	echo'
			 <li>
                  <div class="slider-content">
                    <div class="title">
                      <div class="date"></div>
                      <div class="title-right">
                      </div>
                      <div class="clear"> </div>
                    </div>
                    <div class="image"> <img src="" width="518" height="170" alt="" /> </div>
                    <div class="summary">
                      <p>UH OH! There are no featured images right now. You should turn off "Display Slideshow" in the theme settings until you have some.!</p>
                    </div>
                    <div class="tag-continue"> 
                    	<div class="tag">
                        	<h2><span>TAGS:</span> <a href="#">Bibendum</a>, <a href="#">Sem</a>, <a href="#">Ultricies</a>, <a href="#">Condimentum</a></h2>
                        </div>
                        <div class="continue">
                        	<a href="#"><img src="'.img('btn-readmoew.png').'" width="130" height="32" alt="" /></a>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                  </div>
                </li>
			';
    		}}


function deco_awkward_gallery(){
		$awkward_gallery_setting=get_theme_option('Featured Image Gallery') ? get_theme_option('Featured Image Gallery') : 'yes';
		if ($awkward_gallery_setting == 'yes'){return deco_display_awkward_gallery();
} else{
	echo '<style>#showcase,.showcase, h2.awkward{display:none; visibility:hidden;}</style>';
}
}

//extends featured exhibit function to include snippet from description and read more link
function deco_exhibit_builder_display_random_featured_exhibit()
{
    if (function_exists('exhibit_builder_random_featured_exhibit')){
    $html = '<div id="featured-exhibit">';
    $featuredExhibit = exhibit_builder_random_featured_exhibit();
    $html .= '<h2>Featured Exhibit</h2>';
    if ($featuredExhibit) {
       $html .= '<h3>' . exhibit_builder_link_to_exhibit($featuredExhibit) . '</h3>';
       $html .= '<p>' . snippet($featuredExhibit->description, 0, 500,exhibit_builder_link_to_exhibit($featuredExhibit, '<br/>...more')) . '</p>';

    } else {
       $html .= '<p>You have no featured exhibits.</p>';
    }
    $html .= '</div>';
    return $html;
} } 


/**
 * This function returns the style sheet for the theme. It will use the argument
 * passed to the function first, then the theme_option for Style Sheet, then
 * a default style sheet.
 *
 * @param $styleSheet The name of the style sheet to use. (null by default)
 *
 **/
function deco_get_stylesheet($styleSheet = null)
{    
    if (!$styleSheet) {
        
        $styleSheet = get_theme_option('Style Sheet') ? 
        get_theme_option('Style Sheet') : 
        'greenstripe';
    }
    
    return $styleSheet; 
    
}
/**
 * This function returns the tagline for the theme.  
 *
 **/

function deco_get_tagline($tagline = null)
{    
    if (!$tagline) {
        
        $tagline = get_theme_option('Tagline') ? 
        get_theme_option('Tagline') : 
        'Add a tagline for your site in theme options';
    }
    
    return $tagline; 
    
}
/**
 * This function returns the homepage about text for the theme.  
 *
 **/

function deco_get_about($about = null)
{    
    if (!$about) {
        
        $about = get_theme_option('About') ? 
        get_theme_option('About') : 
        'Add some text about your site in theme options. You can use HTML!';
    }
    
    return $about; 
    
}
/**
 * This function returns the number of recent items to display on the homepage for the theme.  
 *
 **/
function deco_get_recent_number($recentItems = null)
{    
    if (!$recentItems) {
        
        $recentItems = get_theme_option('Recent Items') ? 
        get_theme_option('Recent Items') : 
        '5';
    }
    
    return $recentItems; 
    
}
/**
 * This function returns the theme credits settings, displayed in the footer for the theme.  
 *
 **/

function deco_display_theme_credit(){
		$theme_credit=get_theme_option('Theme Credit');
		$credit_text=' | <a href="http://jeffersonsnewspaper.org/2010/deco-an-omeka-theme/" title="Deco theme">Deco theme</a> by <a href="http://twitter.com/ebellempire/" title="@ebellempire">E. Bell</a>';
		if ($theme_credit == 'yes')return $credit_text;
}
/**
 * This function returns the related exhibit settings for the theme.  
 *
 **/

//defining the function used to show related exhibits in items/show.php (via omeka.org)
//this could be improved to take into account items that are used multiple times in the same exhibit, which right now causes a redundant link
function deco_link_to_related_exhibits($item) {
	require_once "Exhibit.php"; 
	$db = get_db();

	$select = "
	SELECT e.* FROM {$db->prefix}exhibits e
	INNER JOIN {$db->prefix}sections s ON s.exhibit_id = e.id
	INNER JOIN {$db->prefix}section_pages sp on sp.section_id = s.id
	INNER JOIN {$db->prefix}items_section_pages isp ON isp.page_id = sp.id
	WHERE isp.item_id = ?";

	$exhibits = $db->getTable("Exhibit")->fetchObjects($select,array($item));

	if(!empty($exhibits)) {
		echo '<h3>Related Exhibits</h3>';
		echo '<ul>';
		foreach($exhibits as $exhibit) {
			echo '<li>'.exhibit_builder_link_to_exhibit($exhibit).'</li>';
		}
		echo '</ul>';
	}
}
//this is the function that is actually used on items/show...
function deco_display_related_exhibits(){
		$related_exhibits_setting=get_theme_option('Related Exhibits');
		if ($related_exhibits_setting == 'yes')return deco_link_to_related_exhibits(item('ID'));
}

/**
 * This function returns the FancyBox (lightbox) settings for the theme
 * if the user has not turned them off in theme settings
 *
 **/
 
function deco_fancybox(){
		$fancybox_setting=get_theme_option('Fancy Box');
		if ($fancybox_setting == 'yes') echo js('fancybox/fancybox-init-config');
		}


/**
 * This function returns the random featured collection settings for the theme.  
 *
 **/
//this is the function that toggles the Collection Thumbs
function deco_collection_thumbs_number(){
		$collection_thumbs_setting=get_theme_option('Collection Thumbs');
		if ($collection_thumbs_setting == 'yes'){
			echo '<div id="index-collection-img">';
    	    while (loop_items_in_collection(4)):
			echo link_to_item((item_square_thumbnail()), array('item' => item('id')));
			endwhile;
			echo'</div>';
		} 
}
		
function deco_random_featured_collection(){
			$collection = random_featured_collection();
			set_current_collection($collection);
			if ($collection) {
			echo '<h2>'."Featured Collection".'</h2>';
			echo '<h3>'.link_to_collection().'</h3>';
			echo '<p>'.collection('Description').'</p>';
			deco_collection_thumbs_number();
			} else 
			{
        	echo'<p><em>There are no featured collections right now. You should turn off "Display Featured Collections" in the theme settings until you have some.</em></p>';
    		}
}
//this is the function that is actually used on homepage...
function deco_display_random_featured_collection(){
		$random_featured_collection_setting=get_theme_option('Random Featured Collection') ? get_theme_option('Random Featured Collection') : 'yes';
		if ($random_featured_collection_setting == 'yes')return deco_random_featured_collection();
}
function deco_custom_docs_viewer_placement(){
	if (class_exists('DocsViewerPlugin')&&(!get_option('docsviewer_embed_public'))):
	$docsViewer = new DocsViewerPlugin;
    $docsViewer->embed();
	endif;
}
function deco_docs_viewer_placement(){
	$docs_viewer_placement=get_theme_option('Docs Viewer Placement');
	if ($docs_viewer_placement=='yes') return deco_custom_docs_viewer_placement();
}
// this function uses Zend_Feed to fetch and display an RSS or Atom feed
// example usage, to display one post from omeka.org --> echo deco_display_rss('http://omeka.org/feed/',1) 
function deco_display_rss($feedUrl, $num = 3) {
    try {
        $feed = Zend_Feed_Reader::import($feedUrl);
    } catch (Zend_Feed_Exception $e) {
        echo '<p>Feed not available.</p>';
        return;
    }

    $posts = 0;
    foreach ($feed as $entry) {
        if (++$posts > $num) break;
        $title = $entry->getTitle();
        $link = $entry->getLink();
        $description = $entry->getDescription();
        echo "<p class='feed-title'><a href=\"$link\">$title</a></p>"
           . "<p class='feed-content'>$description <a href=\"$link\">...more</a></p>";
    }
}