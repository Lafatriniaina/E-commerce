<form action="{{ route('home') }}" method="POST" class="form">
    @csrf
    <input type="hidden" value="{{ $product->id }}" name="id">
    <input type="hidden" value="{{ $product->name }}" name="name">
    <input type="hidden" value="{{ $product->price }}" name="price">
    <input type="hidden" value="{{ $product->image }}" name="image">
    <input type="hidden" value="1" name="quantity">
    <button type="submit" class="btn btn-primary add-to-cart">Ajouter au panier</button>
</form>