=== Where I've Been ===
Contributors: nicmyers
Donate link: http://www.nicmyers.com/where-ive-been-wordpress-plugin/
Tags: travel, mapping, map, whereivebeen
Requires at least: 2.7
Tested up to: 2.7.1
Stable tag: trunk

Where I've Been embeds your whereivebeen.com maps on your Wordpress blog.

== Description ==

Where I've Been embeds your whereivebeen.com maps on your Wordpress blog.

I created this plugin after searching for an easy way to embed whereivebeen.com maps on Wordpress blogs and not finding one.
Please visit the plugin homepage (http://www.nicmyers.com/where-ive-been-wordpress-plugin/) for updates and more information.

**0.6.0 New Feature**

You can now change the width of your map by adding the *width=""* attribute to your shortcode. The height is automatically calculated for you.


== Installation ==

1. Download and extract the "where-ive-been" folder.
2. Upload the "where-ive-been" folder to your WordPress plugin directory, usually "wp-content/plugins".
3. Activate the plugin in your WordPress admin panel.
4. *Optional* If you wish, you may hard code your user id's into the where-ive-been.php file. I only recommend doing this if you know what you're doing.
5. Place the shortcode with the required values filled in wherever you wish for your map to be displayed. See usage for more info on how to configure the plugin.


== Usage ==

Before you can embed the map on your blog, you will need to retrieve two user id's found in the source code of your whereivebeen.com profile.

1. Go to http://www.whereivebeen.com and log in to your account.
2. Click on the "Profile" or "My Profile" buttons to pull up your map.
3. Right click in your browser and select "View Page Source"(Firefox), "View Source" (Internet Explorer & Safari).
4. Search the code (CTRL-f Windows, Command-f Mac) first for "uID" and then for "iID" and record each of the corresponding values that are single quotation marks.
    Example:  Person = { **uID: '0000000'**, sID: 'Not Needed', **iID: '00000000000000000000000000000000'** )  
    You are looking for the values that are represented as 0's in the example. The uID will be around 8 digits long and the iID around 32 digits.

The plugin makes use of Wordpress Shortcodes and has two required options and two optional ones.
Embed maps into your post or page using shortcode: [whereivebeen uid="Required" iid="Required" roundcorners="Optional" width="Optional"]

1. uid = *Required* Your unique 8 digit uID found on your whereivebeen.com profile (see readme).
2. iid = *Required* Your unique 8 digit iID found on your whereivebeen.com profile (see readme).
3. roundcorners = *Optional* This option can be set to either 'true' or 'false', the default is 'true'. This option will change the corners on the map window to either round(true) or square(false).
4. width = *Optional* Set the width if the default (570x360) is too wide for your blog. The height is automatically calculated for you.


== Frequently Asked Questions ==

= Can I use multiple maps on my site? =

You may use multiple maps by using multiple shortcodes with different user id's.

= Does this plugin work on pre-2.7 Wordpress installations? =

I have personally only tested the plugin on Wordpress 2.7+ installations. The plugin makes use of the Shortcode API that was released in Wordpress 2.5, so it will possibly work on all versions after 2.5. If your feeling brave, test it out and let me know.


==Updates ==

Updates will be posted here and at http://www.nicmyers.com/where-ive-been-wordpress-plugin/
To update the plugin simply use Wordpress's built in one-click updater. If you wish to upgrade manually simply repeat the installation steps.

== History ==
0.6.0 [2009.03.20]

* Added: Option to change the width of the map
* Minor code fixes and readme readability updates

0.5.1 [2009.03.18]

* Minor small fixes

0.5 [2009.03.18]

* Initial Public Release
* Added: Shortcode support for changing rounded corners
* Fixed: Major positioning bug from Shortcode output

0.4 [2009.03.18]

* Added: Shortcode support for uID and iID

0.1-0.3 [2009.03]

* Initial development phase