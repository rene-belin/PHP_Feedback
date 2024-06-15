<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FeedBack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header class="bg-light">
            <nav class="navbar navbar-expand-lg container">
                <div class="container-fluid">
                    <a class="navbar-brand fw-semibold" href="index.php">Feedback App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0  fw-semibold">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="feedback.php">Feedbacks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="apropos.php">A propos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="d-flex justify-content-center">
            <div class="row">
                <h1 class="pt-5">FeedBack</h1>
                <div class="px-0">
                    <form>
                        <div class="mb-3">
                            <input type="nom" class="form-control" placeholder="Entrez votre Nom" name="nom">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Entrez votre E-mail" name="email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Saisir votre feedback" rows="3" name="message" ></textarea>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">                
                            <button type="submit" class="btn d-block btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="my-5">
                        <p class="text-center">&COPY;2024 - René</p>
                    </div>
                </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>