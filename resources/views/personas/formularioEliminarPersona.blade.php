@extends('Layout')
@section('Content')
    <div class="container">
        <h3 class="text-center text-success mt-3">
            Eliminacion de informacion del miembro
        </h3>
        <div>
            <form action="{{ route('personas.destroy',['persona'=>$persona->id]) }} " method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <div class="row">
                    <div class="col">
                        <h4 class="text-center text-warning">
                            ¿Está seguro de eliminar la persona {{ $persona->nombre }} ?
                        </h4>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('personas.index') }}" class="btn btn-success">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection