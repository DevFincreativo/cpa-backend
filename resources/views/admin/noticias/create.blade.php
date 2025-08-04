@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Crear Noticia'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action={{ route('noticias.store') }} enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="card-header pb-0" style="border-radius: 12px !important;">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Crear Noticia</p>
                            </div>
                        </div>
                        <div class="card-body" style="border-radius: 12px !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Título</label>
                                        <input class="form-control" type="text" name="title" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Título Inglés</label>
                                        <input class="form-control" type="text" name="title_en" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descripción</label>
                                        <textarea class="form-control tinymce" name="content" id="" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descripción Inglés</label>
                                        <textarea class="form-control tinymce" name="content_en" id="" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Imagen</label>
                                        <input type="file" class="form-control" placeholder="Imagen" name="image">
                                    </div>
                                </div>
                                <p class="text-sm mt-0">Tamaño máximo recomendado: 1024x1024 píxeles | 2 Mb.</p>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Imagen Inglés</label>
                                        <input type="file" class="form-control" placeholder="Imagen" name="image_en">
                                    </div>
                                </div>
                                <p class="text-sm mt-0">Tamaño máximo recomendado: 1024x1024 píxeles | 2 Mb.</p>


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





