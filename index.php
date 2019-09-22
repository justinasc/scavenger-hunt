<?php include_once 'config/init.php'; ?>

<?php
$question = new Question;

$template = new Template('templates/frontpage.php');

$template->title = 'Title';
$template->questions = $question->getAllQuestions();

echo $template;