$(document).ready(function () {                    
  $("#page .pane").hoverIntent(function () {
   $(this).addClass("active").siblings('.pane').removeClass("active");
  }, function () {
    return;
  });
  $(".askpane input[type=submit]").click(function () {
    $.post("/app_dev.php/questions/ajax/add", { 
      question: $(".askpane input#question").attr('value') , 
      answer: $(".askpane input#answer").attr('value') },
      function(data) {
        alert("kthx");
      }
    );    
  });
  
  $(".answerpane input[type=submit]").click(function () {
    $.post("/app_dev.php/questions/ajax/answer", { 
      question_id: $(".askpane input#question_id").attr('value') , 
      answer: $(".askpane input#answer").attr('value') },
      function(data) {
        alert(data.is_good);
      }
    );    
  });
  
             

});
