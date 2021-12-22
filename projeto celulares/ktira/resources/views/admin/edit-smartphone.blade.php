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
                <form method="POST" action="{{route('cliente.update')}}">
                    @csrf 
                    <div class="card-body row">
                      <div class="form-group col-md-4">
                          <label for="exampleInputMarca"> Marca </label>
                          <input type="text" class="form-control" id="exampleInputMarca" name="Marca" value="{{$smartphone.marca}}">
                      </div>

                      <div class="form-group col-md-4">
                          <label for="exampleInputModelo"> Modelo </label>
                          <input type="text" class="form-control" id="exampleInputModelo" name="Modelo" value="{{$smartphone.modelo}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCor"> Cor </label>
                        <input type="text" class="form-control" id="exampleInputCor" name="Cor" value="{{$smartphone.cor}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputMemoria"> Memoria </label>
                        <input type="number" class="form-control" id="exampleInputMemoria" name="Memoria" value="{{$smartphone.memoria}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail"> E-mail </label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="Email" value="{{$smartphone.email}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorReparo"> Valor do Reparo </label>
                        <input type="number" class="form-control" id="exampleInputValorReparo" name="ValorReparo" value="{{$smartphone.valorReparo}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCusto"> Custo </label>
                        <input type="text" class="form-control" id="exampleInputCusto" name="Custo" value="{{$smartphone.valorCusto}}">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="exampleInputOrigem"> Origem </label>
                        <select name="Origem" id="exampleInputOrigem" class="form-control">
                          <option value="" > SELECT </option>
                          <option value="1">Fokainfo</option>
                          <option value="2"> Ktira </option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputCodigoOrigem"> Codigo de Origem </label>
                        <input type="text" class="form-control" id="exampleInputCodigoOrigem" name="CodigoOrigem" value="{{$smartphone.codigoOrigem}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputProblema"> Problema </label>
                        <input type="text" class="form-control" id="exampleInputProblema" name="Problema" value="{{$smartphone.problema}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputDespesaVenda"> Despesa da Venda </label>
                        <input type="number" class="form-control" id="exampleInputDespesaVenda" name="DespesaVenda" value="{{$smartphone.despesaVenda}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputDataVenda"> Dia da Venda </label>
                        <input type="date" class="form-control" id="exampleInputDataVenda" name="DataVenda" value="{{$smartphone.dataVenda}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorAssesorios"> Valor dos Assesorios </label>
                        <input type="number" class="form-control" id="exampleInputValorAssesorios" name="ValorAssesorios" value="{{$smartphone.valorAssesorios}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputValorVenda"> Valor de Venda </label>
                        <input type="number" class="form-control" id="exampleInputValorVenda" name="ValorVenda" value="{{$smartphone.valorVenda}}">
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

@endsection
  