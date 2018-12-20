@extends('pages.layouts.app-hero')


@section('title', 'Самсон Аракелян')

@section('content')

    <div class="fullpage-back-block">
        <div id="fullpage-back-block__overlay" class="fullpage-back-block__overlay"></div>
        <div id="fullpage-back-block__image" class="fullpage-back-block__image"></div>

        <video id="fullpage-back-block__video" class="fullpage-back-block__video" autoplay muted loop>
          <source src="/video/samson/samson_1.mp4" type="video/mp4">
        </video>
    </div>

    @include('pages.layouts.components.move-top')
    @include('pages.layouts.components.move-down' , ['center'=>'-center'])
    @include('pages.layouts.components.move-down')

    <div id="fullpage-demo">

        <div class="section" >
            <div class="indicator"   data-back-type='image'  data-image="/img/hero_samson/samson_1.jpg" ></div>
            @include('pages.layouts.partials.header')
            @component('pages.layouts.blocks.hero-header',
              ['title'=>'Самсон Аракелян',
               'text'=>'Общественный деятель из <span>Актау</span>',
               'image'=>'/img/hero_samson/samson_1.jpg',
               'customClass'=>'right',
               'customClassMain'=>'samsonAdaptive'])
            @endcomponent       
        </div>

        <div class="section">
            
            <div class="fullpage-video-block indicator"  data-back-type='block' >

                <div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

                <video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_samson/samson_1.jpg" controls autoplay muted loop>
                    <source src="/video/rustem/rustem_0.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>

        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_samson/samson_7.jpg">
                <div class="fullpage-main-block__overlay">
                </div>

                <p class="fullpage-main-block__text">
                    Мы даже представить не могли, что однажды подобное может проходить у нас.
                </p>

                <p class="fullpage-main-block__text">
                   Я родился и вырос в Актау. Были моменты, когда жил в Ереване и в Алматы. Но чувствую, что все, что я хочу от жизни, могу реализовать в Актау.
                </p>

                <p class="fullpage-main-block__text last">
                    Нам было по 12-13 лет, когда мы начали следить за уличным баскетболом по телевизору – NBA и AND1. Потом выходили на площадку, пытались повторить что-то за игроками, быть похожими на Джордана. Мы играли на площадке со сломанным кольцом и асфальтом с бугорками, а в фильмах показывали яркие крутые тусовки на пляжах Лос-Анджелеса.
                </p>

            </div>

        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/samson/samson_1.mp4">
                <div class="fullpage-main-block__overlay"></div>
                <p class="fullpage-main-block__text">
                   Я более 10 лет работал в нефтяной сфере вахтовым методом, что позволило мне параллельно заниматься музыкой и творчеством. Когда я достиг определенного карьерного роста, меня начали воспринимать не только как артиста или специалиста иностранной компании, а как менеджера, способного собрать вокруг себя единомышленников. И мне предложили открыть и возглавить Федерацию баскетбола Мангистауской области.
                </p>
                <p class="fullpage-main-block__text">
                    Первое мероприятие, которое я организовал – это Школьная лига по баскетболу, где уже приняло участие около 6000 детей. Когда увидел, как у детей горят глаза, понял, что это — мое.
                </p>
            </div>


        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_samson/samson_3.jpg">
                <div class="fullpage-main-block__overlay"></div>
               
                <p class="fullpage-main-block__text">
                    К 40 годам я понял, что через 10 лет наступит возраст, когда не начинают, а уже доводят свое дело до логического конца. Я оставил свою работу в пользу развития профессионального спорта. И уже 2 года создаю движение, которое нравится не только мне. Моя цель – выйти на мировой уровень. 
                </p>
            </div>


        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/samson/samson_2.mp4">
                <div class="fullpage-main-block__overlay"></div>

                <p class="fullpage-main-block__text">
                    Площадка – это место вызова. Чтобы попасть сюда в прайм-тайм, ты должен быть очень хорош. Ребята «пашут». В итоге они вызывают восторг, аплодисменты, их знают по именам. Полные трибуны дают им мотивацию двигаться дальше. Для этого и нужны такие ивенты.
                </p>

                <p class="fullpage-main-block__text">
                   Основной упор при работе с молодежью нужно делать на личность. Дать возможность молодому человеку стать героем здесь и сейчас, показать его путь развития. У спортсмена есть возможность стать супергероем, не подражать, а именно стать.
                </p>          

            </div>


        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_samson/samson_4.jpg">
                <div class="fullpage-main-block__overlay"></div>
                <p class="fullpage-main-block__text">
                    <span>
                        У меня так много планов, что единственное чего я боюсь – это собственной смерти. Мне кажется, я успел выполнить только 5-10% своего плана.
                    </span>
                </p>

            </div>


        </div>

        <div class="section">
            
            <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_samson/samson_5.jpg">
                <div class="fullpage-main-block__overlay"></div>
                <p class="fullpage-main-block__text">
                    Я до сих пор помню момент, когда почувствовал, что я – патриот. Казахстан впервые выступал на Чемпионате мира U19 в Новой Зеландии. Я захожу в переполненный зал, мы играем с домашней командой. И вот матч заканчивается, мы выигрываем, и стоит гробовая тишина. Сердце бешено стучит, прыгаешь от радости. В этот момент я понял для себя, что такое Казахстан, наш флаг, наша сборная.
                </p>
            </div>

        </div>


        <div class="section">

            <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_samson/samson_6.jpg">
                <div class="fullpage-main-block__overlay"></div>            

                <p class="fullpage-main-block__quote">
                    <img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
                    <img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

                    Я счастлив, потому что у меня есть возможность мечтать и воплощать мечты 12-летнего пацана. Я благодарен этой стране за это. Думаю, только в Казахстане есть возможность не этническим казахам добиваться такого успеха, только у нас такая терпимость к другим национальностям.
                </p>    

                <p class="fullpage-main-block__quote-name">(c) Самсон Аракелян</p>  

                <a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>  
            </div>          

            @include('pages.layouts.partials.fullpage-footer')  
        </div>


        </div>

    </div>

@endsection