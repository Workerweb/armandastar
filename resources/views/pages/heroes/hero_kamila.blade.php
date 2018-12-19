@extends('pages.layouts.app')


@section('title', 'Камиля Сулейменова')

@section('content')



    @component('pages.layouts.blocks.hero-header',
              ['title'=>'Камиля Сулейменова',
               'text'=>'Дизайнер по войлоку из <span>Астаны</span>',
               'image'=>'/img/hero_kamila/kamila_1.jpg',
               'customClass'=>'right',
               'customClassMain'=>'kamilaAdaptive'])
    @endcomponent
	
	@component('pages.layouts.blocks.video-text' ,['video'=>'https://www.youtube.com/embed/84ErbKuGAeU'])
        <p class="video-text__text">Я 17 лет проработала экономистом в национальной компании. Достигнув определенных результатов, поняла, что хочу чего-то большего: реализоваться и чувствовать себя полностью счастливой. Осознание этого пришло с рождением сына Дани, в его честь я назвала бренд, который сейчас развиваю.</p>    
        <p class="video-text__text">Я долго искала, чем мне именно заняться. У меня с детства была любовь к рукоделию: шила одежду куклам, перешивала вещи бабушки и мамы. Но конкуренция в области шитья очень высокая, я искала незанятые ниши. Так пришла к работе с войлоком. Но столкнулась с тем, что не смогла найти ни учителей, ни курсов, поэтому все, чем владею сейчас, получила из роликов в Youtube.</p>    
    @endcomponent	

	@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_kamila/kamila_3.jpg',
			  'customClassMain'=>'kamila-poster-1',
			  ])

        @slot('left')
            <div class="poster-text__dialog" style="top:25%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">Мастера, которые есть, и они довольно известные, не хотят обучать. Для себя я поставила цель – научиться этому ремеслу и обучать желающих.</p>
                <p class="poster-text__text">Близкие говорили мне: «Куда ты идешь? Зачем? Почему? Ты ничего в этом ещё не понимаешь». Но я считала иначе. Я просто максималист по жизни: всегда ищу более сложный путь. Такова, наверное, моя природа.</p>
            </div>  
        @endslot

    @endcomponent 

@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_kamila/kamila_4.jpg',
			  'customClassMain'=>'kamila-poster-2',
			  ])

        @slot('right')
            <div class="poster-text__dialog" style="top:30%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text">Первое творчество показала на детской неделе моды Junior Fashion Kids, и коллекцию приняли на «ура» – она полностью распродалась. Я поняла, что спрос есть, – нужно двигаться дальше. Открыла студию, начала делать головные уборы и отдавать их на реализацию в магазины.Не имея опыта в сфере дизайна, обратилась к консультанту по продвижению казахстанских дизайнеров на зарубежный рынок. Прошла небольшие курсы и представила коллекцию осень-зима 2018-2019 на неделе моды в Милане. Коллекцию приобрели миланские магазины, так начали появляться собственные клиенты.</p>
            </div>  
        @endslot

    @endcomponent     

@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_kamila/kamila_5.jpg',
			  'customClassMain'=>'kamila-poster-3',
			  ])

        @slot('left')
            <div class="poster-text__fill" style="top:25%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">Методом собственных проб поняла, из какой шерсти нужно делать вещи. Первую вещь, которую сделала, не смогла надеть из-за того, что она была слишком колючая. Сейчас aматериал заказываю у иностранных производителей, он на 100% экологичный.</p>
                <p class="poster-text__text">Вся работа делается вручную, валяется при помощи мыла и воды. Чтобы изготовить пальто 44 размера, нужно разложить в два раза больше шерсти, потому что потом она сядет в 2 раза, а это почти 2-3 метра полотна. Для процесса нужны высокие и длинные столы высотой 90 см, чтобы не уставала спина, и чтобы удобно было раскладывать шерсть.</p>
            </div>  
        @endslot

    @endcomponent     

@component('pages.layouts.blocks.poster-text',
			  ['image'=>'/img/hero_kamila/kamila_6.jpg',
			  'customClassMain'=>'kamila-poster-4',
			  ])

        @slot('left')
            <div class="poster-text__dialog" style="top:35%;background-size: cover;border-radius: 20px;">
                <p class="poster-text__text-extrabold">Я хочу показать, как одежда из войлока может войти в современный гардероб женщины. А главное, что необязательно каждый день носить узоры и орнаменты, чтобы показать приверженность своим традициям.</p>
            </div>  
        @endslot

    @endcomponent        



    @component('pages.layouts.blocks.end-text')
        <p class="end-text__text">Счастье — это заниматься тем, чем хочешь, когда ты находишься в гармонии с самой собой, когда тебе есть, что сказать этому миру и когда ты можешь быть услышанным</p> 
    @endcomponent


@endsection
