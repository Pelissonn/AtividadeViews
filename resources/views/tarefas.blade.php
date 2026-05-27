<ul>
    @foreach($tarefas as $tarefa)
        <li>
            {{ $tarefa }}
            @if($loop->first)
                [DESTAQUE]
            @endif
        </li>
    @endforeach
</ul>