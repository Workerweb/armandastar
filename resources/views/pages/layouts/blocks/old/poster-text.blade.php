<div class="container-fluid poster-text" style="background-image: url('{{$heroImage}}');{{$backStyle??'background-position: center'}}">
    <div class="row poster-text__row">
        <div class="col-sm-12 col-12 col-md-8 offset-md-4 col-lg-8 offset-lg-4 col-xl-6 offset-xl-6 poster-text__wrap">
            <div class="poster-text__modal {{$addClass??' '}}" style="background-image: url('{{$modalImage}}');">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
