// Html carregar
$(document).ready(function(){

   // Parallax
   setTimeout(function(){
      $('.back-star').parallax({imageSrc: './assets/img/estrela2.png'});
   }, 250);

   // Scroll
   let navBtn = $('.nav-item');

   let bannerSection = $('#mainSlider');
   let comicsSection = $('#comics');
   let noticiasSection = $('#news-main');
   let contactSection = $('#contact');

   let scrollTo = '';

   $(navBtn).click(function(){
      let btnId = $(this).attr('id');

      if(btnId == 'comics-menu'){
         scrollTo = comicsSection;
      }else if(btnId == 'news-menu'){
         scrollTo = noticiasSection;
      }else if(btnId == 'contact-menu'){
         scrollTo = contactSection;
      }else{
         scrollTo = bannerSection;
      }

      $([document.documentElement, document.body]).animate({
         scrollTop: $(scrollTo).offset().top - 70
      }, 1400);
   });
});