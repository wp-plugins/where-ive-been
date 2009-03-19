<?php
/*
Plugin Name: Where I've Been
Plugin URI: http://www.nicmyers.com/where-ive-been-wordpress-plugin/
Description: Plugin for displaying WhereIveBeen.com maps in your Wordpress blog. Use: [whereivebeen uid='' iid=''] to embed into your post or page. Both values are required. To get them, view the source of your whereivebeen.com profile page and search for uID and iID. See the readme for more info.
Author: Nic Myers
Version: 0.5
Author URI: http://www.nicmyers.com
*/

/*  Copyright 2009  Nic Myers  (email : nicmyers@w3designs.net) 

Where I've Been embeds your whereivebeen.com maps on your Wordpress blog. 

I decided to create this plugin after searching for an easy way to embed Where I've Been maps on Wordpress blogs and not finding one.

Embed into your post using [whereivebeen uid='' iid=''] and setting the required settings.

== Shortcode Options ==
1. uid = *Required* Your unique 8 digit uID found on your whereivebeen.com profile (see readme).
2. iid = *Required* Your unique 8 digit iID found on your whereivebeen.com profile (see readme).
3. roundcorners = *Optional* This option can be set to either 'true' or 'false', the default is 'true'. This option will change the corners on the map window to either round(true) or square(false).

*/

// Hardcode your users id's here if you wish. To get them, view the source of your whereivebeen.com profile page and search for uID and iID.
$wib_uID = '';
$wib_iID = '';
$wib_roundcorners = 'true'; 	//True or False

//This is the code that outputs the map. 
//The shortcode is [whereivebeen uid="uID number" iid="iID number" roundcorners="true or false"]
function whereivebeen_output($atts, $content=null) {

	global $wib_uID;
	global $wib_iID;
	global $wib_roundcorners;
	
	extract( shortcode_atts( array(
      'uid' => '',
      'iid' => '',
	  'roundcorners' => 'true',
      ), $atts ) );
	  
	$wib_uID = $uid;
	$wib_iID = $iid;
	$wib_roundcorners = $roundcorners;
	
	//
	//echo $wib_uID;
	//echo $wib_iID;
	
ob_start();
	print <<< SWF
<div class="whereivebeen" style="width:570px;">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" id="viewMap"align="middle" width="570" height="360"><param name="movie" value="http://static1.whereivebeen.com/swf/3.4/view.swf"><param name="salign" value="ct"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="flashvars" value="env=production&amp;network=wib&amp;networkURL=http://www.whereivebeen.com/&amp;uID={$wib_uID}&amp;iID={$wib_iID}&amp;showroundedcorners={$wib_roundcorners}"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="bgcolor" value="#ffffff"><embed src="http://static1.whereivebeen.com/swf/3.4/view.swf" wmode="transparent" flashvars="env=production&amp;network=wib&amp;networkURL=http://www.whereivebeen.com/&amp;uID={$wib_uID}&amp;iID={$wib_iID}&amp;showroundedcorners={$wib_roundcorners}" quality="high" scale="noscale" salign="ct" bgcolor="#ffffff" name="wib-view-map" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" align="middle" width="570" height="360"></embed></object>
<a href="http://www.whereivebeen.com" class="wib_mainsite" style="color: #d8dfea; text-decoration: none; font: .75em sans-serif; float: left;">WhereIveBeen.com</a><a href="http://www.nicmyers.com/where-ive-been-wordpress-plugin/" alt="Travel Photographer" class="wib_pluginauthor" style="color: #d8dfea; font: .75em sans-serif; text-decoration: none; float: right;">Get the Where I’ve Been Wordpress Plugin</a>
<p style="clear: both;">&nbsp;</p>
</div>
SWF;
	$wib_output = ob_get_contents();
	ob_end_clean();

	return $wib_output;

}

add_shortcode('whereivebeen', 'whereivebeen_output');

?>