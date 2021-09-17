//displaying how many minutes/ hrs/second ago the posted reply
function timeSince(date) {

  var seconds = Math.floor((new Date() - date) / 1000);

  var interval = seconds / 31536000;

  if (interval > 1) {
    return Math.floor(interval) + " years";
  }
  interval = seconds / 2592000;
  if (interval > 1) {
    return Math.floor(interval) + " months";
  }
  interval = seconds / 86400;
  if (interval > 1) {
    return Math.floor(interval) + " days";
  }
  interval = seconds / 3600;
  if (interval > 1) {
    return Math.floor(interval) + " hours";
  }
  interval = seconds / 60;
  if (interval > 1) {
    return Math.floor(interval) + " minutes";
  }
  return Math.floor(seconds) + " seconds";
}



// for showing the reply textarea in every comment
function showReply(id){
	if (document.getElementById("showReply"+id).style.display!='none') {
		document.getElementById("showReply"+id).style.display="none";
	}else{
		document.getElementById("showReply"+id).style.display="flex";
	}
	
}
//for displaying the reply for each comment using AJAX

 function displayReply(commentId){



    var commentId = commentId;
       $.ajax({
         url: '/displayReply/'+commentId,
         type: 'get',
         dataType: 'json',
         success: function(response){
           
           var len = 0;
           var tr_str ="";
           if(response['data'] != null){
              len = response['data'].length;
           }

           if(len > 0){
              for(var i=0; i<len; i++){
                 var replyID = response['data'][i].id;
                 
                 var reply = response['data'][i].reply;
                 var created_at = response['data'][i].created_at;
                 var picture = response['data'][i].picture;
                 var name = response['data'][i].name;

                 
                 if (picture!="user1.png") {
                 	// if the picture is chaged
                 		tr_str = tr_str+ '<div class="media mt-4" style="margin-top: 0rem!important;"> <a class="pr-3" href="#"><img class="rounded-circle" alt="My Picture" src="'+'http://127.0.0.1:8000/storage/'+name+'/'+picture+'" /></a>'+
                                                            ' <div class="media-body">'+
                                                                '<div class="row">'+
                                                                    '<div class="col-12 d-flex">'+
                                                                        '<h5 style="margin-right: 20px;">'+name+'</h5> <span> '+ timeSince(new Date(created_at))+
                                                                        ' </span>'+
                                                                    '</div>'+
                                                                '</div><div style="background-color: #f4f4f4;height: 50px;padding-top: 10px;padding-left: 10px;margin-bottom: 20px;">'+reply+
                                                           ' </div></div></div>';
                 }else{
                 	tr_str = tr_str+ '<div class="media mt-4" style="margin-top: 0rem!important;"> <a class="pr-3" href="#"><img class="rounded-circle" alt="My Picture" src="'+'http://127.0.0.1:8000/dist/img/'+picture+'" /></a>'+
                                                            ' <div class="media-body">'+
                                                                '<div class="row">'+
                                                                    '<div class="col-12 d-flex">'+
                                                                        '<h5 style="margin-right: 20px;">'+name+'</h5> <span> '+ timeSince(new Date(created_at))+
                                                                        ' </span>'+
                                                                    '</div>'+
                                                                '</div><div style="background-color: #f4f4f4;height: 50px;padding-top: 10px;padding-left: 10px;margin-bottom: 20px;">'+reply+
                                                           ' </div></div></div>';
                 }
                  
                       document.getElementById('displayReply'+commentId).innerHTML=tr_str;
                 // $("#forSize"+id).append(tr_str);
              }//end foreach
           }//end if

         }//success
       });//ajax
     }//function

