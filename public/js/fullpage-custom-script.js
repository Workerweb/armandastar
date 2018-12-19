
//Основные скрипты, которые отвечают за работу демо версий сайта
let fullpageDemo = new fullpage('#fullpage-demo', {                                 //Тут идет инициализация fullpage скрипта
    licenseKey: "B8E82C8C-C7DF4CDB-8316FC6F-EE23BEC2",          //Лицензионный ключ
    scrollOverflow: true,
    afterLoad: this.afterLoad,
    onLeave: this.onLeave,
    navigation: true,
    anchors: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21"],


     afterLoad: function(origin, destination, direction){ 

        let inner =$(destination.item).find('.indicator')           //элемент с этим классом иммет все необходимые данные
        $('#fullpage-back-block__overlay').removeClass('active')    //Убирает темную плашку
        
        if(!destination.isFirst){             //Добавляет классы активации для кнопок прокрути и управления
            $('#move-to-top').addClass('active')                           
        }

        if(destination.anchor==2){
            $('#move-to-top').removeClass('active')   
        }

        if(!destination.isLast&&!destination.isFirst&&destination.anchor!=2){
            $('#move-down-fullpage').addClass('active')
        }

        if(destination.isFirst){
            $('#move-down-fullpage-center').addClass('active')
        }

        if(destination.isLast){
            $('#fullpage-footer').addClass('active') 
            $('#move-to-top').addClass('footer-active')
        }


        // $('#move-down-fullpage').addClass('animate')

        let type ;
        let image;   
        let video;   
        let windowWidth = $(window).width();

         if(inner){                                                 //Тут берется информации о том, какое видео, изображение ставить и какого типо оно вообще
             type = inner.data('back-type') 
             image = inner.data('image')            
             video = inner.data('video')            
             webm = inner.data('webm')            
         }


         if(type=='image'){                                           //Условие, если у нас стоит изображение
            $('#fullpage-back-block__image').css('background-image','url("'+image+'")')
         }
         else if(type=='video'){                                                //Условие если у нас стоит видео

            if(windowWidth<790){
                $('#fullpage-back-block__video source').attr('src',webm)          
            }
            else{
                $('#fullpage-back-block__video source').attr('src',video)           //ТУт ставит видео и прочее
            }


            $('#fullpage-back-block__video').addClass('active')
            $('#fullpage-back-block__image').addClass('dark')           //Данный класс сделан для того, чтобы делать темным фон изображения, так как в некоторых случаях, когда видео долго грузится выходит так, что на секунду выходит изображение. А так выходит то, что сначала темный фон, и просто потом поверх грузится само видео
            $('#fullpage-back-block__video')[0].load()
            $('#fullpage-back-block__video').prop('muted',false)
         }
         else if(type=='block'){                                        //ТУт касается второго блока, в котором будет включатся видео
            $('#fullpage-video-block__overlay').addClass('active')
            $('#fullpage-video-block__video').get(0).play();
         }

     },

     onLeave: function(origin, destination, direction){
        $('#fullpage-back-block__overlay').addClass('active')       //Данный элемент отвечает за затухание и прочее

        $('#fullpage-back-block__video').removeClass('active')      //Тут убираются активные классы с изображений и видео
        $('#fullpage-back-block__image').removeClass('dark')

        $('#move-to-top').removeClass('active')                     //Тут убирается класс для кнопки наверх
        $('#move-down-fullpage').removeClass('active')
        $('#move-down-fullpage-center').removeClass('active')

        $('#fullpage-video-block__overlay').removeClass('active')   //Тут убирается затемнение для второго блока с видео
         $('#fullpage-video-block__video').get(0).pause();
         $('#fullpage-back-block__video').get(0).pause();

         $('#fullpage-footer').removeClass('active')                //Тут деактивация футера


        $('#move-to-top').removeClass('footer-active')
     },
});



$('.move-down').click(function(event) {
    fullpageDemo.moveSectionDown();
});

$('.move-down-center').click(function(event) {
    fullpageDemo.moveSectionDown();
});

$('#move-to-top').click(function(event) {
    fullpageDemo.moveTo(1);
});

//Тут дальше прописсывается параллак эффект для определеннъ компонентов

var movementStrength = 30;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();

let modalLeft = parseInt($('#hero_header_modal').css('left'));
let modalTop = parseInt($('#hero_header_modal').css('top'));

$(document).ready(function() {
    $(this).mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);

          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;

          $('.hero-header').css("background-position", newvalueX+"px     "+newvalueY+"px");

          $('#hero_header_modal').css({
              left:modalLeft - newvalueX*1.5+ 'px',
              top:modalTop - newvalueY*1.5+'px'
          });
   

    });
});




