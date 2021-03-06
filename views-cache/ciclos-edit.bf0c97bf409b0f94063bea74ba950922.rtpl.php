<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <small><b>EDIÇÃO DE CICLO</b></small>
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-xs"><li><a href="/admin"><i class="fa fa-home"></i> Início</a></li></button>
    <button class="btn btn-xs"><li><a href="#">Ciclos</a></li></button>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
         <div class="col-md-12"> 
          <center><h3 class="box-title" style="vertical-align: middle;"><b>EDITAR CICLO</b></h3>
            <a href="javascript:history.back();"><button style="margin-left: 40px;" class="btn btn-link navbar-right"><b>Cancelar</b></button></a>
          </center>
          <!--<a href="javascript:history.back()" style="margin-left: 60px;"><button type="button" class="btn btn-link navbar-right"><b>Voltar</b></button></a>-->
         </div> 
        </div>
        <!-- /.box-header -->
        <!-- form start -->
      <form role="form" action="/admin/ciclos/<?php echo htmlspecialchars( $ciclo["idCiclo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" id="formSindicato">
        <div class="box-body">


          <div class="form-group">
              <label for="campoNomeCiclo">Ciclo: <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="campoNomeCiclo" name="nomeCiclo" placeholder="Ex: 1/2/Primeiro/Segundo" autofocus="" required="" maxlength="20" value="<?php echo htmlspecialchars( $ciclo["nome_ciclo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>





 <div class="form-group">
      <label for="cDataInicio">Data de Início: <span class="text-danger">*</span></label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

              <input type="date" class="form-control" id="cDataInicio" name="dataInicio" placeholder="dd/mm/aaaa" autofocus="" required="" maxlength="10" value="<?php echo htmlspecialchars( $ciclo["data_inicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            
          </div>
     </div>

  <br>

   <div class="form-group">
      <label for="cDataTermino">Previsão de término: <span class="text-danger">*</span></label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>

              <input type="date" class="form-control" id="cDataTermino" name="dataTermino" placeholder="dd/mm/aaaa" required="" maxlength="10" value="<?php echo htmlspecialchars( $ciclo["data_termino"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            
          </div>
     </div>

        
          <div class="box-header">
        <h4 class="text-center text-primary" style="margin-left: -10%;"><b>METAS</b></h4>
        <hr>

<div class="row">
    <div class="col-md-6">

      <div class="form-group">
        <label for="cIndustriasVisitadas">Indústrias Visitadas: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cIndustriasVisitadas" name="industriasVisitadas" placeholder="Digite apenas números" max="10000" min="0" value="<?php echo htmlspecialchars( $ciclo["industrias_visitadas"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
      </div>

    </div>


    <div class="col-md-6">
       <div class="form-group">
        <label for="cNovasAssoc">Novas Associações: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cNovasAssoc" name="novasAssoc" placeholder="Digite apenas números" max="100000" min="0" value="<?php echo htmlspecialchars( $ciclo["novas_associacoes"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
       </div>

    </div>
</div>
  

  <div class="row">

    <div class="col-md-6">
        
       <div class="form-group">
        <label for="cPropostasDemandadas">Propostas Demandadas: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cPropostasDemandadas" name="propostasDemandadas" placeholder="Digite apenas números" max="100000" min="0" value="<?php echo htmlspecialchars( $ciclo["propostas_demandadas"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
       </div>

    </div>

    <div class="col-md-6">
    
       <div class="form-group">
        <label for="cInteresseEmAssoc">Interesse em Associar-se: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cInteresseEmAssoc" name="interesseEmAssoc" placeholder="Digite apenas números" max="100000" min="0" value="<?php echo htmlspecialchars( $ciclo["interesse_em_assoc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
       </div>
       
    </div>
  </div>

    <div class="row">

    <div class="col-md-6">
        
       <div class="form-group">
        <label for="cContratosAssin">Contratos Assinados: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cContratosAssin" name="contratosAssin" placeholder="Digite apenas números" max="100000" min="0" value="<?php echo htmlspecialchars( $ciclo["contratos_assin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
       </div>

    </div>

    <div class="col-md-6">
    
       <div class="form-group">
        <label for="cReceita">Receita: <span class="text-danger">*</span></label>  
         <input type="number" class="form-control" id="cReceita" name="receita" placeholder="R$" max="100000000000" min="0" value="<?php echo htmlspecialchars( $ciclo["receitas"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
       </div>
       
    </div>
  </div>


     




     </div>
            


      





          <!-- /.box-body -->
          <div class="box-footer">
           <div class="col-md-12"> 
            <button type="submit" class="btn btn-primary "><b><i class="fa fa-save"></i>  SALVAR</b></button>
            <!-- <div class="navbar-right">
              <a href="/admin/ciclos/<?php echo htmlspecialchars( $ciclo["idCiclo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><button onclick="return confirm('Ao remover um ciclo todas as visitas associadas a ele serão excluídas. Deseja realmente remover este ciclo?');" type="button" class="btn btn-danger "><b><i class="fa fa-close"></i> REMOVER CICLO</b></button></a>
            </div> -->
           </div> 
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

