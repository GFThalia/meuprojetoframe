
              
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
        <h2>Editar usuario</h2>
        <?php echo form_open('usuario/atualizar'); ?>
            <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
            
            <label>Nome</label>
            <input name="nomeusuario" type="text" value="<?php echo $usuarioEditar[0]->nomeusuario; ?>" required/>
            <p></p>
            
            <label>User</label>
            <input name="user" type="user" value="<?php echo $usuarioEditar[0]->user; ?>" required/>
            <p></p>
            
            <label>Senha</label>
            <input name="senha" type="password" required/>
            <p></p>
            
            <label>Tipo de perfil</label>
            <input name="perfilacesso" type="text" value="<?php echo $usuarioEditar[0]->perfilacesso; ?>" required/>
            <p></p>
       
            <input class="btn" type="submit" value="Salvar"/> 
        <?php form_close(); ?>
        <p><a href="<?php echo base_url().'usuario';?>">Cancelar</a></p>
    </body>
</html>
