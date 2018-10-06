
    </br>
    
    <div class="d-block p-2 bg-light">
        
     <div class="dark">
     <h2> Login </h2>
     </div>
        
   </br>
      <?php echo form_open('login/autenticar');?>
     
        
      <label>Usuario:</label> </br>
      <input  class="form-control" name="user" type="text" required/>
      <p> </p>
      
      <label>Senha:</label> </br>
      <input  class="form-control" name="senha" type="password" required/>
      <br>
      
      <input class="btn btn-outline-dark" type="submit" value="logar"/>
      
       <?php form_close();?>