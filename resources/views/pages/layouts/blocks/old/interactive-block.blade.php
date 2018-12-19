<div class="container-fluid interactive-block" style="background-image: url('{{$back}}');{{$backStyle??'background-position: center'}}">
    <div class="row interactive-block__row">
        <div class="interactive-block__wrap offset-md-5 col-md-7">
            <div class="interactive-block__interactive-wrap"><img class="interactive-block__image" src="{{$interImage}}" alt=""></div>
            <div class="interactive-block__text-wrap">
                {{$slot}}
            </div>
        </div>
    </div>
</div>