$(function() {
  
  
  
  
  
  $('.login__submit').on("click", function(e) {
    var name = $('.kodiPerdoruesit').val();
    var pass = $('.fjalekalimi').val();


          if((name == "" || name == null) && (pass == null || pass == "")){
              $('.pass').effect("shake");
              $('.pass').attr("placeholder","Insertoni fjalekalimin");
              $('.name').effect("shake");
              $('.name').attr("placeholder","Insertoni kodin e perdoruesit");

            }else if((name != "" || name != null) && (pass == null || pass == "")){
              $('.pass').effect("shake");
              $('.pass').attr("placeholder","Insertoni fjalekalimin");
              
            }else if((name == "" || name == null) && (pass != null || pass != "")){
              $('.name').effect("shake");
              $('.name').attr("placeholder","Insertoni kodin e perdoruesit");
            }else{

                    
                        $('.login__submit').attr('type','submit');

                   
                     

                     
                     

                    
                    
            }
           
  });
  
         
});