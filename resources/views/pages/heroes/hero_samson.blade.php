@extends('pages.layouts.app')


@section('title', 'Самсон Аракелян')

@section('content')



    @component('pages.layouts.blocks.hero-header',
              ['title'=>'Самсон Аракелян',
               'text'=>'Общественный деятель из <span>Актау</span>',
               'image'=>'/img/hero_samson/samson_1.jpg',
               'customClass'=>'right',
               'customClassMain'=>'samsonAdaptive'])
    @endcomponent

	@component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/X5_pSVKUOdI'])
        <p class="video-text__quote">Мы даже представить не могли, что однажды подобное может проходить у нас.</p>
        <p class="video-text__text">Я родился и вырос в Актау. Были моменты, когда жил в Ереване и в Алматы. Но чувствую, что все, что я хочу от жизни, могу реализовать в Актау.</p>    
        <p class="video-text__text">Нам было по 12-13 лет, когда мы начали следить за уличным баскетболом по телевизору – NBA и AND1. Потом выходили на площадку, пытались повторить что-то за игроками, быть похожими на Джордана. Мы играли на площадке со сломанным кольцом и асфальтом с бугорками, а в фильмах показывали яркие крутые тусовки на пляжах Лос-Анджелеса.</p>    
    @endcomponent	

	@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_samson/samson_3.jpg',
			  'customClassMain'=>'samson-poster',
			  ])

        @slot('left')
            <div class="poster-text__dialog" style="top:50%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">Я более 10 лет работал в нефтяной сфере вахтовым методом, что позволило мне параллельно заниматься музыкой и творчеством. Когда я достиг определенного карьерного роста, меня начали воспринимать не только как артиста или специалиста иностранной компании, а как менеджера, способного собрать вокруг себя единомышленников. И мне предложили открыть и возглавить Федерацию баскетбола Мангистауской области.</p>
                <p class="poster-text__text">Первое мероприятие, которое я организовал – это Школьная лига по баскетболу, где уже приняло участие около 6000 детей. Когда увидел, как у детей горят глаза, понял, что это — мое.</p>
            </div>  
        @endslot

    @endcomponent

    	@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_samson/samson_4.jpg',
			  'customClassMain'=>'samson-poster-1',
			  ])

        @slot('right')
            <div class="poster-text__dialog" style="top:10%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">К 40 годам я понял, что через 10 лет наступит возраст, когда не начинают, а уже доводят свое дело до логического конца. Я оставил свою работу в пользу развития профессионального спорта. И уже 2 года создаю движение, которое нравится не только мне. Моя цель – выйти на мировой уровень. </p>
            </div>  
        @endslot

    @endcomponent    


	@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_samson/samson_5.jpg',
			  'customClassMain'=>'samson-poster-2',
			  ])

        @slot('left')
            <div class="poster-text__dialog" style="top:15%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">Площадка – это место вызова. Чтобы попасть сюда в прайм-тайм, ты должен быть очень хорош. Ребята «пашут». В итоге они вызывают восторг, аплодисменты, их знают по именам. Полные трибуны дают им мотивацию двигаться дальше. Для этого и нужны такие ивенты.</p>
                <p class="poster-text__text">Основной упор при работе с молодежью нужно делать на личность. Дать возможность молодому человеку стать героем здесь и сейчас, показать его путь развития. У спортсмена есть возможность стать супергероем, не подражать, а именно стать.</p>
            </div>  
        @endslot

    @endcomponent	


    	@component('pages.layouts.blocks.poster-text',
                ['image'=>'/img/hero_samson/samson_6.jpg',
                'customClassMain'=>'samson-poster-3'
                ])

        @slot('left')
            <div class="poster-text__fill" style="top:15%">
                <p class="poster-text__text-extrabold">У меня так много планов, что единственное чего я боюсь – это собственной смерти. Мне кажется, я успел выполнить только 5-10% своего плана.</p>

            </div>  
        @endslot

    @endcomponent 

	@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_samson/samson_7.jpg',
			  'customClassMain'=>'samson-poster-4',
			  ])

        @slot('left')
            <div class="poster-text__dialog" style="top:55%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">Я до сих пор помню момент, когда почувствовал, что я – патриот. Казахстан впервые выступал на Чемпионате мира U19 в Новой Зеландии. Я захожу в переполненный зал, мы играем с домашней командой. И вот матч заканчивается, мы выигрываем, и стоит гробовая тишина. Сердце бешено стучит, прыгаешь от радости. В этот момент я понял для себя, что такое Казахстан, наш флаг, наша сборная.</p>
            </div>  
        @endslot

    @endcomponent    



    @component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Я счастлив, потому что у меня есть возможность мечтать и воплощать мечты 12-летнего пацана. Я благодарен этой стране за это. Думаю, только в Казахстане есть возможность не этническим казахам добиваться такого успеха, только у нас такая терпимость к другим национальностям.</p> 
    @endcomponent


@endsection