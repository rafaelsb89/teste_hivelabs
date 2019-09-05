@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('enderecos.store') }}" class="form-horizontal" mtehod="POST">
            @csrf
            <div class="class row">
                <label>Digite o CEP:</label>
                <input type="text" class="form-control" name="zipcode">
            </div>
            <div class="class row">
                <label>Digite a locação:</label>
                <input type="text" class="form-control" name="location">
            </div>
            <div class="class row">
                <label>Digite o número:</label>
                <input type="text" class="form-control" name="number">
            </div>
            <div class="class row">
                <label>Digite a vizinhança:</label>
                <input type="text" class="form-control" name="neighborhood">
            </div>
            <div class="class row">
                <label>Digite a cidade:</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="class row">
                <label>Digite o estado:</label>
                <input type="text" class="form-control" name="state">
            </div>
            <div class="row">
            <button type="submit" class="btn btn-default">Cadastrar Endereço</div>
        </form>
     </div>
</div>
@endsection