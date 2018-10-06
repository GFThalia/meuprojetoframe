
              
 <br>
 <br>
 
<div class="d-block p-2 bg-light">
       <div class="dark"> <h2>Usuario</h2> </div>
       
   <?php echo form_open('usuario/inserir'); ?>
   <br>
   
   <div class="form-group">
    
       <label for="nomeusuario">Usuario:</label>
       <br>
       <input class="form-control" id="nomeusuario" name="nomeusuario" type="text" required/>
       <br>
       
       <label for="user">Login:</label>
       <br>
       <input class="form-control" id="user" name="user" type="text" required/>
       <br>
       
       <label for="senha">Senha:</label>
       <br>
       <input class="form-control" id="senha" name="senha" type="password" required/>
       <br>
       
       <label for="perfilacesso">Tipo de Perfil:</label>
       <br>
       <input class="form-control" id="perfilacesso" name="perfilacesso" type="text" required/>
       <br>
       
       
   </div>
   <input class="btn btn btn-outline-dark" type="submit" value="Salvar"/>
   <input class="btn btn btn-outline-dark" type="reset" value="Limpar"/>
   <br>
   <br>
    </div>
 
   <br>
   <br>    
<?php form_close(); ?>


   <div>
       <table>
           <caption></caption>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th scope="col">Nome usuario</th>
                       <th scope="col">usuario</th>
                   </tr>
               </thead>
               <tbody>
                   <?php if ($usuario == false): ?>
                       <tr><td>Nenhum função encontrado</td></tr>
                   <?php else: ?>
                       <?php foreach ($usuario as $row): ?>
                           <tr>
                               <td><?php echo $row->nomeusuario; ?></td>
                               <td>
                                   <a href="<?php
                                   echo base_url() .
                                   'usuario/editar/' . $row->idusuario;
                                   ?>">Editar</a>
                                   |
                                   <a href="<?php
                                   echo base_url() .
                                   'usuario/excluir/' . $row->idusuario;
                                   ?>">Excluir</a>
                               </td>
                           </tr>                  
                       <?php endforeach; ?>
                   <?php endif; ?>
               </tbody>
           </table>
           <br> 
             <a class="btn btn btn-outline-dark" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
   </div>
          </div>
          </div>
</div>
