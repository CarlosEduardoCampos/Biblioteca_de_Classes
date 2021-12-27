<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Editar de Roteiro</h1>
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
                <form method="POST" action="/admin/editar-smartphones/<?php echo htmlspecialchars( $smartphones["idCelular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="card-body row">
                      <div class="form-group col-md-4">
                          <label for="exampleInputMarca"> Marca </label>
                          <input type="text" class="form-control" id="exampleInputMarca" name="Marca" value="<?php echo htmlspecialchars( $smartphones["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                          <label for="exampleInputModelo"> Modelo </label>
                          <input type="text" class="form-control" id="exampleInputModelo" name="Modelo" value="<?php echo htmlspecialchars( $smartphones["modelo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCor"> Cor </label>
                        <input type="text" class="form-control" id="exampleInputCor" name="Cor" value="<?php echo htmlspecialchars( $smartphones["cor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputMemoria"> Memoria </label>
                        <input type="number" class="form-control" id="exampleInputMemoria" name="Memoria" value="<?php echo htmlspecialchars( $smartphones["memoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail"> E-mail </label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="Email" value="<?php echo htmlspecialchars( $smartphones["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorReparo"> Valor do Reparo </label>
                        <input type="number" class="form-control" id="exampleInputValorReparo" name="Reparo" value="<?php echo htmlspecialchars( $smartphones["valorReparo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCusto"> Custo </label>
                        <input type="text" class="form-control" id="exampleInputCusto" name="Custo" value="<?php echo htmlspecialchars( $smartphones["valorCusto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="exampleInputOrigem"> Origem </label>
                        <select name="Origem" id="exampleInputOrigem" class="form-control">
                          <option value="" > SELECT </option>
                          <option value="1" <?php if( $smartphones["origem"] == 1 ){ ?>selected<?php } ?>>Fokainfo</option>
                          <option value="2" <?php if( $smartphones["origem"] == 2 ){ ?>selected<?php } ?>> Ktira </option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCodigoOrigem"> Codigo de Origem </label>
                        <input type="text" class="form-control" id="exampleInputCodigoOrigem" name="CodigoOrigem" value="<?php echo htmlspecialchars( $smartphones["codigoOrigem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputProblema"> Problema </label>
                        <input type="text" class="form-control" id="exampleInputProblema" name="Problema" value="<?php echo htmlspecialchars( $smartphones["problema"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputDespesaVenda"> Despesa da Venda </label>
                        <input type="number" class="form-control" id="exampleInputDespesaVenda" name="Despesa" value="<?php echo htmlspecialchars( $smartphones["despesaVenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputDataVenda"> Dia da Venda </label>
                        <input type="date" class="form-control" id="exampleInputDataVenda" name="DataVenda" value="<?php echo htmlspecialchars( $smartphones["dataVenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorAssesorios"> Valor dos Assesorios </label>
                        <input type="number" class="form-control" id="exampleInputValorAssesorios" name="Acessorios" value="<?php echo htmlspecialchars( $smartphones["valorAcessorios"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorVenda"> Valor de Venda </label>
                        <input type="number" class="form-control" id="exampleInputValorVenda" name="Venda" value="<?php echo htmlspecialchars( $smartphones["valorVenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                      </div>
                    </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer col-md-12 form-group">
                    <button type="submit" class="btn btn-primary form-control">Editar</button>
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

  