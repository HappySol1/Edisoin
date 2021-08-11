 $(document).ready(function() {
  
	function ibg(){
		$.each($('.ibg'), function(index, val) {
			if($(this).find('img').length>0){
				$(this).css('background-image','url("'+$(this).find('img').attr('src')+'")');
			}
		});
	}
	ibg();

  let sp_content=$('.sp_content'),sp_title=$('.sp_title');
  sp_content.hide();
  sp_title.on('click',function(){
    let inx=$('.sp_title').index(this);
    $(sp_content[inx]).slideToggle(100)
  });
 
 $(document).on('click', '.sp_title-nonactive', function a(){
    console.log(this);
    $(this).addClass("sp_title-active");
    $(this).removeClass("sp_title-nonactive");

  });
 $(document).on('click', '.sp_title-active', function b(){
    console.log(this);
     $(this).removeClass("sp_title-active");
     $(this).addClass("sp_title-nonactive");
  });
  $(".phone-menubtm").on('click',function(evt){
    evt.preventDefault();
    $("body").addClass("scroll-hidden");
    $(" .fixedbtn").addClass("popup-dn");
    $(" .phone-popup").removeClass("phone-popup-hidden");
  });
  $(".phone-menubtm-close").on('click',function(evt){
    evt.preventDefault();
    $(" .phone-popup").addClass("phone-popup-hidden");
    $("body").removeClass("scroll-hidden");
    $(" .fixedbtn").removeClass("popup-dn");
  });
  $(".showpopup").on('click',function(evt){
    $(" .phone-popup").addClass("phone-popup-hidden");
    evt.preventDefault();
    $(".blurclass").addClass("blurclasson");
    $(" .popup-callme").removeClass("popup-dn");
    $("body").addClass("scroll-hidden");
    $(" .fixedbtn").addClass("popup-dn");
  });

  $(".popupform-close-wrap").on('click',function(evt){
    $(".blurclass").removeClass("blurclasson");
    $(" .popup-callme").addClass("popup-dn");
    $("body").removeClass("scroll-hidden");
    $(" .fixedbtn").removeClass("popup-dn");
  });

  $(".fixedbtn").on('click',function(evt){
    $(" .fixedbtn").addClass("popup-dn");
  });

$(".course-slider-item").each(function(){
    var youtubesrc = $(this).attr("data-youtubesrc");
    var nameList = youtubesrc.split(/[.\/<]/);
    // console.log(nameList);
    for (var i = nameList.length - 1; i >= 0; i--) {
      if(nameList[i].length == 11){
        $(this).attr("style","background-image: url(https://img.youtube.com/vi/" + nameList[i] + "/hqdefault.jpg");
      }
    }
  })
  if(window.screen.width < 600){
    $(".star2").attr("src","/wp-content/themes/Edison/img/Star3.svg")
  }else{
    $(".star2").attr("src","/wp-content/themes/Edison/img/star2.svg")
  }
  $(".popup-videoshow").on('click',function(evt){
    var youtubesrc = $(this).attr("data-youtubesrc");
    var nameList = youtubesrc.split(/[.\/<]/);
    for (var i = nameList.length - 1; i >= 0; i--) {
      if(nameList[i].length == 11){
        var youtubesrc2 = "https://www.youtube.com/embed/" + nameList[i] + "?rel=0&autoplay=1";
        // console.log(youtubesrc2);
      }
    }
    $(".popup-video iframe").attr("src", youtubesrc2);
    $(".blurclass").addClass("blurclasson");
    $(" .popup-video").removeClass("popup-dn");
    $("body").addClass("scroll-hidden");
  });

  $(".popupform-close-wrap").on('click',function(evt){
    $(".blurclass").removeClass("blurclasson");
    $(" .popup-video").addClass("popup-dn");
    $(".popup-video iframe").attr("src", "");
    $("body").removeClass("scroll-hidden");
  });

  $(".sendpopup").on('click',function(evt){
    evt.preventDefault();
    let phone = $('.inputphone').val(); // Получаем значение input
    let age = $('.inputagei').val(); // Получаем значение age
    let regex = /^\+38[(\s]?[0]{1}[0-9]{2}[)\s]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{2}[-\s\.]?[0-9]{2}/g;
    if(!regex.test(phone)){
      console.log('Не соответствует');
      $(".inputphonehelp").addClass("uncorrect");
      $(".inputphonehelp").text("*номер телефона не корректный ");
    }else{
       $(".inputphonehelp").removeClass("uncorrect");
       $(".inputphonehelp").text("*введите ваш телефон");
        if(age<2 || age>99){
       $(".agencorrect").addClass("uncorrect");
       $(".inputage").addClass("inputage-wrong");
     }else{
      $(".agencorrect").removeClass("uncorrect");
      $(".inputage").removeClass("inputage-wrong");
      $(".popup-callme").addClass("popup-callme-phase2");
      
      //send
     }
    };
  });
  $(".programs-sec1-wrap-item-hover").on('click',function(evt){
    var findtaxonomythis = $(this).children(".programs-sec1-wrap-item-p1").text();
    $(".findtaxonomy").each(function(){
      if($(this).text() == findtaxonomythis){
        $('html, body').animate({
            scrollTop: $(this).offset().top  // класс объекта к которому приезжаем
        }, 1000);
      }
    })
  });
  var arrow = "<img src='/wp-content/themes/Edison/img/next-arrow.png' class='slick-next slick-arrow'>";
  $('.course-slider-wrap').slick({
  infinite: true,
  slidesToShow: 3,
  draggable:false,
  // autoplay: true,
  // autoplaySpeed: 5000,
  nextArrow: arrow,
  responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          draggable:true,
        }
      }]
});
  $('.programs-sec1-wrap').slick({
  infinite: true,
  slidesToShow: 3,
  draggable:false,
  nextArrow: arrow,
   responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          draggable:true,
        }
      }]
});
    $('.news-pagebg2-recomend-wrap').slick({
  infinite: true,
  slidesToShow: 3,
  draggable:false,
  nextArrow: arrow,
  responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          draggable:true,
        }
      }]
});
    $('.programs-sec2-wrap-slider').slick({
  infinite: true,
  slidesToShow: 2,
  draggable:false,
  // nextArrow: "<img src='../wp-content/themes/Edison/img/next-arrow.png' class='slick-next slick-arrow'>",
  responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          draggable:true,
        }
      }]
});
    $('.news-sec1-wrap').slick({
  infinite: true,
  slidesToShow: 3,
  draggable:false,
  nextArrow: arrow,
  responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          draggable:true,
        }
      }]
});
  
  var elems=document.getElementsByClassName('slidersec1-slide');
  var elemswrap=document.getElementsByClassName('sec1-slider-wrap');
  var lnth = $(elemswrap).children().length;
  for(var i = 0; i<lnth;){
    $(elems.item(i)).addClass('sec1-slide'+i);
    i++;
  }

$(".sec1-slider-next").on("click",function(){
      var b = elems.item(0).className;
      for(i = 0;i<lnth;){
        if(i==lnth-1){
          elems.item(i).className = b;
        }else{
          elems.item(i).className = elems.item(i+1).className;
        }
        i++;
      }

      $(".sec1-slider-bgslide2").addClass("sec1-slider-bgslide2-move");
      $(".sec1-slider-bgslide1").addClass("sec1-slider-bgslide2");
      $(".sec1-slider-bgslide1").removeClass("sec1-slider-bgslide1");
      setTimeout(function (){
        $(".sec1-slider-bgslide2-move").addClass("sec1-slider-bgslide1");
        $(".sec1-slider-bgslide2-move").removeClass("sec1-slider-bgslide2");
        $(".sec1-slider-bgslide2-move").removeClass("sec1-slider-bgslide2-move");
      }, 0);

    });
$(".sec1-slider-prev").on("click",function(){

      var e =elems.length;
      var b = elems.item(e-1).className;
      for(i = e;i>0;){
        i--;
        if(i==0){
          elems.item(i).className = b;
        }else{
          elems.item(i).className = elems.item(i-1).className;
        }
      }
      
      $(".sec1-slider-bgslide1").addClass("sec1-slider-bgslide1-move");
      $(".sec1-slider-bgslide2").addClass("sec1-slider-bgslide1");
      $(".sec1-slider-bgslide2").removeClass("sec1-slider-bgslide2");
      setTimeout(function (){
        $(".sec1-slider-bgslide1-move").addClass("sec1-slider-bgslide2");
        $(".sec1-slider-bgslide1-move").removeClass("sec1-slider-bgslide1");
        $(".sec1-slider-bgslide1-move").removeClass("sec1-slider-bgslide1-move");
      }, 0);
      
      
    });

  var elems2=document.getElementsByClassName('slidersec2-slide');
  var elemswrap2=document.getElementsByClassName('sec2-slider-wrap');
  var lnth2 = $(elemswrap2).children().length;
  console.log(lnth2);
  for(var i = 0; i<lnth2;){
    $(elems2.item(i)).addClass('sec2-slide'+i);
    i++;
  }

$(".sec2-slider-prev").on("click",function(){

      var c = elems2.item(0).className;
      for(i = 0;i<lnth2;){
        if(i==lnth2-1){
          elems2.item(i).className = c;
        }else{
          elems2.item(i).className = elems2.item(i+1).className;
        }
        i++;
      }
    });
$(".sec2-slider-next").on("click",function(){
      d=elems2.length;
      var c = elems2.item(d-1).className;
      // console.log(c);
      for(i = d;i>0;){
        i--;
        if(i==0){
          elems2.item(i).className = c;
        }else{
          elems2.item(i).className = elems2.item(i-1).className;
        }
        
      }
    });

var starsval = $(".stars-numb").text();
for(i = 0;i < starsval;i++){
  $(".stars").children(".star-item").eq(i).addClass("star-active");
}

$(".textDiv_Seconds span").on("change",function(){
});
a = document.querySelectorAll('.textDiv_Seconds > span').innerHTML;

$('#loadmore').click(function(evt){
  evt.preventDefault();
  console.log(posts_obj.current_lang);
  console.log(123);
  $(this).children(a).text('Загружаю...').append(posts_obj.spinner); // изменяем текст кнопки, вы также можете добавить прелоадер
  var data = {
     'action': 'loadmore',
     'query': posts_obj.posts_count,
     'page' : posts_obj.current_page,
     'lang' : posts_obj.current_lang
  };
  $.ajax({
     url:  posts_obj.ajaxurl, // обработчик
     data: data, // данные
     type: 'POST', // тип запроса
     success:function(data){
        if( data ) {
           $('#loadmore').before(data); // вставляем новые посты
           $('#loadmore').children(a).html("Загрузить <b>больше</b>");
           posts_obj.current_page++; // увеличиваем номер страницы на единицу
           if (posts_obj.current_page == posts_obj.max_pages) $("#loadmore").remove(); // если последняя страница, удаляем кнопку
           ibg();
        } else {
           $('#loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
     }
  });
  // setTimeout(ibg, 500);
});
if ($(window).width() < 600) {
    $('.programs-sec2-wrap').slick({
      // centerMode: true,
      // dots: true,
      infinite: false,
      arrows:false,
      // speed: 100,
      slidesToShow: 1
    });
  } else {
    $("#items.slick-initialized").slick("unslick");
  }
});