jQuery(document).ready(function() {   
	    
    jQuery('input.fairy_bottom').click(function() {   
            targetfield = jQuery(this).prev('input');   
           tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');   
             return false;   
    });   
        
    window.send_to_editor = function(html) {   
    imgurl = jQuery('img',html).attr('src');   
    jQuery(targetfield).val(imgurl);   
           tb_remove();   
      }   
    jQuery('input.fairy_upload_input').each(function()   
		    {   
			    jQuery(this).bind('change focus blur', function()   
					    {      

						    $select = '#' + jQuery(this).attr('name') + '_img';   
						    $value = jQuery(this).val();   
						    $image = '<img src ="'+$value+'" />';                             
						    var $image = jQuery($select).html('').append($image).find('img');   

						    window.setTimeout(function()   
								    {   
									    if(parseInt($image.attr('width')) < 20)   
									    {      
										    jQuery($select).html('');   
									    }   
								    },500);   
					    });   
		    }); 
		    
}); 
