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
            <div class="col-md-2">
                <label for="name" class="col-md-12 col-form-label text-md-left">Filtro</label>
                <select id="tipo" class="form-control">
                    <option value="casa">Casa</option>
                    <option value="depto">Departamento</option>
                </select>
                <br>
            </div>
            @foreach($pro as $data)
            <div class="card" style="width: 18rem;">
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
@endsection
