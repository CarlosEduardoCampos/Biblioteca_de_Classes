@extends('admin.header')
@section('conteudo')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cadastro de Roteiro</h1>
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
                <form method="POST" action="{{route('pecasReparo.store')}}">
                    <div class="card-body row">
  
                      <div class="form-group col-md-4">
                        <label for="exampleInputNome"> Nome da Peça </label>
                        <input type="text" class="form-control" id="exampleInputNome" name="Nome" value="{{$pecasReparo.nomePeca}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorPeca"> Valor da Peça </label>
                        <input type="text" class="form-control" id="exampleInputValorPeca" name="ValorPeca" value="{{$pecasReparo.valorPeca}}>
                      </div>

                      <div class="form-group col-md-3">
                        <label for="exampleInputFk"> Smartphone </label>
                        <select name="fkSmartphone" id="exampleInputFk" class="form-control">
                          <option value="" > SELECT </option>
                          {loop:'$smartphones'}
                            <option value={$value.idCelular}{if='$value.idCelular == $pecasReparo.fkSmartphone'}selectede{/if}>{$value.modelo}</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3">
                        <label for="exampleInputOrigem"> Origem </label>
                        <select name="Origem" id="exampleInputOrigem" class="form-control">
                          <option value="" > SELECT </option>
                            <option value="1">Fokainfo</option>
                            <option value="2"> Ktira </option>
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
@endsection
  