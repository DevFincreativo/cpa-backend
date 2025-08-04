@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Actualizar Categoría'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action={{ route('categorias.update', $categoria->id) }} enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Actualizar Categoría</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">
                            <div class="row p-2">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" value="{{$categoria->nombre}}" name="nombre" required>
                            </div>

                            <div class="row p-2">
                                    <label for="example-text-input" class="form-control-label">Imagen</label>
                                    <input type="file" class="form-control" placeholder="Imagen" name="image">
                                @if ($categoria->image)
                                    <img src="{{url('storage/'.$categoria->image)}}" class="mt-4 mb-4" alt="" style="width: 100px;">
                                @endif
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



