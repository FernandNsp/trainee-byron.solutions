<?php 
   add_action('cmb2_admin_init', 'cmb2_fields_produtos_single');

   function cmb2_fields_produtos_single(){
      $cmb = new_cmb2_box([
         'id' => 'single_produtos_box',
         'title' => 'Single Produtos',
         'object_types' => ['produtos'],
      ]);

      $cmb->add_field([
         'name' => 'Foto Produto 1',
         'desc' => 'min: 640px X 250px',
         'id' => 'foto_principal',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      $cmb->add_field([
         'name' => 'Icone Produto',
         'id' => 'icone_produto',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      $cmb->add_field([
         'name' => 'Foto Produto 2',
         'desc' => 'min: 460px X 280px',
         'id' => 'foto_secundaria',
         'type' => 'file',
         'options' => [
           'url' => false,
         ],
      ]);

      $cmb->add_field([
         'name' => 'Resumo Produto',
         'desc' => 'Irá aparecer apenas na Home',
         'id' => 'resumo_produto',
         'type' => 'text',
      ]);
   }
?>