<?php include 'inc/header.php';?>

<div class="text">
Intro text
</div>

<div class="cards showing">
    <?php foreach($questions as $question): ?>
    
        <?php if ($question->answer == 'y') { ?>
            <div id="<?php echo $question->id; ?>" class="card show">
            <?php 
                if(!empty($question->file_hash)){
                    echo '<img class="card__image" src="upload/'.$question->file_hash.'" alt="" />';
                    echo '  <div class="card-title">
                                <h2>
                                    
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Perfect moment!
                                </div>
                            </div>
                            ';
                        
                } else {
                    if ($question->id == 1) {
                        echo '<a href="/question.php?id='.$question->id.'" class="btn" target="_self" style="border-radius: 0px;">Take a selfie</a>';
                    } else {
                    echo '<img class="card__image" src="images/'.$question->id.'.jpg" alt="" />';
                    echo '  <div class="card-title">
                                <h2>'.$question->question.'</h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">'
                                    .$question->hint.'
                                </div>
                            </div>
                            <div class="card-flap flap2">
                                <div class="card-actions">
                                    <a href="/question.php?id='.$question->id.'" class="btn" target="_self">Take a selfie</a>
                                </div>
                            </div>
                            ';
                }
            }
            ?>
                
            </div>
        <?php } ?>



    <?php endforeach; ?> 
</div>
<a href="/question.php?reset=reset" class="btn" target="_self">Reset</a>

<?php include 'inc/footer.php';?>
