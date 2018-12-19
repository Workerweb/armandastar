@extends('pages.layouts.app')


@section('title', 'Главная')

@section('content')

    @include('pages.layouts.partials.main-video')

            
	<div class="container-fluid main-text">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center"><img class="main-text__image" src="/img/main/cus-hr.png" alt=""></div>
                <div class="col-md-6 offset-md-3 main-text__about-wrap">
                    <p class="main-text__about">Армандастар - это проект о неравнодушных казахстанцах. Они мечтают и действуют здесь и сейчас. Они такие же, как и мы. Они - одни из нас.</p>
                </div>
                <div class="col-md-6 offset-md-3 main-text__partners">

                    <div class="main-text__partners-item modal-back" >
                        <p>При поддержке</p>
                    </div>

                    <div class="main-text__partners-item ver"><img src="/img/main/logo1.png" alt="">
                        <p class="partners-text">Министерство Информации и коммуникаций Республики Казахстан</p>
                    </div>

                    <div class="main-text__partners-item ver"><img src="/img/main/logo2.png" alt="">
                        <p class="partners-text">Фонд первого президента Республики Казахстан - Елбасы</p>
                    </div>

                </div>
            </div>
        </div>
@endsection