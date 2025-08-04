@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Crear Usuario'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action={{ route('users.store') }} enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Crear Usuario</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Usuario</label>
                                        <input class="form-control" type="text" name="name" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control" type="email" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="form-control-label">Contraseña</label>
                                        <div class="d-flex justify-content-between">
                                            <input id="password" class="form-control" type="password" name="password" required>
                                            <button id="show-password" class="btn btn-outline-secondary mt-0 mb-0" type="button">
                                                <i class="fa fa-eye-slash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm ms-auto bg-acgroup">Guardar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection


@push('js')
<script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('show-password');

    showPasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.innerHTML = '<i class="fa fa-eye"></i>';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
        }
    });
</script>
@endpush



