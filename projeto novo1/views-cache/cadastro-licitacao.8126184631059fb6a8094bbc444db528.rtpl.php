<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Licitações</h1>
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
              <form method="POST" action="/admin/cadastrar-licitacao" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da Licitação</label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNome">
                  </div>

                  <div class="form-group col-md-1">
                    <label for="exampleInputAno">Ano</label>
                    <input type="text" class="form-control" id="exampleInputAno" name="txtAno">
                  </div>

                  <div class="form-group col-md-5">
                    <label for="exampleInputModalidade"> Modalidade</label>
                    <select name="intModalidade" id="exampleInputModalidade" class="form-control">
                      <option value="" > SELECT   </option>
                      <option value="1"> Função 1 </option>
                      <option value="2"> Função 2 </option>
                      <option value="3"> Função 3 </option>
                    </select>
                  </div>

                  <div class="form-group col-md-1">
                    <label for="exampleInputProcesso">Processo</label>
                    <input type="number" class="form-control" id="exampleInputProcesso" name="intNumeroProcesso">
                  </div>

                  <div class="form-group col-md-5">
                    <label for="exampleInputTipo"> Tipo</label>
                    <select name="intTipo" id="exampleInputTipo" class="form-control">
                      <option value="" > SELECT   </option>
                      <option value="1"> Função 1 </option>
                      <option value="2"> Função 2 </option>
                      <option value="3"> Função 3 </option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputDescricao">Descrição</label>
                    <textarea name="txtDescricao" class="form-control" rows="5"></textarea>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="exampleInputPostagem">Data da Postagem</label>
                    <input type="date" class="form-control" id="exampleInputPostagem" name="dtPostagem">
                  </div>

                  <div class="form-group col-md-5">
                    <label for="exampleInputArquivo">Anexar arquivo</label><br>
                    <input type="file"  id="exampleInputArquivo" name="txtArquivo">
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
