<h1>Nova duvida</h1>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="content" cols="30" rows="5" placeholder="Descricao"></textarea>
    <button type="submit">Enviar</button>
</form>
