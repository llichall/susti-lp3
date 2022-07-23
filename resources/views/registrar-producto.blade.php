<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <h1 class="text-center">Registrar Producto</h1>
    <form action="{{route("prendas.registrar")}}" method="POST" style="width: 50%; margin: 20px auto;">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre de prenda</label>
            <input class="form-control" type="text" name="nombre" value="{{old("nombre")}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select name="categoria" id class="form-select">
                <option value="">...</option>
                @foreach($categorias as $c)
                <option value="{{$c}}" {{old("categoria") == $c ? "selected": ""}}>{{$c}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input class="form-control" type="number" name="precio" value="{{old("precio")}}">
        </div>

        <button type="submit" class="btn btn-primary">Registrar Prenda</button>

        <div class="mb-3">
            @if (Session::get('success'))
            <div class="alert alert-success"> {{ Session::get('success') }}</div>
            @endif
        </div>
    
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