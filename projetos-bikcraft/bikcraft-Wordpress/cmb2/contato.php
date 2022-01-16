<?php 
   add_action('cmb2_admin_init', 'cmb2_fields_contato');

   function cmb2_fields_contato(){
      $cmb = new_cmb2_box([
         'id' => 'contato_box',
         'title' => 'ÁREA CONTATO',
         'object_types' => ['page'],
         'show_on' => [
           'key' => 'page-template',
           'value' => ['page-contato.php'],
         ],
      ]);

      // Dados
      $cmb->add_field([
         'name' => 'Telefone',
         'id' => 'telefone',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Email',
         'id' => 'email',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Endereço Rua - Bairro',
         'id' => 'endereco_1',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Endereço Estado - País',
         'id' => 'endereco_2',
         'type' => 'text',
      ]);

      // Redes Sociais
      $redes_sociais = $cmb->add_field([
         'name' => 'SEÇÃO REDES',
         'id' => 'redes_sociais',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
           'sortable' => true,
           'add_button' => 'Adicionar Rede',
           'remove_button' => 'Remover',
         ],
      ]);

      $cmb->add_group_field($redes_sociais, [
         'name' => 'Nome da Rede Social',
         'id' => 'nome_social',
         'type' => 'text',
      ]);

      $cmb->add_group_field($redes_sociais, [
         'name' => 'Link da Rede Social',
         'id' => 'link_social',
         'type' => 'text',
      ]);

      $cmb->add_group_field($redes_sociais, [
         'name' => 'Imagem da Rede Social',
         'desc' => '(px X px)',
         'id' => 'imagem_social',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      // Mapa
      $cmb->add_field([
         'name' => 'Nome Mapa',
         'id' => 'texto_mapa',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Link Mapa',
         'id' => 'link_mapa',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Imagem Mapa',
         'id' => 'imagem_mapa',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      // Quote Footer
      $cmb->add_field([
         'name' => 'Quote Rodapé',
         'id' => 'quote_footer',
         'type' => 'textarea_small',
      ]);

      $cmb->add_field([
         'name' => 'Autor Quote',
         'desc' => 'Nome todo maiúsculo',
         'id' => 'autor_quote_footer',
         'type' => 'text',
      ]);
      
      // Nossa historia
      $cmb->add_field([
         'name' => 'Nossa História',
         'id' => 'nossa_historia',
         'type' => 'textarea_small',
      ]);
   }
?>