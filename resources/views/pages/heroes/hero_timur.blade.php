@extends('pages.layouts.app')


@section('title', 'Тимур Коробейников')

@section('content')



    @component('pages.layouts.blocks.hero-header',
              ['title'=>'Тимур Коробейников',
               'text'=>'Интерн-хирург из <span>Караганды</span>',
               'image'=>'/img/hero_timur/timur_1.jpg',
               'customClass'=>'',
               'customClassMain'=>'juldAdaptive'])
    @endcomponent
	
@component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/dXkzX2LvjSc'])
        <p class="video-text__quote">Мы находим людей, которым нужна помощь, и соединяем их с необходимыми специалистами.</p>
        <p class="video-text__text">Я родом из г орода Сатпаев. После окончания школы поступил в Карагандинский государственный медицинский универ-итет, в котором учусь до сих пор. Уже интерн-хирург. В медицину пошел с мыслями о семье. У нас нет врачей,но есть пациенты. но есть пациенты.</p>    
        <p class="video-text__text">Несколько лет назад мы с другом помогали семье, в которой случился инсульт. Родные больного были в растерянности – человек, которого они помнят, как веселого и разговорчивого, мгновенно потерял эти качества. Часто люди ищут информацию в интернете, но там скорее её переизбыток, чем какая-то конкретика, тем более сложно знать, что именно подойдет вашему близкому. Так 2 года назад появилась идея открыть Центр по содействию и помощи семьям, чьи близкие перенесли инсульт.</p>    
    @endcomponent	

@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_timur/timur_3.jpg',
			  'customClassMain'=>'timur-poster-1',
			  ])

        @slot('right')
            <div class="poster-text__dialog" style="top:5%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">В нашей команде 12 студентов медицинского университета, в дальнейшем хотим привлекать волонтеров. В работе помогают практикующие врачи – реабилитологи и невропатологи. Они учат пациентов и их близких, как вести себя во время реабилитации. Нас также сильно поддерживает ВУЗ. Сейчас работаем над привлечением представителей бизнеса в проект.</p>
            </div>  
        @endslot

    @endcomponent  

    @component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_timur/timur_41.jpg',
			  'customClassMain'=>'timur-poster-2',
			  ])

        @slot('right')
            <div class="poster-text__fill" style="top:50%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">Мы пока охватили мало людей. В нашем менталитете не принято говорить о проблемах, люди чаще  говорят о достижениях.  А здесь важно довериться нам.</p>
            </div>  
        @endslot

    @endcomponent  

    @component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_timur/timur_5.jpg',
			  'customClassMain'=>'timur-poster-3',
			  ])

        @slot('right')
            <div class="poster-text__dialog" style="top:65%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">Мы не соревнуемся с реабилитационными центрами, лишь дополняем пробелы, которые сейчас есть. Период, когда можно максимально помочь и восстановиться – это первые шесть месяцев после инсульта. Если прошло уже больше года, вероятность того, что человек заговорит, очень маленькая.</p>
            </div>  
        @endslot

    @endcomponent  

    @component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_timur/timur_6.jpg',
			  'customClassMain'=>'timur-poster-4',
			  ])

        @slot('right')
            <div class="poster-text__dialog dialog-default" style="top:30%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">Обязывать человека быть социально ответственным – это подмена понятий. Зато его можно мотивировать своим примером.</p>
            </div>  
        @endslot

    @endcomponent  



    @component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Моя цель — стать оперирующим хирургом, но в то же время мне близок этот проект, и я хочу его продолжать. А мечта? Наверное, быть счастливым – в кругу семьи, в окружении друзей, на любимой работе.</p> 
    @endcomponent


@endsection
