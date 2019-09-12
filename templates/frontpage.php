<?php include 'inc/header.php';?>

<div class="cards">
  <?php foreach($questions as $question): ?>
    <div class="card">
      <img class="card__image" src="images/post-background.png" alt="wave" />
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2><?php echo $question->question; ?>
        <small>Additional text</small>
        </h2>
      </div>
      <div class="card-flap flap1">
      <div class="card-description">
        Some more text?
      </div>
      <div class="card-flap flap2">
        <div class="card-actions">
          <a href="http://localhost/treasure-hunt/question.php?id=<?php echo $question->id; ?>" class="btn" target="_self">Question</a>
        </div>
      </div>
    </div>
    </div>
  <?php endforeach; ?>  
</div>

<?php include 'inc/footer.php';?>
