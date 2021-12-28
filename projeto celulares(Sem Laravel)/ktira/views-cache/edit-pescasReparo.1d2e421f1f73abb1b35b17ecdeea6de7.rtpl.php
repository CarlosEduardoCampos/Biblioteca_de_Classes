<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Editar Peças</h1>
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
                <form method="POST" action="/admin/editar-pescasReparo/<?php echo htmlspecialchars( $pescasReparo["idReparo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="card-body row">

                        <div class="form-group col-md-6">
                            <label for="exampleInputNome"> Nome da Peça </label>
                            <input type="text" class="form-control" id="exampleInputNome" name="Nome" value="<?php echo htmlspecialchars( $pescasReparo["nomePeca"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputValor"> Valor </label>
                            <input type="number" class="form-control" id="exampleInputValor" name="Valor" value="<?php echo htmlspecialchars( $pescasReparo["valorPeca"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputOrigem"> Origem </label>
                            <select name="Origem" id="exampleInputOrigem" class="form-control">
                                <option value="" > SELECT </option>
                                <option value="1" <?php if( $pescasReparo["origem"] == 1 ){ ?>selected<?php } ?>>Fokainfo</option>
                                <option value="2" <?php if( $pescasReparo["origem"] == 2 ){ ?>selected<?php } ?>> Ktira </option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="exampleInputSmartphone">  Smartphone </label>
                            <select name="Smartphone" id="exampleInputSmartphone" class="form-control">
                                <option value="" > SELECT </option>
                                <?php $counter1=-1;  if( isset($smartphones) && ( is_array($smartphones) || $smartphones instanceof Traversable ) && sizeof($smartphones) ) foreach( $smartphones as $key1 => $value1 ){ $counter1++; ?>
                                <option value="<?php echo htmlspecialchars( $value1["idCelular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" <?php if( $value1["idCelular"] == $pescasReparo["fkSmartphone"] ){ ?>selected<?php } ?>><?php echo htmlspecialchars( $value1["modelo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                <?php } ?>
                            </select>
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
   
  
   
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
