@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Crear Producto'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action={{ route('productos.store') }} enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Crear Producto</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre</label>
                                        <input class="form-control" type="text" name="nombre" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descripción</label>
                                        <textarea class="form-control tinymce" name="descripcion" id="" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Cuerpo</label>
                                        <textarea class="form-control tinymce" name="cuerpo" id="" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="ml-2" for="file">Imágenes</label>
                                        <div class="col-md-12">
                                            <input type="file" name="files[]" multiple class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Orden</label>
                                        <input class="form-control" type="text" name="orden" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Categoría</label>
                                        <select class="form-control" name="categoria_id" required>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Activo</label>
                                        <input class="ms-2 mt-2" type="checkbox" name="activo" value="1" >
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





