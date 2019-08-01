@extends('front.template')

@section('pageTitle', 'Detalle del producto')

@section('mainContent')

<div class="descripcion-producto">
<div class="container">
  <div class="row">
    <div class="col-12 col-md-9">
      <div class="unproductoimagen">
        <img src="../images/producto.jpg" class="img-responsive" alt="Responsive image">
      </div>
    </div>
    <div class="col-12 col-md-3">
      <section class="detalle-producto">
        <h3 class="titulo-producto">Campera Aria</h3>
        <hr>
        <p class="precio-producto">$2000</p>
        <p class="descripcion">campera roja de algodón y detalles en los costados</p>
        <form class="datos-comprar" action="index" method="get ">
          <label class="dar-el-color">color</label>
          <select class="elegir-color" name="elegir-colores">
            <option value="eleccion" class="eleccion-colores">Elegir una opción</option>
            <option value="negro">Negro</option>
            <option value="rojo">Rojo</option>
            <option value="blanco">Blanco</option>
          </select>
        </form>
    <br>
    <div class="col-12">
      <div class="form-group">
        <label class="imput-create">Colores: </label>
        <div class="centrado">
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
      </div>
      <br>
      </div>
      </section>
      <br>
      <div>
        <button type="submit" name="comprar" class="boton-comprar">comprar</button>
      </div>
    </div>
  </div>
</div>
<a class="volver "href="/newarrivals"> << Productos </a>
</div>

@endsection
