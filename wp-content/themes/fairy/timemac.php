<!-- Mini Blog -->
        <div id="time-flow" class="index-flow">
           <div class="time-line"></div> 
            <div class="index-carousel">
		<?php  query_posts('posts_per_page=6&cat=-67');	?>
		<?php  while ( have_posts() ) : the_post(); ?>
		<?php if(in_category(3)){
			$style="moment-style";
			$icon="moment-icon";
		}
		else{
			$style="standard-style";
			$icon="standard-icon";
			$note='<p class="note">' .mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,240,"...") .'</p>';

		}
			$box_point="box-point";
		?>
		<div class="index-box">
	<div class="icon-location">	<span class="<?php echo $icon .' '.$box_point .'"></span>';?>  </div>
		<div class="box-content <?php echo $style;?>">
			<a href="<?php the_permalink(); ?>">
				<div class="note-image"><?php if(empty($note)) the_post_thumbnail(index);else echo $note;?></div>
				<div class="box-title">
					<h4><?php get_the_title() ? the_title() : the_ID(); ?></h4>
					<span class="date"><?php echo get_the_date(); ?></span>
				</div>
			</a>
		</div>
		</div>
		<?php $note='';endwhile; wp_reset_query(); ?>		
           </div>
        </div>
<script type="text/javascript">
function waterfull(){
var heightArr = [0,0];
var height = 0;

var divwidth = 586;

var margin_h = 70;
var margin_w = 102;
var total_h = 0;
$(' .index-box').each(function(e) {
	index = (e%2);
	length = heightArr.length;
	minnum = heightArr[0];
	minIndex = 0;
	for(var i in heightArr){
		if(i!=0){
			if(heightArr[i]<minnum){
				minnum=heightArr[i];
				minIndex=i;
			}
		}
	}	
	var left = minIndex*(divwidth+margin_w);
	$(this).css({"left":left,"display":"block","top":heightArr[minIndex]});
	height = $(this).height();
	heightArr[minIndex]+=(height+margin_h);
	if( left !=0)   {
		$(this).context.className = "index-box right";
	}
});
total_h = (heightArr[0] > heightArr[1]) ? heightArr[0] : heightArr[1];
$('.index-carousel').css({"height":total_h});
$('.time-line').css({"height":total_h});
}
waterfull();
</script>
