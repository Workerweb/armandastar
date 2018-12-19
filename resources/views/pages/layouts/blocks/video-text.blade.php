<div class="container-fluid video-text">
    <div class="row video-text__row">
        
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 video-text__video-wrap">
        	<iframe class="video-text__video" src="{{$video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>

        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3  d-flex video-text__hr justify-content-center align-items-center"><img class="main-text__image" src="/img/main/cus-hr.png" alt=""></div>
        
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3  video-text__text-wrap">
            {{$slot}}
        </div>
        
    </div>
</div>