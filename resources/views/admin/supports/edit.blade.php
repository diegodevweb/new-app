<h1>Duvida {{ $support->id }}</h1>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('put')
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="content" cols="30" rows="5" placeholder="Descricao">{{ $support->content }}</textarea>
    <button type="submit">Enviar</button>
</form>

