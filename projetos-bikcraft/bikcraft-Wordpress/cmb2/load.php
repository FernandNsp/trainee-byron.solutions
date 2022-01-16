<?php 
   // Encurtar para the_fild()
   function get_field($key, $page_id = 0){
      $id = $page_id !== 0 ? $page_id : get_the_ID();
      return get_post_meta($id, $key, true);
   }

   function the_field($key, $page_id = 0){
      echo get_field($key, $page_id);
   }

   /*
      Para manter a organizacao, fiz os arquivos separados de functions, mas com o load eh possivel ser como um "include" e incluir estes arquivos dentro do functions usando a funcao:
      require_once get_template_directory() . '/cmb2/load.php';
   */

   require_once get_template_directory() . '/cmb2/sobre.php';
   require_once get_template_directory() . '/cmb2/portfolio.php';
   require_once get_template_directory() . '/cmb2/home.php';
   require_once get_template_directory() . '/cmb2/background.php';
   require_once get_template_directory() . '/cmb2/contato.php';
   require_once get_template_directory() . '/cmb2/produtos_single.php';
   require_once get_template_directory() . '/cmb2/produtos.php';
   require_once get_template_directory() . '/cmb2/seo.php';
?>