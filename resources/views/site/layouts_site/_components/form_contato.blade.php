{{ $slot }}
<form action="{{ Route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">

        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $key => $motivo)
            <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : '' }}>
                {{ $motivo }}</option>
        @endforeach
        
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">
@if (old('mensagem') != '')
{{ old('mensagem') }}
@endif
</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
<div style="position: absolute;top:0px; left:0px; width:100%; background: red">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>
