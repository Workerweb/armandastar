<div class="container-fluid hero-header" style="background-image: url('{{$image}}');{{$backStyle??'background-position: center'}}">
    <div class="row">
	    <div class="col-md-12 hero-header__wrap">
	        <div class="hero-header__modal {{$addClassModal??' '}}">
	           {{$slot}}
	        </div>
	    </div>
    </div>
</div>
