@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product])}}">
        {{$product->name}}
    </a>
    - {{$product->price}}
    <form action="{{ route('product.destroy',['product'=>$product]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>[x]</button>
    </form>
    <br>
@endforeach

<a href="{{route('product.create')}}">Neues Produkt</a>
<a href="{{route('category.index')}}">Zurück zu den Kategorien</a>
