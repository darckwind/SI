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
                        <form method="POST" action="{{ route('cliente.update', $user->id) }}">
                            @method('PUT')
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label text-md-left">N° Identificacion</label>
                                <div class="col-md-12">
                                    <input  type="text" class="form-control" name="run"  required autofocus value="{{$user->run}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Nombres</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name"  required autofocus value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Apellidos</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="lastname"  required autofocus value="{{$user->lastname}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row col-md-12">

                                <div class="col-md-6">
                                    <label for="name" class="col-md-6 col-form-label text-md-left">Sexo</label>
                                    <select name="sex" class="form-control">
                                        <option>{{$user->sex}}</option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-6 col-form-label text-md-left">Estado civil</label>
                                    <select name="est_civil" class="form-control">
                                        <option>{{$user->est_civil}}</option>
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        <option>Diborciado</option>
                                        <option>Viudo</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Telefono Fijo</label>
                                    <div class="col-md-12">
                                        <input  type="number" class="form-control" name="phone" value="{{$user->phone}}"  autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Telefono celular</label>
                                    <div class="col-md-12">
                                        <input  type="number" class="form-control" name="cel-phone" value="{{$user->cel_phone}}"  autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Direcion</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="adress" value="{{$user->adress}}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-left">Ciudad</label>
                                    <div class="col-md-12">
                                        <input  type="text" class="form-control" name="state" value="{{$user->state}}" required autofocus>
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
        </div>
    </div>
@endsection
