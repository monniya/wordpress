<?php
/*
 * Plugin Name: smilies
 * Plugin URI: http://www.monniya.com
 * Description: 表情插件
 * Version: 1.0
 * Author: Monniya
 * Author URI: http://www.monniya.com
 * */

/*  
 * 对全局数组变量进行重新赋值，符号代号对应图片名称 
 *  */
global $wpsmiliestrans;
$wpsmiliestrans = array(
	':cool:' => 'cool.png',
	':cry:' => 'cry.png',
	':haha:' => 'haha.png',
	':han:' => 'han.png',
	':kiss:' => 'kiss.png',
	':laugh:' => 'laugh.png',
	':mad:' => 'mad.png',
	':o-no:' => 'o-no.png',
	':qi:' => 'qi.png',
	':righteye:' => 'righteye.png',
	':rolleyes:' => 'rolleyes.png',
	':se:' => 'se.png',
	':sick:' => 'sick.png',
	':sigh:' => 'sigh.png',
	':sleep' => 'sleep.png',
	':surprised' => 'surprised.png',
	':tiaopi' => 'tiaopi.png',
	':anger:' => 'anger.png',
	':evil:' => 'evil.png',
	':bear:' => 'bear.png',
	':rabbit:' => 'rabbit.png',
	':panda:' => 'panda.png',
	':monkey:' => 'monkey.png',
	':close-mouth:' => 'close-mouth.png',
	':close-eye:' => 'close-eye.png',
	':heart:' => 'heart.png',
	':broken-heart:' => 'broken-heart.png',
	':mouth:' => 'mouth.png',
	':strong:' => 'strong.png',
	':baibai:' => 'baibai.png',
	':plane:' => 'plane.png',
	':sport-car:' => 'sport-car.png',
	':train:' => 'train.png',
	':bus:' => 'bus.png',
	':car:' => 'car.png',
	':ele-car:' => 'ele-car.png',
	':clock:' => 'clock.png',
	':letter:' => 'letter.png',
	':easy-box:' => 'easy-box.png',
	':star:' => 'star.png',

);
add_filter('smilies_src','fa_smilies_src',1,10);
function fa_smilies_src ($img_src, $img, $siteurl){
//	    $img = rtrim($img, "gif");
//	     return get_bloginfo('template_directory').'/smilies/'.$img.'png';
	return get_bloginfo('template_directory').'/smilies/'.$img;
}

function fa_get_wpsmiliestrans(){
	    global $wpsmiliestrans;
	        $wpsmilies = array_unique($wpsmiliestrans);
	        foreach($wpsmilies as $alt => $src_path){
		//       $output .= '<a class="add-smily" data-smilies="'.$alt.'"><img class="wp-smiley" src="'.get_bloginfo('template_directory').'/smilies/'.rtrim($src_path, "png").'png" /></a>';
		       $output .= '<a class="add-smily" data-smilies="'.$alt.'"><img class="wp-smiley" src="'.get_bloginfo('template_directory').'/smilies/'.$src_path.'" /></a>';
         	    }
	    return $output;
}

add_action('media_buttons_context', 'fa_smilies_custom_button');
function fa_smilies_custom_button($context) {
	$context .= '
	<style>
		.smilies-wrap{background:#fff;border: 1px solid #ccc;box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.24);padding: 10px;position: absolute;top: 60px;width: 400px;display:none}
		.smilies-wrap img{height:24px;width:24px;cursor:pointer;margin-bottom:5px}
	        .is-active.smilies-wrap{display:block}
	</style>
	<a id="insert-media-button" class="button insert-smilies add_smilies" title="添加表情" data-editor="content" href="javascript:;">
	<span class="dashicons dashicons-admin-users"></span>添加表情</a>
	<div class="smilies-wrap">'. fa_get_wpsmiliestrans() .'</div>
	<script>
		jQuery(document).ready(function(){
			jQuery(document).on("click", ".insert-smilies",function() { 
				if(jQuery(".smilies-wrap").hasClass("is-active")){
					jQuery(".smilies-wrap").removeClass("is-active");
				}else{
					jQuery(".smilies-wrap").addClass("is-active");
				}
			});
			jQuery(document).on("click", ".add-smily",function() { 
				send_to_editor(" " + jQuery(this).data("smilies") + " ");
				jQuery(".smilies-wrap").removeClass("is-active");return false;
			});
		});
	</script>';
        return $context;
}

