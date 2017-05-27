
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

  /// API COMPONENTS
console.log('asdf');

    //-----Adding event listener on button---//
    $("#btnSubmit").click(function(e) {
      let val = $('#search').val().replace(/ /g,'');
      console.log(val)
      e.preventDefault();
      console.log('clicked')
      // document.querySelector("#result").innerHTML ="";
      e.preventDefault();
      $.ajax({
        url: "/api/process/",
        data: {
          query: val
      },
      success: function(result) {
        console.log(result);
        result = JSON.parse(result);

        console.log(result);
        var resultContainer = document.getElementById('results');
        console.log(resultContainer)
        console.log(result.items[0].volumeInfo.title);
        let items = "";
        for(let i = 0; i < result.items.length; i++){
            items += '<h2 style="background-color:#efefef; padding:3rem">' + result.items[i].volumeInfo.title + '</h2>';
        }
        console.log("Items: " + items);
        resultContainer.innerHTML = items;
      },
      error: function(result) {
      alert('error');
    }});
    });


})();
