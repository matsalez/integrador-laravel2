@extends('front.template')

@section('pageTitle', 'Crear un producto')

@section('mainContent')
	<h2>Formulario para crear productos</h2>

	<form  action="/products" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row" >
			<div class="col-12">
				<div class="form-group">
					<label>Nombre del producto</label>
					<input
						type="text"
						name="name"
						value="{{ $errors->has('name') ? null : old('name') }}"
						class="form-control"
					>
					@error('name')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror


				</div>
				<br>
			</div>

      <br>
			<div class="col-12">
				<div class="form-group">
					<label>Descripción</label>
					<input
						type="text"
						name="description"
						value="{{ $errors->has('description') ? null : old('description') }}"
						class="form-control"
					>
					@error('description')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror

				</div>
				<br>
			</div>


        <div class="col-12">
          <div class="form-group">
            <label>Precio</label>
            <input
              type="text"
              name="price"
              value="{{ $errors->has('price') ? null : old('price') }}"
              class="form-control"
            >
						@error('price')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
					</div>
					<br>
				</div>
						<div class="col-12">
							<div class="form-group">
								<label>Subí una imagen</label>
								<input
								 type="file"
								 name="poster"
								 class="form-control"
								 >
								 @error('poster')
		 							<span class="text-danger">
		 								{{ $message }}
		 							</span>
		 						@enderror
							</div>
							<br>
						</div>

          <div class="col-12">
            <div class="form-group">
              <label>Colores: </label>
							@error('colors')
							 <span class="text-danger">
								 {{ $message }}
							 </span>
						 @enderror
              <p class="form-control" name="colors">
                @foreach ($colors as $color)
                  <input type="checkbox" name="colors[]" value="{{ $color->id }}">{{ $color->name }}

								@endforeach
								<br>
              </p>
            </div>
            <br>
            </div>

						<div class="col-12">
	            <div class="form-group">
	              <label>Talles: </label>
								@error('sizes')
								 <span class="text-danger">
									 {{ $message }}
								 </span>
							 @enderror
	              <p class="form-control" name="sizes">
	                @foreach ($sizes as $size)
	                  <input  type="checkbox" name="sizes[]" value="{{ $size->id }}">{{ $size->name }}
	                @endforeach
	              </p>
	            </div>
							<br>
							</div>

							<div class="col-12">
								<div class="form-group">
									<label>Categorias: </label>
									<select class="form-control" name="categories">
										@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
								</div>
	            <br>
	            </div>
							<div class="col-12">
								<button type="submit" class="btn btn-success">Guardar producto</button>
							</div>
			</div>

	</form>


@endsection
