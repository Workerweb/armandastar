@extends('pages.layouts.app-hero')


@section('title', 'Тимур Коробейников')

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
      <div class="indicator"   data-back-type='image'  data-image="/img/hero_timur/timur_1.jpg" ></div>
      @include('pages.layouts.partials.header')
      @component('pages.layouts.blocks.hero-header',
              ['title'=>'Тимур Коробейников',
               'text'=>'Интерн-хирург из <span>Караганды</span>',
               'image'=>'/img/hero_timur/timur_1.jpg',
               'customClass'=>'',
               'customClassMain'=>'juldAdaptive'])
        @endcomponent 
    </div>



<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-video-block indicator"  data-back-type='block' >
        <div id="fullpage-video-block__overlay" class="fullpage-video-block__overlay"></div>

        <video id="fullpage-video-block__video" class="fullpage-video-block__video" poster="/img/hero_timur/timur_1.jpg" controls autoplay muted loop>
            <source src="/video/timur/timur_0.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>




<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">
      
      <div class="fullpage-main-block indicator" data-back-type='image'  data-image="/img/hero_timur/timur_3.jpg">
        <div class="fullpage-main-block__overlay">
        </div>
        <p class="fullpage-main-block__text">
          <span>
            Мы находим людей, которым нужна помощь, и соединяем их с необходимыми специалистами.
          </span>
        </p>

      <p class="fullpage-main-block__text">
          Я родом из г орода Сатпаев. После окончания школы поступил в Карагандинский государственный медицинский универ-итет, в котором учусь до сих пор. Уже интерн-хирург. В медицину пошел с мыслями о семье. У нас нет врачей,но есть пациенты. но есть пациенты.
        </p> 

      <p class="fullpage-main-block__text last">
          Несколько лет назад мы с другом помогали семье, в которой случился инсульт. Родные больного были в растерянности – человек, которого они помнят, как веселого и разговорчивого, мгновенно потерял эти качества. Часто люди ищут информацию в интернете, но там скорее её переизбыток, чем какая-то конкретика, тем более сложно знать, что именно подойдет вашему близкому. Так 2 года назад появилась идея открыть Центр по содействию и помощи семьям, чьи близкие перенесли инсульт.
        </p>                

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_timur/timur_6.jpg">
        <div class="fullpage-main-block__overlay"></div>

        <p class="fullpage-main-block__text">
          В нашей команде 12 студентов медицинского университета, в дальнейшем хотим привлекать волонтеров. В работе помогают практикующие врачи – реабилитологи и невропатологи. Они учат пациентов и их близких, как вести себя во время реабилитации. Нас также сильно поддерживает ВУЗ. Сейчас работаем над привлечением представителей бизнеса в проект.

        </p>
      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>


<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"   data-back-type='video'  data-video="/video/timur/timur_1.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Мы пока охватили мало людей. В нашем менталитете не принято говорить о проблемах, люди чаще  говорят о достижениях.  А здесь важно довериться нам.
        </p>
      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>

<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_timur/timur_41.jpg">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
          Мы не соревнуемся с реабилитационными центрами, лишь дополняем пробелы, которые сейчас есть. Период, когда можно максимально помочь и восстановиться – это первые шесть месяцев после инсульта. Если прошло уже больше года, вероятность того, что человек заговорит, очень маленькая..
        </p>

      </div>

    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>



<!-------------------------------------------HERO SECTION------------------------------------------------>

    <div class="section">
      
      <div class="fullpage-main-block indicator"  data-back-type='video'  data-video="/video/timur/timur_2.mp4">
        <div class="fullpage-main-block__overlay"></div>
        <p class="fullpage-main-block__text">
         <span>
             Обязывать человека быть социально ответственным – это подмена понятий. Зато его можно мотивировать своим примером.
         </span>
        </p>

      </div>


    </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>






<!-------------------------------------------HERO SECTION------------------------------------------------>
    <div class="section">

      <div class="fullpage-main-block indicator"  data-back-type='image'  data-image="/img/hero_timur/timur_6.jpg">
        <div class="fullpage-main-block__overlay"></div>      

        <p class="fullpage-main-block__quote">
          <img class="fullpage-main-block__quote-icon" src="/img/icons/quote.png" alt="">
          <img class="fullpage-main-block__quote-icon reverse" src="/img/icons/quote.png" alt="">

          Моя цель — стать оперирующим хирургом, но в то же время мне близок этот проект, и я хочу его продолжать. А мечта? Наверное, быть счастливым – в кругу семьи, в окружении друзей, на любимой работе.
        </p>  

        <p class="fullpage-main-block__quote-name">(c) Тимур Коробейников</p>  

        <a class="fullpage-main-block__other-hero" href="/hero_juld">Еще герои</a>  
      </div>      

      @include('pages.layouts.partials.fullpage-footer')  
    </div>


    </div>

  </div>
<!-------------------------------------------HERO SECTION------------------------------------------------>

@endsection