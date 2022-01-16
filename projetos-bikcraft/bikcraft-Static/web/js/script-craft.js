if(window.SimpleSlide){
   new SimpleSlide({
      slide: "quote",
      time: 6000
   });
   
   new SimpleSlide({
      slide: "portfolio",
      nav: true,
      time: 6000
   });
}

if(window.SimpleAnime){
   new SimpleAnime();
}

if(window.SimpleForm){
   new SimpleForm({
      form: ".formphp",
      button: "#enviar",
      erro: "<div id='form-erro'><h2>Erro no envio</h2><p>Um erro ocorreu, tente para o email contato@bikcraft.com</p></div>", // mensagem de erro
      sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve entraremos em contato. Verifique o span.</p></div>", // mensagem sucesso
   });
}