@extends('../layouts.app')
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
        <div class="row">
            <div class="col-md-6">
                <h2>Tus propiedades</h2>
            </div>
            <div class="col-md-6" >
                <a type="button" href="{{route('propiedades.create')}}" class="btn btn-success float-right">Agregar nueva propiedad</a>
            </div>

        </div>


        <table class="table table-responsive-sm">
            <tr>
                <th>Rol Propiedad</th>
                <th>Tipo de Propiedad</th>
                <th>Numero de habitaciones</th>
                <th>Acction</th>
            </tr>
            @foreach($propiedad as $pro)
                <tr>
                    <td>{{$pro->rol}}</td>
                    <td>{{$pro->tipo}}</td>
                    <td>{{$pro->habitaciones}}</td>
                    <td>
                        <form action="{{ route('propiedades.destroy',$pro->rol) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('propiedades.edit',$pro->rol) }}">Editar</a>
                            <!--selector multiples edicion de datos-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
