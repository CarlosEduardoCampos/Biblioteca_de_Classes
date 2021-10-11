<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Imóveis</h1>
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
                  <th scope="col">REF.</th>
                  <th scope="col">Imóvel</th>
                  <th scope="col">Tipo Imóvel</th>
                  <th scope="col">Tipo Negócio</th>
                  <th scope="col">Cidade</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($imoveis) && ( is_array($imoveis) || $imoveis instanceof Traversable ) && sizeof($imoveis) ) foreach( $imoveis as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  <td><?php echo htmlspecialchars( $value1["fkRef"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["txtNameProperty"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["nomeTipoImovel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["nomeTipoNegocio"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["txtCity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td class="botao"><a href="/administramulti/imoveis/<?php echo htmlspecialchars( $value1["idProperty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-primary btn-sm">Alterar <i class="fas fa-edit"></i></button></a></td>
                  <td class="botao"><a href="/administramulti/imoveis/deletar/<?php echo htmlspecialchars( $value1["idProperty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
                </tr>
                <?php } ?>
               
                
               
             
               
              
        
              </tbody>
            </table>
            
            <br>
            <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-2">
              <a href="/admin/cadastrar-propriedade" class="btn btn-success">Adicionar Imóvel</a> 
                      </div>
                    </div>
          <!-- ./col -->
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->