<?php include 'inc/header.php';?>

<div class="container">
  <div class="glass">
    <div class="champagne">
      <div class="bubbles"> </div>
      <div class="bubbles two"> </div>
      <div class="bubbles three"> </div>
      <div class="bubbles four"> </div>
      <div class="bubbles five"> </div>
      <div class="bubbles six"> </div>
    </div>
  </div>
  <div class="stand"></div>
</div>

<div class="cards">
  <?php foreach($questions as $question): ?>
    <div class="card">
      <?php 
        if(!empty($question->file_hash)){
          echo '<img class="card__image" src="upload/'.$question->file_hash.'" alt="wave" />';
        } else {
          echo '<img class="card__image" src="images/post-background.png" alt="wave" />';
        }
      ?>
      
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
