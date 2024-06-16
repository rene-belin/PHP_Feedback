<?php include('partials/header.php'); ?>

<?php
// Initialisation des variables
$nom = $email = $message = ''; // Initialisation des variables pour les données du formulaire
$errors = []; // Initialisation d'un tableau pour stocker les erreurs de validation

if (isset($_POST['submit'])) {
    // Validation des données
    if (!isset($_POST['nom']) || empty(trim($_POST['nom']))) {
        $errors['nom'] = 'Le nom est obligatoire'; // Vérification et ajout d'erreur si le nom est vide
    } else {
        $nom = htmlspecialchars(trim($_POST['nom'])); // Attribution du nom et nettoyage des données
    }

    if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
        $errors['email'] = 'L\'email est obligatoire'; // Vérification et ajout d'erreur si l'email est vide
    } else {
        $email = htmlspecialchars(trim($_POST['email'])); // Attribution de l'email et nettoyage des données
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide'; // Vérification supplémentaire si l'email est valide
        }
    }

    if (!isset($_POST['message']) || empty(trim($_POST['message']))) {
        $errors['message'] = 'Le message est obligatoire'; // Vérification et ajout d'erreur si le message est vide
    } else {
        $message = htmlspecialchars(trim($_POST['message'])); // Attribution du message et nettoyage des données
    }

    // Si aucune erreur n'est présente, procéder à l'insertion des données dans la base de données
    if (empty($errors)) {
        try {
            // Préparation de la requête SQL pour l'insertion des données
            $query = "INSERT INTO feedbacks (nom, email, message, date) VALUES (:nom, :email, :message, NOW())";
            $stmt = $db->prepare($query); // Préparation de la requête SQL avec PDO
            $stmt->bindParam(':nom', $nom); // Liaison des paramètres nom
            $stmt->bindParam(':email', $email); // Liaison des paramètres email
            $stmt->bindParam(':message', $message); // Liaison des paramètres message

            // Exécution de la requête d'insertion
            if ($stmt->execute()) {
                // Redirection après succès de l'insertion
                header('Location: /PhpProject_FeedBack/feedback.php'); // Redirection vers la page de feedback après l'insertion
                exit; // Arrêt du script après la redirection
            } else {
                echo 'Une erreur est survenue lors de l\'insertion'; // Message d'erreur si l'insertion a échoué
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage(); // Capture et affichage des erreurs PDO
        }
    }
}
?>

<!-- HTML pour le formulaire de feedback -->
<div class="d-flex justify-content-center">
    <div class="row">
        <h1 class="pt-5">FeedBack</h1>
        <div class="px-0">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <input type="text" class="form-control <?php echo isset($errors['nom']) ? 'is-invalid' : ''; ?>" placeholder="Entrez votre Nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
                    <?php if (isset($errors['nom'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['nom']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" placeholder="Entrez votre E-mail" name="email" value="<?php echo htmlspecialchars($email); ?>">
                    <?php if (isset($errors['email'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <textarea class="form-control <?php echo isset($errors['message']) ? 'is-invalid' : ''; ?>" placeholder="Saisir votre feedback" rows="3" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                    <?php if (isset($errors['message'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['message']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn d-block btn-primary" name="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('partials/footer.php'); ?>
