@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Crear Banner'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action={{ route('banner.store') }} enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Crear Banner</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">


                                <div class="row p-2">
                                    <label for="image">Imagen de Banner</label>
                                    <input type="file" class="form-control" placeholder="Imagen de Banner" name="img">
                                </div>
                                
                                <div class="row p-2">
                                    <label for="image">Imagen de Banner Inglés</label>
                                    <input type="file" class="form-control" placeholder="Imagen de Banner" name="img_en">
                                </div>


                                <button type="submit" class="btn btn-primary btn-sm ms-auto bg-acgroup">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection



