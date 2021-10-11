<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contratos</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <div class="card-body col-sm-12">
           
           
  
            <table class="table mt-3">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Data Inicio</th>
                  <th scope="col">Data Fim</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($contratos) && ( is_array($contratos) || $contratos instanceof Traversable ) && sizeof($contratos) ) foreach( $contratos as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  <td><?php echo htmlspecialchars( $value1["idContrato"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["txtProcesso"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["dtInicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["dtFim"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td class="botao"><a href="/admin/editar-contratos/<?php echo htmlspecialchars( $value1["idContrato"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-primary btn-sm">Alterar <i class="fas fa-edit"></i></button></a></td>
                  <td class="botao"><a href="/admin/deletar-contratos/<?php echo htmlspecialchars( $value1["idContrato"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
            
            <br>
            <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
              <a href="/admin/cadastrar-contratos" class="btn btn-success">Adicionar Nova Contratos</a> 
                      </div>
                    </div>
          <!-- ./col -->
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->