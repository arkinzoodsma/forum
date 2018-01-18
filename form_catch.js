

$(document).ready(function()  {
  $('.form').submit(function(e){
    e.preventDefault();
    var frm = $(this);

    $.ajax({
      type: frm.attr('method'),
      url: frm.attr('action'),
      data: frm.serialize(),
      success: function(data){
        console.log("success");
        console.log(data);
      },
      error: function(data){
        console.log("error");
        console.log(data);
      },
    });
  });
});

