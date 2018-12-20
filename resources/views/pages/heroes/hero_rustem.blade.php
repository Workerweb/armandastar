@extends('pages.layouts.app-hero')


@section('title', 'Рустем Сундетов')

@section('content')

	<div class="fullpage-back-block">
		<div id="fullpage-back-block__overlay" class="fullpage-back-block__overlay"></div>
		<div id="fullpage-back-block__image" class="fullpage-back-block__image"></div>

		<video id="fullpage-back-block__video" class="fullpage-back-block__video" autoplay muted loop>
		  <source src="/webm/9_1_back.webm" type="webm">
		  <source src="/video/rustem/9_1_back.mp4" type="video/mp4">
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
		                ['title'=>'Рустем Сундетов',
		                'text'=>'производитель 3D-принтеров из <span>Алматы</span>',
		                'image'=>'/img/hero_06/hero_06_01.jpg',
		                'customClass'=>'bold-title ',
		                'customClassMain'=>'rustemAdaptive',
		                'animation'=>'fadeInLeftBig'
		                ])
		    @endcomponent		
		</div>

		<div class="section">
			
			<div class="fullpage-video-block indicator"  data-back-type='block' >
				<div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

				<video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_06/hero_06_05.jpg" controls autoplay muted loop>
				    <source src="/video/rustem/rustem_0.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_06/hero_06_02.jpg">
				<div class="fullpage-main-block__overlay">
				</div>
				<p class="fullpage-main-block__text">
					<span>
						У меня была амбициозная цель – построить гигантскую модель Airbus.
					</span>
				</p>

				<p class="fullpage-main-block__text">
					Я пять лет учился в Санкт-Петербургском государственном университете, специальность – прикладная математика и информатика. Несколько лет работал в сфере телекоммуникаций. Сейчас преподаю компьютерную графику в МУИТе.
				</p>

				<p class="fullpage-main-block__text">
					Какое-то время я сильно увлекался авиамоделированием. Огромные детали модели вырезал при помощи ЧПУ-станков. Знакомые, узнав об увлечении, посоветовали использовать 3D-принтер. Тогда я думал, что это как-то связано с 3D-кино.
				</p>

				<p class="fullpage-main-block__text">
					В 2014 году я выиграл грант от министерства образования по разработке и производству 3D-принтеров. Государство довольно хорошо поддерживает бизнес, стартапы, существует много каналов, где можно получить финансирование. Они не только выделяют деньги, но и помогают с документацией, приглашают на научные выставки и т.д.
				</p>
				<p class="fullpage-main-block__text last">
					Мы используем всемирно известную модель Prusa i3, которая находится в открытых источниках, и дорабатываем ее под свои нужды. Обидно, когда говорят, что мы просто копируем всё у китайцев. Даже просто скопировать технологии требуется много времени, ресурсов и знаний.
				</p>

			</div>

		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/rustem/rustem_1.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Я пошел преподавать в университет, чтобы найти единомышленников среди научной среды. Тех, кто смог бы мне помочь в развитии сферы 3D-принтеров. Мои студенты стали мне хорошими коллегами, а университет предоставил лабораторию для работы.
				</p>
				<p class="fullpage-main-block__text">
					В среднем, в месяц мы собираем 20 принтеров. Если бы была необходимость продавать большие объемы, то можно было бы собирать и больше.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_06/hero_06_04.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					<span>
						Моя цель – построить крупную компанию по производству 3D-принтеров и развить её до производства роботов.
					</span>
				</p>
				<p class="fullpage-main-block__text">
					Конечно, однажды хотелось бы вернуться к построению легкомоторных самолетов.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/rustem/rustem_2.mp4">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Основные клиенты – это учебные заведения. 3D-принтерами пользуются даже ювелиры и стоматологи для улучшения производственных процессов. Особенно в стоматологии. Человеческое тело не чувствительно к некоторым погрешностям, а 3D-принтер уже превышает точность, к которой чувствительно наше тело. Получается высококачественная и довольно дешевая продукция.
				</p>
			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_06/hero_06_06.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Есть клиники, которые применяют 3D-принтеры для тренировки на макетах перед операцией. Макет – копия человека, которого оперируют, тем самым уменьшая время операции и ускоряя восстанавливаемость организма.
				</p>
				<p class="fullpage-main-block__text">
					<span>
						Не могу сказать, что упорно трудиться – это правильно. Нужно трудиться, но на первых этапах. Позже надо развивать лень. Лень научит управлять людьми.
					</span>
				</p>

			</div>


		</div>

		<div class="section">
			
			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_06/hero_06_05.jpg">
				<div class="fullpage-main-block__overlay"></div>
				<p class="fullpage-main-block__text">
					Важно верить в свой проект, но при этом уметь снимать розовые очки. Инвесторы обычно очень быстро снимают розовые очки. Многие обижаются и уходят. Как только человек признает, он начинает двигаться опять наверх.
				</p>

				<p class="fullpage-main-block__text">
					В розовых очках не видно, что человек на самом деле падает.
				</p>
			</div>

		</div>


		<div class="section">

			<div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_06/hero_06_07.jpg">
				<div class="fullpage-main-block__overlay"></div>			

				<p class="fullpage-main-block__quote">
					<img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
					<img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

					Для меня патриотизм &mdash; это возможность быть полезным обществу.
				</p>	

				<p class="fullpage-main-block__quote-name">(c) Рустем Сундетов</p>	

				<a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>	
			</div>			

			@include('pages.layouts.partials.fullpage-footer')	
		</div>


		</div>

	</div>

@endsection