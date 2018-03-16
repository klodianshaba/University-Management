

<!-- fillon dropdown menu................................................ -->

  <script type="text/javascript">


     $(function(){
        $('.tabs').on('click',function(){
        var $panel = $(this).closest('.tabs');
        var value = $panel.find('.submenu').attr('value');


        if (value == 'none') {
            $('.submenu').attr('value','none');
            $('.submenu').slideUp();
            $('.plus').css({transform:'rotate(90deg)'});
            $panel.find('.plus').css({transform:'rotate(45deg)'});
            $panel.find('.submenu').attr('value','block');
            $panel.find('.submenu').slideDown();
        }else if(value == 'block'){
            $panel.find('.plus').css({transform:'rotate(90deg)'});

            $panel.find('.submenu').slideUp();
            $panel.find('.submenu').attr('value','none');
        }


        });
    });


    </script>

<!--  Mbaron dropdown menu................................................ -->



<!-- Fillojn ndrysho te dhenat hapet ................................................ -->
    <script type="text/javascript">
          $(function(){
            
             $('#emri').on('click',function(){
             $('#myDropdownnn').css({display:'block'});
                $('#myDropdownnnn').css({display:'none'});
                $('#myDropdownnnnnnn').css({display:'none'});
                $('#myDropdownnnnnnnn').css({display:'none'});
                $('#myDropdownnnnnnnnn').css({display:'none'});
         });
                $('#mbiemri').on('click',function(){
                $('#myDropdownnnn').css({display:'block'});
                $('#myDropdownnn').css({display:'none'});
                $('#myDropdownnnnnnn').css({display:'none'});
                $('#myDropdownnnnnnnn').css({display:'none'});
                $('#myDropdownnnnnnnnn').css({display:'none'});
             
         });
                $('#eemail').on('click',function(){
                $('#myDropdownnnnnnn').css({display:'block'});
               $('#myDropdownnnn').css({display:'none'});
               $('#myDropdownnn').css({display:'none'});
               $('#myDropdownnnnnnnn').css({display:'none'}); 
               $('#myDropdownnnnnnnnn').css({display:'none'});
             
         });  
                $('#teli').on('click',function(){
                $('#myDropdownnnnnnnn').css({display:'block'});
                $('#myDropdownnnnnnn').css({display:'none'}); 
               $('#myDropdownnnn').css({display:'none'});
               $('#myDropdownnn').css({display:'none'});
               $('#myDropdownnnnnnnnn').css({display:'none'});

             
         }); 
                $('#fjal').on('click',function(){
                $('#myDropdownnnnnnnnn').css({display:'block'});
                $('#myDropdownnnnnnnn').css({display:'none'});
                $('#myDropdownnnnnnn').css({display:'none'}); 
               $('#myDropdownnnn').css({display:'none'});
               $('#myDropdownnn').css({display:'none'});
             
         }); 

            });



    </script>
<!-- Mbaroj ndrysho te dhenat................................................ -->  

<!-- fillon dropdown update................................................ -->


 
<!-- Fillon  shfaq ndrysho email................................................ -->
<script>

function myFunctionnnnnnn() {
    document.getElementById("myDropdownnnnnnn").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtnnn')) {

    var dropdowns = document.getElementsByClassName("dropdown-contentnnnnnn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
       
      }
    }
  }
}
</script>
<!-- Mbaron  shfaq ndrysho email................................................ -->

<!-- fillon valido ndrysho email................................................ -->
<script type="text/javascript">
     function ndryshoemail(){
        var emailivjeter = document.forms["formati"]["emailivjeter"].value;
         var emailiri = document.forms["formati"]["emailiri"].value;
          var konfirmoemail = document.forms["formati"]["konfirmoemail"].value;
        var numri = 4;
        var email= /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;

          if(emailivjeter== ""){
            document.formati.emailivjeter.focus() ;
           document.getElementById("gabim2").innerHTML="Vendosni Email-in e ri ju lutem";
           return false;
        
           }
          if(!email.test(emailivjeter)){
            document.formati.emailivjeter.focus() ;
           document.getElementById("gabim2").innerHTML="Emaili nuk eshte i sakte ju lutem Insertoni perseri";
           return false;
        
           }
             setTimeout(function(){
           document.getElementById("gabim2").innerHTML = '';
           }, 1000);


          if(emailiri== ""){
            document.formati.emailiri.focus() ;
           document.getElementById("gabim3").innerHTML="Vendosni Email-in e ri ju lutem";
           return false;
        
           }
          if(!email.test(emailiri)){
            document.formati.emailiri.focus() ;
           document.getElementById("gabim3").innerHTML="Emaili nuk eshte i sakte ju lutem Insertoni perseri";
           return false;
        
           }
             setTimeout(function(){
           document.getElementById("gabim3").innerHTML = '';
           }, 1000);


          if(konfirmoemail== ""){
            document.formati.konfirmoemail.focus() ;
           document.getElementById("gabim4").innerHTML="Konfirmo Email-in e ri ju lutem";
           return false;
        
           }
          if(!email.test(konfirmoemail)){
            document.formati.konfirmoemail.focus() ;
           document.getElementById("gabim4").innerHTML="Emaili nuk eshte i sakte ju lutem Insertoni perseri";
           return false;
        
           }

           if(konfirmoemail != emailiri){
            document.formati.konfirmoemail.focus() ;
           document.getElementById("gabim4").innerHTML="Emaili Ri nuk eshte Konfirmuar sakte";
           return false;
        
           }
                setTimeout(function(){
           document.getElementById("gabim4").innerHTML = '';
           }, 1000);


    }
</script>
<!-- Mbaron valido ndrysho email................................................ -->

<!-- Fillon shfaq ndrysho numrin e telefonit............................................... -->
<script>

function myFunctionnnnnnnn() {
    document.getElementById("myDropdownnnnnnnn").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtnnn')) {

    var dropdowns = document.getElementsByClassName("dropdown-contentnnnnnnn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
       
      }
    }
  }
}
</script>
<!-- Mbaron  shfaq ndrysho numrin e telefonit............................................... -->

<!-- fillon  valido ndrysho numrin e telefonit............................................... -->
  <script type="text/javascript">
     function ndryshonrtel(){
        var nrteli =  document.forms["formatii"]["nrtel"].value;
        var numri = 10;
      
       
          if(nrteli ==""){
            document.formatii.nrtel.focus() ;
           document.getElementById("gabim6").innerHTML="Vendosni mbiemrin e ri ju lutem";
           return false;
        
           }
       

           if(nrteli.length < numri){
            document.formatii.nrtel.focus() ;
           document.getElementById("gabim6").innerHTML="Numri Telefonit duhet te kete te pakten 10 Karaktere";
           return false;
        
           }
    }
</script>
<!-- Mbaron  valido ndrysho numrin e telefonit............................................... -->


<!-- Fillon shfaq ndrysho Fjalkalimin............................................... -->
<script>

function myFunctionnnnnnnnn() {
    document.getElementById("myDropdownnnnnnnnn").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtnnn')) {

    var dropdowns = document.getElementsByClassName("dropdown-contentnnnnnnnn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
       
      }
    }
  }
}
</script>

<!-- Mbaron shfaq ndrysho fjalkalimin............................................... -->

<!-- Mbaron valido ndrysho fjalkalimin............................................... -->
<script type="text/javascript">
     function ndryshofjalkalimin(){
        var fjalivjeter = document.forms["formatit"]["fjalivjeter"].value;
         var fjaliri = document.forms["formatit"]["fjaliri"].value;
          var konfirmofjal = document.forms["formatit"]["konfirmofjal"].value;
        var numri = 6;


          if(fjalivjeter== ""){
            document.formatit.fjalivjeter.focus() ;
           document.getElementById("gabim7").innerHTML="Vendosni Fjalkalimin e Vjeter ju lutem";
           return false;
        
           }
          if(fjalivjeter.length < numri){
            document.formatit.fjalivjeter.focus() ;
           document.getElementById("gabim7").innerHTML="Fjalkalimi vjeter duhet te jete te pakten 6 karaktere";
           return false;
        
           }
             setTimeout(function(){
           document.getElementById("gabim7").innerHTML = '';
           }, 1000);


          if(fjaliri== ""){
            document.formatit.fjaliri.focus() ;
           document.getElementById("gabim8").innerHTML="Vendosni Fjalkalimin e ri ju lutem";
           return false;
        
           }
          if(fjaliri.length < numri){
            document.formatit.fjaliri.focus() ;
           document.getElementById("gabim8").innerHTML="Fjalkalimi ri duhte te pakten 6 karaktere";
           return false;
        
           }
             setTimeout(function(){
           document.getElementById("gabim8").innerHTML = '';
           }, 1000);


          if(konfirmofjal== ""){
            document.formatit.konfirmofjal.focus() ;
           document.getElementById("gabim9").innerHTML="Konfirmo Fjalkalimin e ri ju lutem";
           return false;
        
           }
          if(konfirmofjal != fjaliri){
            document.formatit.konfirmofjal.focus() ;
           document.getElementById("gabim9").innerHTML="Konfirmimi i fjalkalimit nuk eshte i sakte";
           return false;
        
           }

         
                setTimeout(function(){
           document.getElementById("gabim9").innerHTML = '';
           }, 1000);


    }
</script>
<!-- Mbaron valido ndrysho fjalkalimin............................................... -->


<!-- // Fillon Popup per ndryshimin e fotos -->
<script type="text/javascript">
     function file(){
        var fotoup = document.forms["form"]["upload"].value;
        
       
          if(fotoup == ""){
            document.form.upload.focus() ;
           document.getElementById("errorupload").innerHTML="Ngarkoni nje foto ju lutem Klikoni &quot Ngarko foton &quot";
           return false;
        
           }
        
        }
</script>
<!-- // Mbaron Popup per ndryshimin e fotos -->
