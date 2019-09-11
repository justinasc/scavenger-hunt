<?php include 'inc/header.php';?>

<h3>THIS IS FRONT PAGE</h3>

<?php foreach($questions as $question): ?>
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo $question->question; ?></h2>
        <p><?php echo $question->hint; ?></p>
        <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
      </div>

    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php';?>