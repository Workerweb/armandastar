@extends('pages.layouts.app-hero')


@section('title', 'Шах-Мурат Ордабаев')

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
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_shahmurat/01.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
		                ['title'=>'Шах-Мурат Ордабаев',
		                'text'=>'<span>Астана қаласынан</span> дубляж режиссері',
		                'image'=>'/img/hero_shahmurat/01.jpg',
		                'customClass'=>'bold-title ',
		                'customClassMain'=>'muratAdaptive',
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
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_shahmurat/02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Жалпы сахнаның өзі мені баурады. Мен оған көндім, сендім. Арманым деп шештім. 
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Менің бала кезден көргенім – өнер. Кішкентай кезімнен сахнаның шымылдығына айналып өстім. Бара-бара осы сахнаның ерекшелігі шығар, ән айта бастадым. 
				</p>

				<p class="fullpage-main-block__text">
					Театр, кино, режиссура, әртіс болу. Кейін Астанада жаңа Өнер университетіне актерлік мамандықты таңдап, өте жақсы жоғары деңгейдегі ұстаздан дәріс алдым.
				</p>

				<p class="fullpage-main-block__text">
					Оқуымды бітіре салысымен академияға актер болып кірдім, бірақ бір ғана жолмен тоқтауға болмайды. Бала кезімнен дубляжға қатты қызығатынмын. Әсіресе сапалы дубляжға. 2015 жылы Астана қаласында жаңадан Aray Media Group студиясы ашылды. Осы студияда ең бір таң қалдырғаны, Disney-дің құқығы бар болатын. Мен оған бағымды сынап көрдім. Джордж Лукастың «Жұлдызды соғыстар. Күштің оянуы» фильміндегі басты кейіпкер Фин деген жауынгердің кастингісінен өттім. Соны дыбыстайтын болдым. Бұл менің ең алғашқы үлкен кәсіби дубляждағы қадамым. 
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/murat/murat_1.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Бұдан бастап сол студияның айналасында жүріп, кастингпен айналыстым, дыбыс режиссерларына барынша көмектестім. Арнайы Disney-дің аттестациясын өткеннен кейін маған режиссер ретінде фильмдерді сеніп тапсыратын болды және алғашқы жобам «Галактика сақшылары 2» болатын.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_shahmurat/04.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Мен режиссермын деп студияның бер жағында отырып, әртістерге дауыс көтеріп, бағыт беріп отыру деген ол ескірген мектеп. Олардың жүрегіне жол табу үшін өз жүрегіңді ашу керексің. Ол өте маңызды. Мен осы уақытқа дейін дубляжда көп қызмет етпеген әртістермен жұмыс жасағанды жақсы көремін. Өйткені жаңадан келген әртіске дубляж сияқты жаңа әлемді ашу – ол үлкен рахат.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						 Егер біз үйренгісі келіп тұрған әртістерге үйрете білсек, ол біздің, жалпы дубляждың, тілдің жеңісі.
					</span>
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_shahmurat/05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Көп тілге Disney-дің туындылары дыбысталмайды. Оны дыбыстау оңай да емес.  Бұл үлкен ерлік. Дубляж – ол мәңгілік мұрағатта қалатын дүние. Жауапкершілігі мол. Осындай жауапкершілік бізге артылғандықтан, қандай да бір қателік жеткізу кешірімсіз. 
				</p>
				<p class="fullpage-main-block__text">
					Біздің басты мақсатымыз – көркем әдеби туындыны кез-келген қазақ көрермені, қай регионнан болмасын, қай диалекте сөйлемесін,  Ыбырай Алтынсарин, Мұхтар Әуезов, Ғабит Мүсіреповтың кітабын оқығандай түгелдей түсіну үшін қазақ тілінде жеткізу.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/murat/murat_2.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Біз үлкен суреткерлер мен қарапайым көреремендер ортасында тұрған көпірдейміз. Ал ол көпір адамның өз жүрегі мен өз түйсігінде тұрған тіл арқылы көрсетілетін болса, онда ол нұр үстіне нұр.
				</p>
				<p class="fullpage-main-block__text">
					Мен көркем фильмдерден гөрі, анимациялық фильмдерді дыбыстағанды жақсы көремін. Ол туындыларды көретін ересек адамдармен қатар, бүлдіршіндер. Қазіргі таңда кез-келген телефон, планшет арқылы ютубты аша қалып, қалағанын көре алады бала. Олардың зейінін ұстап тұрып, оларды қызықтыра біліп, кейіпкеріңді қызықты ғып жасау, әнді оларға ұнайтын ерекше бір мақанда орындау, міне нағыз сын деген осы.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_shahmurat/06.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Мен үшін бақыт деген алға қойған мақсатыңмен теңдес. Өйткені сен оған ұмтыласың, қызығасың, соған қол жеткізгің келеді. Бірақ егер осы болдым, толдым, бақыттымын десең, онда мүмкін сенің адасқаның шығар. 
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Қазіргі таңда басты армандарымның бірі өмірде, өнерде өзімнің кейіпкерімді табу. 
					</span>
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_shahmurat/07.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

					Қандай елге бармайын, елге оралғандағы сезімге еш нәрсе жетпейді. Мен жерімде, елімде өз-өзімді қорғанған адам сезінемін. Қазақстан - бұл менің отбасым. Ал отбасы бірін-бірі тастамайды.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Шах-Мурат Ордабаев</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>
			</div>

			@include('pages.layouts.partials.fullpage-footer')
		</div>

	</div>

@endsection