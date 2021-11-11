@extends("base")

@section("container")
<header class="masthead">
<h3 style="margin-top: -100px;">Aquí tienes el coche seleccionado </h3>
<br>
<div style=" width:100%; display: flex; align-items: center; justify-content: center; margin-top: 10px;">
<table class="table" style="color: white; position: absolute; margin-top: -10px; margin-left: 50px;">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Color</th>
    </tr>
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
    </tr>
</table>
</div>
</header>
@endsection