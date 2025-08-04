@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Ver Contacto'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div >
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Ver Contacto</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fecha</label>
                                        <input class="form-control" disabled type="text" name="title" value="{{ \Carbon\Carbon::parse($contacto->created_at)->format('d/m/Y') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre</label>
                                        <input class="form-control" disabled type="text" name="title" value="{{$contacto->nombre}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Teléfono</label>
                                        <input class="form-control" disabled type="text" name="title" value="{{$contacto->telefono}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Correo</label>
                                        <input class="form-control" disabled type="text" name="title" value="{{$contacto->correo}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Empresa</label>
                                        <input class="form-control" disabled type="text" name="title" value="{{$contacto->empresa}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Mensaje</label>
                                        <textarea class="form-control" disabled name="content" id="" cols="40" rows="10">{{$contacto->mensaje}}</textarea>
                                    </div>
                                </div>


                                <a class="btn btn-secondary" href="{{route('contacto.index')}}">Ver Contactos</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection


