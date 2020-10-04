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
                    <div class="card-header">Datos Personales</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cliente.update', $user->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">N° Identificacion</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="run" value="{{ $user->run }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Imagen Identificacion</label>
                                    <div class="col-md-12">
                                        <input  type="file" name="img_carnet"  onchange="readURL(this);" accept="image/jpeg"  autofocus value="{{ $user->img_id }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Nombres</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Apellidos</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required autofocus>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Fecha Nacimiento</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" name="birth" value="{{ $user->cumple }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6"><label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div></div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Sexo</label>
                                    <select name="sex" class="form-control">
                                        <option>{{ $user->sex }}</option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Estado civil</label>
                                    <select name="est_civil" class="form-control">
                                        <option>{{ $user->est_civil }}</option>
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        <option>Diborciado</option>
                                        <option>Viudo</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Telefono Fijo</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="phone" value="{{ $user->phone }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Telefono celular</label>
                                    <div class="col-md-12">
                                        <input  type="text"  class="form-control" name="cel-phone" value="{{ $user->cel_phone }}"  autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Direcion</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="adress" value="{{ $user->adress }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Ciudad</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="state" value="{{ $user->state }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm" class="col-md-12 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div id="sell" class="form-group row" >
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Subsidio</label>
                                    <select name="subsidio" class="form-control">
                                        <option>{{$user->subsidio}}</option>
                                        <option>DS49</option>
                                        <option>DS1</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Monto ahorrado</label>
                                    <div class="col-md-12">
                                        <input  type="number" min="0" class="form-control" value="{{$user->ahorro}}" name="ahorro" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Renta Liquida</label>
                                    <div class="col-md-12">
                                        <input  type="number" min="0" class="form-control" name="rent" value="{{$user->renta}}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Copia contrato indefinido</label>
                                    <div class="col-md-12">
                                        <input  type="file" onchange="readURL2(this);" accept="image/jpeg" name="contrato" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Cotizaciones</label>
                                    <div class="col-md-12">
                                        <input  type="file" onchange="readURL3(this);" accept="image/jpeg" name="coti" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="con_id" class="col-md-4" >
                <div class="card" style="width: 18rem;">
                    <img id="identificacion" src="{{asset('storage/'.$user->img_id)}}" class="img-thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">Cedula de identificacion</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="width: 18rem;">
                    <img id="contrato" src="{{asset('storage/'.$user->contrato)}}" class="img-thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">Contrato</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="width: 18rem;">
                    <img id="coti" src="{{asset('storage/'.$user->coti)}}" class="img-thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">Cotizaciones</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function readURL(input) {
            document.getElementById('con_id').hidden=false;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#identificacion')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            document.getElementById('con_id').hidden=false;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#contrato')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            document.getElementById('con_id').hidden=false;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#coti')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
