@extends('pages.layouts.app')


@section('title', 'Главная')

@section('content')

    @include('pages.layouts.partials.main-video')

            
	<div class="container-fluid main-text">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center"><img class="main-text__image" src="/img/main/cus-hr.png" alt=""></div>

                <div class="col-md-6 offset-md-3 main-text__about-wrap">
                    <p class="main-text__about">Армандастар &mdash; это проект о неравнодушных казахстанцах. Они мечтают и действуют здесь и сейчас. Они - такие же, как и мы. Они &mdash; одни из нас.</p>
                </div>
                
            </div>
        </div>
@endsection