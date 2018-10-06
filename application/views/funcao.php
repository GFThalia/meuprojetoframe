
              
 <br>
 <br>
 
<div class="d-block p-2 bg-light">
 
   <h2>Funcao</h2>
   <?php echo form_open('funcao/inserir'); ?>
   <br>
   
   <div class="form-group">
    
       <label for="nomefuncao">Insira aqui a função:</label>
       <br>
       <input class="form-control" id="nomefuncao" name="nomefuncao" type="text" required/>
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
                       <th scope="col">Nome Função</th>
                       <th scope="col">Funções</th>
                   </tr>
               </thead>
               <tbody>
                   <?php if ($funcao == false): ?>
                       <tr><td>Nenhum função encontrado</td></tr>
                   <?php else: ?>
                       <?php foreach ($funcao as $row): ?>
                           <tr>
                               <td><?php echo $row->nomefuncao; ?></td>
                               <td>
                                   <a href="<?php
                                   echo base_url() .
                                   'funcao/editar/' . $row->idfuncao;
                                   ?>">Editar</a>
                                   |
                                   <a href="<?php
                                   echo base_url() .
                                   'funcao/excluir/' . $row->idfuncao;
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
 