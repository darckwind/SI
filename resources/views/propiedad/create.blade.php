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
                        <form method="POST" action="{{ route('propiedades.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input name="id" value="{{ Auth::user()->id }}"hidden>
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
                                        <input  type="file" onchange="readURL(this);" name="titulo" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Tipo de Inmueble</label>
                                    <select name="tipo_inmueble" class="form-control">
                                        <option>Casa</option>
                                        <option>Departamento</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Numero de Habitaciones</label>
                                    <div class="col-md-12">
                                        <input  type="number" min="0" class="form-control" name="habi" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Imagene Inmueble</label>
                                    <div class="col-md-12">
                                        <input  type="file" onchange="readURL2(this);" name="img_casa" autofocus>
                                    </div>
                                </div>



                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        Registrar Propiedad
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="con_id" class="col-md-4" hidden>
                <div class="card" style="width: 18rem;">
                    <img id="casa" src="#" class="img-thumbnail" hidden>
                    <div class="card-body">
                        <h5 class="card-title">Imagen Casa</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="width: 18rem;">
                    <img id="titulo" src="#" class="img-thumbnail" hidden>
                    <div class="card-body">
                        <h5 class="card-title">Titulo Dominio Vigente</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function readURL(input) {
            document.getElementById('con_id').hidden=false;
            document.getElementById('titulo').hidden=false;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#titulo')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            document.getElementById('con_id').hidden=false;
            document.getElementById('casa').hidden=false;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#casa')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection
