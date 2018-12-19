<div class="container-fluid video-block">
        <div class="row"></div>
        <div class="col-md-12">
            <div class="video-block__text-wrap left text-left w-20">
                {{$slot}}
            </div>

            <video class="video-block__item" id="poster-video" poster="{{$poster}}" autoplay="true" loop="true">
                <source src="{{$video}}" type="video/mp4">
            </video>
        </div>
    </div>
