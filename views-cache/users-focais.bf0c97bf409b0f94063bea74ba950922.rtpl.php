<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <small><b>PONTOS FOCAIS CADASTRADOS</b></small>
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-xs"><li><a href="/admin"><i class="fa fa-home"></i> Início</a></li></button>
    <button class="btn btn-xs"><li class="active"><a href="/admin/users">Usuários</a></li></button>
    <button class="btn btn-xs"><li class="active"><a href="/admin/users-focais">Pontos Focais</a></li></button>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
            
            <div class="box-header">
              <a href="/admin/users-focais/create" class="btn btn-primary"><b>NOVO PONTO FOCAL</b></a>
               <div class="box-tools" style="">
                  <form action="/admin/users-focais">
                  <div class="input-group input-group-sm" style="width: 300px;top:6px;">
                    <input type="text" name="search" class="form-control pull-right" placeholder="Buscar" value="">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                
                </form>
              </div>
            </div>

            <div class="box-body no-padding">
              <table class="table table-striped table-bordered text-center table-responsive">
                <thead>
                  <tr>
                   <!-- <th style="width: 120px">RG</th>-->
                    <th style="width: 100px" class="text-primary">Nome</th>   
                    <th style="width: 85px" class="text-primary">Cargo</th>
                    <th style="width: 85px" class="text-primary">Origem</th>
                   <!-- <th>E-mail</th>-->
                    <th style="width: 120px" class="text-primary md2-some">E-mail</th>
                    <th style="width: 85px" class="text-primary md2-some">Telefone</th>
                    <th style="width: 100px" class="text-primary">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["nome_func"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["cargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><b><?php echo htmlspecialchars( $value1["origem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td/>
                  
                    <td class="md2-some"><!--<?php if( $value1["nivel_acesso"] == 1 ){ ?>Administrador<?php } ?>
                        <?php if( $value1["nivel_acesso"] == 2 ){ ?>Ponto Focal<?php } ?>
                        <?php if( $value1["nivel_acesso"] == 3 ){ ?>Comum<?php } ?>-->

                        <?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                      </td>
                      <td class="md2-some"><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>
                      <a href="/admin/users/<?php echo htmlspecialchars( $value1["idFuncionario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-info btn-xs">&nbsp&nbsp&nbsp&nbsp<i class="fa fa-info"></i> <b>&nbsp Info &nbsp&nbsp&nbsp&nbsp&nbsp</b></a>
                      <a href="/admin/users/<?php echo htmlspecialchars( $value1["idFuncionario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este usuário?')" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> <b>Remover</b></a>
                    </td>
                  </tr>
                 
                  <?php } ?>
                 <!--  <tr>
                    <td>1431692387</td>
                    <td>Vinicius dos Santos Lima</td>
                    <td>Executivo</td>
                    <td>FIEB</td>
                    <td>Administrador</td>
                    <td>
                      <a href="/admin/users/" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/users//delete" onclick="return confirm('Deseja realmente excluir este usuário?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
