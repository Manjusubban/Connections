

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
    }
});
// search
$('#search').on('submit', function(event){
    event.preventDefault();
    var data = {};
    data.gender = $('#gsearch').val();
  $.ajax({
      url: "/search",
      type: "POST",
      data:data,

      success:function(response){
        $("#search")[0].reset();
        if(response == false){
            $('#error').text('users not found');
        }

      },
      error: function(response) {

      }
     });
});



