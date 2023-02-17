<form method="post" action="{{ route('pedido-produto.store', ['pedido'=>$pedido]) }}">
    @csrf
    <select name="produto_id">
        <option>-- Selecione um Cliente --</option>

        @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}"
                <option value="{{ $pedido->id }}" {{old('produto_id') == $produto->id ? 'selected' : '' }} >{{ $produto->nome }}</option>
            </option>
        @endforeach
    </select>
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
