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


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Datos Propiedad</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('propiedad.create') }}" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Direccion del inmueble</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="inmueble" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Avaluo Fiscal de la propiedad</label>
                                    <div class="col-md-12">
                                        <input  type="number" min="0" class="form-control" name="avaluo" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Rol de la Propiedad</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="rol_pro" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Titulo de Dominio vigente</label>
                                    <div class="col-md-12">
                                        <input  type="file" name="titulo" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Imagene Inmueble</label>
                                    <div class="col-md-12">
                                        <input  type="file"  name="img_casa" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Numero de Habitaciones</label>
                                    <div class="col-md-12">
                                        <input  type="number" min="0" class="form-control" name="habi" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Tipo de Inmueble</label>
                                    <select name="tipo_inmueble" class="form-control">
                                        <option>Casa</option>
                                        <option>Departamento</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
