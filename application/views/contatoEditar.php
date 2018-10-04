<!DOCTYPE html>
<div class="container">
          <div class=" row">
          <div class="col-lg-3 col-xs-1 col-sm-1"></div>
          <div class="col-lg-6 col-xs-10 co1-am-10">
              
 <br>
 <br>
 
<div class="d-block p-2 bg-light">
 
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $completo; ?> </title>
    </head>
    <body>
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar contato</h2>
        <?php echo form_open('contato/atualizar'); ?>
            <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
            <label>Nome</label>
            <input name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
            <p></p>
            <label>e-mail</label>
            <input name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
            <p></p>
            <!--<label>Funcao</label>
             <input name="funcao" type="text" value="<?php echo $contatoEditar[0]->nomefuncao; ?>" required/>
            <p></p> -->
            <input class="btn" type="submit" value="Salvar"/> 
        <?php form_close(); ?>
        <p><a href="<?php echo base_url().'contato';?>">Cancelar</a></p>
    </body>
</html>
