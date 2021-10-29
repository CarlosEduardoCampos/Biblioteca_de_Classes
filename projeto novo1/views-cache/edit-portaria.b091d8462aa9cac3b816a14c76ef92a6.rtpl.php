<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
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
              <form method="POST" action="/admin/cadastrar-portaria/<?php echo htmlspecialchars( $portaria["idPortaria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da Portaria </label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomePortaria" value="<?php echo htmlspecialchars( $portaria["txtNomePortaria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputDescricao"> Descrição </label>
                    <textarea name="txtDescricao" class="form-control" rows="5"><?php echo htmlspecialchars( $portaria["txtDescricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>

                  </div>


                  <div class="form-group col-md-4">
                    <label for="exampleInputStatus"> Status</label>
                    <select name="intStatus" id="exampleInputStatus" class="form-control">
                      <option value=" "> SELECT     </option>
                      <option value="0" <?php if( $portaria["intStatus"] == 0 ){ ?>selected<?php } ?>> Tramitação </option>
                      <option value="1" <?php if( $portaria["intStatus"] == 1 ){ ?>selected<?php } ?>> Aprovado   </option>
                      <option value="2" <?php if( $portaria["intStatus"] == 2 ){ ?>selected<?php } ?>> Reprovado  </option>
                    </select>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="exampleInputPostagem">Data da Portaria</label>
                    <input type="date" class="form-control" id="exampleInputPostagem" name="dtPostagem" value="<?php echo htmlspecialchars( $portaria["dtPostagem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
