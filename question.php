<?php include_once 'config/init.php'; ?>

<?php
$question = new Question;

$template = new Template('templates/question-single.php');

$question_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->question = $question->getQuestion($question_id);

echo $template;