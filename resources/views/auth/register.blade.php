@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">N° Identificacion</label>
                                <div class="col-md-12">
                                    <input  type="text" class="form-control" name="run"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Imagen Identificacion</label>
                                <div class="col-md-12">
                                    <input  type="file" name="img_carnet"  required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Nombres</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Apellidos</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="lastname"  required autofocus>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Fecha Nacimiento</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" name="birth"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6"><label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                    <option>Hombre</option>
                                    <option>Mujer</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Estado civil</label>
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
                                    <input  type="text" class="form-control" name="phone"  autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Telefono celular</label>
                                <div class="col-md-12">
                                    <input  type="text"  class="form-control" name="cel-phone"  autofocus>
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
                        <div class="form-group row" >
                            <div class="col-md-12 row"style=" left: 30px;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" onclick="read_radio(this)" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Comprador</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" onclick="read_radio(this)"  id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">Vendedor</label>
                                </div>
                            </div>

                        </div>
                        <div id="buy" class="form-group row" hidden>
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
                                <label for="name" class="col-md-12 col-form-label text-md-left">Imagenes Inmueble</label>
                                <div class="col-md-12">
                                    <input  type="file"  name="img_casa" autofocus>
                                </div>
                            </div>
                        </div>
                        <div id="sell" class="form-group row" hidden>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Subsidio</label>
                                <select name="subsidio" class="form-control">
                                    <option>DS49</option>
                                    <option>DS1</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Monto ahorrado</label>
                                <div class="col-md-12">
                                    <input  type="number" min="0" class="form-control" name="ahorro" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Renta Liquida</label>
                                <div class="col-md-12">
                                    <input  type="number" min="0" class="form-control" name="rent" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Copia contrato indefinido</label>
                                <div class="col-md-12">
                                    <input  type="file" name="contrato" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label text-md-left">Cotizaciones</label>
                                <div class="col-md-12">
                                    <input  type="file" name="coti" autofocus>
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

<script>
    var currentValue = 0;
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function read_radio(inlineRadioOptions){

        currentValue = inlineRadioOptions.value;
        if (currentValue=="1"){
            document.getElementById("sell").hidden=false;
            document.getElementById("buy").hidden=true;
        }else{
            document.getElementById("buy").hidden=false;
            document.getElementById("sell").hidden=true;
        }
    }


</script>
@endsection
