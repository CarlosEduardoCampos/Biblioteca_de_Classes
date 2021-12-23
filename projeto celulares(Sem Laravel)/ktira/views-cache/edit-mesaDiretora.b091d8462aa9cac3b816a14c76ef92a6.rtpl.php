<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesa DIretora</h1>
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
              <form method="POST" action="/admin/editar-mesaDiretora/<?php echo htmlspecialchars( $mesaDiretora["idMesaDiretora"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da Mesa</label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomeMesa" value="<?php echo htmlspecialchars( $mesaDiretora["txtNomeMesa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-2">
                    <label for="exampleInputAnoInicio">Ano de Inicio</label>
                    <input type="text" class="form-control" id="exampleInputAnoInicio" name="txtAnoInicio" value="<?php echo htmlspecialchars( $mesaDiretora["txtAnoInicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-2">
                    <label for="exampleInputAnoFim">Ano de Fim</label>
                    <input type="text" class="form-control" id="exampleInputAnoFim" name="txtAnoFim" value="<?php echo htmlspecialchars( $mesaDiretora["txtAnoFim"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-8">
                    <label for="exampleInputLegislatura">Legislatura</label>
                    <select name="fkLegislatura" id="exampleInputLegislatura" class="form-control">
                      <option value="" > SELECT </option>
                      <?php $counter1=-1;  if( isset($legislatura) && ( is_array($legislatura) || $legislatura instanceof Traversable ) && sizeof($legislatura) ) foreach( $legislatura as $key1 => $value1 ){ $counter1++; ?>
                      <option value="<?php echo htmlspecialchars( $value1["idLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"<?php if( $value1["idLegislatura"] == $mesaDiretora["fkLegislatura"] ){ ?>selected<?php } ?>><?php echo htmlspecialchars( $value1["txtNomeLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                      <?php } ?>
                    </select>
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

