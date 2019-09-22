  $(document).ready(function(){
    $("#hide").click(function(){
      $("#my_camera").hide();
      $("#hide").hide();
    });
    $("#show").click(function(){
      $("#my_camera").show();
    });
  });

  $(document).ready(function(){
    $("#show-2").click(function(){
        $('#2').css('display', 'inline-block');
    });
  });
  $(document).ready(function(){
    $("#show-3").click(function(){
        $('#3').css('display', 'inline-block');
    });
  });
  $(document).ready(function(){
    $("#show-4").click(function(){
        $('#4').css('display', 'inline-block');
    });
  });
  $(document).ready(function(){
    $("#show-5").click(function(){
        $('#5').css('display', 'inline-block');
    });
  });

  // Champagne script

  setTimeout(function(){
    $(".champagne").animate({
        "height": "+=300",
        top: "-=100"
    })
}, 1000, "ease");

