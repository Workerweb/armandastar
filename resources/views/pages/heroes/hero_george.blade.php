@extends('pages.layouts.app-hero')


@section('title', 'Георгий Патриашвили')

@section('content')

	<div class="fullpage-back-block">
		<div id="fullpage-back-block__overlay" class="fullpage-back-block__overlay"></div>
		<div id="fullpage-back-block__image" class="fullpage-back-block__image"></div>

		<video id="fullpage-back-block__video" class="fullpage-back-block__video" autoplay muted loop>
		  <source src="/webm/9_1_back.webm" type="webm">
		  <source src="/video/9_1_back.mp4" type="video/mp4">
		</video>
	</div>

	@include('pages.layouts.components.move-top')
	@include('pages.layouts.components.move-down' , ['center'=>'-center'])
	@include('pages.layouts.components.move-down')

	<div id="fullpage-demo">
		<div class="section" >
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_04/hero_04_01.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
	            ['title'=>'Георгий Патриашвили',
	            'text'=>'Предприниматель из <span>Алматы</span>',
	            'image'=>'/img/hero_04/hero_04_01.jpg',
	            'customClass'=>'bold-title',
	            'customClassMain'=>'georgeAdaptive',
	            'animation'=>'fadeInLeftBig'
	            ])
			@endcomponent
		</div>

		<div class="section">
			
			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_04/hero_04_02.jpg" controls autoplay muted loop>
				    <source src="/video/hero_9.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_04/hero_04_02.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					В детстве я мечтал стать партнером Зинедина Зидана по сборной Франции и по мадридскому Реалу. Хотел быть профессиональным футболистом. Но родители посчитали, что футбол – это довольно травматичный вид спорта, и отдали меня на волейбол. Я долго играл за алматинский клуб. Были победы и на чемпионате Казахстана, и на кубке Казахстана. Даже успел поиграть за юношескую сборную. Когда пришло время выбирать между профессиональным спортом и учебой, выбрал второе.
				</p>
				<p class="fullpage-main-block__text">
					Сейчас дети интересуются больше компьютерными играми, нежели традиционными видами спорта. Однако в киберспорте нет системности по подготовке игроков, оказанию агентских услуг и так далее. Так пришла идея о создании своей киберакадемии. А реализовалась она уже благодаря знаниям нюансов этой индустрии моего бизнес-партнера.
				</p>

			</div>

		</div>

		<div class="section">

			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_04/hero_04_03.jpg">
				<div class="fullpage-main-block__overlay"></div>

				<p class="fullpage-main-block__text">
					Мы проводим обучение по двум дисциплинам – Counter Strike и Dota. У нас около 60 игроков. Формируем команды, исходя из уровня игры учеников. Наши тренера – это бывшие профессиональные игроки, которые играли за сборную Казахстана, выигрывали локальные и международные турниры. Проблема заключается в том, что профессиональных игроков достаточно много, но не всегда хороший игрок – это хороший тренер. Поэтому мы стараемся вырастить своих тренеров.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='video'  data-video="/video/george_1.mp4">
				<div class="fullpage-main-block__overlay"></div>

				<p class="fullpage-main-block__text">
					У компании очень простая миссия – превратить киберспорт из увлечения в профессию. Мы ничего нового не придумываем, берем тактику традиционных видов спорта и переносим это  в киберспорт. Формируем команды, чтобы ребята участвовали в различных турнирах. К сожалению, в Казахстане не так много соревнований, которые проходили бы системно. Но тренд на развитие индустрии очевиден
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_04/hero_04_05.jpg">
				<div class="fullpage-main-block__overlay"></div>

				<p class="fullpage-main-block__text">
					Многие не верят в нас. «Зачем мне идти куда-то, платить за это деньги, если я могу заниматься дома самостоятельно?». Мы предоставляем условия ученикам, как профессиональным спортсменам – персональная работа с психологом, в спортзале и т.д. Киберспорт – это развитие логики, реакции, общего мышления, благодаря компьютерным играм можно выучить много терминов на иностранных языках. Если не сидеть за компьютером по 12 часов в день, то не будет портиться зрение и осанка. Не все родители это понимают, и мы пытаемся объяснить, что, когда есть качественный подход, это никогда не навредит ребенку.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='video'  data-video="/video/george_2.mp4">
				<div class="fullpage-main-block__overlay"></div>

				<p class="fullpage-main-block__text">
					К нам приходят ребята, которые хотят быть киберспортсменами, но ни тренера, ни менеджеры не видят в них таланта. В таком случае мы пытаемся находить им другие специализации. В киберспорте их достаточно много: комментаторы, SMM-менеджеры, менеджеры команд и т.д. В Казахстане в киберспорте заинтересованы около полумиллиона человек. Когда есть такая аудитория, появляются спонсоры. А когда появляются спонсоры и деньги, появляется влияние на всю индустрию в целом. В США количество спонсоров в киберспорте такое же, что и в хоккее и бейсболе – национальных видах спорта.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_04/hero_04_07.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Киберспорт может повлиять на имиджевую составляющую Казахстана. Если мы вырастим игрока, который завтра станет чемпионом мира – об этом узнает вся планета. Если казахстанский флаг будет поднят на чемпионате мира по Доте или Counter Strike, то это уже сложит определенное мнение о нашей стране. Мы хотим, чтобы киберспорт стал национальным видом спорта в Казахстане. Пеле говорил: «В мире знают три вещи: кока-кола, Иисус и Пеле». Я хочу, чтобы ProgressGaming стал четвертой. Это моя мечта.
				</p>
					

			</div>

		</div>

		<div class="section">

			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_04/hero_04_06.jpg">
				<div class="fullpage-main-block__overlay"></div>			

				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">


					Сейчас хочется жить так, чтобы следующее поколение получало только положительные эмоции. Оставить какой-то след после себя.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Георгий Патриашвили</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>	
			</div>			

			@include('pages.layouts.partials.fullpage-footer')	
		</div>	


	</div>

@endsection