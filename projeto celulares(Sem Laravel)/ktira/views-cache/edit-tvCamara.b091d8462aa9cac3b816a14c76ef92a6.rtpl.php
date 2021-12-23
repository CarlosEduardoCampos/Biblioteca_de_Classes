<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TV Câmara</h1>
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
              <form method="POST" action="/admin/editar-tvCamara/<?php echo htmlspecialchars( $tvCamara["idTv"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputTitulo">Título</label>
                    <input type="text" class="form-control" id="exampleInputTitulo" name="txtTitulo"
                      value="<?php echo htmlspecialchars( $tvCamara["txtTitulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputLinha">Link</label>
                    <input type="text" class="form-control" id="exampleInputLinha" name="txtLinha"
                      value="<?php echo htmlspecialchars( $tvCamara["txtLinha"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputDescricao">Descrição</label>
                    <textarea name="txtDescricao" class="form-control" rows="5"><?php echo htmlspecialchars( $tvCamara["txtDescricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
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