<?php 
   add_action('cmb2_admin_init', 'cmb2_fields_sobre');

   function cmb2_fields_sobre(){
      $cmb = new_cmb2_box([
         'id' => 'sobre_box',
         'title' => 'ÁREA SOBRE',
         'object_types' => ['page'],
         'show_on' => [
           'key' => 'page-template',
           'value' => ['page-sobre.php'],
         ],
      ]);

      // Missao, visao, valores
      $cmb->add_field([
         'name' => 'Missão',
         'id' => 'missao',
         'type' => 'textarea_small',
      ]);

      $cmb->add_field([
         'name' => 'Visão',
         'id' => 'visao',
         'type' => 'textarea_small',
      ]);

      $cmb->add_field([
         'name' => 'Valores',
         'id' => 'valores',
         'type' => 'wysiwyg',
      ]);

      $cmb->add_field([
         'name' => 'Imagem Equipe',
         'desc' => 'Tamanho ideal: 940px X 320px',
         'id' => 'imagem_equipe',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      // Qualidade
      $cmb->add_field([
         'name' => 'Titulo qualidade',
         'id' => 'titulo_qualidade',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Imagem logo',
         'desc' => 'Essa é a marca que fica na parte de qualidade.',
         'id' => 'logo_bikcraft',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      $item_qualidade = $cmb->add_field([
         'name' => 'SEÇÃO QUALIDADE',
         'id' => 'item_qualidade',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar qualidade',
            'remove_button' => 'Remover',
         ],
      ]);

      $cmb->add_group_field($item_qualidade, [
         'name' => 'Item qualidade',
         'id' => 'item_titulo',
         'type' => 'text',
      ]);

      $cmb->add_group_field($item_qualidade, [
         'name' => 'Descrição qualidade',
         'desc' => '(Max 110 caracteres)',
         'id' => 'item_descricao',
         'type' => 'textarea_small',
      ]);

      $cmb->add_field([
         'name' => 'Chamada Sobre',
         'id' => 'chamada_sobre',
         'type' => 'text',
      ]);
   }
?>