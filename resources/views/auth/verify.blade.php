@extends('front.template')

@section('pageTitle', 'Registro')
@yield('content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificá tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, revise su correo electrónico para obtener un enlace de verificación.') }}
                    {{ __('Si no recibiste el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('Clic aquí, para enviarlo nuevamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
