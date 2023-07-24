@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Descrição:</strong> {{ $product->description }}</p>
    <p><strong>Preço:</strong> {{ $product->price }}</p>
    <p><strong>Quantidade em Estoque:</strong> {{ $product->stock_quantity }}</p>
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
    </form>
@endsection
