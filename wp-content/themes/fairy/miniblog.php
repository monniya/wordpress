<!-- Mini Blog -->
        <div id="blog-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>随笔</h4>
                <p>那支笔，在心尖写下点滴，回忆，留下悲欢离合.</p>
                <p><a href="./blog.html">阅读</a></p>
                <div class="carousel-nav">
                    <a id="blog-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="blog-next" class="jcarousel-next" href="./index.html"></a>
					
                </div>
            </div>
            
            <ul class="blog-carousel">
		<li>
			<a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
			<span class="post-date"><?php echo get_the_date(); ?></span>
<?php while ( have_posts() ) : the_post(); ?>
<?php
    global $post;
    	echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,240,"...");	
    ?>	
<?php endwhile; ?>

		</li>
                <li>
                    <a href="./blog_post.html">
                        <h4>火车上的夜晚</h4>
                    </a>
                    <span class="date">2013-6-24 22:51</span>
                    <p>一直都是穷游，当然这次也不怎么例外。不过嘉兴到昆明的火车长达37小时，让我早早的放弃了硬座的打算。第一次来到硬卧车厢，第一次爬上铺，绝对是这次旅途的难忘记忆。...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>与太阳赛跑</h4>
                    </a>
                    <span class="date">2013-6-25 22:26</span>
                    <p>开头我要说两句话：第一句，火车一路向西；第二句，天黑大约是晚上八点半。
						今天一整天都在火车上，从太阳升起一直到太阳落下。火车上的事情很单调，看着窗外发呆...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>春城暴走 </h4>
                    </a>
                    <span class="date">2013-6-26 21:32</span>
                    <p>一觉醒来，昆明已在眼前。和大叔告别，和小哥告别，我不是煽情的人，却也有丝丝伤感。
						下火车的第一感觉是那蔚蓝的天空给我的，接着便是灼热的阳光。昆明的阳光真毒，火辣辣的刺痛感。细皮嫩肉者请自备大量防晒霜，指数越高越好...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>丽江大雨</h4>
                    </a>
                    <span class="date">2013-6-28 17:33</span>
                    <p>到丽江的时候大约是6点，天刚蒙蒙亮，微冷。到了火车站广场才发现忘了拿三脚架，遂狂奔取回，顿时上气不接下气，才想起来丽江已有2400米的海拔，算不上高原反应，不过也不适宜这样剧烈运动。
丽江通火车才两年，所以火车站完全是现代化的气息。虽然才6点，但是车站广场上早就充盈了各种掮客，因为公交还没开始上班，自然生意不错...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>骑马坐船看彩虹</h4>
                    </a>
                    <span class="date">2013-6-30 23:16</span>
                    <p>提起拉市海，这里的当地人一定忽悠你去茶马古道骑马坐船吃烤鱼。事实上，这里的水很深。拉市海并不是由当地政府统一开发的，相反，它成了三十来家马场的自留地。若是你选择在酒店在当地人的介绍下被免费送至马场，好吧，你已经进套了。从利益链的角度来看，这也并非没有道理。丽江的酒店很便宜，标间50一晚，我的确看不出这里有什么可以挣钱的，找点副业也无可厚非。...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>伟大航路的失败者</h4>
                    </a>
                    <span class="date">2013-6-30 23:45</span>
                    <p>今天的情形让我觉得和海贼王里的桥段很像：东海霸王克利克初征伟大航路就惨败，不过是太早的惹到了鹰眼导致了团灭。而我忽略的，确实那逐渐上升的海拔。...</p>
                </li>
				
            </ul>
        </div>
        <!-- /Mini Blog -->
