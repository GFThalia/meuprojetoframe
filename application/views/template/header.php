
<html>
    <head>
        <title>Meu Projeto Framework</title>
        <!--Bootstrap-->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
    
<!--       <div class="container">
      <div class=" row">
          <div class="col-lg-3 col-xs-1 col-sm-1"></div>
          <div class="col-lg-6 col-xs-10 co1-am-10"> -->
              
   <div class="container " >
      <div class=" row">
          <div class="col-lg-3 col-xs-1 col-sm-1"></div>
          <div class="col-lg-6 col-xs-10 co1-am-10">


     <?php if ($this->session->userdata('estou_logado')){?>
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="<?php echo base_url() . 'home'; ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href="<?php echo base_url() . 'home'; ?>">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() . 'funcao'; ?>"> Função <span class="sr-only">(current)</span></a>
      </li>
    </ul>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() . 'usuario'; ?>"> Usuarios <span class="sr-only">(current)</span></a>
      </li>
    </ul>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() . 'contato'; ?>"> Contatos <span class="sr-only">(current)</span></a>
      </li>
    </ul>
       <a class="btn btn-secondary" href="<?php echo base_url().'login/sair';?>">Sair</a>     
      </nav>
     <?php } ?>