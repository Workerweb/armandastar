@extends('pages.layouts.app')


@section('title', 'Данияр Айтышев')

@section('content')



    @component('pages.layouts.blocks.hero-header',
                  ['title'=>'Данияр Айтышев',
                  'text'=>'Павлодарская область, с. Теренколь Аким',
                  'image'=>'/img/hero_danyar/danyar_1.jpg',
                  'customClass'=>'right',
                  'customClassMain'=>'headerDanyar',

])
    @endcomponent


    
    @component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/VC1SMralKUM',

    ])
        <p class="video-text__quote">Мечта детства – помогать людям. Это и мотивирует меня действовать и работать здесь и сейчас.</p>
        <p class="video-text__text">25 лет своей жизни я провел в городе. Я родом из Экибастуза. В школе и университете занимался общественной деятельностью: организовывал мероприятия, был участником Альянса студентов Казахстана. По окончанию университета возглавил областной штаб «Жасыл ел», потом около четырех лет руководил филиалом МК «Жас Отан».</p>    
        <p class="video-text__text">В августе 2017 года приступил к должности акима сельского округа Теренколь. У нас порядка 35 направлений работы: содействие бизнесу, уменьшение числа безработных, благоустройство и т. д. В этом году району исполнилось 90 лет. Думаю, через 5 лет мы станем селом городского типа – население уже почти 9 тысяч человек. Ежегодно сдается порядка 40-45 квартир.
</p>    
    @endcomponent
  

	@component('pages.layouts.blocks.poster-text',
              ['image'=>'/img/hero_danyar/danyar_3.jpg',

              ])

        @slot('right')
            <div class="poster-text__dialog" style="top:15%">
                <p class="poster-text__text">Я живу в доме для молодых специалистов, в однокомнатной квартире. У меня спрашивают: почему не заселился в большой частный дом? Работа акима – это всё-таки не квадратами мериться, а помогать людям, которые в тебе нуждаются.</p>
            </div>  
        @endslot

    @endcomponent 

@component('pages.layouts.blocks.poster-text',
          ['image'=>'/img/hero_danyar/danyar_4.jpg',

          ])

        @slot('left')
            <div class="poster-text__dialog" style="top:20%">
                <p class="poster-text__text">У нас проведено центральное водоснабжение. Завершается ремонт водоочистных сооружений, который рассчитывался на 2 года. Более 50% домов подключены к центральному отоплению. Хорошо развит малый и средний бизнес – 428 субъектов, не каждое село может таким похвастаться. Поэтому на выходные для покупки продуктов и бытовой электротехники к нам приезжают жители ближайших районов.</p>
            </div>  
        @endslot

    @endcomponent     

@component('pages.layouts.blocks.poster-text',
          ['image'=>'/img/hero_danyar/danyar_5.jpg',

          ])

        @slot('left')
            <div class="poster-text__dialog" style="top:20%">
                <p class="poster-text__text-extrabold">Всегда есть люди, которые чем-то недовольны. Сделаешь сегодня одно, завтра они захотят другое. Но это для нас, как для госслужащих, еще один вызов, чтобы делать свою работу лучше.</p>
            </div>  
        @endslot

    @endcomponent     

@component('pages.layouts.blocks.poster-text',
          ['image'=>'/img/hero_danyar/danyar_6.jpg',
            'customClassMain'=>'posterDanyar',

          ])

        @slot('right')
            <div class="poster-text__minimal" style="top:20%">
                <p class="poster-text__text-minimal">Мы готовимся к переходу систем уличного освещения с натриевых ламп на светодиодные. Подготовили бизнес-план и нашли для него инвестора. Освещенность улиц с 70% повысится до 95-96%. Если мы в год платим 15 млн тенге, то новая система сэкономит 40% от этой суммы.</p>
                <p class="poster-text__text-minimal">Мы передали бортовку мусора в доверительное управление сроком на 7 лет. Компания будет следить за сортировкой мусора по фракциям и дальнейшей переработкой. Это создало новые рабочие места. Так же мы сделали с пляжем. Частный инвестор занимается созданием инфраструктуры, уборкой, обследованием дна и берега.</p>

            </div>  
        @endslot

    @endcomponent     

@component('pages.layouts.blocks.poster-text',
          ['image'=>'/img/hero_danyar/danyar_7.jpg',
            'customClassMain'=>'posterDanyar2',

          ])

        @slot('left')
            <div class="poster-text__dialog" style="top:35%;background-image: url('/img/heroes/modal-md2.png') !important;">
                <p class="poster-text__text">Отток молодежи из села в город – это нормальный процесс. Здесь важно создавать условия. Порядка 40 молодых специалистов в этом году получили жилье не только от государства, но и по льготному жилищному кредитованию.</p>
            </div>  
        @endslot

    @endcomponent      



    @component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Мне 27 лет. Я боюсь не оправдать надежд жителей. Все-таки это большая ответственность для молодого человека. Силы я беру дома, в семье. В свободное время люблю играть в шахматы, кататься на велосипеде. Вдохновение получаю, гуляя по набережной Иртыша.</p> 
    @endcomponent


@endsection
