@extends('layouts.app')

@section('content')

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $message }}</p>
        </div>
        </br>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <h2>Propiedades Disponibles</h2>
                </div>
                <div class="col-md-2" >
                    <select onchange="filter()" id="tipo" class="form-control">
                        <option value="all">Todo</option>
                        <option value="Casa">Casa</option>
                        <option value="Departamento">Departamento</option>
                    </select>
                </div>

            </div>
            <hr>

            <div class="col-md-12 row">
                @foreach($pro as $data)

                    <div class="card {{$data->tipo}}" style="width: 18rem;margin-left: 10px;">
                        <img src="{{asset('storage/'.$data->img_casa)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th scope="row">Tipo:</th>
                                    <td>{{$data->tipo}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Habitaciones:</th>
                                    <td>{{$data->habitaciones}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ubicacion:</th>
                                    <td>{{$data->direccion}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Avaluo:</th>
                                    <td>{{$data->avaluo}}</td>
                                </tr>
                            </table>
                            <a href="#" class="btn btn-primary btn-block col-md-12">cotizar</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

    <script>
        function filter(){
            var x = document.getElementById("tipo").value;
            switch (x) {
                case "all":
                    var t = document.getElementsByClassName("Departamento");
                    for (i = 0; i <= t.length; i++) {
                        t[i].hidden = false;
                    }
                    var t2 = document.getElementsByClassName("Casa");
                    for (i = 0; i <= t.length; i++) {
                        t2[i].hidden = false;
                    }
                    break;
                case "Casa":
                    var t = document.getElementsByClassName("Departamento");
                    for (i = 0; i <= t.length; i++) {
                        t[i].hidden = true;
                    }
                    var t2 = document.getElementsByClassName("Casa");
                    for (i = 0; i <= t.length; i++) {
                        t2[i].hidden = false;
                    }
                    break;
                case "Departamento":
                    var t = document.getElementsByClassName("Casa");
                    for (i = 0; i <= t.length; i++) {
                        t[i].hidden = true;
                    }
                    var t2 = document.getElementsByClassName("Departamento");
                    for (i = 0; i <= t.length; i++) {
                        t2[i].hidden = false;
                    }
                    break;
            }
            console.log(x);
        }
    </script>
@endsection
