//display in the form to edit
  function displayInEditForm(blogID){

    var blogID = blogID;
       $.ajax({
         url: '/displayInEditForm/'+blogID,
         type: 'get',
         dataType: 'json',
         success: function(response){
           
           
          
        
           
          

           //for ARTICLE
           if(response['data1'] != null){
            
              
                   var blogID = response['data1'].id;
                   var titles = response['data1'].title;
                   
                   var image = response['data1'].image;
                   
                   var content = response['data1'].content;
                   

                   document.getElementById('ids').value=blogID;
                   document.getElementById('titles').value=titles;
                   if (image != "") {
                    document.getElementById('picsLabel').innerHTML=image;
                    
                   }
                  
                   
                 
                  
                  document.getElementById('note1').style.display='block';
                  document.getElementById('ids1').style.display='block';
                  document.getElementById('note2').style.display='block';
                  
                  
                  tinymce.activeEditor.setContent(content);
                  document.getElementById('ids').focus();
                   
                   
               
             
           }//end if

         }//success
       });//ajax
     }//function