<?php include('partials/header.php') ?>

<!--html-->
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

        <!--php-->
<?php include('partials/footer.php') ?>
