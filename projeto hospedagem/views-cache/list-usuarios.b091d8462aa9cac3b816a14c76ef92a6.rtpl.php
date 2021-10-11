<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuários Cadastrados</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
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
            <div class="col-sm-12 row busca">
            <div class="form-group col-md-7">
              <label>Buscar*</label>
              <input type="text" class="form-control" placeholder="Faça aqui sua busca por modelo ou marca">
            </div>
           
            <div class="form-group col-md-2 d-flex align-items-end">
              <input type="submit" value="Buscar" class="btn btn-primary form-control">
            </div>
          </div>
        
  
            <table class="table mt-3">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  
                  <td><?php echo htmlspecialchars( $value1["txtNamePerson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["txtEmail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td class="botao"><a href="/admin/usuarios/<?php echo htmlspecialchars( $value1["idtblPerson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-primary btn-sm">Alterar <i class="fas fa-edit"></i></button></a></td>
                  <td class="botao"><a href="/admin/usuarios/<?php echo htmlspecialchars( $value1["idtblPerson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><button class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
               
                </tr>
                <?php } ?>
                
               
             
               
              
        
              </tbody>
            </table>
           
          
        
        
          <!-- ./col -->
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->