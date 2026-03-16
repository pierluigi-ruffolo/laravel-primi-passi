<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Da Luigi - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @include("header")

    <header class="bg-danger text-white py-5">
        <div class="container py-5 text-center">
            <h1 class="display-3 fw-bold">{{$Benvenuto}}</h1>
            <p class="lead mb-4">La migliore pizza della città, cotta nel forno a legna.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{url('/menu')}}" class="btn btn-warning btn-lg px-4 fw-bold">Scopri il Menu</a>
            </div>
        </div>
    </header>

    <main class="container my-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Perché scegliere noi?</h2>
                <p class="fs-5 text-muted">
                    Utilizziamo solo ingredienti freschi e selezionati. La nostra farina è macinata a pietra e la lievitazione dura oltre 48 ore per garantirti la massima digeribilità.
                </p>
                <hr class="my-5">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-danger">Ingredienti DOC</h4>
                        <p>Solo prodotti certificati.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-danger">Forno a Legna</h4>
                        <p>Cottura tradizionale.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-danger">Consegna Rapida</h4>
                        <p>Sempre calda a casa tua.</p>
                    </div>
                </div>
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