// Espera o documento html carregar todo
$(document).ready(function(){
   // Progress bar

   // A
   let containerA = document.getElementById("circleA");
   
   let circleA = new ProgressBar.Circle(containerA, {
      color: '#64Daf9',
      strokeWidth: 8,
      duration: 1400,
      from: {color: '#AAA'},
      to: {color: '#64Daf9'},

      step: function(state, circle){
         circle.path.setAttribute('stroke', state.color);

         let value = Math.round(circle.value() * 60);
         circle.setText(value);
      }
   });

   // B
   let containerB = document.getElementById("circleB");
   
   let circleB = new ProgressBar.Circle(containerB, {
      color: '#64Daf9',
      strokeWidth: 8,
      duration: 1600,
      from: {color: '#AAA'},
      to: {color: '#64Daf9'},

      step: function(state, circle){
         circle.path.setAttribute('stroke', state.color);

         let value = Math.round(circle.value() * 254);
         circle.setText(value);
      }
   }); 

   // C
   let containerC = document.getElementById("circleC");

   let circleC = new ProgressBar.Circle(containerC, {
      color: '#64Daf9',
      strokeWidth: 8,
      duration: 1800,
      from: {color: '#AAA'},
      to: {color: '#64Daf9'},

      step: function(state, circle){
         circle.path.setAttribute('stroke', state.color);

         let value = Math.round(circle.value() * 32);
         circle.setText(value);
      }
   }); 

   // D
   let containerD = document.getElementById("circleD");

   let circleD = new ProgressBar.Circle(containerD, {
      color: '#64Daf9',
      strokeWidth: 8,
      duration: 2000,
      from: {color: '#AAA'},
      to: {color: '#64Daf9'},

      step: function(state, circle){
         circle.path.setAttribute('stroke', state.color);

         let value = Math.round(circle.value() * 5243);
         circle.setText(value);
      }
   }); 

   // Iniciar quando o for visivel na página
   let dataAreaOffset = $('#data-area').offset();
   let stop = 0;

   $(window).scroll(function(e) {
      let scroll = $(window).scrollTop();

      if(scroll > (dataAreaOffset.top - 500) && stop == 0){
         circleA.animate(1.0);
         circleB.animate(1.0);
         circleC.animate(1.0);
         circleD.animate(1.0);

         stop = 1;
      }
   });

   // Parallax
   setTimeout(function(){
      $('#data-area').parallax({imageSrc: './img/cidadeparallax.png'});
      $('#apply-area').parallax({imageSrc: './img/pattern.png'});
   }, 250); // 250 milesimos, assegura que o parallax nao bugue a tela

   // Filtro do Portfolio
   $('.filter-btn').on('click', function(){
      // Mudar o active para o botao que foi clicado
      let type = $(this).attr('id');
      let boxes = $('.project-box');

      $('.main-btn').removeClass('active');
      $(this).addClass('active');

      // Mudar as imagens correspondentes a cada botao
      if(type == 'dsg-btn'){
         eachBoxes('dsg', boxes); // Classe do botao clicado, faz para todos
      }else if(type == 'dev-btn'){
         eachBoxes('dev', boxes);
      }else if(type == 'seo-btn'){
         eachBoxes('seo', boxes);
      }else{
         eachBoxes('all', boxes);
      }
   });

   function eachBoxes(type, boxes){
      if(type == 'all'){
         $(boxes).fadeIn();
      }else{
         $(boxes).each(function(){
            if(!$(this).hasClass(type)) { // Pega a classe dsg/dev/seo/all
               $(this).fadeOut('slow'); // Nao mostra as imagens
            }else{
               $(this).fadeIn(); // Mostras as imagems
            }
         });
      }
   }

   // Scroll 
   let navBtn = $('.nav-item');

   let bannerSection = $('#mainSlider');
   let aboutSection = $('#about-area');
   let servicesSection = $('#services-area');
   let teamSection = $('#team-area');
   let portfolioSection = $('#portfolio-area');
   let contactSection = $('#contact-area');

   let scrollTo = '';

   $(navBtn).click(function(){
      let btnId = $(this).attr('id');

      if(btnId == 'about-menu'){
         scrollTo = aboutSection;
      }else if(btnId == 'services-menu'){
         scrollTo = servicesSection;
      }else if(btnId == 'team-menu'){
         scrollTo = teamSection;
      }else if(btnId == 'portfolio-menu'){
         scrollTo = portfolioSection;
      }else if(btnId == 'contact-menu'){
         scrollTo = contactSection;
      }else{
         scrollTo = bannerSection;
      }

      $([document.documentElement, document.body]).animate({
         scrollTop: $(scrollTo).offset().top - 70
      }, 1500);
   });
});

