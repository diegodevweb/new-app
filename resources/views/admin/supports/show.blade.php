<h1> Detalhes da duvida {{ $support->id }} </h1>
 <div>
     <ul>
         <li>Assunto: {{ $support->subject }}</li>
         <li>Status: {{ $support->status }}</li>
         <li>Descricao: {{ $support->content }}</li>
     </ul>
 </div>

<form action="{{ route('supports.delete', $support->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Confirmar deletar</button>
</form>
