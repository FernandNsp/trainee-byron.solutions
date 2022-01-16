<?php
// Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
      <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
      <!-- Fecha Introducao -->

      <section data-anime="1200" class="container fadeInDown" data-slide="quote">
         <?php 
            $quote_portfolio = get_field('quote_portfolio');
            if(isset($quote_portfolio)) { foreach($quote_portfolio as $quote) {
         ?>
            <blockquote class="quote_clientes">
               <p><?php echo $quote['quote']; ?></p>
               <cite><?php echo $quote['nome_quote']; ?></cite>
            </blockquote>
         <?php } } ?>
      </section>

      <section data-anime="1200" class="portfolio fadeInDown">
         <div class="container"> 
            <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
         </div>
      </section>
      <!-- Fecha Portfolio -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>