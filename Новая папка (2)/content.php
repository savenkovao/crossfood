<div class="wrapper  how-it-works_position">
			
			<div>
				<p class="descript">
					
						<?php $post = get_post($post_id = 25); echo $post->post_content; ?>

				</p>
			</div>				
<!-- <u class="descript__highlited">CrossFood &mdash;</u> это команда профессионалов, которая возьмет на себя заботу о твоем рационе. Мы подбираем для тебя меню, считаем КБЖУ, готовим и привозим в удобное для тебя время. Больше не надо ходить в магазины, стоять у плиты и мыть посуду.  -->
			<div id="how-it-works" class="title-3 how-it-works_title-3-position">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Как это работает</h3>	
			</div>	

			<div class="how-it-works_steps-pos">
				<div class="steps">
					
					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>

					<img class="steps__img-desktop" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="<?php echo esc_url( get_template_directory_uri())?>/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">
				</div>
			</div>
			
		</div>