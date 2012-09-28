$(document).ready(function () {                    
  $("#page .pane").hoverIntent(function () {
   $(this).addClass("active").siblings('.pane').removeClass("active");
  }, function () {
    return;
  });
});
