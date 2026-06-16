<!DOCTYPE html>
<html>
<body>
    <h1>Catálogo de Álbuns</h1>
    <a href="/albuns/create">Adicionar Álbum</a>

    @foreach($albuns as $album)
        <div class="disco-neon">
            <h3>{{ $album->nome }}</h3>
            <p>{{ $album->artista }}</p>
            <img src="{{ $album->url_imagem }}">
        </div>
    @endforeach
</body>
</html>