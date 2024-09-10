<h1>Cidades</h1>

<ul>
    @foreach($cidades as $c)
        <li><a href="{{ route('cidades.show', $c['nome']) }}">{{ $c['nome'] }}</a></li>
        @endforeach
</ul>