@extends('pages.layouts.app-hero')


@section('title', 'Людмила Куфонина')

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
	                ['title'=>'Людмила Куфонина',
	                'text'=>'Болельщица из <span>Астаны</span>',
	                'image'=>'/img/hero_08/hero_08_01.jpg',
	                'customClass'=>'bold-title',
	                'customClassMain'=>'lyudmilaAdaptive',
	                'animation'=>'fadeInLeftBig'
	                ])
		    @endcomponent		
		</div>

		<div class="section">
			
			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_08/hero_08_02.jpg" controls autoplay muted loop>
				    <source src="/video/liydmila/liydmila_0.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/liydmila/liydmila_2.mp4">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Когда я на стадионе – мне больше ничего не нужно. Это определенное состояние души, праздник, радость. Я этим живу.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Я родилась в марте 1941 года в Омске перед самой войной. Папу забрали на фронт, в семье нас осталось трое: мама, старший брат и я. Нам нечего было есть. От голода я до 5 лет не ходила. Потом папа вернулся и привез свой паёк, который меня поднял на ноги. Хоть я и начала ходить, мне не разрешали спортом заниматься.
				</p>

				<p class="fullpage-main-block__text">
					Чуть ноги окрепли, я начала танцевать и петь. Мы с ребятами устраивали дворовые концерты для соседей. Сейчас петь уже не могу, сорвала голос на матчах, но об этом не жалею. Нужно уметь чем-то жертвовать, чтобы заниматься тем, чего хочет сердце.
				</p>

				<p class="fullpage-main-block__text last">
					Первый билет на хоккейный матч мне подарил старший брат подруги. Он занимался хоккеем и предложил нам прийти. В тот же день я поняла, что буду ходить на все игры. Потом на матчи ходила одна и сидела вместе с пацанами. Некоторые болельщики возмущались: «Да что вы эту девчонку слушаете, что бы она могла там еще понимать?!». Но рядом сидящие мужчины им ответили «Эта девчонка в несколько раз лучше тебя понимает». Я как-то сразу вникла во все правила и рьяно болела за команду.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_08/hero_08_03.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						ФК «Астана» – это команда, которой можно гордиться сейчас. Если я раньше просто любила и хотела, чтобы они были лучшими, то сейчас я горжусь ими.
					</span>
				</p>
				<p class="fullpage-main-block__text">
					Я болею за клуб с самого его основания. Могу сказать, кто играет хорошо, кто хуже. Но я их всех люблю. Они мне все как дети. Я пишу им стихи, поздравляя с днем рождения, памятными датами в команде или победами. Говорят, что ждут моих стихов и всегда рады меня видеть. Знали бы они, как я рада их видеть.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_08/hero_08_04.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					Я немного психолог. Помню, однажды Джорже Деспотович перестал забивать, и я сразу поняла, что ему надо снова поверить в себя. Я подошла к нему и начала подбадривать: «Ты забивал, значит, – ты можешь играть. У тебя получится, вот увидишь. Только будь спокоен и поверь в себя». И вот он забил, выходит такой сияющий, подходит и благодарит меня. Когда наши выигрывают, меня переполняет радость. Кажется, будто все вокруг радуются. Выиграли же, не должно быть скучных и злых лиц. Но если проигрывают, я дня три ни с кем не хочу разговаривать, настолько расстраиваюсь.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/liydmila/liydmila_1.mp4">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Мне не нравится ненависть у болельщиков. Не болей за нашу команду, болей за свою. Зачем устраивать побоища, ругаться? Я считаю, это не приемлемо.
					</span>
				</p>
	            <p class="fullpage-main-block__text">
	            	Я умею радоваться даже любой крошке. Нас так учили. Тяжелая жизнь была. Я не радуюсь деньгам, у меня нет лишних, только пенсия. И я считаю, что они вообще никогда не сделают тебя счастливым. А большие деньги и вовсе могут погубить человека. Для меня доброта — самое главное качество.
	            </p>
				

			</div>

		</div>



		<div class="section">

			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_08/hero_08_05.jpg">
				<div class="fullpage-main-block__overlay"></div>			

				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">


					Золотая мечта – это победа ФК «Астана» в Лиге Чемпионов УЕФА.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Людмила Куфонина</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>	
			</div>			

			@include('pages.layouts.partials.fullpage-footer')	
		</div>		




	</div>	

@endsection