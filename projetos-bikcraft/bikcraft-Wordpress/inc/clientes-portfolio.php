<?php $portfolio = get_page_by_title('portfolio')->ID; ?>

<ul class="portfolio_lista">
   
   <?php 
      $item_portfolio = get_field('item_portfolio', $portfolio);
      if(isset($item_portfolio)) { foreach($item_portfolio as $item_port){
   ?>
      <li class="grid-8">
         <img src="<?php echo $item_port['img_1']; ?>" alt="<?php echo $item_port['img_descricao1']; ?>">
      </li>
      
      <li class="grid-8">
         <img src="<?php echo $item_port['img_2']; ?>" alt="<?php echo $item_port['img_descricao2']; ?>">
      </li>

      <li class="grid-16">
         <img src="<?php echo $item_port['img_3']; ?>" alt="<?php echo $item_port['img_descricao3']; ?>">
      </li>
   <?php } } ?>

</ul>

<?php if (!is_page('portfolio')){ ?>
   <div class="call">
      <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
      <a href="<?php bloginfo('url'); ?>" class="btn">Portfólio</a>
   </div>
<?php } ?>