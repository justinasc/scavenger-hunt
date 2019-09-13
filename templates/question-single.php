<?php include 'inc/header.php';?>


    <h1 class="text-center">Capture webcam image with php and jquery - ItSolutionStuff.com</h1>
   
    <form method="post" action="question.php?id=<?php echo $question->id; ?>">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input id="hide" type=button value="Foto" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success">Submit</button>
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
        console.log(data_uri);
        // display results in page and append data to image-tag class
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    } );
}
</script>

<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>

<input type="submit" value="submit" id="buttonId" />



<?php include 'inc/footer.php';?>