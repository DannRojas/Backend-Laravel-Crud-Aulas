<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.datatables.net/v/dt/dt-2.0.3/datatables.min.css" rel="stylesheet">
  <title>Document</title>

  <!-- js******************************************************** -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<!-- Incluye Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdn.datatables.net/v/dt/dt-2.0.3/datatables.min.js"></script>

</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col-12">
      <button class="btn btn-success btn-sm mt-4" data-toggle="modal" data-target="#newArticuloModal" id="btnOpenModal">Nuevo Artículo</button>
      <!-- <button class="btn btn-success btn-sm mt-4" data-toggle="modal" data-target="#newArticuloModal" id="btnOpenModal" onclick="newArticulo()">Nuevo Artículo</button> -->
      
      <button class="btn btn-primary btn-sm mt-4" id="prueba">Pruebas</button>

      <div class="card mt-4">
        <div class="card-body">
          <table id="tabla-articulos" class="table table-hover">
            <thead>
              <td>ID</td>
              <td>Nombre</td>
              <td>Descripción</td>
              <td>Precio</td>
              <td>Acciones</td>
            </thead>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="newArticuloModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id="registro-articulo">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario Artículos</h5>
        <button type="button" id="closeNewArticuloModal" class="close" data-dismiss="modal" aria-label="Close" onclick="resetForm()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Descripción:</label>
            <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Precio:</label>
            <input type="number" class="form-control" id="numPrecio" name="numPrecio">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm()">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Confirm Delete-->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Corfirmación</h5>
        <button type="button" id="closeConfirmModal" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar este artículo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!-- Listar -->
<script>
  $(document).ready(function(){
    let tablaAnimal = $('#tabla-articulos').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url: "{{route('articulo.index')}}"
      },
      columns:[
        {data: 'id'},
        {data: 'nombre'},
        {data: 'descripcion'},
        {data: 'precio'},
        {data: 'action', orderable:false},
      ]
    })
  });
</script>

<!-- Update -->
<script>
  let idArticulo=0;

  function resetForm(){
    idArticulo=0;
    $('#registro-articulo')[0].reset();
  }

  function updateArticulo(id){
    idArticulo=id;
    console.log(idArticulo);
    $.get("{{route('articulo.edit', '')}}/"+id, function(articulo){
      // console.log(articulo);
      $('#txtNombre').val(articulo.nombre);
      $('#txtDescripcion').val(articulo.descripcion);
      $('#numPrecio').val(articulo.precio);
      $('#btnOpenModal').trigger('click');
    })
  }

  $('#registro-articulo').submit(function(e){
    e.preventDefault();

    console.log(idArticulo);

    let nombre = $('#txtNombre').val();
    let descripcion = $('#txtDescripcion').val();
    let precio = $('#numPrecio').val();
    let _token = $('input[name="_token"]').val();

    if(idArticulo===0){
      $.ajax({
        url:"{{route('articulo.create')}}",
        type: "POST",
        data:{
          nombre:nombre,
          descripcion:descripcion,
          precio:precio,
          _token:_token
        },
        success:function(response){
          if(response){
            $('#registro-articulo')[0].reset();
            toastr.success('El registro se ingresó correctamente', 'Nuevo registro', {timeOut:3000});
            $('#tabla-articulos').DataTable().ajax.reload();
            $('#closeNewArticuloModal').trigger('click');
            // $('#newArticuloModal').modal('hide');
          }
        }
      })
    }else{
      $.ajax({
        url:"{{route('articulo.update', '')}}/"+idArticulo,
        type: "POST",
        data:{
          nombre:nombre,
          descripcion:descripcion,
          precio:precio,
          _token:_token
        },
        success:function(response){
          console.log("actualizó");
          $('#registro-articulo')[0].reset();
          toastr.success('El registro se modificó correctamente', 'Registro modificado', {timeOut:3000});
          $('#tabla-articulos').DataTable().ajax.reload();
          $('#closeNewArticuloModal').trigger('click');
          id=0;
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      })
    }

  })
</script>

<!-- Destroy -->
<script>
  let ani_id;
  $(document).on('click', '.delete', function(){
    ani_id = $(this).attr('id');
    $('#btnEliminar').click(function(){
      $.ajax({
        url:"{{route('articulo.destroy', '')}}/"+ani_id,
        beforeSend:function(){
          $('#btnEliminar').text('Eliminando...');
        },
        success:function(response){
            $('#tabla-articulos').DataTable().ajax.reload();
            toastr.warning('El registro se eliminó correctamente', 'Eliminación de registro', {timeOut:3000});
            $('#closeConfirmModal').trigger('click');
            $('#btnEliminar').text('Aceptar');
            // $('#confirmModal').modal('hide');
        }
      })
    })
  })
</script>

</body>
</html>