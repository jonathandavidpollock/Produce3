
(function(){
  console.log("script loaded");
  $("[data-toggle='popover']").popover();
  $("[data-toggle='modal']").on('click',function(){
    $('#myModal').modal();
  });

  $("#ajaxbutton").click(function(){
    $.ajax({
      method:"POST",
      url:"/welcome/ajaxPars",
      data: { email:$("#email").val(), password: $("#password").val()},
      success : function(msg) {
        console.log(msg);
        if(msg.user == "good"){
          alert("Successfully created an account.");
        } else  {
          alert('bad login');
        }
      },
      error : function(msg){
        console.log("error : " + msg);
      }
    });
  });

  $("#showLogin").click(function(e){
    console.log("clicked");
    e.preventDefault();
    $("#log").toggle();
  });



})();
