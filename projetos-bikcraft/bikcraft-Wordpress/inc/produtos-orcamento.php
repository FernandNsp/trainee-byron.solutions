<?php
   $contato = get_page_by_title('contato')->ID;
   $produtos = get_page_by_title('produtos')->ID;
?>

<section class="orcamento">
   <div class="container">
      <h2 class="subtitulo">Orçamento</h2>

      <form id="form_orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="form grid-8 formphp">
         <label for="nome">Nome</label>
         <input type="text" name="nome" id="nome" required>

         <label for="email">E-mail</label>
         <input type="email" name="email" id="email" required>

         <label for="telefone">Telefone</label>
         <input type="text" name="telefone" id="telefone">

         <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
         <input type="text" class="nao-aparece" name="leaveblank">
         <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
         <input type="text" class="nao-aparece" name="dontchange" value="http://">

         <label for="mensagem">Mensagem</label>
         <textarea name="mensagem" id="mensagem" required></textarea>

         <button id ="enviar" name="enviar" type="submit" class="btn">Enviar</button>
      </form>

      <div class="orcamento_dados grid-8">
         <h3>Dados</h3>
         <span><?php the_field('telefone', $contato); ?></span>
         <span><?php the_field('email', $contato); ?></span>

         <h3>Monte a sua Bikecraft</h3>
         <p>Escolha as especificações:</p>
         <?php the_field('itens_orcamento', $produtos); ?>
      </div>
   </div>
</section>

