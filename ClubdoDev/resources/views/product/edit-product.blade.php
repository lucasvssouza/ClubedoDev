@extends('layouts.app')

@section('title', 'Editar Produto - Club do Dev')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>
                        {{ __('Editar Produto') }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div>
                            <form method="POST" action="{{route('editProduct')}}" enctype="multipart/form-data">
                                @csrf
                                
                                    <img src="{{asset('/storage/images/product/'.$product->image)}}" class="img-thumbnail mx-auto d-block"></img>

                                
                                <input type="hidden" name="productID" value="{{ $product->id}}" id="productID"></input>
                                <input type="hidden" name="productImageHidden" value="{{ $product->image }}" id="productImageHidden"></input>
                                <div>
                                    <div class="form-group mb-3">
                                        <label for="productName">Nome do Produto
                                        </label>
                                        <input id="productName" value="{{ $product->name }}" placeholder="{{ $product->name }}" name="productName" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="productDescription">Descrição</label>
                                        <textarea id="productDescription" name="productDescription" placeholder="{{ $product->description }}" class="form-control" rows="3" required style="height: 258px;">{{ $product->description }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-xs-12 mt-2 col-sm-6">
                                        <label for="productPrice">Preço
                                        </label>
                                        <input id="productPrice" value="{{ $product->price }}" placeholder="{{ $product->price }}" name="productPrice" min="0" type="number" required class="form-control">
                                    </div>
                                    <div class="mb-3 col-xs-12 col-sm-6">
                                        <div class="mt-4">
                                        <input id="productImage" class="mt-2" name="productImage" type="file">
                                            <button type="submit" style="margin-left: 10px" class="btn mt-2  btn-primary float-end">Editar
                                                Produto</button>
                                            <button type="button" class="btn btn-primary mt-2 float-end">
                                                <a href="/list-product" style="text-decoration:none;" class="text-white">Voltar
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