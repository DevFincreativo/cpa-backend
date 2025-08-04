@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Actualizar Producto'])
    <form role="form" method="POST" action={{ route('productos.update', $producto->id) }} enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        @if(session('success'))
                            <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                                {{ session('success') }}
                            </div>
                        @endif

                            <div class="card-header pb-0" style="border-radius: 12px !important;">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Actualizar Producto</p>
                                </div>
                            </div>
                            <div class="card-body" style="border-radius: 12px !important;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nombre</label>
                                            <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Descripción</label>
                                            <textarea class="form-control tinymce" name="descripcion" id="" cols="40" rows="10">{{$producto->descripcion}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Cuerpo</label>
                                            <textarea class="form-control tinymce" name="cuerpo" id="" cols="40" rows="10">{{$producto->cuerpo}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Orden</label>
                                            <input class="form-control" type="text" name="orden" value="{{$producto->orden}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Categoría</label>
                                            <select class="form-control" name="categoria_id" required>
                                                @foreach ($categorias as $categoria)
                                                    <option value="{{$categoria->id}}" @if($categoria->id == $producto->categoria_id) selected @endif>{{$categoria->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Activo</label>
                                            <input class="ms-2 mt-2" type="checkbox" name="activo" value="1" @if($producto->activo) checked @endif>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-sm ms-auto bg-acgroup">Guardar</button>
                                </div>

                            </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">

                            <div class="card-header pb-0" style="border-radius: 12px !important;">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Imágenes</p>
                                </div>
                            </div>
                            <div class="card-body" style="border-radius: 12px !important;">
                                <div class="row">

                                    <div class="col-md-12 mb-0">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Imágenes</label>
                                            <input type="file" class="form-control" placeholder="Imágenes" name="files[]" multiple>
                                            <p class="text-sm mt-0">Tamaño máximo recomendado: 1024x1024 píxeles | 2 Mb.</p>
                                            <p class=""> Por favor, asegúrate de subir no más de 7 imágenes.</p>

                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary btn-sm ms-auto bg-acgroup mt-4">Guardar</button>
                                </div>


                                <div class="table-responsive p-3">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Imagen</th>

                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!is_null($producto->media))
                                                @foreach ($producto->media ?? [] as $file)
                                                <tr>
                                                    <td class="text-center"><img src="{{ $file->getUrl() }}" alt="" style="width: 100px; height:auto;"></td>

                                                    <td class="text-center align-middle text-end">
                                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">

                                                            @if($file->order_column == 1)
                                                                <a href="#" class="btn btn-success me-2" title="Portada"><i class="fas fa-star"></i>
                                                                </a>
                                                            @else
                                                                <a href="{{route('media.product.portada', ['producto' => $producto->id, 'media' => $file->id])}}" class="btn btn-danger me-2" title="Seleccionar como Portada"><i class="fas fa-star"></i>
                                                                </a>
                                                            @endif


                                                            <a href="{{route('media.destroy', $file->id)}}" class="btn btn-primary bg-acgroup" title="Eliminar"><i class="fa fa-trash"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth.footer')
        </div>
    </form>

@endsection


