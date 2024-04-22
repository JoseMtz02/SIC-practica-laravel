@extends('plantilla')

@section('titulo')
    Registro de usuario
@endsection

@section('contenido')
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">SIC UT</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate en el
                                        sistema</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus />
                                        <label class="form-label" for="name">Nombre</label>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" required autocomplete="email" />
                                        <label class="form-label" for="email">Correo electrónico</label>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            required autocomplete="new-password" />
                                        <label class="form-label" for="password">Contraseña</label>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control form-control-lg" required autocomplete="new-password" />
                                        <label class="form-label" for="password_confirmation">Confirmar
                                            contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block">
                                            Registrarse
                                        </button>
                                    </div>

                                    <a class="small text-muted" href="{{ route('login') }}">¿Ya tienes una cuenta?
                                        Inicia sesión aquí</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Olvidaste tu contraseña? <a
                                            href="{{ route('password.request') }}" style="color: #393f81;">Recupérala
                                            aquí</a>
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
