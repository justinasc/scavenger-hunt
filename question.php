<?php include_once 'config/init.php'; ?>

<?php
$question = new Question;

$template = new Template('templates/question-single.php');

$question_id = isset($_GET['id']) ? $_GET['id'] : null;

$question_reset = $_GET['reset'];
if(isset($question_reset)){
    $question->resetQuestions();
    $question->resetQuestion();
    redirect('index.php', 'Your job has been updated', 'success', $question_id);
}

if(isset($_POST['image'])) {
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpeg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

    if($question->update($question_id, $fileName)) {
        $question_id++;
        $question->getNextQuestion($question_id);
        redirect('index.php', 'Your job has been updated', 'success', $question_id);
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }

}

$template->question = $question->getQuestion($question_id);

echo $template;