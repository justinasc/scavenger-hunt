<?php include 'inc/header.php';?>

    <form method="post" action="question.php?id=<?php echo $question->id; ?>">
        <div class="row">
            <div>
                <div id="my_camera"></div>
                <br/>
                <input id="hide" type=button value="Foto" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div>
                <div id="results"></div>
            </div>
            <div>
                <!-- <button id="show" class="btn">Submit</button> -->
                <!-- Maybe try this https://www.kasperkamperman.com/blog/camera-template/ -->
            </div>
        </div>
    </form>

<!-- Configure a few settings and attach camera -->
<script language="javaScript">
		Webcam.set({
			width: 1280,
			height: 720,
			image_format: 'jpeg',
			jpeg_quality: 1000,
			constraints: {
				width: { exact: 1280 },
                height: { exact: 720 }
                // after testing desktop webcam move to mobile front camera
                // facingMode: {
                //     exact: 'environment'
                // }
			}
		});
		Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
        // display results in page and append data to image-tag class
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/><div class="button-action"><button id="show" class="btn">Submit</button></div>';
    } );
}
</script>

<?php include 'inc/footer.php';?>