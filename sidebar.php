<?php
/**
 * The default sidebar
 *
 */
 
$work = get_posts(array('post_type' => 'work', 'numberposts' => -1));
 
?>

<div style="float:left;margin:0 0 0 15px;width:300px;">
	<?php if(get_post_type() != "work"){ ?> <span style="font-size:24px;color:#716f7c;">Work</span><br><?php } ?>
	<div id="pnc" style="background-color:#73717e;padding:30px 8px 0 8px;color:#333333;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;">
	
			<?php foreach($work as $awork){ ?>
		
			<?php 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $awork->ID ), 'single-post-thumbnail' );
				$thumb = $thumb[0];
				$link = get_post_meta($awork->ID, 'link_override', true);
				$target = 'target="_blank" ';
				if(!$link){
					$link = get_permalink($awork->ID);
					$target = '';
				}
			?>
			
			<a <?php echo $target ?>href="<?php echo $link ?>"><img style="height:95px;width:284px;" src="<?php echo $thumb ?>"><br>
			<span class="spanspanspan"><?php echo $awork->post_title ?></span></a> :: <?php echo get_post_meta($awork->ID, 'work_description', true) ?> <span style="color:#555555;">..&nbsp<?php echo get_post_meta($awork->ID, 'work_date', true) ?></span><br><br>
		
		<?php } ?>

	</div>

<div>
	

					<?php if ( is_active_sidebar( 'newsletter-subscribe' ) ) : ?>
					<?php dynamic_sidebar( 'newsletter-subscribe' ); ?>
					<?php endif; ?>
			

		<!--<form method="post" action="http://www.dansakamoto.com/feeds/lists/?p=subscribe" name="subscribeform">
			<input type=text name=email value="Email Address" size="25" onClick="this.value=''">
			<script language="Javascript" type="text/javascript">addFieldToCheck("email","Email");</script>
			<input type=hidden name="htmlemail" value="1">
			<input type="hidden" name="list[1]" value="signup"><input type="hidden" name="listname[1]" value="the list"/><div style="display:none"><input type="text" name="VerificationCodeX" value="" size="20"></div><input type=submit name="subscribe" value="Subscribe" onClick="return checkform();">
    	</form>-->
		<br>

