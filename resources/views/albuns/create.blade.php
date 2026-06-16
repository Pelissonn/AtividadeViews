<!DOCTYPE html>
<html>
<body>
    <h1>Novo Álbum</h1>
    <form action="/albuns" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome da Track">
        <input type="text" name="artista" placeholder="Artista">
        <input type="number" name="ano_lancamento" placeholder="Ano">
        <input type="text" name="url_imagem" placeholder="URL da Imagem">
        <button type="submit">Lançar Álbum</button>
    </form>
</body>
</html>s