<?php $sobre = get_page_by_title('sobre')->ID; ?>

<section class="qualidade container">
   <h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre); ?></h2>
   <img src="<?php the_field('logo_bikcraft', $sobre); ?>"alt="Bikcraft">

   <ul class="qualidade_lista">
      <?php 
         $item_qualidade = get_field('item_qualidade', $sobre);
         if(isset($item_qualidade)) { foreach($item_qualidade as $item_qual){
      ?>
         <li class="grid-1-3">
            <h3><?php echo $item_qual['item_titulo']; ?></h3>
            <p><?php echo $item_qual['item_descricao']; ?></p>
         </li>
      <?php } } ?>
   </ul>

   <?php if(!is_page('sobre')){ ?>
      <div class="call">
         <p><?php the_field('chamada_sobre', $sobre); ?></p>
         <a href="<?php bloginfo('url'); ?>" class="btn-sobre btn btn-preto">Sobre</a>
      </div>
   <?php } ?>  
</section>