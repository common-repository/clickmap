<?php
/*
Plugin Name: Clickmap
Plugin URI: http://www.getclickmap.com/
Description: Click & Scroll Tracking and Website Heatmaps for your Wordpress website. Sign up for a free Clickmap account at www.getclickmap.com!
Version: 1.0
Author: arteria GmbH
Author URI: http://www.arteria.ch/
*/

add_action('wp_footer', 'Clickmap');

function Clickmap() {
echo "<script type='text/javascript'>
// web usability analytics configuration - clickmap.ch 
var clickmapConfig = {tracker:'" . get_option('clickmap_tracker') . "', version:'2'};
window.clickmapAsyncInit = function(){ __clickmap.init(clickmapConfig); };
(function() { var _cmf = document.createElement('script'); _cmf.async = true; 
_cmf.src = document.location.protocol + '//www.clickmap.ch/tracker.js?t=';
_cmf.src += clickmapConfig.tracker; _cmf.id += 'clickmap_tracker';
_cmf.src += '&v='+clickmapConfig.version+'&now='+(new Date().getTime()); 
if (document.getElementById('clickmap_tracker')==null) {
document.getElementsByTagName('head')[0].appendChild(_cmf); }}());
</script>\n";
}

function clickmap_admin() {  
    include('clickmap_admin.php');  
}  
  
function clickmap_admin_actions() {  
add_options_page("Clickmap Settings", "Clickmap", 1, "Clickmap", "clickmap_admin");
}  
  
add_action('admin_menu', 'clickmap_admin_actions');  

?>
