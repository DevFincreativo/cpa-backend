@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Usuarios'])
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
                    <div class="d-flex align-items-center">
                        <p class="mb-0 ms-0">Usuarios</p>
                        <a href="{{route('users.create')}}" class="btn btn-primary bg-acgroup btn-sm ms-auto">Crear</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Usuario
                                    </th>
                                    <th class=" p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th
                                        class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fecha de Creación</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)

                                <tr>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$user->name ?? ""}}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$user->email ?? ""}}</p>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{!is_null($user->created_at) ? $user->created_at->format('d/m/Y H:i:s') : ""}}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <a href="{{route('users.edit', $user->id)}}" class="text-sm font-weight-bold mb-0">Editar</a>
                                            <a href="{{ route('users.destroy', $user->id) }}" class="text-sm font-weight-bold mb-0 ps-2" onclick="return confirm('¿Estás seguro de que deseas eliminar este Usuario {{$user->username}}?');">Eliminar</a>
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
                    @if ($users->previousPageUrl())
                        <li class="page-item">
                            <a class="btn btn-secondary" href="{{ $users->previousPageUrl() }}" tabindex="-1">Anterior</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $users->lastPage(); $i++)
                        <li class="page-item {{ $i === $users->currentPage() ? 'active' : '' }}">
                            <a class="btn {{ $i === $users->currentPage() ? 'btn-secondary' : 'btn-primary bg-rms' }}" href="{{ $users->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($users->nextPageUrl())
                        <li class="page-item">
                            <a class="btn btn-secondary" href="{{ $users->nextPageUrl() }}">Siguiente</a>
                        </li>
                    @endif
                </ul>
            </nav>

        </div>
    </div>
@endsection
