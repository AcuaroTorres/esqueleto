@extends('layouts.app')

@section('content')
<div class="container">

    <form>
        <div class="form-row">
            <div class="form-group col">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control">
                <span class="form-text text-muted">Ayuda para el nombre</span>
            </div>
            <div class="form-group col">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control">
                <span class="form-text text-muted">Ayuda del apellido</span>
            </div>
            <div class="form-group col-md-2">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" class="form-control">
                <span class="form-text text-muted">Seleccione la fecha</span>
            </div>
            <div class="form-group col-md-2">
                <label for="genero">Genero</label>
                <input type="text" class="form-control">
                <span class="form-text text-muted">Masc o fem</span>
            </div>
        </div>


    </form>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
