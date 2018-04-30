@extends('layouts.app')
@section('content')
<style type="text/css">
	.nav-scroll {
		max-height: calc(100vh - 4rem);
		overflow-y: scroll;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-md-3 col-lg-2  nav-scroll">
			<ul class="nav flex-column nav-pills">
				<li class="nav-item"><a class="nav-link" href="#">Urgencia</a>
					<ul class="nav flex-column nav-pills ml-3">
						<li class="nav-item"><a class="nav-link" href="#">Sub D1</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D2</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D3</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Atención Abierta</a>
					<ul class="nav flex-column nav-pills ml-3">
						<li class="nav-item"><a class="nav-link" href="#">Sub D1</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D2</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D3</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Atención Cerrada</a>
					<ul class="nav flex-column nav-pills ml-3">
						<li class="nav-item"><a class="nav-link" href="#">Sub D1</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D2</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Sub D3</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Gestión de Cama</a>

				</li>

			</ul>
		</div>

	<div class="col">
		<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
			<h4 id="list-item-1">Item 1</h4>
			@lang('This is the  string :name o si', ['name' => 'dayle'])
			<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate commodi, autem praesentium iure iusto eaque doloribus vitae quis aliquam ab soluta molestiae ex placeat vel impedit sequi. Voluptatum, voluptate quo?</span>
			<span>Omnis nihil aspernatur suscipit at nesciunt iure magni minima sint placeat optio, fugiat labore, dignissimos soluta perspiciatis laudantium ex temporibus molestias, quam cupiditate. Voluptatibus voluptates suscipit, similique saepe et excepturi?</span>
			<span>Aperiam quam numquam sed totam alias sapiente ducimus quibusdam, rem veritatis neque officiis explicabo. Dolor sunt optio nobis ipsum doloremque possimus maiores eveniet, enim labore doloribus, tempore architecto eligendi minima.</span></p>
			@lang('Second string')
			<h4 id="list-item-2">Item 2</h4>
			<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sed ipsa quisquam quos assumenda dolores aut reiciendis culpa. Explicabo ipsum suscipit eaque eos necessitatibus illo, iusto vero voluptas a adipisci?</span><span>Esse similique, hic eaque quasi tempora perspiciatis, harum dolorum nulla aut qui iure labore ipsum vero necessitatibus omnis est voluptatum vitae sed ducimus voluptates quam distinctio ipsa laudantium? Asperiores, officiis.</span></p>
			{{__('Final')}}{{__('Duke')}}
			{{__('Semi', ['name' => 'dayle'] )}}
			
		</div>
		<form>
			<div class="form-row">
				<div class="form-group col">
					<label for="name">Nombre</label>
					<input type="text" name="name" class="form-control" id="name"  placeholder="Juan Perez">
					<span class="form-text text-muted">Ayuda</span>
				</div>
				
				<div class="form-group col">
					<label for="birthday">Fecha nacimiento</label>
					<input type="date" name="birthday" class="form-control" id="birthday">
					<span class="form-text text-muted">Fecha en la que nació</span>
				</div>
				
				<div class="form-group col-md-2">
					<label for="apellido">Apellido</label>
					<input type="text" name="apellido" class="form-control" id="apellido">
					<span class="form-text text-muted">Apellido</span>
				</div>
				<div class="form-group col-3">
					<label for="nacionalidad">Nacionalidad</label>
					<select name="nacionalidad" class="form-control" id="nacionalidad">
						<option selected>Seleccione nacionalidad</option>
						<option value="">Chile</option>
						<option value="">Perú</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label for="">Yesh</label>
					<input type="text" name="" class="form-control" id="" placeholder="Placeholder">
					<span class="form-text text-muted"></span>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
@endsection