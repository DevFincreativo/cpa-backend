@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Banner'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            {{--
            <div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div>
            --}}
            <div class="card mb-4">
                @if(session('success'))
                    <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 ms-0">Banner</h4>
                        <div>
                            <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm ms-auto bg-acgroup">Crear</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">#
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Imagen de Banner</th>
                                        
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Imagen de Banner Inglés</th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)

                                <tr>
                                    <th scope="row" class=" text-sm font-weight-bold mb-0">{{$banner->id}}</th>

                                    <td class="text-center"><img src="{{url('storage/'.$banner->img)}}" alt="" style="width: 100px; height:auto;"></td>
                                    <td class="text-center"><img src="{{url('storage/'.$banner->img_en)}}" alt="" style="width: 100px; height:auto;"></td>

                                    <td class="text-center align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <a href="{{route('banner.edit',[$banner])}}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="{{ route('banner.destroy', $banner->id) }}" class="ms-2">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary bg-acgroup" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    @if ($banners->previousPageUrl())
                        <li class="page-item">
                            <a class="btn btn-secondary" href="{{ $banners->previousPageUrl() }}" tabindex="-1">Anterior</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $banners->lastPage(); $i++)
                        <li class="page-item {{ $i === $banners->currentPage() ? 'active' : '' }}">
                            <a class="btn {{ $i === $banners->currentPage() ? 'btn-secondary' : 'btn-primary bg-rms' }}" href="{{ $banners->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($banners->nextPageUrl())
                        <li class="page-item">
                            <a class="btn btn-secondary" href="{{ $banners->nextPageUrl() }}">Siguiente</a>
                        </li>
                    @endif
                </ul>
            </nav>


        </div>
    </div>
@endsection
