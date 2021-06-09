@extends('Layout')
@section('Content')
<style>
        body {
        background-image: url("https://e7.pngegg.com/pngimages/461/347/png-clipart-fitness-logo-creative-fitness-logo-ribbon-physical-fitness.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    
</style>
    <div class="container">
        <h2 class="text-center ">
            Plan de gimnasio
</h2>
        <div>
        <form action="{{ route('planes.store') }}"  class="  font-weight-bold" method="POST">
                @csrf
                <div class="form-group col-md-5">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group col-md-5">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor">
                </div>
                
                <button type="submit" class="btn text-light bg-dark " id="crear" > <h2>Crear</h2></button>
            </form>
            
        </div>
    </div>
@endsection