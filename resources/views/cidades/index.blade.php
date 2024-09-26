<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h1{
        margin: 40px auto;
        text-align: center;
        font-size: 50px;
    }
    ul {
        list-style: none;
        padding: 40px;
        margin: 0 auto;
        text-align: center;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    li {
        padding: 10px;
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 30px;
    }

    li:last-child {
        border-bottom: none;        
    }

    a {
        text-decoration: none;
        color: #98B06F;
        transition: .2s ;
    }

    a:hover {
        color: #B6DC76;
    }



</style>


<h1>Cidades</h1>

<ul>
    @foreach($cidades as $c)
        <li><a href="{{ route('cidades.show', $c['nome']) }}">{{ $c['nome'] }}</a></li>
        @endforeach
</ul>