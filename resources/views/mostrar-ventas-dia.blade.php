<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <h1 class="text-center">Buscar Ventas por Dia</h1>
    <form action="{{route("ventas.dia")}}" method="POST" style="width: 50%; margin: 20px auto;">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Filtar por Fecha</label>
            <input class="form-control" type="date" name="fecha" value="{{old("fecha")}}">
        </div>

        <button type="submit" class="btn btn-primary">buscar</button>
        <table class="table">
            <tr>
                <th>Fecha de Venta</th>
                <th>Nombre Clieente</th>
                <th>Telefono Cliente</th>
                <th>Monto toal de venta</th>
            </tr>
            @foreach($ventas as $v)
            <tr>
                <td>{{$v->fecha}}</td>
                <td>{{$v->cliente->nombre}}</td>
                <td>{{$v->cliente->telefono}}</td>
                <td>S/. {{$v->total}}</td>
            </tr>
            @endforeach
        </table>

        <div class="mb-3">
            @if($errors->any())
            <div style="color: red;">
                @foreach($errors->all() as $error)
                {{$error}}<br>
                @endforeach
            </div>
            @endif
        </div>
    </form>
</body>