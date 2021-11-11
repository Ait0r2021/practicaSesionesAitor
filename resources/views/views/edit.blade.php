@extends("base")

@section("container")
<header class="masthead">
    
    <h2>Edita tu coche</h2>
    
<form style="margin-top: 70px;" action="{{ url('resource/' . $resource['id']) }}" method="post">
    @csrf
    @method("put")
    <div style=" width:100%; display: flex; align-items: center; justify-content: center; margin-top: 10px;">
    <table>
        <tr>
            <th><input class="text" type="name"  placeholder="{{ $resource['name'] }}" disabled /></th>
            <th><input class="text" type="name"  placeholder="{{ $resource['color'] }}" disabled /></th>
        </tr>
        <tr>
            <th><input class="text" type="name" name="name" placeholder="Pon el nuevo nombre" max-length=50 required/></th>
            <th><input class="text" type="name" name="color" placeholder="Pon el nuevo color" max-length=30 required/></th>
        </tr>
    </table>
    </div>
    <br>
    <br>
    <input type="submit" value="Edit"/>
    
</form>
</header>
@endsection