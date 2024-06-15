<?php include('partials/header.php') ?>

<?php
//sql
$query = "SELECT * FROM feedbacks";
$stmt = $db->prepare($query);
$stmt->execute();
$feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div class="list-group">
        <?php foreach ($feedbacks as $feedback): ?>
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0"><?php echo $feedback['nom'] ?></h6>
                        <p><small><?php echo $feedback['email'] ?></small></p>
                        <p class="mb-0 opacity-75"><?php echo $feedback['message'] ?></p>
                    </div>
                    <small class="opacity-50 text-nowrap">now</small>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div> 
<?php include('partials/footer.php') ?>