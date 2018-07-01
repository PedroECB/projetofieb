<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <small>Edição/Remoção de ciclo</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-home"></i> Início</a></li>
    <li><a href="#">Ciclos</a></li>
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

        

            


      





          <!-- /.box-body -->
          <div class="box-footer">
           <div class="col-md-12"> 
            <button type="submit" class="btn btn-primary "><b><i class="fa fa-save"></i>  SALVAR</b></button>
            <div class="navbar-right">
              <a href="/admin/ciclos/<?php echo htmlspecialchars( $ciclo["idCiclo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><button onclick="return confirm('Ao remover um ciclo todas as visitas associadas a ele serão excluídas. Deseja realmente remover este ciclo?');" type="button" class="btn btn-danger "><b><i class="fa fa-close"></i> REMOVER CICLO</b></button></a>
            </div>
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
