<div class="container-fluid poster-text {{$customClassMain??''}}" style="background-image: url('{{$image??''}}');">
    <div class="row poster-text__wrap">

    	@if($video??'')
			<video  class="poster-text__video" id="{{$customClassMain??''}}" poster="{{$poster??''}}" autoplay="" muted="" loop="" data-autoplay>
                <source src="{{$video}}" type="video/mp4">
            </video>

            {{$videoText??''}}
    	@endif

        <div class="col-md-6 col-sm-12 col-12 poster-text__block poster-text__left {{!empty($left)?'order-last order-md-first':''}}">
        	{!! $left??'' !!}
        </div>

        <div class="col-md-6 col-sm-12 col-12 poster-text__block poster-text__right">
        	{!! $right??'' !!}
        </div>
        
    </div>
</div>
