@extends('pages.layouts.app-hero')


@section('title', 'Адлет и Даулет Анарбековы')

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
      <div class="indicator"   data-back-type='image'  data-image="/img/hero_anarbekovi/anarbekovi_1.jpg" ></div>
      @include('pages.layouts.partials.header')
      @component('pages.layouts.blocks.hero-header',
                ['title'=>'Адлет и Даулет Анарбековы',
                'text'=>'Танцоры из <span>Астаны</span>',
                'image'=>'/img/hero_03/header.jpg',
                'customClass'=>'right',
                'customClassMain'=>'twinAdaptive'
                ])
     @endcomponent 
    </div>



<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-video-block indicator"  data-back-type='block' >
        <div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

        <video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_anarbekovi/anarbekovi_1.jpg" controls autoplay muted loop>
            <source src="/video/rustem/rustem_0.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>

      </div>

    </div>


    
<!-------------------------------------------HERO SECTION------------------------------------------------>




<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_anarbekovi/anarbekovi_4.jpg">
        <div class="fullpage-main-block__overlay">
        </div>
        <p class="fullpage-main-block__text">
          В детстве мы хотели быть такими же ловкими, как черепашки-ниндзя, быть своего рода героями. Ходили на карате и тхэквондо. Позже встретили би-боев (break boy): завороженно смотрели, как они крутились на спине, делали сальто, точно, как черепашки. Курсов тогда не было, и мы начали учить связки по клипам на MTV и видеокассетам. Более серьезно познакомились с культурой уже в Алматы, когда нам исполнилось 16. Через год узнали, что Астане прошел баттл по брейк-дансу, и так мы оказались здесь.
        </p>

      <p class="fullpage-main-block__text last">
          В составе команды Simple System в 2010 году мы впервые выступали от Казахстана на Чемпионате мира. Тогда мы вошли в топ-10 команд в номинации «Шоу». До этого момента мы колебались – может уйти в сферу, где больше зарплата, где есть стабильность? Но после увиденного за рубежом захотелось развивать это в Казахстане. Мы решились на открытие собственной студии.
        </p>        

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_anarbekovi/anarbekovi_6.jpg">
        <div class="fullpage-main-block__overlay"></div>
        
        <p class="fullpage-main-block__text">
         <span>
           Мы построили студию за год и три месяца.  У нас была цель – создать тренировочную базу для чемпионов мира и обучать детей из малообеспеченных семей.
         </span>

        </p>
        

        <p class="fullpage-main-block__text last">
          Студия была для нас и домом, и работой, пока в 2016 году не случился пожар. Схватив документы, мы выбежали на улицу и наблюдали за тем, как наше детище сгорает словно спичечный коробок. Пожар вызвал общественный резонанс – об этом написали в СМИ, ученица опубликовала наши банковские реквизиты, и на счет поступали деньги. Тогда нас поддержало наше комьюнити, и это нас вдохновило на дальнейшие проекты.

        </p>
      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/anarbekovi/anarbekovi_1.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Сейчас мы продумываем бизнес-план для образовательной программы по танцу. Пользователь сможет дистанционно учиться танцу, встав на коврик с отметками (линии, буквы, цифры) и включив урок на планшете.
        </p>
        <p class="fullpage-main-block__text">
          <span>
            Для нас танцы — это способ быть вне шаблонов. Они выработали в нас характер и волю к победе, оградили от влияния пагубных привычек.
          </span>
        </p>        
      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>

<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_anarbekovi/anarbekovi_7.jpg">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Уже на протяжении 4 лет мы работаем с благотворительным фондом BEST FOR KIDS: учим воспитанников детского дома танцам. 
        </p>

        <p class="fullpage-main-block__text">
          <span>
            Хотим передать им свою философию – «никогда не сдаваться».
          </span>
        </p>

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>



<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/anarbekovi/anarbekovi_3.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Мы будучи непрофессиональными актерами, снимались в фильме «Уроки гармонии». В тот момент еще готовились к Чемпионату мира. Жили на 2 города – Астана и Алматы: каждый день то репетиции, обучение и съемки, то тренировки. Как результат, взяли второе место на ЧМ, а фильм получил «Серебряного медведя берлинского кинофестиваля».
        </p>

        <p class="fullpage-main-block__text">
          Если каждый, кто владеет информацией будет уезжать, казахстанский брейк-данс не будет развиваться. Поэтому мы здесь. И мы верим, что наступит день, когда Казахстан возьмет «золото» на чемпионате мира.
        </p>        

      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>




<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">

      <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/anarbekovi/anarbekovi_2.mp4">
        <div class="fullpage-main-block__overlay"></div>      

        <p class="fullpage-main-block__quote">
          <img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
          <img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

          Для нас важно просто передать свою философию «никогда не сдаваться», с какими бы обстоятельствами ты ни сталкивался, иди дальше, не взирая ни на что. Какие бы трудности у тебя ни были в жизни, найди то, что откликается у тебя в сердце, найди свое предназначение, просто служи людям и помогай им быть частливыми.
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