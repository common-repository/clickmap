<?php   
    if($_POST['oscimp_hidden'] == 'Y') {  
        //Form data sent  
        $tracker = $_POST['clickmap_tracker'];  
        update_option('clickmap_tracker', $tracker);  
        ?>  
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>  
        <?php  
    } else {
$tracker = get_option('clickmap_tracker');  
    }  
?>  


<div class="wrap">
<br/><br/>  
<img src=' <?php echo plugins_url( 'clickmap_logo.png' , __FILE__ )?> '>      
<p>
Clickmap is a real-time heatmap tool to track mouse clicks and scroll paths of your website visitors.<br/>
Gain intelligence about what's hot and what's not, and optimize your conversion with Clickmap.
</p>    

<form name="oscimp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
        <input type="hidden" name="oscimp_hidden" value="Y">  
        <?php    echo "<h4>" . __( 'Clickmap Tracker Settings', 'oscimp_trdom' ) . "</h4>"; ?>
<ul><li>First make sure you have registered with a Clickmap account on <a href='http://www.getclickmap.com' target='_blank'>www.getclickmap.com.</a></li>
<li>Second get your tracker code from your Clickmap account (see the red rectangle) and paste it into the field "Clickmap Tracker ID" below.</li>
</ul>  
<img src=' <?php echo plugins_url( 'clickmap_tracker.png' , __FILE__ )?> '>

<p><?php _e("Clickmap Tracker ID: " ); ?><input type="text" name="clickmap_tracker" value="<?php echo $tracker; ?>" size="40"><br/><br/><?php _e("(for example: ZMZC09U4BNR8KB7I2PROFSHIXUY447BW" ); ?></p>  
        <hr />  
        <p class="submit">  
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'oscimp_trdom' ) ?>" />  
        </p>  
    </form>  
</div>  

