@extends('pages.layouts.app')


@section('title', 'Жулдыз Шабденова')

@section('content')



    @component('pages.layouts.blocks.hero-header',
              ['title'=>'Жулдыз Шабденова',
               'text'=>'Больничная клоунесса из <span>Астаны</span>',
               'image'=>'/img/hero_01/juld_poster.jpg',
               'customClass'=>'',
               'customClassMain'=>'juldAdaptive'])
    @endcomponent


    
    @component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/X5_pSVKUOdI'])
        <p class="video-text__quote">“Нужно научиться смотреть не на болезнь, а на ребенка”.</p>
        <p class="video-text__text">В школе я вела личный дневник и писала: «Во мне столько любви, я могу поделиться этой любовью со всем миром». Я никогда не забывала об этом. В университете я стала частью волонтерского движения, а после начала работать аниматором.В проект «Больничные клоуны» я пришла недавно, хотя в Астане он запустился еще в 2014 году. Люди здесь постоянно меняются: не все справляются, ведь мы ходим к онкобольным детям. Поначалу и мне было тяжело, но важно подготовиться к каждому визиту и морально, и физически, поговорить с психологами. Нужно научиться смотреть не на болезнь, а на ребенка. Уделить время и внимание каждому в равной степени. Наша задача — дарить улыбки. Мы не можем показывать свои эмоции, даже если чувствуем что-то негативное. </p>    
    @endcomponent

    <div class="container-fluid interactive-block" style="background-image: url('/img/hero_01/juld_01.jpg');background-position: 30% 0%;">
        <div class="row interactive-block__wrap">
            <div class="col-md-5 col-12"></div>

            <div class="col-md-7 col-12 interactive-block__content">
                <img class="interactive-block__image" src="/img/hero_01/child_image.png" alt="">
                <p class="interactive-block__text">Мы заходим в больницу – в отделении полная тишина. Тогда мы забегаем в палаты, и дети кричат: «О, это Жу-Жу и Му-Му пришли!». Меня зовут Жу-Жу, потому что мое имя Жулдыз. Несмотря на то, что ты веселый клоун, дети видят в тебе взрослого человека. Боятся тебя и закрываются. Но когда подходит коровка со словами: «Привет! Меня зовут Му-му, а тебя как? Дай пять!» – дети раскрепощаются. У них загораются глаза, и тогда выхожу я. «Меня зовут Жу-Жу. Теперь мы втроем подружки!». Мы играем, смеемся. А когда уходим, в больнице будто зажигается свет.</p>
            </div>

        </div>
    </div>



    @component('pages.layouts.blocks.poster-text',
               ['video'=>'/video/juld_loop.mp4',
                'customClassMain'=>'videoPoster'
               ])

        @slot('videoText')
            <div class="poster-video__wrap">
                <img src="/img/main/cus-hr.png" class="poster-video__hr" alt="">
                <p class="poster-video__wrap-text">Сейчас я не представляю свой жизни без этого.  Скучаю, когда не вижу детей, родителей. </p>
                <p class="poster-video__wrap-text">В будущем мы хотим открыть школу больничной клоунады, чтобы о нас узнало большее количество людей, и мы могли помогать большему количеству детей. </p>
                <p class="poster-video__wrap-text">Здесь минимальные финансовые затраты: костюм, косметика, человек.</p>
            </div>
        @endslot

        @slot('left')
            <div class="poster-text__minimal" style="top:20%">
                <p class="poster-text__text-minimal">Сейчас я не представляю свой жизни без этого.  Скучаю, когда не вижу детей, родителей. </p>
                <p class="poster-text__text-minimal">В будущем мы хотим открыть школу больничной клоунады, чтобы о нас узнало большее количество людей, и мы могли помогать большему количеству детей. </p>
                <p class="poster-text__text-minimal">Здесь минимальные финансовые затраты: костюм, косметика, человек.</p>

            </div>
        @endslot

    @endcomponent  



    @component('pages.layouts.blocks.poster-text',['image'=>'/img/hero_01/juld_03.jpg','customClassMain'=>'juld-poster'])

        @slot('right')
            <div class="poster-text__dialog" style="top:50%">
                <p class="poster-text__text">Иногда мне страшно от того, насколько я счастлива. У меня есть семья, дом, любимая работа. Мне не нужно многого. </p>
                <p class="poster-text__text">У меня, конечно, тоже бывают проблемы, но, возвращаясь домой, понимаю, что завтра будет новый день, и все будет лучше. Беру в руки гитару и начинаю петь или возьму книгу в руки, и становится легче.</p>
            </div>  
        @endslot

    @endcomponent



    @component('pages.layouts.blocks.poster-text',['image'=>'/img/hero_01/juld_04.jpg','customClassMain'=>'juld-poster-2'])

        @slot('right')
            <div class="poster-text__dialog dialog-default" style="top:35%">
                <p class="poster-text__text-bold">“Я не сталкивалась с особо черствыми людьми,но даже если я вижу таких, думаю, что у них просто день не удался. Всякое бывает”.</p>
            </div>  
        @endslot

    @endcomponent    



    @component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Если бы каждый друг другу делал доброе дело, то в мире царила бы любовь и доброта. Я не сталкивалась с особо черствыми людьми, но даже если я вижу таких, думаю, что у них просто день не удался. Всякое бывает. Сейчас я пример для своей младшей сестренки, хочу быть примером и для других. Потому что делаю хорошее дело и не хвастаюсь этим. </p> 
    @endcomponent


@endsection