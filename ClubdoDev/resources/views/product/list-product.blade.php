@extends('layouts.app')

@section('title', 'Lista de Produtos - Club do Dev')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>
                        {{ __('Lista de Produtos') }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div>
                            @if($products->count() === 0 )
                            <label>Não existe produtos registrados.</label>
                            @else
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-start bg-dark text-white">Nome</th>
                                        <th class="text-center bg-dark text-white">Preço</th>
                                        <th class="text-end bg-dark text-white">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <th class="text-start">{{$product -> name}}</li>
                                        <th class="text-center">R${{$product -> price }}</th>
                                        <th class="text-end">
                                            <a href="/edit-product/{{$product -> id}}" style="text-decoration:none;"
                                                class="text-black">✏️ Editar</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if($products->count() === 0 )
                            <div class="mb-3 col-xs-12">
                                <div class="mt-4">
                                    <label>Total de Produtos: 0</label>
                                    <button type="submit" class="btn btn-primary float-end">
                                        <a href="/create-product" style="text-decoration:none;"
                                            class="text-white">Adicionar
                                            Produto</a>
                                    </button>
                                </div>
                            </div>
                            @else
                            <div class="mb-3 col-xs-12">
                                <div class="mt-4">
                                    <label>Total de Produtos: {{$products->count()}}</label>
                                    <button type="button" class="btn btn-primary float-end">
                                        <a href="/create-product" style="text-decoration:none;"
                                            class="text-white">Adicionar
                                            Produto</a>
                                    </button>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection