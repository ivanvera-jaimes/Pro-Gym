@extends('Layout')
@section('Content')
<style>
        body {
        background-image: url("https://image.freepik.com/foto-gratis/fondo-fitness-equipo-gimnasio-pesas-hogar-zapatillas-deporte-amarillo_33811-615.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
    <div class="container">
        <h2 class="text-center ">
            Listado de Planes
        </h2>
        <table class=" table table-bordered text-white bg-dark text-center font-weight-bold">
            <thead>
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">Nombre</td>
                    <td class="text-center">Valor</td>
                    <td class="text-center">Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($planes as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->nombre}}</td>
                    <td>{{$plan->valor}}</td>
                    <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('planes.edit',['id'=>$plan->id]) }}" class="btn btn-warning">Editar</a>
                                    <a href="{{ route('planes.delete',['id' => $plan->id]) }}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="row">
            <div class="col ">
                <a href="{{route('planes.create')}}" class="btn text-light bg-dark  text-align:center"><h3>Crear un Plan</h3></a>
            </div>
        </div>
    </div>
@endsection