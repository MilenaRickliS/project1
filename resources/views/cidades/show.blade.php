<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h1{
        margin: 40px auto;
        text-align: center;
        font-size: 50px;
    }
    .informacoes {
        list-style: none;
        padding: 40px;
        margin: 0 auto;
        display: flex;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    p{
        font-size: 20px;
        margin-bottom: 10px;
    }
    img{
        width: 40%;
        margin-left: 60px;
    }

</style>




<h1>{{ $c['nome']}}</h1>

<div class="informacoes">
    <div>
        <p>ID: {{ $c['id']}}</p>
        <p>Estado: {{ $c['estado']}}</p>
        <p>População: {{ $c['populacao']}}</p>
        <p>Área em km2: {{ $c['area']}}</p>
        <p>País: {{ $c['pais']}}</p> 
    </div>
    <img src={{ $c['imagem'] }} />
</div>
