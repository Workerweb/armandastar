@extends('pages.layouts.app-hero')


@section('title', 'Нұрлан Қалтаев')

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
		<div class="section">
			<div class="indicator"   data-back-type='image'  data-image="/img/hero_06/hero_06_01.jpg" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
	                ['title'=>'Нұрлан Қалтаев',
	                'text'=>'<span>Қарағанды облысы Қоянды ауылынан</span>  жеке кәсіпкер',
	                'image'=>'/img/hero_nurlan/hero_09_01.jpg',
	                'customClass'=>'bold-title',
	                'customClassMain'=>'nurlanAdaptive',
	                'animation'=>'fadeInLeftBig'
	                ])
		    @endcomponent	
		</div>

		<div class="section">
			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_nurlan/hero_09_02.jpg" controls autoplay muted loop>
				    <source src="/video/nurlan/nurlan_0.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>
		</div>

		<div class="section">
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_nurlan/hero_09_02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Басты мақсатымыз – спортшыларға әуесқой спорттан соң мансаптарын кәсіби спортта жалғастыруға мүмкіндік беру.
					</span>
				</p>
				<p class="fullpage-main-block__text">
					Мен Ұлы Жібек Жолы өткен Қоянды жәрмеңкесі деп тарихқа жазылған атақты Қоянды ауылында дүниеге келдім. Мектеп қабырғасында қазақша күреспен айналыстым. Кейін әкем боксқа баулыды. Уақыт өте келе балаларды жаттықтырумен шұғылдана бастадым.
				</p>
				<p class="fullpage-main-block__text">
					Ал осыдан екі жыл бұрын кәсіби клуб ашып, бүгінгі күнге дейін 20 шақты спорт шеберлерін тәрбиелеп шығардым. Олардың қатарында Азия чемпиондары да, Әлем чемпиондары да бар. Сонымен қатар өткен жылдың аяғында Орталық Қазақстанда бірінші болып ABADAN FIGHTING CHAMPIONSHIP деген промоушен аштық. Жерлестеріміз өз шеберліктерін, өз тәжірибелерін әлемдік додаларда көрсетсе екен дейміз.
				</p>

				<p class="fullpage-main-block__text">
					Мен өзімді бақыттымын деп есептеймін. Себебі менің әке-шешем сондай тәрбие берген. Біздің үлкен үйде 24 сағат есік ашық, 24 сағат дастархан жиналмайтын. Ауылға келген адамдардың барлығы біздің үйге соқпай кетпейтін. Әкем сондай ашық адам. Аузын ашса, жүрегі көрініп тұрады. Анам үнемі өзгерелердің амандығын тілеп, дұға етіп отырады. Сондықтан, сондай кісілердің ұрпағы болғаннан кейін, маған бақытсыз болу мүмкін емес. Адам егер өзі талпынып, үйде жатпай, ақырын ғана өз ісін домалата берсе, Қазақстанда бүкіл мүмкіншілік бар.
				</p>

				<p class="fullpage-main-block__text last">
					<span>
						Мемлекет бізге не береді деп емес, біз мемлекетке не бере аламыз деп ойлауымыз керек. Сонда біз дамимыз.
					</span>
				</p>

			</div>
		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_nurlan/hero_09_03.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Қолға алмаған кәсібім жоқ. Қой да бақтым, тракторда да жұмыс істедім. Ауылды сақтап қалайық деген уақытта 6 жыл егін салдым. Демалыс күндері ауылға барып, комбайнның моторын жинаймын. Тракторге отырып, шөп шабамын, егін саламын.
				</p>
				<p class="fullpage-main-block__text">
					Адамды оның жасаған салиқалы істеріне қарап қай жерден екенін түсініп, мына кісі мынадай ауылдікі немесе мынадай қаланікі, мынадай елдікі деп танып жатса, міне, сол патриотизм деп ойлаймын.
				</p>
			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='video'  data-video="/video/nurlan/nurlan_1.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Ауылға көмегімді, ең бірінші, мешіттен бастадым. Кейін ауыл балаларына арнап спорт алаңын жасадым. Ал ауылда қалай? Үлкеннің жанында кішісі жүреді емес пе?! Содан кішілеріне балалар ойын алаңын салып бердім. Бұл бір жылда қолға алынған шаруа. Келер жылы достарыммен ақылдасып омыраудағы балалары бар аналарға арнап демалатын алма бағын жасауды ұйғардым. Бүкіл ауыл болып, 130 түп алма ағашын отырғыздық. «Жұмыла көтерген, жүк жеңіл» дейді ғой. Жалпы, бұл шаруалардың барлығын өзіміздің күшімізбен ауыл болып атқардық.
				</p>
			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_nurlan/hero_09_05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Ауыл адамдары топ-топ болып көше бастағандықтан, мектебіміз жабылудың сәл-ақ алдында тұрды. Содан мектепті сақтап қалу үшін бала санын арттыру қажет болды.  Осылайша, өте жақсы отбасын тауып, үй салып бердім. Балалар үйінен бірінші төрт баланы алып, сол кісілердің тәрбиесіне бердім. Жақында достарым арқылы Оңтүстік Қазақстан облысынан тағы екі жанұя таптым. Ендігі жылы дәл осындай екі балалар үйін салуды жоспарлап отырмын.
				</p>
			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_nurlan/hero_09_06.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">Арман деген ол өте үлкен зат. Қазіргі уақытта мен өз-өзімді тапқан азаматпын деп есептеймін. Ендігі арманым балаларым өздерін, өмірдегі өз жолдарын тапса деймін. Қатты ойланытыным да балаларым мен ауылым.</p>
				<p class="fullpage-main-block__text">
					<span>
						Меніңше, әр адам күші келетін іске өзі үлесін қосуы тиіс. Менің деңгейім қазір ауылға жетіп тұр деп ойлаймын. Толық қамтымасам да, 20%-ына көмектессем, жақсы болар еді.
					</span>
				</p>
			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_nurlan/hero_09_07.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Балаларды жаттықтырып, тәрбиелеп келе жатқаныма 10 жылдан асты. Қазіргі уақытта қарасам, әр салада бір-бір дұрыс тәрбиеленген, тұлға болып қалыптасып, азамат болып отырған шәкірттерім бар. Соларға қарап, істеп отырған ісімнің босқа кетіп жатпағанын түсінемін.Елімді, жерімді ешқашан ауыстырмаймын. Қазақстанға жететін жер жоқ. Жұмысымыз бар. Басшымыз жақсы. Жеріміз кең-байтақ.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Әрбіреуіміз күш салсақ, ерінбей еңбек етсек, болашағымыз бүгіннен де жарқын болады. Оған кәміл сенемін.
					</span>
				</p>
							
				
			</div>

		</div>

		<div class="section">

			<div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/nurlan/nurlan_2.mp4">
				<div class="fullpage-main-block__overlay"></div>			

				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">


					Туған жерді сүймеу мүмкін емес. Әр адам өз туып-өскен жеріне көмектесіп, қолғабыс етуі керек. Міндетті түрде қаражатпен емес, қолынан келгенше жәрдемдесіп, қолдау көрсетуге тиіс деп ойлаймын. Меніңше, сонда ғана ауылдарымыз көркейіп, Қазақстанымыз гүлдене түседі.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Нұрлан Қалтаев</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>
			</div>			

			@include('pages.layouts.partials.fullpage-footer')	
		</div>		



		</div>

	</div>

@endsection