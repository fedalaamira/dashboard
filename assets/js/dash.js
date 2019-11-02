
$('#first li').on('click', function() {
  var getValue = $(this).text();
  $('.dropdown-select').text(getValue);
});
$('#second li').on('click', function() {
  var getValue = $(this).text();
  $('.dropdown-select2').text(getValue);
});
$('#third li').on('click', function() {
  var getValue = $(this).text();
  $('.dropdown-select3').text(getValue);
});


$("#signin").on( "click", function() {
  $('#exampleModal').modal('hide');
});
//trigger next modal
$("#signin").on( "click", function() {
      $('#exampleModal2').modal('show');  
});


    $("#signin2").on( "click", function() {
      $('#exampleModal').modal('hide');
  });
  //trigger next modal
  $("#signin2").on( "click", function() {
          $('#exampleModal3').modal('show');  
  });
  $(document).ready(function() {
    $('.progress .progress-bar').progressbar();
  });
  
 
