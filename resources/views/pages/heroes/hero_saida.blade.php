@extends('pages.layouts.app-hero')


@section('title', 'Саида и Дина Ыбышевы')

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
			<div class="indicator"   data-back-type='image'  data-image="" ></div>
			@include('pages.layouts.partials.header')
			@component('pages.layouts.blocks.hero-header',
		                ['title'=>'Саида и Дина Ыбышевы',
		                'text'=>'Эко-предприниматели из <span>Алматы</span>',
		                'image'=>'/img/hero_saida/01.jpg',
		                'customClass'=>'bold-title ',
		                'customClassMain'=>'saidaAdaptive',
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
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_saida/02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Это самый безопасный способ утилизации бытовых отходов.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Все началось с того, что я посмотрела видео на Facebook о ките, в желудке которого обнаружили 30 пластиковых пакетов. Кит нес собой послание, что наша природа в опасности. Я начала изучать проблему загрязнения.
				</p>

				<p class="fullpage-main-block__text">
					Мы с сестренкой подумали, что делать что-то красивое из мусора – это интересно. Обучились навыкам по видео зарубежных блогеров в Youtube. Всё просто: выбираем дизайн, прессуем 20 пластиковых пакетов утюгом и получается полотно, а уже из него – до 5 пар украшений. На изготовление одного комплекта уходит до 3 часов работы.
				</p>

				<p class="fullpage-main-block__text">
					<span>
						Проблема существует, мы не можем закрыть глаза на нее. И в наших силах рассказать об этом как можно большему числу людей.
					</span>
				</p>
				<p class="fullpage-main-block__text last">
					Этим мы занимаемся в проекте «Жасыл жүрек». Наши покупатели - это люди, поддерживающие эко-движение, или просто заинтересованные в необычных украшениях. Благодаря проекту мы стали частью алматинской эко-команды.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/saida/saida_3.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Мы можем проходить по улице, заметить пакет, взять его домой, отмыть и использовать по назначению. В основном пластик «подсовывают» в супермаркетах. Мы пытаемся урезать его присутствие дома и объясняем родным, в чем его вред. Говорят, что пластик гниет до 500 лет, но точно этого никто сказать не может, так как пластик всего существует сто лет.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/saida/saida_1.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Сейчас переработка пластика для нас хобби: у меня есть основная работа, у сестренки – учеба в университете. Но в будущем мы бы хотели открыть своё пространство, в котором люди смогут сами перерабатывать пластик. В основном, переработка происходит за стенами гигантских заводов и люди не видят всего процесса. Возможно, поэтому не проникаются проблемой.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_saida/03.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						Переработанный пластик, конечно, никуда не исчезает, но, как минимум, он не оказывается на свалках и не загрязняет нашу землю.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Пластик можно заменить альтернативой. Вместо пакетов брать трепочные сумки, вместо бутылок – жестяные стаканы. Помните, бутылка, использованная здесь в Казахстане, может оказаться в океане. Там она превратится в мелкие частицы и может убить живые организмы фауны, как это случилось с китом.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_saida/05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

					В Алматы много хороших мест, но самое любимое – мой дом.
				</p>

				<p class="fullpage-main-block__quote-name">(c) Саида и Дина Ыбышевы</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>
			</div>

			@include('pages.layouts.partials.fullpage-footer')
		</div>

	</div>

@endsection