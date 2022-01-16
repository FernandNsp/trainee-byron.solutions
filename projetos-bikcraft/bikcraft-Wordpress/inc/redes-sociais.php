<?php $contato = get_page_by_title('contato')->ID; ?>

<ul>
   <?php 
      $redes_sociais = get_field('redes_sociais', $contato);
      if(isset($redes_sociais)) { foreach($redes_sociais as $redes){
   ?>
      <li>
         <a href="<?php echo $redes['link_social']; ?>" target="_blank" rel="external">
            <img src="<?php echo $redes['imagem_social']; ?>" alt="<?php echo $redes['nome_social']; ?>">
         </a>
      </li>
   <?php } } ?>
</ul>