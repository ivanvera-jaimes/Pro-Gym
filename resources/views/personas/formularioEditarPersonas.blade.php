@extends('Layout')
@section('Content')
    <div class="container">
        <h3 class="text-center text-success mt-3">
            Actualizacion de informacion del miembro
        </h3>
        <div>
            <form action="{{ route('personas.update',['persona' => $persona->id]) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $persona->nombre }}">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $persona->apellido }}">
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" value="{{ $persona->edad }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $persona->email }}">
                </div>
                <div class="form-group">
                    <label for="altura">Altura</label>
                    <input type="double" class="form-control" id="altura" name="altura" value="{{ $persona->altura }}">
                </div>
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" id="peso" name="peso" value="{{ $persona->peso }}">
                </div>
                <div class="form-group">
                    <label for="plan_id">Plan</label>
                    <select name="plan_id" id="plan_id" class="form-control">
                        <option value="0">--Seleccione--</option>
                        @foreach($planes as $plan)
                        @if($persona->plan_id == $plan->id)
                        <option value="{{ $plan->id }}" selected="">{{ $plan->nombre }}</option>
                        @else
                        <option value="{{ $plan->id }}">{{ $plan->nombre }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection