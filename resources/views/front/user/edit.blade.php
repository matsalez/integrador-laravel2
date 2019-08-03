@extends('front.template')

@section('pageTitle', 'Editá tus datos')

@section('mainContent')

	<h2 class="listado">Editá tus datos</h2>

	<form  action="/profile/{{ $userToEdit->id }}"  method="post" enctype="multipart/form-data">
		@csrf
    {{ method_field('put') }}
		<div class="row" >
			<div class="col-12">
				<div class="form-group">
					<label class="imput-create">Nombre:</label>
							<div class="centrado">
							<input
								type="text"
								name="name"
								value="{{ old('name', $userToEdit->name) }}"
								class="form-control"
							>
							@error('name')
								<span class="text-danger">
									{{ $message }}
								</span>
							@enderror
							</div>
				</div>
				<br>
			</div>

      <br>

						<div class="col-12">
							<div class="form-group">
								<label class="imput-create">Subí una imagen</label>
								<div class="centrado">
								<input
								 type="file"
								 name="avatar"
								 class="form-control"
								 >
								 @error('image')
		 							<span class="text-danger">
		 								{{ $message }}
		 							</span>
		 						@enderror
								</div>
							</div>
							<br>
						</div>



							<div class="col-12">
								<div class="boton-crear-centrado">
								<button type="submit" class="boton-crear">Guardar tus datos</button>
							</div>
							</div>
			</div>
	</form>


@endsection
