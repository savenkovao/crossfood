<?php get_header() ?>

	<section class="how-it-works">
		<div class="wrapper  how-it-works_position">
			
			<div>
				<p class="descript">
					
						<?php $post = get_post($post_id = 25); echo $post->post_content; ?>

				</p>
			</div>				

			<div id="how-it-works" class="title-3 how-it-works_title-3-position">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Как это работает</h3>	
			</div>	

			<div class="how-it-works_steps-pos">
				<div class="steps">
					
					

					<img class="steps__img-desktop" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="<?php echo esc_url( get_template_directory_uri())?>/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">

					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>
				</div>

				<?php $post = get_post($post_id = 669); echo $post->post_content; ?>
			</div>
			
		</div>
	</section>

	<section id="advantages" class="advantages advantages_background">
		<div class="wrapper advantages_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Преимущества</h3>	
			</div>

			<div class="advantage-block advantages_advantage-block-pos">
				<div class="advantage-block__item"> 
						<?php $post = get_post($post_id = 46); echo $post->post_content; ?>
				</div>
			</div>


		</div>
	</section>


	<section id="our-team" class="our-team" style="display: none;">
		<div class="wrapper our-team_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Наша команда</h3>	
			</div>

			<div id="team-slider" class="team-block our-team_team-block-pos">

				<div class="team-block__item"> 
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-1.jpg" alt="Мария Саввина - нутрициолог">					
					<ol>
						<li>Мария Саввина</li>
						<li>Фитнес-тренер, дипломированный спортивный нутрициолог</li>
					</ol>											
				</div>
				<div class="team-block__item"> 
					<img class=" team-b" src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-2.jpg" alt="Иван Воробьёв - шеф">
					<ol>
						<li>Иван Воробьёв</li>
						<li>Бренд-шеф, "зеленый" Шеф Одессы, эксперт здоровой кулинарии</li>
					</ol>					
				</div>
				<div class="team-block__item"> 					
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/cnt/team/item-3.jpg" alt="Ольга Янгичер - диетолог">
					<ol>
						<li>Ольга Янгичер</li>
						<li>Врач-диетолог, практик с 15 летним опытом и специалист в области спортивного питания</li>
					</ol>					
				</div>
			</div>


		</div>
	</section>


	<section class="subscribe subscribe_background">
		<div class="wrapper subscribe_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Планы подписок</h3>	
			</div>

			<div class="tab-block subscribe_tab-block-pos">

				<div  id="subscribe" class="tab-block__navigation">
					<div data-action="data-subscribe" data-identifier="stand" data-meta-node class="tab-block__nav-button subscribe__nav-button active">
						<span>Стандарт</span>
					</div>

					<div data-action="data-subscribe" data-identifier="fit" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Фитнес</span>
					</div>

					<div data-action="data-subscribe" data-identifier="prem" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Премиум</span>
					</div>
					<div data-action="data-subscribe" data-identifier="veg" data-meta-node class="tab-block__nav-button subscribe__nav-button">
						<span>Вегетарианский</span>
					</div>

				</div>

				<div id="subscribe-items" class="tab-block__tabs subscribe_tabs-position">
					<div data-subscribe="stand" class="tab-block__tab-item">
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 1614); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>

						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1616); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1618); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 1621); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>
					</div>

					<div data-subscribe="fit" class="tab-block__tab-item disable">
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 105); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>

						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 107); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 109); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2">
							
							<?php $post = get_post($post_id = 111); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
						</div>
					</div>

					<div data-subscribe="prem" class="tab-block__tab-item disable" >
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 353); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 355); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 357); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>						

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 359); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>
					</div>

					<div data-subscribe="veg" class="tab-block__tab-item disable" >
						
						<div data-identifier="1200" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 361); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="1500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 363); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>

						<div data-identifier="2000" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 365); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>						

						<div data-identifier="2500" data-meta-node class="subscribe__item subscribe__item-col-2 active">
							
							<?php $post = get_post($post_id = 367); echo $post->post_content; ?>

							<div class="subscribe__button-cnt">
								<button class="button button_bordered subscribe__button-btn"  data-meta-node data-target="form_2" data-action="activate">Заказать</button>
							</div>
			
						</div>
					</div>

				</div>	

			</div>
		</div>
	</section>

	<section class="cuisine cuisine_background">
		<div class="wrapper cuisine_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_light hr-line">Наше меню</h3>	
			</div>

			<div class="tab-block cuisine-block_position">

				<div id="cuisine-week" class="tab-block__navigation cuisine-block__navigation_pos">
					<div data-identifier="mo" data-meta-node class="tab-block__nav-button cuisine-block__button active">

						<span class="cuisine-block__button-desktop">Понедельник</span>
						<span  class="cuisine-block__button-mobile">Пн</span>

					</div>
					<div data-identifier="tu" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Вторник</span>
						<span  class="cuisine-block__button-mobile">Вт</span>

					</div>
					<div data-identifier="we" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Среда</span>
						<span  class="cuisine-block__button-mobile">Ср</span>

					</div>
					<div data-identifier="th" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Четверг</span>
						<span  class="cuisine-block__button-mobile">Чт</span>

					</div>
					<div data-identifier="fr" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Пятница</span>
						<span  class="cuisine-block__button-mobile">Пт</span>

					</div>
					<div data-identifier="sa" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Суббота</span>
						<span  class="cuisine-block__button-mobile">Сб</span>

					</div>
					<div data-identifier="su" data-meta-node class="tab-block__nav-button cuisine-block__button">

						<span class="cuisine-block__button-desktop">Воскресенье</span>
						<span  class="cuisine-block__button-mobile">Вс</span>

					</div>
				</div>
					
				<div style="display: none;" id="cuisines_3_5" class="tab-block__3-5-cuisines">
<!-- 					<span data-action="data-cuisine-qount" data-identifier="3" data-meta-node class="tab-block__3-cuisines">3 блюда</span>
					<span> / </span>
					<span data-action="data-cuisine-qount" data-identifier="5" data-meta-node class="tab-block__5-cuisines active">5 блюд</span> -->
				</div>

				<div id="all-cuisines" class="tab-block__tabs cuisine__tabs-position">

<!-- fit-1-xxx-yy -->

					<div id="fit-1-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 130); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-1-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 134); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-1-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 139); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 141); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 143); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 145); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 147); echo $post->post_content; ?>
						</div>
					</div>



					<div id="fit-1-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 150); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 152); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 154); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 156); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 158); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 160); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 162); echo $post->post_content; ?>
						</div>
					</div>


					<div id="fit-1-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 164); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 166); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 168); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 170); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 172); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 174); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 176); echo $post->post_content; ?>
						</div>
					</div>



					<div id="fit-1-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 178); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 180); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 182); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 184); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 186); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 189); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-1-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 191); echo $post->post_content; ?>
						</div>
					</div>

<!-- fit-2-xxx-yy -->

					<div id="fit-2-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 495); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 497); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 499); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 501); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 503); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 505); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 507); echo $post->post_content; ?>	
						</div>
					</div>



					<div id="fit-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 509); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 511); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 513); echo $post->post_content; ?>	
						</div>
					</div>

					<div id="fit-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 515); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 517); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 519); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 521); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="fit-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 523); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 525); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 528); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 530); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 532); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 534); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 536); echo $post->post_content; ?>							
						</div>
					</div>



					<div id="fit-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 538); echo $post->post_content; ?>
						</div>
					</div>

					<div id="fit-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 540); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 542); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 544); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 546); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 548); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="fit-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 550); echo $post->post_content; ?>							
						</div>
					</div>

<!-- prem-1-xxx-yy -->
					<div id="prem-1-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 370); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 375); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 377); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 379); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 381); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 383); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 385); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 388); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 390); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 392); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 394); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 396); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 401); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 404); echo $post->post_content; ?>
						</div>
					</div>


					<div id="prem-1-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 407); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 409); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 411); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 413); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 415); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 418); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 420); echo $post->post_content; ?>
						</div>
					</div>


					<div id="prem-1-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 422); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 424); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 426); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 428); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 430); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 432); echo $post->post_content; ?>
						</div>
					</div>

					<div id="prem-1-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 434); echo $post->post_content; ?>
						</div>
					</div>

<!-- prem-2-xxx-yy -->
					<div id="prem-2-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 553); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 555); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 557); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 559); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 561); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 563); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 565); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="prem-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 567); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 569); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 571); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 573); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 575); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 577); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 579); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="prem-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 581); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 583); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 585); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 587); echo $post->post_content; ?>
							
						</div>
					</div>

					<div id="prem-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 589); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 591); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 593); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="prem-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 595); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 597); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 599); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 601); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 603); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 605); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="prem-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 607); echo $post->post_content; ?>
							
						</div>
					</div>

<!-- veg-1-xxx-yy -->
					<div id="veg-1-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 436); echo $post->post_content; ?>
						</div>
					</div>

					<div id="veg-1-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 438); echo $post->post_content; ?>
						</div>
					</div>

					<div id="veg-1-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 440); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 442); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 444); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 446); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 448); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-1-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 450); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 452); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 455); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 457); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 459); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 461); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 837); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-1-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 463); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 465); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 467); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 469); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 471); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 473); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 475); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-1-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 477); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 479); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 839); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 481); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 483); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 485); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-1-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 487); echo $post->post_content; ?>
						</div>
					</div>

<!-- veg-2-xxx-yy -->
					<div id="veg-2-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 609); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 611); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 613); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 615); echo $post->post_content; ?>
							
						</div>
					</div>

					<div id="veg-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 617); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 620); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 622); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 624); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 626); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 628); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 630); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 632); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 634); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 636); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 638); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 640); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 642); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 644); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 646); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 648); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 650); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="veg-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 652); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 654); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 656); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 658); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 660); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 662); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="veg-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 664); echo $post->post_content; ?>							
						</div>
					</div>

<!-- stand-1-xxx-yy -->
					<div id="stand-1-1200-mo" class="tab-block__tab-item">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1376); echo $post->post_content; ?>
						</div>
					</div>

					<div id="stand-1-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1386); echo $post->post_content; ?>
						</div>
					</div>

					<div id="stand-1-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1400); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1402); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1416); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1418); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1432); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-1-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1380); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1388); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1398); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1404); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1414); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1420); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1430); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-1-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1382); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1390); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1396); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1406); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1412); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1422); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1428); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-1-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1384); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1392); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1394); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1408); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1410); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1424); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-1-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1426); echo $post->post_content; ?>
						</div>
					</div>

<!-- stand-2-xxx-yy -->
					<div id="stand-2-1200-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1434); echo $post->post_content; ?>
						</div>
					</div>

					<div id="stand-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1453); echo $post->post_content; ?>
						</div>
					</div>

					<div id="stand-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1455); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1469); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1471); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1485); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1487); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1436); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1451); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1457); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1467); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1473); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1483); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1489); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1438); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1449); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1459); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1465); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1475); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1481); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1491); echo $post->post_content; ?>							
						</div>
					</div>


					<div id="stand-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1445); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1447); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1461); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1463); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1477); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1479); echo $post->post_content; ?>							
						</div>
					</div>

					<div id="stand-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<?php $post = get_post($post_id = 1493); echo $post->post_content; ?>
						</div>
					</div>


				</div>
			</div><!-- 

			 --><div class="cuisine-notation_position">
				<p class="cuisine-notation">
					
					<?php $post = get_post($post_id = 195); echo $post->post_content; ?>

				</p>
			</div>
			
		</div>
	</section>

	<section id="news" class="news news_position wrapper">
		<div id="news" class="title-3">
			<h3 class="title-3__h3 title-3__h3_dark hr-line">Блог</h3>	
		</div>
		<div class="news-block">
			<div class="main-carousel-cont">
				<div id="carousel" class="carousel slide" data-interval="false">	

					<div class="carousel-inner">

						<?php $posts = get_posts ("category_name=news&orderby=date&numberposts=3"); 
									$i = 0;
						?> 
						<?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
								
							<div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
								<div class="news-item">

								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
								?>
				
									<div class="news-item__img-cont">


										<?php  
											if (has_post_thumbnail()) {
											  $thumb_id = get_post_thumbnail_id();
												$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

												echo '<img class="news-item__img" src="' . $thumb_url[0]  . '"  alt="Кроссфуд. Правильное питание - это просто" />';
											}
											else {
											    echo '<img class="news-item__img" src="' . get_bloginfo('template_directory') . '/src/img/dsg/backgrounds/news-thumbnail.jpg' . '"  alt="Кроссфуд. Правильное питание - это просто" />';
											}
										?>	

									</div>
		
									<div class="news-item__descr-cont">
										<div class="news-item__title-cont">
											<h4  class="news-item__title"><?php the_title(); ?></h4>
										</div>
				
										<div class="news-item__req-cont">
											<p class="news-item__author">Автор: <?php echo get_post_meta( get_the_ID(), 'news_author', 1); ?></p>
											<p class="news-item__date"><?php the_date( ); ?></p>
										</div>
				
										<div class="news-item__txt-cont">
											<div  class="news-item__txt"><?php the_excerpt(); ?></div>
										</div>
				
				
										<div class="news-item__read-cont">
											<a href="<?php the_permalink() ?>" class="button button_filled news__button-btn">Читать дальше</a>
										</div>
				
									</div>
								</div>
							</div>

						<?php $i++; endforeach; else:	?>

							<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

						<?php 
							wp_reset_postdata();
						endif; ?>
					</div>
					
					<a href="#carousel" class="left carousel-control main-carousel__control news__carousel-arrow" data-slide="prev">
					</a>
					<a href="#carousel" class="right carousel-control main-carousel__control news__carousel-arrow" data-slide="next">
					</a>
				</div>
			</div>
		</div>
	</section>


	<section class="reviews reviews_background">
		<div class="wrapper reviews_position">
			<div id="reviews" class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Отзывы</h3>	
			</div>
			
			<div id="reviews-slider" data-slides-onpage="3" class="slider reviews-slider">
				
				<?php $post = get_post($post_id = 200); echo $post->post_content; ?>
				
				<div id="reviews-slider-nav-arw">
					<div data-action="left" data-meta-node class="slider__arrow  slider_arrow-left reviews-slider__arrow reviews-slider__arrow-left"></div>
					<div data-action="right" data-meta-node class="slider__arrow  slider_arrow-right reviews-slider__arrow reviews-slider__arrow-right"></div>
				</div>
					
				<div id="reviews-slider-nav-btn" class="slider__btn-nav reviews-slider__btn-nav"></div>
			</div>



			<div class="reviews-hashtag-block">
				<?php $post = get_post($post_id = 215); echo $post->post_content; ?>
			</div>
			
			
		</div>
	</section>



	<?php get_footer() ?>