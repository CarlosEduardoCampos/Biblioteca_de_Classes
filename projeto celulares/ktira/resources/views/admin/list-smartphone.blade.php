 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Local Roteiro - Cadastrados</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
      <div class="container-fluid">
        
        
          <!-- /.card-body -->
          <div class="card-body row col-sm-12 d-flex align-items-end">
            <!-- <div class="busca col-sm-10">
              <form action="/admin/produtos" class="form d-flex align-items-end">
                <div class="form-group">
                  <label>Busca</label>
                  <input type="text" name="busca" class="form-control">
                </div>
                <div>
                <input type="submit" value="Buscar" class="btn btn-primary">
              </div>
              </form>
            </div> -->
            <div class="col-sm-2">
                <a href="/admin/cadastrar-localroteiro" class="btn btn-success">Cadastrar Smartphone</a> 
                        </div>
            <table class="table mt-3">
              <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Problema</th>
                    <th></th>
                    <th></th>
                </tr>
              </thead>
              <tbody>
                {loop="$smartphone"}
                  <tr>
                    <td>{$value.idLocalRoteiro}</td>
                    <td>{$value.txtNome}</td>
                    <td><a href="{$value.txtLinkGps}" target="_blank" rel="noopener noreferrer" class="fa fa-map-marker"></a></td>
                    <td class="botao"><a href="/admin/Local roteiro/{$value.idLocalRoteiro}"><button class="btn btn-primary btn-sm">Acessar <i class="fas fa-edit"></i></button></a></td>
                    <td class="botao"><a href="/admin/deletarLocal roteiro/{$value.idLocalRoteiro}"><button class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
                  </tr>
                {/loop}
              </tbody>
            </table>
           
            
          <!-- ./col -->
        </div>
 
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->