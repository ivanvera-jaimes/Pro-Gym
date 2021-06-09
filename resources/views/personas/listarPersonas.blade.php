@extends('Layout')
@section('Content')
<style>
        body {
        background-image: url("https://image.freepik.com/foto-gratis/gimnasio-equipos-gimnasio-pesas-toalla-embotellador-wate-calzado-entrenamiento-entrenadores-deportivos-sobre-fondo-blanco-deporte-estilo-vida-saludable-objetos-concepto_1391-736.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
        <div class="container">
            <h2 class="text-center ">
                Listado de Miembros
            </h2>
            <br>
            <table class="table table-bordered text-white bg-dark text-center  font-weight-bold">
                <thead>
                    <tr>
                        <td class="text-center">ID</td>
                        <td class="text-center">Foto</td>
                        <td class="text-center">Nombre</td>
                        <td class="text-center">Apellido</td>
                        <td class="text-center">Edad</td>
                        <td class="text-center">Email</td>
                        <td class="text-center">Altura</td>
                        <td class="text-center">Peso</td>
                        <td class="text-center">IMC</td>
                        <td class="text-center">Plan</td>
                        <td class="text-center">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        @if ($persona->foto)
                            <td><img src="{{$persona->foto}}" width="150px" height="150px"></td>
                        @else
                            <td></td>
                        @endif
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->apellido }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td>{{ $persona->email }}</td>
                        <td>{{ $persona->altura }}</td>
                        <td>{{ $persona->peso }}</td>
                        <td>{{ $persona->imc }}</td>
                        <td>{{ $persona->plan->nombre }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('personas.edit',['persona'=>$persona->id]) }}" class="btn btn-warning">Editar</a>
                                    <a href="{{ route('personas.delete',['persona' => $persona->id]) }}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection