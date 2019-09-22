<?php include 'inc/header.php';?>

    <form method="post" action="question.php?id=<?php echo $question->id; ?>">
        <div class="row">
            <div>
                <div id="my_camera"></div>
                <br/>
                <input id="hide" class="button-action" style="background-image: url(../images/camera.png)" type=button value="" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div>
                <div id="results"></div>
            </div>
            <div>
            </div>
        </div>
    </form>

<!-- Configure a few settings and attach camera -->
<script language="javaScript">
		Webcam.set({
			width: 600,
			height: 800,
			image_format: 'jpeg',
			jpeg_quality: 90,
			constraints: {
			}
		});
		Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
        // display results in page and append data to image-tag class
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/><div class="button-action"><button id="show" class="btn">Fount it!</button></div>';
    } );
}
</script>

<?php include 'inc/footer.php';?>