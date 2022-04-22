@extends('layouts.app')

@section('title', 'Cadastrar Produto - Club do Dev')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>
                        {{ __('Cadastrar Produto') }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div>
                            <form method="POST" action="{{route('newProduct')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="productName">Nome do Produto
                                    </label>
                                    <input id="productName" name="productName" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="productDescription">Descrição</label>
                                    <textarea id="productDescription" name="productDescription" class="form-control"
                                        rows="3" required style="height: 258px;"></textarea>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-xs-12 mt-2 col-sm-6">
                                        <label for="productPrice">Preço
                                        </label>
                                        <input id="productPrice" name="productPrice" min="0" type="number" required
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-xs-12 col-sm-6">
                                        <div class="mt-4">
                                            <input id="productImage" class="mt-2" name="productImage" required
                                                type="file">
                                            <button type="submit" style="margin-left: 10px"
                                                class="btn mt-2  btn-primary float-end">Criar
                                                Produto</button>
                                            <button type="button" class="btn btn-primary mt-2 float-end">
                                                <a href="/list-product" style="text-decoration:none;"
                                                    class="text-white">Voltar
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection