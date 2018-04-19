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

                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Default checkbox
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                  <label class="form-check-label" for="defaultCheck2">
                    Disabled checkbox
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                  <label class="form-check-label" for="defaultCheck2">
                    Disabled checkbox
                  </label>
                </div>

            </div>
            

            <div class="form-group col">
                <label for="genero" class="d-block">Genero</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
                <span class="form-text text-muted">blabla</span>
            </div>

            <div class="form-group col-md-2">
                <label for="">Etiqueta</label>
                <select name="" id="" class="form-control">
                    <option selected>xx</option>
                    <option value="">sdf</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col">
                <label for="">Nombre</label>
                <input type="text" name="" id="" class="form-control" />
                <span class="form-text text-muted">Ayuda</span>
            </div>

        </div>

    </form>

    <hr>

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
