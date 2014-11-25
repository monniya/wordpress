<?php         
class ClassicOptions {            
    function getOptions() {         
        $options = get_option('classic_options');            
        if (!is_array($options)) {          
              $options['fairy_logo'] = '';      
              update_option('classic_options', $options);         
        }   
        return $options;      
    }   
    function init() {   
        if(isset($_POST['classic_save'])) {   
             $options = ClassicOptions::getOptions();   
             $options['fairy_logo'] = stripslashes($_POST['fairy_logo']);      
             update_option('classic_options', $options);   
        } else {   
             ClassicOptions::getOptions();         
        }   
        add_theme_page("主题设置", "主题设置", 'edit_themes', basename(__FILE__), array('ClassicOptions', 'display'));         
    }   
    function display() {   
	            wp_enqueue_script('my-upload', get_bloginfo( 'stylesheet_directory' ) . '/js/upload.js');   
		            wp_enqueue_script('thickbox');   
		            wp_enqueue_style('thickbox');   
			            $options = ClassicOptions::getOptions(); ?>         
        <form method="post" enctype="multipart/form-data" name="classic_form" id="classic_form">         
        <div class="wrap">         
        <h2><?php _e('FAIRY主题设置'); ?></h2>   
        <p>   
        <?php //添加预览图片代码   
        if($options['fairy_logo'] != ''){   
            echo '<span class="fairy_logo_img"><img src='.$options['fairy_logo'].' alt="" /></span>';   
        }   
        ?>   
        <label>   
            <input type="text" size="80" class="fairy_upload_input" name="fairy_logo" id="fairy_logo" value="<?php echo($options['fairy_logo']); ?>"/>   
            <input type="button" value="上传" class="fairy_bottom"/>   
        </label>   
        </p>   
        <p>   
        <?php //添加预览图片代码   
        if($options['fairy_ico'] != ''){   
            echo '<span class="fairy_ico_img"><img src='.$options['fairy_ico'].' alt="" /></span>';   
        }   
        ?>   
        <label>   
            <input type="text" size="80" class="fairy_upload_input" name="fairy_ico" id="fairy_ico" value="<?php echo($options['fairy_ico']); ?>"/>   
            <input type="button" value="上传" class="fairy_bottom"/>   
        </label>   
        </p>           
        <p class="submit">    
            <input type="submit" name="classic_save" value="<?php _e('保存设置'); ?>" />         
        </p>         
    </div>         
</form>         
<?php         
	    }  
}         
add_action('admin_menu', array('ClassicOptions', 'init'));          
?>  
