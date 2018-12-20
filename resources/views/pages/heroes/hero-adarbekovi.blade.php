@extends('pages.layouts.app')


@section('title', 'Адлет и Даулет Анарбековы')

@section('content')
    
    @component('pages.layouts.blocks.hero-header',
                ['title'=>'Адлет и Даулет Анарбековы',
                'text'=>'Танцоры из <span>Астаны</span>',
                'image'=>'/img/hero_03/header.jpg',
                'customClass'=>'right',
                'customClassMain'=>'twinAdaptive'
                ])
    @endcomponent

	@component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/DD6EupjdaXg'])
        <p class="video-text__text">В детстве мы хотели быть такими же ловкими, как черепашки-ниндзя, быть своего рода героями. Ходили на карате и тхэквондо. Позже встретили би-боев (break boy): завороженно смотрели, как они крутились на спине, делали сальто, точно, как черепашки. Курсов тогда не было, и мы начали учить связки по клипам на MTV и видеокассетам. Более серьезно познакомились с культурой уже в Алматы, когда нам исполнилось 16. Через год узнали, что Астане прошел баттл по брейк-дансу, и так мы оказались здесь.</p>
        <p class="video-text__text">В составе команды Simple System в 2010 году мы впервые выступали от Казахстана на Чемпионате мира. Тогда мы вошли в топ-10 команд в номинации «Шоу». До этого момента мы колебались – может уйти в сферу, где больше зарплата, где есть стабильность? Но после увиденного за рубежом захотелось развивать это в Казахстане. Мы решились на открытие собственной студии.</p>    
    @endcomponent    

	@component('pages.layouts.blocks.poster-text',
                ['image'=>'/img/hero_03/poster_3.jpg',
                'customClassMain'=>'twinPoster'
                ])

        @slot('right')
            <div class="poster-text__fill" style="top:25%">
                <p class="poster-text__text-extrabold">Мы построили студию за год и три месяца.  У нас была цель – создать тренировочную базу для чемпионов мира и обучать детей из малообеспеченных семей.</p>
                <p class="poster-text__text-minimal">Студия была для нас и домом, и работой, пока в 2016 году не случился пожар. Схватив документы, мы выбежали на улицу и наблюдали за тем, как наше детище сгорает словно спичечный коробок. Пожар вызвал общественный резонанс – об этом написали в СМИ, ученица опубликовала наши банковские реквизиты, и на счет поступали деньги. Тогда нас поддержало наше комьюнити, и это нас вдохновило на дальнейшие проекты.</p>

            </div>  
        @endslot

    @endcomponent 

	@component('pages.layouts.blocks.poster-text',
              ['video'=>'','image'=>'/img/hero_03/poster_4.jpg',
              ])

        @slot('left')
            <div class="poster-text__dialog" style="top:10%">
                <p class="poster-text__text">Сейчас мы продумываем бизнес-план для образовательной программы по танцу. Пользователь сможет дистанционно учиться танцу, встав на коврик с отметками (линии, буквы, цифры) и включив урок на планшете.</p>
                <p class="poster-text__text-extrabold">Для нас танцы — это способ быть вне шаблонов. Они выработали в нас характер и волю к победе, оградили от влияния пагубных привычек.</p>
            </div>  
        @endslot

    @endcomponent     

	@component('pages.layouts.blocks.poster-text',
              ['image'=>'/img/hero_03/poster_5.jpg',
                'customClassMain'=>'twinPoster2'])

        @slot('left')
            <div class="poster-text__fill" style="top:20%">
                <p class="poster-text__text-extrabold">Уже на протяжении 4 лет мы работаем с благотворительным фондом BEST FOR KIDS: учим воспитанников детского дома танцам. Хотим передать им свою философию – «никогда не сдаваться».</p>

            </div>  
        @endslot

    @endcomponent   

	@component('pages.layouts.blocks.poster-text',
              ['video'=>'',
               'image'=>'/img/hero_03/poster_6.jpg',
               ])

        @slot('right')
            <div class="poster-text__dialog" style="top:15%">
                <p class="poster-text__text">Мы будучи непрофессиональными актерами, снимались в фильме «Уроки гармонии». В тот момент еще готовились к Чемпионату мира. Жили на 2 города – Астана и Алматы: каждый день то репетиции, обучение и съемки, то тренировки. Как результат, взяли второе место на ЧМ, а фильм получил «Серебряного медведя берлинского кинофестиваля».</p>
            </div>  
        @endslot

    @endcomponent

	@component('pages.layouts.blocks.poster-text',
              ['video'=>'',
               'image'=>'/img/hero_03/poster_7.jpg',
                'customClassMain'=>'twinPoster3'
               ])

        @slot('right')
            <div class="poster-text__dialog" style="top:25%;background-image: url('/img/hero_03/modal_72.png');" >
                <p class="poster-text__text">Если каждый, кто владеет информацией будет уезжать, казахстанский брейк-данс не будет развиваться. Поэтому мы здесь. И мы верим, что наступит день, когда Казахстан возьмет «золото» на чемпионате мира.</p>
            </div>  
        @endslot

    @endcomponent    

@component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Для нас важно просто передать свою философию «никогда не сдаваться», с какими бы обстоятельствами ты ни сталкивался, иди дальше, не взирая ни на что. Какие бы трудности у тебя ни были в жизни, найди то, что откликается у тебя в сердце, найди свое предназначение, просто служи людям и помогай им быть частливыми.</p> 
    @endcomponent             

@endsection
