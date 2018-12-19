@extends('pages.layouts.app-hero')


@section('title', 'Генадий Мороз')

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
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_06/hero_06_01.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
	                ['title'=>'Генадий Мороз',
	                'text'=>'Восточно-Казахстанская область, <br>Бескарагайский район, пос. Старая Крепость <br>Земледелец',
	                'image'=>'/img/hero_07/hero_07_01.jpg',
	                'customClass'=>'bold-title',
	                'customClassMain'=>'genaAdaptive',
	                'animation'=>'fadeInLeftBig'
	                ])
		    @endcomponent		
		</div>

		<div class="section">

			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_07/hero_07_05.jpg" controls autoplay muted loop>
				    <source src="/video/hero_9.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_07/hero_07_02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Когда в стране началось массовое озеленение, стало понятно, что это будет востребовано.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Я родился в Алматы. В 1976 году переехал в Семей и до сих пор здесь живу. У меня есть дочь. Она с мужем занимается овощеводством. Мы с женой после распада Советского союза сначала занялись выращиванием овощей, потом – цветов.
				</p>

				<p class="fullpage-main-block__text">
					Не смогли заниматься этим круглогодично, перепрофилировались на выращивание декоративных, лиственных и хвойных деревьев. Самое сложное было убедить семью создавать этот питомник, что это хорошее прибыльное дело. Ведь однажды у меня уже не получилось.
				</p>

				<p class="fullpage-main-block__text">
					Мы выращиваем декоративные деревья, которые подходят местному климату. Это пихта, лиственница, голубая ель, ель канадская сизая, туя западная и многое другое. Также у нас есть порядка 20 сортов яблони.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Одни пилят лес, а я выращиваю. Это благородное дело!
					</span>
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_07/hero_07_03.jpg">
				<div class="fullpage-main-block__overlay">
				</div>

				<p class="fullpage-main-block__text">
					У меня работает от 10 до 15 человек. Каждое утро я везу их в питомник, даю задачи на день, вечером проверяю сделанное и отвожу их обратно в город. Так как рабочие не имеют сельскохозяйственного образования, я все контролирую сам.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_07/hero_07_04.jpg">
				<div class="fullpage-main-block__overlay">
				</div>

				<p class="fullpage-main-block__text">
					Питомник был заброшенным объектом, который стоял в центре поселка. Управление коммунальной собственности передало его мне в 2000 году. Чтобы его «поднять», требуется от трех до пяти лет. Нужны финансовые средства для приобретения участка, ограды, ухода за почвой, посадочного материала, насосной скважины, полива и так далее. Это очень трудоемкий процесс, «длинные деньги». Допустим, от карагача можно получить результат уже через год, от яблони через два-три года, от ели только через десять лет.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_07/hero_07_05.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Любое дело подразумевает много заботы и внимания, с питомником я справляюсь. Могу и отдохнуть, и поболеть. В моём деле не нужно тратить много нервов. Здесь всё проще и спокойнее.
					</span>
				</p>
				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">


					Больше всего в людях я ценю трудолюбие, преданность и честность, потому что от лжи рушится всё вокруг.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Генадий Мороз</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>	

			</div>

			@include('pages.layouts.partials.fullpage-footer')

		</div>
	</div>

@endsection