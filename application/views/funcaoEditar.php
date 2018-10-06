
              
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
        <h2>Editar funcao</h2>
        <?php echo form_open('funcao/atualizar'); ?>
             <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>"> 
        
         <label>funcao</label>
            <input name="nomefuncao" type="text" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
                <input class="btn" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p><a href="<?php echo base_url().'funcao';?>">Cancelar</a></p>
    </body>
</html>
