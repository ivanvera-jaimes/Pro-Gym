@extends('Layout')
@section('Content')
    <div class="container">
        <h3 class="text-center text-success mt-3">
            Eliminar plan 
        </h3>
        <div>
            <form action="{{ route('planes.destroy',['id'=>$plan->id]) }}" method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <div class="row">
                    <div class="col">
                        <h4 class="text-center text-warning">
                            ¿Está seguro de eliminar el plan {{ $plan->nombre }} ?
                        </h4>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('planes.index') }}" class="btn btn-success">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection