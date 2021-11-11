@extends("base")

@section("container")
<div class="modal" id="modalDelete" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿Reventar el coche?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Reventar el coche?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No lo revientes mejor</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Revientaloooooo"/>
        </form>
      </div>
    </div>
  </div>
</div>
<header class="masthead">
  <br>
<h3 style="margin-top: -100px;">Aquí tienes todos los coches </h3>
<br>
<div style=" width:100%; display: flex; align-items: center; justify-content: center; margin-top: 10px;">
<table class="table" style=" color: white;">
   <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Color</th>
      <th>Acciones</th>
    </tr>
  @foreach ($resources as $resource)
    <tr>
      <th>
        {{ $resource["id"] }}
      </th>
      <th>
        {{ $resource["name"] }}
      </th>
      <th>
        {{ $resource["color"] }}
      </th>
      <th>
        <a href="{{ url('resource/' . $resource['id'] . '/edit') }}">Editar</a>
        <br>
        <a href="{{ url('resource/' . $resource['id']) }}">Mostrar</a>
        <br>
        <a href="javascript: void(0);" data-url="{{ url('resource/' . $resource['id']) }}" data-bs-toggle="modal" data-bs-target="#modalDelete">Eliminar</a>
      </th>
    </tr>
  @endforeach
    
</table>
</div>
</header>
@endsection

@section('js')
<script src="{{ url('assets/js/delete.js') }}"></script>
@endsection