<?php 
   add_action('cmb2_admin_init', 'cmb2_fields_background');
   
   function cmb2_fields_background(){
      $cmb = new_cmb2_box([
         'id' => 'background_box',
         'title' => 'Background e Subtitulo',
         'object_types' => ['page'],
         'show_on' => [
           'key' => 'page-template',
           'value' => ['page-sobre.php', 'page-produtos.php', 'page-portfolio.php', 'page-contato.php'],
         ],
      ]);

      $cmb->add_field([
         'name' => 'Subtítulo',
         'id' => 'subtitulo',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Imagem Background',
         'desc' => 'Imagem que ficará atrás do subtitulo',
         'id' => 'background_interno',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);
   }
?>