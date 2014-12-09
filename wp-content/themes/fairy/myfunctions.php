<?php         
	function catch_that_image() {
	    global $post, $posts;
            $first_img = '';
//            ob_start();
//	    ob_end_clean();
//	    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  //          $first_img = $matches [1] [0];
	    $output = preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content,$matches);
	    $first_img = $matches [1];
	//    $first_img = cut_image($first_img,"220");
	        if(empty($first_img)){
	        $first_img = get_bloginfo('template_directory')."/images/content/default.jpg";
	    }

	    return $first_img;
	}
	function cut_image($image,$width){//截取正方形缩略图
            $image_name_list=explode("/",$image);
            $image_name=$image_name_list[count($image_name_list)-1];
	    for ($x=0 ; $x<count($image_name_list)-1; $x++){
		    $dst_img_dir = $dst_img_dir . $image_name_list[x];
	    }
	    $img=getimagesize($image);
           // $img=getimagesize($image_name);
            $dst_img_name=$width . $image_name;
            switch($img[2]){//判断图片类型
                  case 1: $temp_img = @imagecreatefromgif($image); break;
                  case 2: $temp_img = @imagecreatefromjpeg($image); break;
                  case 3: $temp_img = @imagecreatefrompng($image); break;
            }   

           if($img[0] > $img[1]){//如果宽大于高
                  $src_w = $img[1];
                  $src_x = ($img[0] - $img[1]) / 2;
                  $src_y = 0;
           }else{
                  $src_w = $img[0];
                  $src_x = 0;
                  $src_y = ($img[1] - $img[0]) / 2;
           }   

           $new_img = imagecreatetruecolor($width,$width);
           imagecopyresampled($new_img, $temp_img, 0, 0,$src_x, $src_y, $width, $width, $src_w, $src_w);
           imagejpeg($new_img, $dst_img_dir. $dst_img_name , 100);
           return $dst_img_dir . $dst_img_name;  
      }   


?>
