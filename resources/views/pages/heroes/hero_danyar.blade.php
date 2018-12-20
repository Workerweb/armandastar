@extends('pages.layouts.app-hero')


@section('title', 'Данияр Айтышев')

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
      <div class="indicator"   data-back-type='image'  data-image="/img/hero_danyar/danyar_1.jpg" ></div>
      @include('pages.layouts.partials.header')
      @component('pages.layouts.blocks.hero-header',
                  ['title'=>'Данияр Айтышев',
                  'text'=>'Павлодарская область, с. Теренколь Аким',
                  'image'=>'/img/hero_danyar/danyar_1.jpg',
                  'customClass'=>'right',
                  'customClassMain'=>'headerDanyar',])
      @endcomponent  
    </div>



<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-video-block indicator"  data-back-type='block' >
        <div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

        <video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_danyar/danyar_1.jpg" controls autoplay muted loop>
            <source src="/video/rustem/rustem_0.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>




<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_danyar/danyar_3.jpg">
        <div class="fullpage-main-block__overlay">
        </div>
        <p class="fullpage-main-block__text">
          <span>
            Мечта детства – помогать людям. Это и мотивирует меня действовать и работать здесь и сейчас.
          </span>
        </p>

      <p class="fullpage-main-block__text">
          25 лет своей жизни я провел в городе. Я родом из Экибастуза. В школе и университете занимался общественной деятельностью: организовывал мероприятия, был участником Альянса студентов Казахстана. По окончанию университета возглавил областной штаб «Жасыл ел», потом около четырех лет руководил филиалом МК «Жас Отан».
        </p>        

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_danyar/danyar_6.jpg">
        <div class="fullpage-main-block__overlay"></div>
        

        

        <p class="fullpage-main-block__text">
          В августе 2017 года приступил к должности акима сельского округа Теренколь. У нас порядка 35 направлений работы: содействие бизнесу, уменьшение числа безработных, благоустройство и т. д. В этом году району исполнилось 90 лет. Думаю, через 5 лет мы станем селом городского типа – население уже почти 9 тысяч человек. Ежегодно сдается порядка 40-45 квартир.

        </p>
      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/danyar/danyar_2.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Я живу в доме для молодых специалистов, в однокомнатной квартире. У меня спрашивают: почему не заселился в большой частный дом? Работа акима – это всё-таки не квадратами мериться, а помогать людям, которые в тебе нуждаются.
        </p>
      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>

<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_danyar/danyar_6.jpg">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          У нас проведено центральное водоснабжение. Завершается ремонт водоочистных сооружений, который рассчитывался на 2 года. Более 50% домов подключены к центральному отоплению. Хорошо развит малый и средний бизнес – 428 субъектов, не каждое село может таким похвастаться. Поэтому на выходные для покупки продуктов и бытовой электротехники к нам приезжают жители ближайших районов.
        </p>

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>



<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/danyar/danyar_1.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Всегда есть люди, которые чем-то недовольны. Сделаешь сегодня одно, завтра они захотят другое. Но это для нас, как для госслужащих, еще один вызов, чтобы делать свою работу лучше.
        </p>

      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>



<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_danyar/danyar_3.jpg">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Мы готовимся к переходу систем уличного освещения с натриевых ламп на светодиодные. Подготовили бизнес-план и нашли для него инвестора. Освещенность улиц с 70% повысится до 95-96%. Если мы в год платим 15 млн тенге, то новая система сэкономит 40% от этой суммы.
        </p>

        <p class="fullpage-main-block__text">
          Мы передали бортовку мусора в доверительное управление сроком на 7 лет. Компания будет следить за сортировкой мусора по фракциям и дальнейшей переработкой. Это создало новые рабочие места. Так же мы сделали с пляжем. Частный инвестор занимается созданием инфраструктуры, уборкой, обследованием дна и берега.
        </p>  

        <p class="fullpage-main-block__text">
         Отток молодежи из села в город – это нормальный процесс. Здесь важно создавать условия. Порядка 40 молодых специалистов в этом году получили жилье не только от государства, но и по льготному жилищному кредитованию.
        </p>                

      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>






<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">

      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_danyar/danyar_7.jpg">
        <div class="fullpage-main-block__overlay"></div>      

        <p class="fullpage-main-block__quote">
          <img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
          <img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

          Мне 27 лет. Я боюсь не оправдать надежд жителей. Все-таки это большая ответственность для молодого человека. Силы я беру дома, в семье. В свободное время люблю играть в шахматы, кататься на велосипеде. Вдохновение получаю, гуляя по набережной Иртыша.
        </p>  

        <p class="fullpage-main-block__quote-name">(c) Данияр Айтышев</p>  

        <a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>  
      </div>      

      @include('pages.layouts.partials.fullpage-footer')  
    </div>


    </div>

  </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>

@endsection