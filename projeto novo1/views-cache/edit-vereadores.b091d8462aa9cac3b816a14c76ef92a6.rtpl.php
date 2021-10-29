<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vereadores</h1>
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
              <form method="POST" action="/admin/editar-vereadores/<?php echo htmlspecialchars( $vereadores["idVereadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome do Vereador</label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomeVereador" value="<?php echo htmlspecialchars( $vereadores["txtNomeVereador"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

               

                  <div class="form-group col-md-3">
                    <label for="exampleInputNacimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="exampleInputNacimento" name="dtNascimento" value="<?php echo htmlspecialchars( $vereadores["dtDataNascimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="exampleInputStatus">Status</label>
                    <select name="boolStatus" id="exampleInputStatus" class="form-control">
                      <option value=" "> SELECT  </option>
                      <option value="0" <?php if( $vereadores["boolStatus"] == 0 ){ ?>selected<?php } ?>> Inativo  </option>
                      <option value="1" <?php if( $vereadores["boolStatus"] == 1 ){ ?>selected<?php } ?>> Ativo </option>
                    </select>
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label for="exampleInputPartido">Partido</label>
                    <input type="text" class="form-control" id="exampleInputPartido" name="txtPartido" value="<?php echo htmlspecialchars( $vereadores["txtPartido"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

