  <div class="container " >
      <div class=" row">
          <div class="col-lg-3 col-xs-1 col-sm-1"></div>
          <div class="col-lg-6 col-xs-10 co1-am-10"
        <?php
        // put your code here
        
//        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
    </br>
  
   <!-- <div class="bg-light"> -->
        
    <div class="d-block p-2 bg-light">
        <div class="dark">
     <h2> Contato </h2> 
        </div>
   </br>
      <?php echo form_open('contato/inserir');?>
     
        
      <label>Nome:</label> </br>
      <input  class="form-control" name="nome" type="text" required/>
      <p> </p>
      <label>E-mail:</label> </br>
      <input class="form-control" name="email" type="email"  required/>

            </br>
            </br>
          <!-- <div class="bg clearfix float-right"> -->
            <input class="btn btn-outline-dark" type="submit" value="Salvar"/>
            <input class="btn btn-outline-dark" type="reset" value="Limpar"/>
            </br>
            </br>
    </div> 
     <!-- </div> -->
     </br>
            </br>
            </br> 
      

        <?php form_close();?>
        <p></p>
        <div>
            <table id="contatos" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="table-white">
                    <th>Nome</th> 
                    <th>E-mail</th>
                    <th>Função</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($contatos == FALSE): ?>
                        <tr><td>Nenhum contato encontrado!</td></tr>
                    <?php else: ?>
                        <?php foreach ($contatos as $row): ?>
                            <tr>
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 
                                            'contato/editar/' . $row->id; ?>">Editar</a>
                                    |
                                    <a href="<?php echo base_url() . ''
                                            . 'contato/excluir/' . $row->id; ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <br>
    
        <a type="button" class="btn btn btn-outline-dark" href= "<?php echo base_url().'home';?>">Voltar</a>
        </br>
              <input type="button" class="btn btn-outline-dark" id="botao1" value="copy"/>
              <input type="button" class="btn btn-outline-dark" id="botao2" value="excel"/>
              <input type="button" class="btn btn-outline-dark" id="botao3" value="dpf"/>
              <input type="button" class="btn btn-outline-dark" id="botao4" value="print"/>
          </div> 
          
          
          <script type="text/javascript">
              
           
        $(document).ready(function () {
        $('#contatos').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
            iDisplayLength: 10,
            dom: 'Bfrtip',
            buttons: [
            'copy',
            'excel',
            'pdf',
            'print'
            ]
             
        });
    });
</script>