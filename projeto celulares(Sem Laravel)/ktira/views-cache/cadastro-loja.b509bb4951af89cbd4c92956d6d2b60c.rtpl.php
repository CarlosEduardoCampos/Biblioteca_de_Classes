<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>loja</h1>
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
              <form method="POST" action="/admin/cadastrar-loja" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da Loja</label>
                    <input type="text" class="form-control" id="exampleInputName" name="Nome">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputDescricao">Descrição</label>
                    <input type="text" class="form-control" id="exampleInputDescricao" name="Descricao">
                  </div>

                  <div class="form-group col-md-8">
                    <label for="exampleInputRua">Nome da Rua</label>
                    <input type="text" class="form-control" id="exampleInputRua" name="Endereco">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputNumero">Numero</label>
                    <input type="text" class="form-control" id="exampleInputNumero" name="Numero">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputBairro">Bairro</label>
                    <input type="text" class="form-control" id="exampleInputBairro" name="Bairro">
                  </div>

                  <div class="form-group col-md-8">
                    <label for="exampleInputCidade">Cidade</label>
                    <input type="text" class="form-control" id="exampleInputCidade" name="Cidade">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEstado">Estado</label>
                    <input type="text" class="form-control" id="exampleInputEstado" name="Estado">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputArquivo">Anexar Arquivo</label>
                    <input type="file" id="exampleInputArquivo" name="txtFoto">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer col-md-12 form-group">
                  <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
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
