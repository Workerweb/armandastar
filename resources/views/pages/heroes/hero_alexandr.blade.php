@extends('pages.layouts.app-hero')


@section('title', 'Александр Пупенко')

@section('content')

	<div class="fullpage-back-block">
		<div id="fullpage-back-block__overlay" class="fullpage-back-block__overlay"></div>
		<div id="fullpage-back-block__image" class="fullpage-back-block__image"></div>

		<video id="fullpage-back-block__video" class="fullpage-back-block__video" autoplay muted loop>
		  <source src="/video/rustem/rustem_0.mp4" type="video/mp4">
		</video>
	</div>

	@include('pages.layouts.components.move-top')
	@include('pages.layouts.components.move-down' , ['center'=>'-center'])
	@include('pages.layouts.components.move-down')

	<div id="fullpage-demo">
		
		<div class="section" >
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_alexandr/01.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
		                ['title'=>'Александр Пупенко',
		                'text'=>'кокпарист из <span>Астаны</span>',
		                'image'=>'/img/hero_alexandr/01.jpg',
		                'customClass'=>'bold-title ',
		                'customClassMain'=>'alexandrAdaptive',
		                'animation'=>'fadeInLeftBig'
		                ])
		    @endcomponent		
		</div>

		<!-------------------------------------------HERO SECTION------------------------------------------------>
		    <div class="section">
		      
		      <div class="fullpage-main-block indicator"   data-back-type='block_second_type'  data-video="/video/rustem/rustem_0.mp4">
		      </div>
		      
		    </div>    
		<!-------------------------------------------HERO SECTION------------------------------------------------>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_alexandr/02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Видеть, как дети играют, какой показывают результат. Гордишься, что ты этому помог.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Я с 8 лет готовил жеребят к скачкам для празднования Наурыза. Потом набрал вес и перешел из скачек в кокпар. Начинал с выступлений за юношескую сборную Астаны на первом чемпионате Казахстана. Тогда мы стали бронзовыми призерами.
				</p>

				<p class="fullpage-main-block__text">
					Сейчас я играю за взрослую сборную Актау и тренирую юношескую сборную. Мне нравится тренировать. В меня вносили вклад, и я должен это другим передать, добавив что-то от себя.
				</p>

				<p class="fullpage-main-block__text">
					Я играю на позиции нападающего. Моя задача – поднимать козла и забивать голы, так же, как и в футболе делают Месси и Роналдо. Самое главное в команде – взаимопонимание.
				</p>
				<p class="fullpage-main-block__text last">
					Мы играем с мая по октябрь, в остальное время лошади отдыхают. А мы продолжаем тренироваться в спортзале, чтобы не набрать лишний вес, готовим молодых лошадей. На обучение одной лошади уходит до двух лет. У каждой свой неповторимый характер. Если находишься с ней каждый день, то она начинает тебя понимать.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/alexandr/alexandr_1.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Когда сезон начинается, дома практически не бываешь – на сборах, на играх. Хочется побольше быть дома и быть со своей семьей.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Дети еще маленькие, но я уже вижу их любовь к лошадям. Хотел бы, чтобы они тоже занимались спортом с малых лет.
					</span>
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_alexandr/04.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Семья иногда говорит: «Да хватит играть! Завязывай со спортом». У меня травмированы ноги, и зимой это особенно чувствуется. Думаешь, что карьера закончена. Проходит месяц-два, и снова тянет к лошадям.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Когда объявляют мою фамилию во время приветствия, болельщики поддерживают меня. Мне говорят, что не каждый казах может играть, как я. Но я думаю, что достаточно иметь силу воли.
					</span>
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_alexandr/05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Я понимаю все, что говорят на казахском языке, но сам разговаривать стесняюсь. Однако если ты живешь в Казахстане – должен знать казахский язык, я так думаю.
				</p>
				<p class="fullpage-main-block__text">
					Я бы хотел, чтобы в Астане построили крытую арену для кокпара. Кокпар – сезонный спорт, не каждый выйдет тренироваться на морозах. Можно было бы чаще проводить турниры, так бы и развивался спорт.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/alexandr/alexandr_2.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Когда играет гимн Казахстана, то сердце бьется сильнее. Народ кричит: «Алға, Казахстан!», в груди стучит адреналин, хочется себя показать и хорошо выступить.
				</p>
				<p class="fullpage-main-block__text">
					Я занимаюсь кокпаром 16 лет, достиг многого благодаря лошадям: стал мастером спорта Республики Казахстан, получил международное звание. Был несколько раз назван лучшим игроком Казахстана, стал лучшим игроком на чемпионатах Казахстана и мира.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_alexandr/06.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

					Хотелось бы, чтобы кокпар стал мировым видом спорта.  Мне кажется, чем больше проводить международных соревнований, тем больше стран захотят принять участие. Ради этого сейчас даже облегчили правила: вместо казана начертили круг.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Александр Пупенко</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>
			</div>

			@include('pages.layouts.partials.fullpage-footer')
		</div>

	</div>

@endsection	