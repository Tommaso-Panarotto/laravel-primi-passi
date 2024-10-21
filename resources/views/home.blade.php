<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Intro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <!--Header-->
    <header id="topbar">
        <nav class="navbar navbar-expand-md bg-primary fw-bold py-3" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">START BOOTSTRAP</a>
                <button class="navbar-toggler b-c-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        @foreach ($links as $link )
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#portfolio">{{$link}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--Main-->
    <main class="container mt-5 text-center">
        <h1>HOMEPAGE</h1>
    </main>
</body>

</html>