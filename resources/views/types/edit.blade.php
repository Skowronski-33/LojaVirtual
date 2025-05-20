<form action="{{ url('types/update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $product['id'] }}">
    <label>Nome:</label><br>
    <input name="name" type="text" value="{{ $product['name'] }}" /><br>
    <label>Descrição:</label><br>
    <input type="submit" value="Salvar" />
</form>