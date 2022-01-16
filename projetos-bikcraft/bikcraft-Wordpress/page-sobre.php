<?php
// Template Name: Sobre
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
      <!-- Fecha Introducao -->

      <section data-anime="1200" class="missao_sobre container fadeInDown">
         <div class="grid-10">
            <h2 class="subtitulo-interno">História, Missão e Visão</h2>
            
            <p><?php the_field('missao'); ?></p>
            
            <p><?php the_field('visao'); ?></p>
         </div>

         <div class="grid-6">
            <h2 class="subtitulo-interno">Valores</h2>
            
            <?php the_field('valores'); ?>
         </div>

         <div class="grid-16 foto-equipe">
            <img src="<?php the_field('imagem_equipe'); ?>" alt="Equipe Bikecraft">
         </div>
      </section>
      <!-- Fecha Missao_Sobre -->

      <?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
      <!-- Fecha Qualidade -->
<?php endwhile; else: endif; ?> 

<?php get_footer(); ?>