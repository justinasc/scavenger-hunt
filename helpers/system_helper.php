<?php

// Redirect to page
    function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
        if(is_string($page)) {
            $location = $page;
        } else {
            $location = $_SERVER['SCRIPT_NAME'];
        }
        // Check for message
        if($message != NULL) {
            // Set message
            $_SESSION['message_type'] = $message_type;
        }
        // Check for type
        if($message_type != NULL) {
            $_SESSION['message_type'] = $message_type;
        }

        // echo '
        // <div class="container">
        //     <div class="glass">
        //         <div class="champagne">
        //             <div class="bubbles"> </div>
        //             <div class="bubbles two"> </div>
        //             <div class="bubbles three"> </div>
        //             <div class="bubbles four"> </div>
        //             <div class="bubbles five"> </div>
        //             <div class="bubbles six"> </div>
        //         </div>
        //     </div>
        // <div class="stand"></div>
        // </div>
        // <script type="text/javascript">
        // setTimeout(function(){
        //     $(".champagne").animate({
        //         "height": "+=300",
        //         top: "-=100"
        //     })
        // }, 1000, "ease");

        // window.location='.$location.';</script>';
        
        // echo "<script type='text/javascript'>alert('Wrong Username or Password');
        // window.location='$location';
        // </script>";

        header('Refresh:5; url=$location');
        echo '<div class="loading-page">
        <div class="counter">
          <h1>0%
            <!--
            h1.abs loading
            h1.abs.color loading
            -->
          </h1>
          <hr/>
        </div>
      </div>
      <script>
      $(document).ready(function() {
  
        var counter = 0;
        var c = 0;
        var i = setInterval(function(){
            $(".loading-page .counter h1").html(c + "%");
            $(".loading-page .counter hr").css("width", c + "%");
            //$(".loading-page .counter").css("background", "linear-gradient(to right, #f60d54 "+ c + "%,#0d0d0d "+ c + "%)");
      
          /*
          $(".loading-page .counter h1.color").css("width", c + "%");
          */
          counter++;
          c++;
            
          if(counter == 101) {
              clearInterval(i);
          }
        }, 50);
      });
      </script>
      ';

        // Redirect
        //header('Location: '.$location);
        //exit;

    }