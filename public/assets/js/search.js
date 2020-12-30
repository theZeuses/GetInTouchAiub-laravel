$(function() {

    $("#adsearcht").on("keyup change", function (e)
     {
       var value = $('#adsearcht').val();
        var data = 
        {
            key : value
        };
      console.log(data);
      var json = JSON.stringify(data);
      //console.log(json);

      $.ajax({
              type: 'GET',
              url: '/Admin/searchadmin/'+json,
              contentType: 'application/json',
              dataType: "json",
              success: function(results) {
                var result = results.result;
            
                console.log(result);
                var html = '';
                if(result.length > 0){
                    html +=' <table border="1">'
                    html += '<tr>'
                    html += '<th>picture</th>'
                    html += ' <th>Admin Id</th>'
                    html += '<th>Name</th>'
                    html += '<th>Email</th>'
                    html += '<th>Gender</th>'
                    html +=  '<th>DoB</th>'
                    html +=  ' <th>Address</th>'           
                    html +=   '<th>Action</th>'
                    html +=  '</tr>'

                    for (var i = 0; i< result.length; i++) {
                          html += '<tr>';
                          html += '<td>' +result[i].profilepicture+'</td>';
                          html += '<td>' +result[i].adminid+'</td>';
                          html += '<td>'+ result[i].name +'</td>';
                          html += '<td>' +result[i].email+'</td>';
                          html += '<td>' +result[i].gender+'</td>';
                          html += '<td>'+ result[i].dob +'</td>';
                          html += '<td>'+ result[i].address +'</td>';
                          html += '<td>';
                          html += '<a href="/Admin/notification/Create'+result[i].adminid+'">Notification</a>';
                          html += '</td>';
                    }
              }

              else{
                  html += '<h4>Not Data Found </h4>';
                }
          
          $('#adlist').html(html);
        }
      });
    });

///// general usr

    $("#usrsrct").on("keyup change", function (e)
    {
      var value = $('#usrsrct').val();
       var data = 
       {
           key : value
       };
     console.log(data);
     var json = JSON.stringify(data);
     console.log(json);

     $.ajax({
             type: 'GET',
             url: '/Admin/Searchuser/'+json,
             contentType: 'application/json',
             dataType: "json",
             success: function(results) {
               var result = results.result;
           
               console.log(result);
               var html = '';
               if(result.length > 0){
                   html +=' <table border="1">'
                   html += '<tr>'
                   html += '<th>picture</th>'
                   html += ' <th>Admin Id</th>'
                   html += '<th>Name</th>'
                   html += '<th>Email</th>'
                   html += '<th>Gender</th>'
                   html +=  '<th>DoB</th>'
                   html +=  ' <th>Address</th>'           
                   html +=   '<th>Action</th>'
                   html +=  '</tr>'

                   for (var i = 0; i< result.length; i++) {
                         html += '<tr>';
                         html += '<td>' +result[i].profilepicture+'</td>';
                         html += '<td>' +result[i].guid+'</td>';
                         html += '<td>'+ result[i].name +'</td>';
                         html += '<td>' +result[i].email+'</td>';
                         html += '<td>' +result[i].gender+'</td>';
                         html += '<td>'+ result[i].dob +'</td>';
                         html += '<td>'+ result[i].address +'</td>';
                         html += '<td>';
                         html += '<a href="/Admin/notification/Create'+result[i].guid+'">Notification</a>';
                         html += '<a href="/Admin/Userlist/blockgu'+result[i].guid+'">Block</a>';
                         html += '<a href="/Admin/Userlist/deleteagu'+result[i].guid+'">Delete</a>';
                         html += '</td>';
                   }
             }

             else{
                 html += '<h4>Not Data Found </h4>';
               }
         
         $('#userchtab').html(html);
       }
     });
   });

 //////////////Content cont
   $("#ccsrct").on("keyup change", function (e)
   {
     var value = $('#ccsrct').val();
      var data = 
      {
          key : value
      };
    console.log(data);
    var json = JSON.stringify(data);
    console.log(json);

    $.ajax({
            type: 'GET',
            url: '/Admin/Searchcclist/'+json,
            contentType: 'application/json',
            dataType: "json",
            success: function(results) {
              var result = results.result;
          
              console.log(result);
              var html = '';
              if(result.length > 0){
                  html +=' <table border="1">'
                  html += '<tr>'
                  html += '<th>picture</th>'
                  html += ' <th>Admin Id</th>'
                  html += '<th>Name</th>'
                  html += '<th>Email</th>'
                  html += '<th>Gender</th>'
                  html +=  '<th>DoB</th>'
                  html +=  ' <th>Address</th>'           
                  html +=   '<th>Action</th>'
                  html +=  '</tr>'

                  for (var i = 0; i< result.length; i++) {
                        html += '<tr>';
                        html += '<td>' +result[i].profilepicture+'</td>';
                        html += '<td>' +result[i].ccid+'</td>';
                        html += '<td>'+ result[i].name +'</td>';
                        html += '<td>' +result[i].email+'</td>';
                        html += '<td>' +result[i].gender+'</td>';
                        html += '<td>'+ result[i].dob +'</td>';
                        html += '<td>'+ result[i].address +'</td>';
                        html += '<td>';
                        html += '<a href="/Admin/notification/Create'+result[i].ccid+'">Notification</a>';
                        html += '<a href="/Admin/CCList/blockcc'+result[i].ccid+'">Block</a>';
                        html += '<a href="Admin/CCList/deleteacc'+result[i].ccid+'">Delete</a>';
                        html += '</td>';
                  }
            }

            else{
                html += '<h4>Not Data Found </h4>';
              }
        
        $('#cclist').html(html);
      }
    });
  });
  ////////////Account Controller
  $("#acsrct").on("keyup change", function (e)
   {
     var value = $('#acsrct').val();
      var data = 
      {
          key : value
      };
    console.log(data);
    var json = JSON.stringify(data);
    console.log(json);

    $.ajax({
            type: 'GET',
            url: '/Admin/Searchac/'+json,
            contentType: 'application/json',
            dataType: "json",
            success: function(results) {
              var result = results.result;
          
              console.log(result);
              var html = '';
              if(result.length > 0){
                  html +=' <table border="1">'
                  html += '<tr>'
                  html += '<th>picture</th>'
                  html += ' <th>Admin Id</th>'
                  html += '<th>Name</th>'
                  html += '<th>Email</th>'
                  html += '<th>Gender</th>'
                  html +=  '<th>DoB</th>'
                  html +=  ' <th>Address</th>'           
                  html +=   '<th>Action</th>'
                  html +=  '</tr>'

                  for (var i = 0; i< result.length; i++) {
                        html += '<tr>';
                        html += '<td>' +result[i].profilepicture+'</td>';
                        html += '<td>' +result[i].acid+'</td>';
                        html += '<td>'+ result[i].name +'</td>';
                        html += '<td>' +result[i].email+'</td>';
                        html += '<td>' +result[i].gender+'</td>';
                        html += '<td>'+ result[i].dob +'</td>';
                        html += '<td>'+ result[i].address +'</td>';
                        html += '<td>';
                        html += '<a href="/Admin/notification/Create'+result[i].acid+'">Notification</a>';
                        html += '<a href="/Admin/ACList/blockac'+result[i].acid+'">Block</a>';
                        html += '<a href="Admin/ACList/deleteac'+result[i].acid+'">Delete</a>';
                        html += '</td>';
                  }
            }

            else{
                html += '<h4>Not Data Found </h4>';
              }
        
        $('#aclist').html(html);
      }
    });
  });


  ////////////////////Search///////////
  $("#srcpost").on("keyup change", function (e)
  {
    var value = $('#srcpost').val();
     var data = 
     {
         key : value
     };
   console.log(data);
   var json = JSON.stringify(data);
   console.log(json);

   $.ajax({
           type: 'GET',
           url: '/Admin/SearchPost/'+json,
           contentType: 'application/json',
           dataType: "json",
           success: function(results) {
             var adminpost = results.result;
            var gupost=results.res;
             console.log(gupost);
             var html = '';
             html +='<div class="tm-site-header ">'          
             html +=' <h1  style ="color: skyblue;"class="text-center">General User Posts</h1>'
             html +='</div>'
             html +=' <div id ="postgu">'
            if(gupost.length > 0){
              html +='<div class="row tm-row">';
                for (var i = 0; i< gupost.length; i++) {
                 html +=' <article class="col-12 col-md-6 tm-post">'
                 html += ' <hr class="tm-hr-primary">'
                 html += '<div class="tm-post-link-inner">'
                 html += ' </div>'
                 html += '<span class="position-absolute tm-new-badge">General User</span>'
                 html += '<h2 class="tm-pt-30 tm-color-primary tm-post-title">'+gupost[i].guid+'</h2>'
                 html += '</a> '
                 html +=  '<p class="tm-pt-30">'
                 html +=  gupost[i].text  ;         
                 html +=   '</p>'
                 html +=  '<span> '+ gupost[i].file+' </span>'
                html += '<div class="d-flex justify-content-between tm-pt-45">';
                       html += '</div>';
                       html += '<hr>';
                       html += '<div class="d-flex justify-content-between">';
                       html += '<span>Comment</span>';
                       html += '</div>';
                       html += '</article>';
                       html += '</div>';
                       html += '</div>';
                 }
           }
           

           else{
               html += '<h4>Not Data Found </h4>';
             }
             

             html +='<div class="tm-site-header ">'          
             html +=' <h1  style ="color: skyblue;"class="text-center">Admin Posts</h1>'
             html +='</div>'
             html +=' <div id ="postgu">'
            if(adminpost.length > 0){
              html +='<div class="row tm-row">';
                for (var i = 0; i< adminpost.length; i++) {
                 html +=' <article class="col-12 col-md-6 tm-post">'
                 html += ' <hr class="tm-hr-primary">'
                 html += '<div class="tm-post-link-inner">'
                 html += ' </div>'
                 html += '<span class="position-absolute tm-new-badge">General User</span>'
                 html += '<h2 class="tm-pt-30 tm-color-primary tm-post-title">'+adminpost[i].adminid+'</h2>'
                 html += '</a> '
                 html +=  '<p class="tm-pt-30">'
                 html +=  adminpost[i].text  ;         
                 html +=   '</p>'
                 html +=  '<span> '+ adminpost[i].file+' </span>'
                html += '<div class="d-flex justify-content-between tm-pt-45">';
                       html += '</div>';
                       html += '<hr>';
                       html += '<div class="d-flex justify-content-between">';
                       html += '<span>Comment</span>';
                       html += '</div>';
                       html += '</article>';
                       html += '</div>';
                       html += '</div>';
                 }
           }
           

           else{
               html += '<h4>Not Data Found </h4>';
             }
            
       
       $('#post').html(html);
     }
   });
 });
});