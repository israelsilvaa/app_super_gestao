{{ $slot }}
<form action="{{ Route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <span class="msg-erro"> {{ $errors->has('nome') ? $errors->first('nome') : '' }}</span>
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone"
        class="{{ $classe }}">
    <span class="msg-erro"> {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}</span>
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <span class="msg-erro"> {{ $errors->has('email') ? $errors->first('email') : '' }}</span>
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">

        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}"
                {{ old('motivo_contato_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}</option>
        @endforeach

    </select>
    <span class="msg-erro"> {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}</span>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">
@if (old('mensagem') != '')
{{ old('mensagem') }}
@endif
</textarea>
    <span class="msg-erro"> {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}</span>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>


