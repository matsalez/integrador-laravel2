@extends('front.template')

@section('pageTitle', 'Edita un producto')

@section('mainContent')
	<h2>Formulario para editar el producto</h2>

	<form  action="/products/{{ $productToEdit->id }}"  method="post" enctype="multipart/form-data">
		@csrf
    {{ method_field('put') }}
		<div class="row" >
			<div class="col-12">
				<div class="form-group">
					<label>Nombre del producto</label>
					<input
						type="text"
						name="name"
						value="{{ old('name', $productToEdit->name) }}"
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
						value="{{ old('description', $productToEdit->description) }}"
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
              value="{{ old('price', $productToEdit->price) }}"
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
                @if($productToEdit->colors->contains($color->id))
                <input type="checkbox" name="colors[]" value="{{ $color->id }} " checked> {{ $color->name }}
                @else
                <input type="checkbox" name="colors[]" value=""> {{ $color->name }}
                @endif

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
                  @if($productToEdit->sizes->contains($size->id))
                  <input type="checkbox" name="sizes[]" value="{{ $size->id }} " checked> {{ $size->name }}
                  @else
                  <input type="checkbox" name="sizes[]" value=""> {{ $size->name }}
                  @endif

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
