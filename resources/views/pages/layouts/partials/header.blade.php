<div class="container-fluid">
            <div class="row">


                <div class="col-md-12 header__wrap">
                    <div class="header__mobile">
                        <div class="header__logo">
                            <a href="/"><img class="img-fluid" src="/img/main/main-logo.png" alt=""></a>
                        </div>                        

                        <img class="header__mobile-toggle" id="open-main-menu" src="/img/icons/menu.svg" alt="">

                        <div class="header__mobile-items">
                            <a href="/" class="header__mobile-item">Главная</a>
                            <a href=""  id="menu-heroes-mobile" class="header__mobile-item">Герои</a>
                            <a href="" class="header__mobile-item">Backstage</a>
                            <a href="" class="header__mobile-item">О проекте</a>

                            <div class="header__lang">
                                <div class="header__lang-item">
                                    <a href="#">Kz</a>
                                    
                                </div>

                                <div class="header__lang-item active">
                                    <a href="#">Ru</a>
                                    
                                </div>

                            </div>                            
                        </div>
                    </div>

                    <div class="header">

                        <div class="header__menu">
                            <div class="header__logo">
                                <a href="/"><img class="img-fluid" src="/img/main/main-logo.png" alt=""></a>
                            </div>

                            <div class="header__item"><img class="header__item-hovered-image" src="/img/main/active-menu.png" alt="">
                                <a href="/">Главная</a>
                                
                            </div>

                            <div class="header__item" id="menu-heroes"><img class="header__item-hovered-image" src="/img/main/active-menu.png" alt="">
                                <a href="#">Герои</a>
                                
                            </div>

                            <div class="header__item"><img class="header__item-hovered-image" src="/img/main/active-menu.png" alt="">
                                <a href="/dev">Backstage</a>
                                
                            </div>

                            <div class="header__item"><img class="header__item-hovered-image" src="/img/main/active-menu.png" alt="">
                                <a href="/dev">О проекте</a>
                                
                            </div>

                        </div>
                        <div class="header__lang">
                            <div class="header__lang-item">
                                <a href="#">Kz</a>
                                
                            </div>

                            <div class="header__lang-item active">
                                <a href="#">Ru</a>
                                
                            </div>

                        </div>
                    </div>
                </div>

                @include('pages.layouts.partials.drop-menu')
                
            </div>
        </div>