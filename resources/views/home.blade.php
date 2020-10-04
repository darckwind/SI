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
            <div class="card">
                <div class="card-header">Dashboards</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session() }}

                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
