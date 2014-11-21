<?php global $option_setting;
$count = 1;
if (isset($option_setting['slider-enable-on-home'])) :
	if( $option_setting['slider-enable-on-home'] && (is_front_page() || is_home() )) : 
		if ( count($option_setting['slider-main']) > 0 ) : ?>
<!--	
	    <div id="slider-wrapper">
		    <div class="container frame-c">
			    <ul class="bxslider">
			    	<?php
					foreach ( $option_setting['slider-main'] as $slider ) {
						if ($count > 5) { break; }
						echo "<li><a class='slideurl' href='" . esc_url($slider['url']) . "'><img src='" .
							$slider['image'] . "'></a><div class='slider-caption container'><div class='slider-caption-title'>" .
						       	$slider['title'] . "</div><div class='slider-caption-desc'>" . $slider['description'] . "</div></div></li>";  
						$count++;  
					}
		                ?>
			     </ul>   
		    </div>
		</div>  -->
	   <div id="main-slider" class="flexslider">
		<ul class="slides">
		    <?php
			foreach ( $option_setting['slider-main'] as $slider ) {
                                if ($count > 5) { break; }
				echo "<li><img src='" . $slider['image'] . "'> <div class='flex-caption'><h3>" . $slider['title'] . "</h3><p> " . 
					$slider['description'] . "</p><input type='submit'  value='更多' class='red' /> </div></li>";
				$count++;
			}	
		   ?>
		</ul>
	   </div>
	<?php endif;
	endif; 
endif;?>
