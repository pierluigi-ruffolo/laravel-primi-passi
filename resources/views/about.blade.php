<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Siamo - Pizzeria Da Luigi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @include("header")

    <div class="bg-warning text-dark py-5">
        <div class="container py-5 text-center">
            <h1 class="display-4 fw-bold">La Nostra Storia</h1>
            <p class="lead">Dal 1985, portiamo il sapore di Napoli a casa tua.</p>
        </div>
    </div>

    <main class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Un'antica tradizione familiare</h2>
                <p>La Pizzeria Da Luigi nasce dal sogno di nonno Luigi, che decise di aprire un piccolo locale nel cuore della città utilizzando solo la ricetta segreta della sua famiglia.</p>
                <p>Oggi, dopo tre generazioni, continuiamo a stendere la pasta a mano e a selezionare con cura ogni singolo pomodoro, proprio come faceva lui.</p>
            </div>
            <div class="col-md-6 bg-white p-5 rounded shadow-sm">
                <h3 class="h4 text-danger mb-3">I nostri valori:</h3>
                <ul class="list-unstyled">
                    <li class="mb-2">✅ <strong>Qualità:</strong> Farine biologiche certificate.</li>
                    <li class="mb-2">✅ <strong>Passione:</strong> 48 ore di lievitazione naturale.</li>
                    <li class="mb-2">✅ <strong>Territorio:</strong> Ingredienti a KM 0.</li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white-50 py-4 fixed-bottom">
        <div class="container text-center">
            <p class="mb-0">© 2026 Pizzeria Da Luigi | Napoli</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>