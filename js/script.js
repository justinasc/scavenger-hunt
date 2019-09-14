$(document).ready(function(){
    var zindex = 10;
    
    $("div.card").click(function(e){
    //   e.preventDefault();
  
      var isShowing = false;
  
      if ($(this).hasClass("show")) {
        isShowing = true
      }
  
      if ($("div.cards").hasClass("showing")) {
        // a card is already in view
        $("div.card.show")
          .removeClass("show");
  
        if (isShowing) {
          // this card was showing - reset the grid
          $("div.cards")
            .removeClass("showing");
        } else {
          // this card isn't showing - get in with it
          $(this)
            .css({zIndex: zindex})
            .addClass("show");
  
        }
  
        zindex++;
  
      } else {
        // no cards in view
        $("div.cards")
          .addClass("showing");
        $(this)
          .css({zIndex:zindex})
          .addClass("show");
  
        zindex++;
      }
      
    });
  });

  $(document).ready(function(){
    $("#hide").click(function(){
      $("#my_camera").hide();
      $("#hide").hide();
    });
    $("#show").click(function(){
      $("#my_camera").show();
    });
  });

  // Champagne script

  setTimeout(function(){
    $(".champagne").animate({
        "height": "+=300",
        top: "-=100"
    })
}, 5000, "ease");

if ($("#hide").not(":visible")) { // or .is(":hidden")
  console.log('do something');
}