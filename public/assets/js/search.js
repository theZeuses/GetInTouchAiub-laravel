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
      console.log(json);

      $.ajax({
              type: 'GET',
              url: '/Adminhome/SearchAdminlist/'+json,
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
                          html += '<a href="/Adminhome/NotificationAd/'+result[i].adminid+'">Notification</a>';
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
             url: '/Adminhome/Searchuserlist/'+json,
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
                         html += '<a href="/Adminhome/NotificationAd/'+result[i].guid+'">Notification</a>';
                         html += '<a href="/Adminhome/Blockuser/'+result[i].guid+'">Block</a>';
                         html += '<a href="/Adminhome/deleteuser/'+result[i].guid+'">Delete</a>';
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
            url: '/Adminhome/Searchcclist/'+json,
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
                        html += '<a href="/Adminhome/NotificationAd/'+result[i].ccid+'">Notification</a>';
                        html += '<a href="/Adminhome/BlockContentCont/'+result[i].ccid+'">Block</a>';
                        html += '<a href="/Adminhome/deleteContentCont/'+result[i].ccid+'">Delete</a>';
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
            url: '/Adminhome/Searchaclist/'+json,
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
                        html += '<a href="/Adminhome/NotificationAd/'+result[i].acid+'">Notification</a>';
                        html += '<a href="/Adminhome/BlockAccCont/'+result[i].acid+'">Block</a>';
                        html += '<a href="/Adminhome/deleteAccCont/'+result[i].acid+'">Delete</a>';
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
           url: '/Adminhome/SearchPost/'+json,
           contentType: 'application/json',
           dataType: "json",
           success: function(results) {
             var result = results.result;
         
             console.log(result);
             var html = '';
             if(result.length > 0){
              html +='<div class="row tm-row">';
                for (var i = 0; i< result.length; i++) {
                 html +=' <article class="col-12 col-md-6 tm-post">'
                 html += ' <hr class="tm-hr-primary">'
                 html += '<div class="tm-post-link-inner">'
                 html += ' </div>'
                 html += '<span class="position-absolute tm-new-badge">General User</span>'
                 html += '<h2 class="tm-pt-30 tm-color-primary tm-post-title">'+result[i].guid+'</h2>'
                 html += '</a> '
                 html +=  '<p class="tm-pt-30">'
                 html +=  result[i].text  ;         
                 html +=   '</p>'
                 html +=  '<span> '+ result[i].file+' </span>'
                html += '<div class="d-flex justify-content-between tm-pt-45">';
                       html += '</div>';
                       html += '<hr>';
                       html += '<div class="d-flex justify-content-between">';
                       html += '<span>Comment</span>';
                       html += '</div>';
                       html += '</article>';
                      
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