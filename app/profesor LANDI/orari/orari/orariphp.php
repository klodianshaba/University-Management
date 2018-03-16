
     <?php 


                            $dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';
                            $db ='university';
                            $conni = mysql_connect($dbhost, $dbuser, $dbpass);
                            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
                            mysql_select_db('university');

  
  if(isset($_POST['kot'])){

        //merr id-te e vlerave te selektuara
        $dep=$_POST['dep'];
        $dega=$_POST['dega'];
        $_SESSION['dep'] = $dep;
        $_SESSION['dega'] = $dega;
   
         if(!empty($dep)  && !empty($dega)){

              
                ?>

                <script type="text/javascript">
                $(function(){
                    $('#orari').css({display:'block'});
                });
                
                </script>


                <?php
        }else{
            echo '<div id="perqef" > Selektoni te gjitha</div>';
        }

    }
   




        

    