<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 1 - Exercício 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Lista 1 - Exercício 18 (Juros Compostos)</h1>
        <form method="post" action="/respExercicio18">
            @CSRF
            <div class="mb-3">
                <label for="capital" class="form-label">Insira o valor de um capital</label>
                <input type="number" id="capital" name="capital" class="form-control" required="" placeholder="Ex: 1500" step="any">
            </div>
            <div class="mb-3">
                <label for="juros" class="form-label">Insira o juros</label>
                <input type="number" id="juros" name="juros" class="form-control" required="" placeholder="Ex: 2 (apenas números)" step="any">
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Insira o período (meses)</label>
                <input type="number" id="periodo" name="periodo" class="form-control" required="" placeholder="Ex: 12 (apenas números)">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>