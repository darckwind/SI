@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">N° Identificacion</label>
                            <div class="col-md-12">
                                <input  type="text" class="form-control" name="run"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">Nombres</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">Apellidos</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="lastname"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="col-md-6 col-form-label text-md-left">Estado civil</label>
                                    <select name="est_civil" class="form-control">
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        <option>Diborciado</option>
                                        <option>Viudo</option>
                                    </select>
                                </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Telefono Fijo</label>
                                <div class="col-md-12">
                                    <input  type="number" class="form-control" name="phone"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Telefono celular</label>
                                <div class="col-md-12">
                                    <input  type="number" class="form-control" name="cel-phone"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Direcion</label>
                                <div class="col-md-12">
                                    <input  type="text" class="form-control" name="adress"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Ciudad</label>
                                <div class="col-md-12">
                                    <input  type="text" class="form-control" name="state"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
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
</div>
@endsection
