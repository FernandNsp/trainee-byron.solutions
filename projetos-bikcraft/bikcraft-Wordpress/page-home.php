<?php
// Template Name: Home
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <section class="introducao">
         <div class="container">
            <h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_introducao'); ?></h1>

            <blockquote data-anime="800" class="fadeInDown quote-externo">
               <p><?php the_field('quote_introducao'); ?></p>
               <cite><?php the_field('citacao_introducao'); ?></cite>
            </blockquote>

            <a href="<?php bloginfo('url'); ?>" data-anime="1200" class="fadeInDown btn">Orçamento</a>
         </div>
      </section>
      <!-- Fecha Introducao -->

      <section class="produtos container fadeInDown" data-anime="1600">
         <h2 class="subtitulo">Produtos</h2>
         
         <ul class="produtos_lista">
            <?php
               $args = array (
                  'post_type' => 'produtos'
               );
               $the_query = new WP_Query ( $args );
            ?>
            
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <li class="grid-1-3">
                     <a href="<?php the_permalink(); ?>">
                        <div class="produto_icone">
                           <img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>">
                        </div>
                     </a>

                     <h3><?php the_title(); ?></h3>
                     <p><?php the_field('resumo_produto'); ?></p>
               </li> 
            <?php endwhile; else: endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
         </ul>
         
         <div class="call">
            <p><?php the_field('call_produtos'); ?></p>
            <a href="<?php bloginfo('url'); ?>" class="btn btn-preto">Produtos</a>
         </div>
      </section>
      <!-- Fecha Produtos -->

      <section class="portfolio">
         <div class="container">
            <h2 class="subtitulo">Portfólio</h2>
            
            <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
         </div>
      </section>
      <!-- Fecha Portfolio -->

      <?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
      <!-- Fecha Qualidade -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>