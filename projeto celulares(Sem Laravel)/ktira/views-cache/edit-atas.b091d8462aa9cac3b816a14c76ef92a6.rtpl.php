<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Atas</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/admin/cadastrar-atas/<?php echo htmlspecialchars( $atas["idAta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da Ata</label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomeAta" value="<?php echo htmlspecialchars( $atas["txtNomeAta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>     
                  
                  
                  <div class="form-group col-md-4">
                    <label for="exampleInputArquivo">Anexar Arquivo</label>
                    <input type="file" id="exampleInputArquivo" name="txtNomeArquivo">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer col-md-12 form-group">
                  <button type="submit" class="btn btn-primary form-control">Atualizar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         

       

          </div>
          <?php if( $atas["txtNomeArquivo"] ){ ?>
          <div class="col-md-12 d-flex justify-content-between align-items-center" style="margin-bottom: 20px;">
            <a href="/res/documentos/atas/<?php echo htmlspecialchars( $atas["txtNomeArquivo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank"><img src="/res/_img/pdf.png" width="100"> <?php echo htmlspecialchars( $atas["txtNomeArquivo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
            
            <a href="/admin/atas/removerFoto/<?php echo htmlspecialchars( $atas["idAta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-danger">Remover <i class="fas fa-trash"></i></a>
          </div>
          <?php } ?>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

