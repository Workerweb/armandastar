@extends('pages.layouts.app-hero')


@section('title', 'Алия Токтасынова')

@section('content')

	<div class="fullpage-back-block">
		<div id="fullpage-back-block__overlay" class="fullpage-back-block__overlay"></div>
		<div id="fullpage-back-block__image" class="fullpage-back-block__image"></div>

		<video id="fullpage-back-block__video" class="fullpage-back-block__video" autoplay muted loop>
		  <source src="/webm/alyia/9_1_back.webm" type="webm">
		  <source src="/video/alyia/9_1_back.mp4" type="video/mp4">
		</video>
	</div>

	@include('pages.layouts.components.move-top')
	@include('pages.layouts.components.move-down' , ['center'=>'-center'])
	@include('pages.layouts.components.move-down')


	<div id="fullpage-demo">

		<div class="section" >
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_05/hero_05_05.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
		                ['title'=>'Алия Токтасынова',
		                'text'=>'мастер спорта по қыз қуу из <span>Павлодара</span>',
		                'image'=>'/img/hero_05/hero_05_01.jpg',
		                'customClass'=>'bold-title ',
		                'customClassMain'=>'aliyaAdaptive',
		                'animation'=>'fadeInLeftBig'
		                ])
		    @endcomponent		
		    
			

		</div>
		
		<div class="section">
			
			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_05/hero_05_04.jpg" controls muted data-autoplay>
				    <source src="/video/alyia/hero_9.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_05/hero_05_02.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					<span>
						Это моя родная земля и я на ней счастлива.
					</span>
				</p>

				<p class="fullpage-main-block__text">Мой папа служил в Белоруссии, поэтому я там родилась. Но всю жизнь я прожила в Казахстане.</p>
				<p class="fullpage-main-block__text">Мне было три года, когда моей первой лошадью стала собака породы дог. Она была очень высокой. И когда я на ней каталась, я могла рулить ее ушами. В детстве я не могла пройти мимо прокатных лошадей, будь то цирк или зона отдыха. Везде, где видела их, обязательно просилась покататься.</p>

			</div>

		</div>		


		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_05/hero_05_03.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">Родители привели в конную школу в 11 лет. Мой самый первый, самый главный и самый важный тренер в жизни научила меня всему.</p>
				<p class="fullpage-main-block__text">
					<span>
						Это было воплощением огромной мечты - быть рядом с лошадьми.
					</span>
				</p>
			</div>


		</div>
		
		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/alyia/video_9_1_s.mp4" data-webm="/webm/alyia/9_1_back.webm">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">Сейчас қыз қуу – не соревновательный вид спорта, его показывают только при открытии и закрытии скакового сезона, и где-то на больших скачках ради зрелищности. Я думаю, что это произошло из-за высокой травмоопасности. Однако показывать қыз қуу надо, это наши традиции. Родители сильно переживают за меня во время выступлений. Даже пытались отговорить заниматься конным спортом. Но если я начала, меня уже не остановить. Я у меня было много травм, но они видели с детства, что я не могу без них лошадей. И я благодарна им за то, что поддержали меня.</p>
			</div>


		</div>
		
		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_05/hero_05_05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">У меня переменчивый характер, как у дикой лошади. Если чуть не удержал где-то, то умчусь восвояси, но все же стараюсь контролировать себя. Лошадь тебя чувствует, поэтому если ты ее боишься, то она будет играть с тобой, чтобы ты еще сильнее ее боялся. Надо быть одновременно строгим, сильным, но ласковым и добрым. Надо знать эту грань. Избалованная лошадь – это неуправляемая лошадь, а это 600 кг веса, которые нелегко остановить.</p>
			</div>


		</div>
		
		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/alyia/video_9_2_s.mp4" data-webm="/webm/alyia/9_2_back.webm">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">Вы в глаза посмотрите, да там целый мир можно увидеть. Они не просто животные. Их даже обидно животными называть. Это друзья человека.</p>
				<p class="fullpage-main-block__text">Если мне плохо, иду за помощью к лошадям. Протянешь ей ладошку, она тебя бархатным носиком, пощекочет, погладит или понюхает. Успокаиваешься. Конечно, все проблемы не решены. Тут уже второй этап – найти в себе силы, чтобы их преодолеть. Если у меня какая-то проблема, я ее решу. Любую проблему в жизни.</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_05/hero_05_04.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">Иногда хотелось бросить спорт. На один год «уходила» в легкую атлетику. Но судьба делает так, что я возвращаюсь к лошадям. Даже сейчас я уже не в конном спорте, но в университете выбрала специальность «продуктивное коневодство». Хочу, чтобы у меня была своя ферма с лошадьми. Я точно знаю, что там будет много детей, которые с искренним желанием будут приходить и кататься на этих лошадях.</p>
				<p class="fullpage-main-block__text">
					<span>
						Быть в одиночестве не всегда плохо, нужно уметь вовремя отречься от окружающих и послушать свои мысли.
					</span>
				</p>
			</div>


		</div>	



		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_05/hero_05_06.jpg">

				<div class="fullpage-main-block__overlay"></div>


				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">


					Смысл жизни - это быть счастливым, как ты относишься к жизни, также она будет относиться к тебе
				</p>

				<p class="fullpage-main-block__quote-name">(c) Алия Токтасынова</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>			
				
			</div>

			@include('pages.layouts.partials.fullpage-footer')


		</div>


	</div>
		

@endsection