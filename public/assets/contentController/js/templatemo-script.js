$(function() {
  $(".navbar-toggler").on("click", function(e) {
    $(".tm-header").toggleClass("show");
    e.stopPropagation();
  });
    
  $("html").click(function(e) {
    var header = document.getElementById("tm-header");

    if (!header.contains(e.target)) {
      $(".tm-header").removeClass("show");
    }
  });
    
  $("#tm-nav .nav-link").click(function(e) {
    $(".tm-header").removeClass("show");
  });

  /*var banLoc = $('#banFor').attr('href');
  var blockLoc = $('#blockFor').attr('href');
  var warnLoc = $('#warn').attr('href');*/

  $('.disabled').click(function(e){
    $('.disabled').removeAttr('href');
  });

  $("#banDays").on("keyup change", function(e) {
    var value = $('#banDays').val();
    if(value.length > 0){
      $('#banFor').removeClass("disabled");
      //$('#banFor').attr('href', banLoc);
    }else{
      $('#banFor').addClass("disabled");
      //$('#banFor').removeAttr('href');
    }
    
  })

  $("#blockDays").on("keyup change", function(e) {
    var value = $('#blockDays').val();
    if(value.length > 0){
      $('#blockFor').removeClass("disabled");
      //$('#blockFor').attr('href', blockLoc);
    }else{
      $('#blockFor').addClass("disabled");
      //$('#blockFor').removeAttr('href');
    }
    
  })

  $("#warning").on("keyup change", function(e) {
    var value = $('#warning').val();
    if(value.length > 0){
      $('#warn').removeClass("disabled");
      //$('#warn').attr('href', warnLoc);
    }else{
      $('#warn').addClass("disabled");
      //$('#warn').removeAttr('href');
    }
    
  })

  $("#query-userList").on("keyup change", function () {
    var value = $('#query-userList').val();
    var data = {
        query : value
    };
    var json = JSON.stringify(data);
    $.ajax({
      type: 'GET',
      url: '/contentcontroller/searchusers/'+json,
      contentType: 'application/json',
      dataType: "json",
      success: function(userlists) {
        var userlist = userlists.userlist;
        console.log(userlist);
        var html = '';
        if(userlist.length > 0){
          html = '<table class="table table-custom"><thead class="thead-light"><tr><th scope="col">ID</th><th scope="col">Name</th><th scope="col">Email</th><th scope="col">Action</th></tr>';
          html += '</thead><tbody>';
          for (var i = 0; i< userlist.length; i++) {
              html += '<tr><td>' + userlist[i].guid + '</td><td>'+ userlist[i].name + '</td><td>' + userlist[i].email + '</td>';
              html += '<td><div class="tm-prev-next-wrapper d-inline"><a href="/contentcontroller/users/profile/'+userlist[i].guid+'" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Profile</a>';
              html += '<a href="/contentcontroller/users/report/'+userlist[i].guid+'" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Report</a>';
              html += '</td></tr>';
          }
          html += '</tbody></table>';
        }else{
          html += '<h4>Not Data Found </h4>';
        }
        
        $('#update-user-list').html(html);
      }
    });
  });

  $("#query-announcement").on("keyup change", function () {
    var value = $('#query-announcement').val();
    var data = {
        query : value
    };
    var json = JSON.stringify(data);
    $.ajax({
      type: 'GET',
      url: '/contentcontroller/searchannouncement/'+json,
      contentType: 'application/json',
      dataType: "json",
      success: function(announcements) {
        var announcement = announcements.announcement;
        var cc = announcements.contentController;
        console.log(announcement);
        var html = '';
        if(announcement.length > 0){
          for (var i = 0; i< announcement.length; i++) {
            html += '<div class="row tm-row tm-row-post"><article class="col-12 col-md-6 tm-post tm-post-post"><hr class="tm-hr-primary tm-hr-primary-post">';
            html += '<h2 class="tm-pt-30 tm-color-primary tm-post-title">'+announcement[i].subject+'</h2><p class="tm-pt-30">'+announcement[i].body+'</p>';
            html += '<div class="d-flex justify-content-between tm-pt-45"><span class="tm-color-primary">June 24, 2020</span></div><hr>';
            html += '<div class="d-flex justify-content-between"><span>by <a>'+cc[i].name+'</a></span></div></article></div>';
            html += '<div class="row tm-row tm-mt-100 tm-mb-75"><div class="tm-prev-next-wrapper">';
            html += '<a href="/contentcontroller/announcement/update/'+announcement[i].id+'" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 announcement__btn__update">Update</a>';
            html += '<a href="/contentcontroller/announcement/delete/'+announcement[i].id+'" class="mb-2 tm-btn tm-btn-primary tm-prev-next announcement__btn__delete">Delete</a></div></div>';
          }
        }else{
          html += '<h4>Not Data Found </h4>';
        }
        
        $('#update-announcemnet-list').html(html);
      }
    });
  });

  // Prepare the preview for profile picture
  $("#image").change(function(){
    readURL(this);
  });
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image-preview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    } 
  } 
  
});