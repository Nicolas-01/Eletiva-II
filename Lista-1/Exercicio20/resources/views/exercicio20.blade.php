<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 1 - Exercício 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Lista 1 - Exercício 20 (Velocidade média)</h1>
        <form method="post" action="/respExercicio20">
            @CSRF
            <div class="mb-3">
                <label for="dist" class="form-label">Insira uma distância (em km)</label>
                <input type="number" id="dist" name="dist" class="form-control" required="" placeholder="Ex: 45">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Insira um tempo (horas)</label>
                <input type="number" id="tempo" name="tempo" class="form-control" required="" placeholder="Ex: 2 (apenas números)" step="any">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>