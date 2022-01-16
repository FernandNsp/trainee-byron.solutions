<?php 
   add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

   function cmb2_fields_portfolio(){
      $cmb = new_cmb2_box([
         'id' => 'portfolio_box',
         'title' => 'ÁREA PORTFÓLIO',
         'object_types' => ['page'],
         'show_on' => [
           'key' => 'page-template',
           'value' => ['page-portfolio.php'],
         ],
      ]);

      $quote_portfolio = $cmb->add_field([
         'name' => 'SEÇÃO QUOTES',
         'id' => 'quote_portfolio',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar quote',
            'remove_button' => 'Remover',
         ],
      ]);

      $cmb->add_group_field($quote_portfolio, [
         'name' => 'Citação',
         'id' => 'quote',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($quote_portfolio, [
         'name' => 'Autor citação',
         'id' => 'nome_quote',
         'type' => 'text',
      ]);

      $item_portfolio = $cmb->add_field([
         'name' => 'SEÇÃO IMAGENS',
         'id' => 'item_portfolio',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar imagem',
            'remove_button' => 'Remover',
         ],
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Imagem 1',
         'id' => 'img_1',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Descrição imagem 1',
         'desc' => 'Alt da imagem',
         'id' => 'img_descricao1',
         'type' => 'text',
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Imagem 2',
         'id' => 'img_2',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Descrição imagem 2',
         'desc' => 'Alt da imagem',
         'id' => 'img_descricao2',
         'type' => 'text',
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Imagem 3',
         'desc' => 'Essa imagem é a maior.',
         'id' => 'img_3',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      $cmb->add_group_field($item_portfolio, [
         'name' => 'Descrição imagem 3',
         'desc' => 'Alt da imagem',
         'id' => 'img_descricao3',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Chamada Portfolio',
         'id' => 'chamada_portfolio',
         'type' => 'text',
      ]);
   }
?>