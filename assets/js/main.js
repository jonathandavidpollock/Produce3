(function(){
  $("[data-toggle='popover']").popover();
  $("[data-toggle='modal']").on('click',function(){
    $('#myModal').modal();
  });
})();
