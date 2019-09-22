<?php include_once 'config/init.php'; ?>

<?php
$question = new Question;

$template = new Template('templates/reset.php');

$question_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['reset'])) {
    echo 'DO SOMETHING';die();

}