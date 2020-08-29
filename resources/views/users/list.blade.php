    @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Listado de usuarios de la plataforma.</h1>
    </div>
    {{ $users->links() }}
    <div class="row">
        <div class="col-md-12">
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td style="width: 20px"><a href="{{ url('/users/'.$user->id)}}"><img src="{{asset('storage/images/search_logo.png')}}" width="20" ></a></td>
                            <td style="width: 20px"><a href="{{ url('/users/'.$user->id).'/edit' }}"><img src="{{asset('storage/images/edit_logo.png')}}" width="20" ></a></td>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email}}</td>
                            <th scope="row">{{ $user->state == 1 ?  'Activo ' : 'Inactivo' }}</th>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection