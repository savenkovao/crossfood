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
					
					<?php $post = get_post($post_id = 27); echo $post->post_content; ?>

					<img class="steps__img-desktop" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/dsg/steps.png" alt="Crossfood - как это работает">
					<img class="steps__img-mobile" src="<?php echo esc_url( get_template_directory_uri())?>/src/img/dsg/steps-mobile.png" alt="Crossfood - как это работает">
				</div>
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


	<section id="our-team" class="our-team">
		<div class="wrapper our-team_position">
			<div class="title-3">
				<h3 class="title-3__h3 title-3__h3_dark hr-line">Наша команда</h3>	
			</div>

			<div id="team-slider" class="team-block our-team_team-block-pos">

				<div data-action="sl" data-meta-node class="team-block__item sl">					

					<?php $post = get_post($post_id = 53); echo $post->post_content; ?>
											
				</div>

				<div data-action="ml" data-meta-node class="team-block__item ml">

					<?php $post = get_post($post_id = 55); echo $post->post_content; ?>
											
				</div>

				<div data-action="l" data-meta-node class="team-block__item l">

					<?php $post = get_post($post_id = 57); echo $post->post_content; ?>
						
				</div>

				<div data-action="mr" data-meta-node class="team-block__item mr">					

					<?php $post = get_post($post_id = 59); echo $post->post_content; ?>
					
				</div>
				
				<div data-action="sr" data-meta-node class="team-block__item sr">

					<?php $post = get_post($post_id = 61); echo $post->post_content; ?>
					
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

					<div data-action="data-subscribe" data-identifier="fit" data-meta-node class="tab-block__nav-button subscribe__nav-button active">
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
					
					<div data-subscribe="fit" class="tab-block__tab-item">
						
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
					
				<div id="cuisines_3_5" class="tab-block__3-5-cuisines">
					<span data-action="data-cuisine-qount" data-identifier="3" data-meta-node class="tab-block__3-cuisines">3 блюда</span>
					<span> / </span>
					<span data-action="data-cuisine-qount" data-identifier="5" data-meta-node class="tab-block__5-cuisines active">5 блюд</span>
				</div>

				<div id="all-cuisines" class="tab-block__tabs cuisine__tabs-position">

<!-- fit-1-xxx-yy -->

					<div id="fit-1-1200-mo" class="tab-block__tab-item">
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
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, индейкой и творогом;</li>
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Бескалорийные макароны «Широтаке» с соусом «болоньезе».</li>
									</ol>						


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола + йогуртом + фрукты;</li>
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>										


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной;</li>
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Творог с клубнично мятным джемом.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет с болгарским перцем и печеной куриной пулькой + мультизлаковый хлеб;</li>
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Творожная Мусака из баклажан и корений с телятиной.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром;</li>
										<li>Чизкейк творожный на льняном корже и натуральном сахзаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с индейкой, шпинатом и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники ПП на натуральном сахЗаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Скрамбл, ростбиф, сыр твердый, тосты мультизлаковые;</li>
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом;</li>
										<li>Творожный смузи ягодами и ванильной палочкой.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1300 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>



					<div id="fit-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, индейкой и творогом;</li>
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Бескалорийные макароны «Широтаке» с соусом «болоньезе».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола + йогуртом + фрукты;</li>
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>5						</div>

					<div id="fit-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной;</li>
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Творог с клубнично мятным джемом.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>5						</div>

					<div id="fit-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет с болгарским перцем и печеной куриной пулькой + мультизлаковый хлеб;</li>
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Творожная Мусака из баклажан и корений с телятиной.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром;</li>
										<li>Чизкейк творожный на льняном корже и натуральном сахзаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>5						</div>

					<div id="fit-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с индейкой, шпинатом и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники ПП на натуральном сахЗаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Скрамбл, ростбиф, сыр твердый, тосты мультизлаковые;</li>
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом;</li>
										<li>Творожный смузи ягодами и ванильной палочкой.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>5						</div>


					<div id="fit-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, индейкой и творогом;</li>
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Бескалорийные макароны «Широтаке» с соусом «болоньезе».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола + йогуртом + фрукты;</li>
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной;</li>
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Творог с клубнично мятным джемом.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет с болгарским перцем и печеной куриной пулькой + мультизлаковый хлеб;</li>
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Творожная Мусака из баклажан и корений с телятиной.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром;</li>
										<li>Чизкейк творожный на льняном корже и натуральном сахзаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с индейкой, шпинатом и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники ПП на натуральном сахЗаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Скрамбл, ростбиф, сыр твердый, тосты мультизлаковые;</li>
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом;</li>
										<li>Творожный смузи ягодами и ванильной палочкой.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>



					<div id="fit-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, индейкой и творогом;</li>
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Бескалорийные макароны «Широтаке» с соусом «болоньезе».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью и травами;</li>
										<li>ПП Пицца на корже из куриного филе;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола + йогуртом + фрукты;</li>
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из куриного филе с рисом Басмати в кисло-сладком соусе;</li>
										<li>Гороховая лапша с тайским соусом с рыбой и грибами;</li>
										<li>Салат из свежих овощей и перепелиных яиц с сырным соусом на основе йогурта.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной;</li>
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Творог с клубнично мятным джемом.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Паштет из печени индейки с льняными тостами;</li>
										<li>Греча с фрикадельками домашней куры в сметано-грибной подливке;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет с болгарским перцем и печеной куриной пулькой + мультизлаковый хлеб;</li>
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Творожная Мусака из баклажан и корений с телятиной.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины + льняные тосты;</li>
										<li>Греча с пюре из сельдерея + Куриная грудка Су-вид с тимьяном;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром;</li>
										<li>Чизкейк творожный на льняном корже и натуральном сахзаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами;</li>
										<li>Фурм Д.Амбер Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с индейкой, шпинатом и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники ПП на натуральном сахЗаме «FitParad».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный + шоколадное печенье с курагой;</li>
										<li>Пшенная каша с палтусом Су-вид и рюмкой бульона с зеленью;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="fit-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Скрамбл, ростбиф, сыр твердый, тосты мультизлаковые;</li>
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом;</li>
										<li>Творожный смузи ягодами и ванильной палочкой.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай ПП в сливочной пропитке;</li>
										<li>Перловая каша с отварным ягненком в крепком бульоне с зеленью;</li>
										<li>Салат с телятиной, яйцом, огурцом и йогуртным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

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
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Сытная Фритатта со шпинатом, индейкой, годовалым пармезаном и травами;</li>
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Безкаллорийные Широтаке1200\1500 с соусом болоньез или 2000\2500 Классическая лазанья « болоньез-бешамель».</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>
								
									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной, маковыми отрубями и домашним вареньем;</li> 
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени;</li>
										<li>Котлетки домашние в гречневой панировке на пюре из корня сельдерея и грибов.</li>
									</ol>											

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Свехпышный Омлет «Облако» от ЗеленогоШефа с болгарским перцем и индейкой + мультизлаковый хлеб;</li>
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом;</li>
										<li>Мусака из баклажан и корений с телятиной, маслинами и сыром Фета.</li>
									</ol>										

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью( по древнему рецепту ) + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								
									
								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Интересный Омлет - Маффин с индейкой, капустой брокколи и адыгейским сыром;</li>
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Нежнейший Палтус Су-Вид с овощами и соусом из йогурта огурца и зелени.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, ростбиф, сыр твердый, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом;</li>
										<li>Ароматное Рагу из телятины и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>		

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="prem-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Сытная Фритатта со шпинатом, индейкой, годовалым пармезаном и травами;</li>
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Безкаллорийные Широтаке1200\1500 с соусом болоньез или 2000\2500 Классическая лазанья « болоньез-бешамель».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной, маковыми отрубями и домашним вареньем;</li> 
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени;</li>
										<li>Котлетки домашние в гречневой панировке на пюре из корня сельдерея и грибов.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Свехпышный Омлет «Облако» от ЗеленогоШефа с болгарским перцем и индейкой + мультизлаковый хлеб;</li>
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом;</li>
										<li>Мусака из баклажан и корений с телятиной, маслинами и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью( по древнему рецепту ) + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Интересный Омлет - Маффин с индейкой, капустой брокколи и адыгейским сыром;</li>
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Нежнейший Палтус Су-Вид с овощами и соусом из йогурта огурца и зелени.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, ростбиф, сыр твердый, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом;</li>
										<li>Ароматное Рагу из телятины и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="prem-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Сытная Фритатта со шпинатом, индейкой, годовалым пармезаном и травами;</li>
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Безкаллорийные Широтаке1200\1500 с соусом болоньез или 2000\2500 Классическая лазанья « болоньез-бешамель».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной, маковыми отрубями и домашним вареньем;</li> 
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени;</li>
										<li>Котлетки домашние в гречневой панировке на пюре из корня сельдерея и грибов.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Свехпышный Омлет «Облако» от ЗеленогоШефа с болгарским перцем и индейкой + мультизлаковый хлеб;</li>
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом;</li>
										<li>Мусака из баклажан и корений с телятиной, маслинами и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью( по древнему рецепту ) + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Интересный Омлет - Маффин с индейкой, капустой брокколи и адыгейским сыром;</li>
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Нежнейший Палтус Су-Вид с овощами и соусом из йогурта огурца и зелени.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, ростбиф, сыр твердый, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом;</li>
										<li>Ароматное Рагу из телятины и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="prem-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Сытная Фритатта со шпинатом, индейкой, годовалым пармезаном и травами;</li>
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Безкаллорийные Широтаке1200\1500 с соусом болоньез или 2000\2500 Классическая лазанья « болоньез-бешамель».</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента Печеная с черной фасолью, томатами, анчоусом и травами от ЗеленогоШефа;</li>
										<li>Легендарный Таматно-апельсиновый суп пюре с морепродуктами и Гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и телятиной.</li>
									</ol>


									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки - 110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из индейки с болгарским перцем и рисом Басмати в кисло-сладком соусе;</li>
										<li>Мегаполезный Рыбный мисо-суп с водорослями Вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с домашним майонезе на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной, маковыми отрубями и домашним вареньем;</li> 
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени;</li>
										<li>Котлетки домашние в гречневой панировке на пюре из корня сельдерея и грибов.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Нежный Паштет из печени индейки с льняными тостами;</li>
										<li>Рассольник с телятиной, белыми грибами и перловкой + сметана;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе с ростками Микрозелени.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Свехпышный Омлет «Облако» от ЗеленогоШефа с болгарским перцем и индейкой + мультизлаковый хлеб;</li>
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом;</li>
										<li>Мусака из баклажан и корений с телятиной, маслинами и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Пате из телятины и с клюквенным желе + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти и живыми хлебцами;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, микрозеленью, гороховой лапшой и арахисом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью( по древнему рецепту ) + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром;</li>
										<li>Пулькоги ( корейское мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из индейки;</li>
										<li>Суп ФО с телятиной, ростками МАШ, грибами и гороховой лапшой;</li>
										<li>Фурм Д.Амбер Груша запеченная с морепродуктами яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Интересный Омлет - Маффин с индейкой, капустой брокколи и адыгейским сыром;</li>
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Нежнейший Палтус Су-Вид с овощами и соусом из йогурта огурца и зелени.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смузи «Чернично миндальный с бананом и ванильной палочкой» от ЗеленогоШефа + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты «Дюбари» + соте из филе лимона и гигантского кальмара + злаковые чипсы из лаваша;</li>
										<li>Бланкет из телятины с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="prem-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, ростбиф, сыр твердый, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом;</li>
										<li>Ароматное Рагу из телятины и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай с голубикой в сливочной - медовой пропитке;</li>
										<li>Ирландский суп с ягненком и зеленым горошкам + льняной хлеб;</li>
										<li>Шотладский салат с телятиной, яйцом, огурцом и легким сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

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
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, грибами и пармезаном;</li>
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Широтаке1200\1500 с болоньезе, лазанья болоньез-бешамель.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и спаржевой фасолью.</li>
									</ol>
										
									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной и домашним вареньем;</li>
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Котлетки домашние овощные в гречневой панировке на пюре из корня сельдерея и грибов.</li>
									</ol>
										

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет «Облако» с болгарским перцем и спаржевой фасолью + мультизлаковый хлеб;</li>
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Мусака из баклажан и корений с турецким горохом и сыром Фета.</li>
									</ol>							
										

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром;</li>
										<li>Пулькоги ( корейское соевое мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>												

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с овощами, брокколи и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники с домашним вареньем.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1200-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, сыр твердый,овощи свежие, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом;</li>
										<li>Рагу из соевого мяса и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1200 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">900 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">250 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">300 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="veg-2-1500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, грибами и пармезаном;</li>
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Широтаке1200\1500 с болоньезе, лазанья болоньез-бешамель.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и спаржевой фасолью.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной и домашним вареньем;</li>
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Котлетки домашние овощные в гречневой панировке на пюре из корня сельдерея и грибов.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет «Облако» с болгарским перцем и спаржевой фасолью + мультизлаковый хлеб;</li>
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Мусака из баклажан и корений с турецким горохом и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром;</li>
										<li>Пулькоги ( корейское соевое мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с овощами, брокколи и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники с домашним вареньем.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-1500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, сыр твердый,овощи свежие, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом;</li>
										<li>Рагу из соевого мяса и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">300 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">350 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="veg-2-2000-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, грибами и пармезаном;</li>
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Широтаке1200\1500 с болоньезе, лазанья болоньез-бешамель.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и спаржевой фасолью.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной и домашним вареньем;</li>
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Котлетки домашние овощные в гречневой панировке на пюре из корня сельдерея и грибов.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет «Облако» с болгарским перцем и спаржевой фасолью + мультизлаковый хлеб;</li>
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Мусака из баклажан и корений с турецким горохом и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром;</li>
										<li>Пулькоги ( корейское соевое мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с овощами, брокколи и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники с домашним вареньем.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2000-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, сыр твердый,овощи свежие, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом;</li>
										<li>Рагу из соевого мяса и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">1500 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>


					<div id="veg-2-2500-mo" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Фритатта со шпинатом, грибами и пармезаном;</li>
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом;</li>
										<li>Широтаке1200\1500 с болоньезе, лазанья болоньез-бешамель.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Палента с черной фасолью, томатом, анчоусом и травами;</li>
										<li>Таматно-апельсиновый суп пюре с соевым мясом и гриссини;</li>
										<li>Салатный микс с моцареллой, томатами, каперсами и чили-базиликовым соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-tu" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Гранола орехово-имбирная с йогуртом и фруктами от ЗеленогоШефа;</li>
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле;</li>
										<li>Запеканка творожная с овощами и спаржевой фасолью.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Шашлычки из грибов и соевого мяса с рисом Басмати в кисло-сладком соусе;</li>
										<li>Рыбный мисо-суп с водорослями вакаме и древесными грибами;</li>
										<li>Салат из свежих овощей с соусом из домашнего майонеза на перепелиных яйцах и оливковом масле.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-we" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Ленивые вареники со сметаной и домашним вареньем;</li>
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе;</li>
										<li>Котлетки домашние овощные в гречневой панировке на пюре из корня сельдерея и грибов.</li>

									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Клюквенный морс + Лобио с льняными тостами;</li>
										<li>Рассольник с белыми грибами, перловкой и сметаной;</li>
										<li>Винегрет ПП на льняном масле и яблочном уксусе.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-th" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет «Облако» с болгарским перцем и спаржевой фасолью + мультизлаковый хлеб;</li>
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью;</li>
										<li>Мусака из баклажан и корений с турецким горохом и сыром Фета.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Хумус от Зеленогошефа с овощами + льняные тосты;</li>
										<li>Крем суп из корня сельдерея с ароматным грибным ассорти;</li>
										<li>Тайский салат с печеным сыром тофу, огурцом, гороховой лапшой и зеленью.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-fr" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Индийская Морковная халва с орехами кешью + Чай Массала;</li>
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром;</li>
										<li>Пулькоги ( корейское соевое мясо ) с гречневой лапшой и овощами.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Кубинский Конгри ( рис+черная фасоль ) с фрикасе из овощей;</li>
										<li>Суп ФО с тофу, ростками, грибами и гороховой лапшой;</li>
										<li>«Фурм Д.Амбер» Груша запеченная с яйцом и сыром.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-sa" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Омлет - Маффин с овощами, брокколи и адыгейским сыром;</li>
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
										<li>Творожные сочники с домашним вареньем.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Смуззи «Чернично миндальный с бананом и ванильной палочкой + шоколадное печенье с курагой;</li>
										<li>Крем-суп из цветной капусты с тимьяном «Дюбари» + злаковые чипсы из лаваша;</li>
										<li>Бланкет из соевого мяса с салатным миксом и чипсами из пророщенной пшеницы;</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">350 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">400 грн</span>
								</div>
								
							</div>

						</div>
					</div>

					<div id="veg-2-2500-su" class="tab-block__tab-item disable">
						<div class="cuisine__item">
							<div class="cuisine__item-text-cont">
								<div data-cuisine-qount="5" class="">
									<ol class="cuisine__item-text-menu">
										<li>Завтрак по английски : Скрамбл, фасоль в томате, сыр твердый,овощи свежие, тосты Мультизлаковые;</li>
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом;</li>
										<li>Рагу из соевого мяса и грибов, запеченное под пюре из корня сельдерея.</li>
									</ol>

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2500 ккал</u></li>
										<li>Белки -110 г</li>
										<li>Жиры - 73 г</li>
										<li>Углеводы - 160г</li>
									</ul>									
								</div>								

								<div data-cuisine-qount="3" class="disable">
									<ol class="cuisine__item-text-menu">
										<li>Ягодно-ореховый Пай в сливочной - медовой пропитке;</li>
										<li>Ирландский густой грибной сливочный суп + льняной хлеб;</li>
										<li>Шотладский салат с зеленым горошком, яйцом, огурцом и сливочным соусом.</li>
									</ol>								

									<ul class="cuisine__item-text-calories">
										<li><u class="cuisine__item-text-highlited">2000 ккал</u></li>
										<li>Белки - 70 г</li>
										<li>Жиры - 43 г</li>
										<li>Углеводы - 130г</li>
									</ul>									
								</div>
							</div>

							<div class="cuisine__item-img-cont">

								<div class="cuisine__item-img-block">
									<img src="http://www.crossfood.od.ua/wp-content/uploads/2017/03/custom.jpg" alt="Меню" />
								</div>
								<div class="cuisine__item-price-block">
									<span data-cuisine-qount="3" class="cuisine__item-price-text disable">400 грн</span>
									<span data-cuisine-qount="5" class="cuisine__item-price-text">450 грн</span>
								</div>
								
							</div>

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

<!-- 	<section class="our-video">
		<div class="wrapper">
			
		</div>
	</section>


	<section id="discount" class="discount">
		<div class="wrapper">
			
		</div>
	</section> -->


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

	<section id="forms">

		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</section>

	<?php get_footer() ?>