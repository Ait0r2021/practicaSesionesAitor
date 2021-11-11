@extends("base")

@section("container")
<header class="masthead">
    <br><br><br>
<h1 style="margin-top: -100px">Introduce los datos del coche a crear</h1>
<br>
<div style=" width:100%; display: flex; align-items: center; justify-content: center; margin-top: 10px;">
<form action="{{ url('resource') }}" method="post">
    @csrf
    <input class="text" type="name" name="name" placeholder="Pon el nombre" max=50 required />
    <input class="text" type="name" name="color" placeholder="Pon el color" max=30 required />
    <input class="button" class="btn btn-primary" type="submit"/>
</form>
</div>
</header>
@endsection