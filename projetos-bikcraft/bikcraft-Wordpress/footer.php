<?php
   $contato = get_page_by_title('contato')->ID;
?>

      <div class="quebra">
         <blockquote class="quote-externo container">
            <p><?php the_field('quote_footer', $contato); ?></p>
            <cite><?php the_field('autor_quote_footer', $contato); ?></cite>
         </blockquote>
      </div>
      <!-- Fecha Quebra -->

      <footer>
         <div class="footer">
            <div class="container">
               <div class="grid-8 footer_historia">
                  <h3>Nossa História</h3>
                  <p><?php the_field('nossa_historia', $contato); ?></p>
               </div>

               <div class="grid-4 footer_contato">
                  <h3>Contato</h3>
                  <ul>
                     <li>- <?php the_field('telefone', $contato); ?></li>
                     <li>- <?php the_field('email', $contato); ?></li>
                     <li>- <?php the_field('endereco_1', $contato); ?></li>
                  </ul>
               </div>

               <div class="grid-4 footer_redes">
                  <h3>Redes Sociais</h3>
                  <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
               </div>
            </div>
         </div>
         
         <div class="copy">
            <div class="container">
               <p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Alguns direitos reservados.</p>
            </div>
         </div>
      </footer>
      <!-- Fecha Footer -->

      <!-- Inicio WordPress Footer -->
      <?php wp_footer(); ?>
      <!-- Final WordPress Footer -->
   </body>
</html>