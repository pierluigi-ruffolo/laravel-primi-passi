<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="container my-5">
        <h2 class="text-center mb-5 fw-bold">Il Nostro Menu</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($pizze as $pizza)
            <div class="col">
                <div class="card h-100 shadow-sm border-0">

                    <div class="position-absolute top-0 end-0 m-2">
                        @if ($pizza["popolare"] === true)
                        <span class="badge rounded-pill bg-warning text-dark shadow-sm">⭐ Consigliato</span>
                        @endif
                    </div>
                    <img src="{{$pizza['immagine']}}" class="card-img-top" alt="Margherita" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title fw-bold mb-0">{{$pizza["nome"]}}</h5>
                            <span class="text-muted small">{{$pizza["categoria"]}}</span>
                        </div>

                        <p class="card-text small text-secondary">
                            @foreach ($pizza["ingredienti"] as $ingrediente)
                            {{$ingrediente}}
                            @endforeach
                        </p>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                        <span class="h5 fw-bold text-success mb-0">{{$pizza["prezzo"]}}$</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>