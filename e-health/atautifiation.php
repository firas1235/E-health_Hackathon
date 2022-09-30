<?php      
    include('config.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($link, $username);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: /admin.php');
            session_start();
            $_SESSION['user']=$row;
            $_SESSION['role']="admin";  
            $_SESSION['auth']="";
            
        } 
        else{
        $sql2 = "select *from cnopt where username = '$username' and password = '$password'";  
        $result2 = mysqli_query($link, $sql2);  
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count2 = mysqli_num_rows($result2);   
          if($count2 == 1){  
            echo "<h1><center> Login successful cnopt </center></h1>"; 
            session_start();
            $_SESSION['user']=$row2;
            $_SESSION['role']="cnopt";  
            $_SESSION['auth']="";
        }    
        else{
            $sql3 = "select *from dpm where username = '$username' and password = '$password'";  
            $result3 = mysqli_query($link, $sql3);  
            $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);  
            $count3 = mysqli_num_rows($result3);   
              if($count3 == 1){  
                echo "<h1><center> Login successful dpm </center></h1>"; 
                session_start();
                $_SESSION['user']=$row3;
                $_SESSION['role']="dpm"; 
                $_SESSION['auth']="";
            } 
            else{
                $sql4 = "select *from grossiste where username = '$username' and password = '$password'";  
                $result4 = mysqli_query($link, $sql4);  
                $row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);  
                $count4 = mysqli_num_rows($result4);   
                  if($count4 == 1){  
                    echo "<h1><center> Login successful grossiste </center></h1>";  
                    session_start();
                    $_SESSION['user']=$row4;
                    $_SESSION['role']="grossiste";
                    $_SESSION['auth']="";
                } 


                else{
                    $sql5 = "select *from ineas where username = '$username' and password = '$password'";  
                    $result5 = mysqli_query($link, $sql5);  
                    $row5 = mysqli_fetch_array($result5, MYSQLI_ASSOC);  
                    $count5 = mysqli_num_rows($result5);   
                      if($count5 == 1){  
                        echo "<h1><center> Login successful ineas </center></h1>";  
                        session_start();
                        $_SESSION['user']=$row5;
                        $_SESSION['role']="ineas";
                        $_SESSION['auth']="";
                    } 
                  

                    else{
                        $sql6 = "select *from medecin where username = '$username' and password = '$password'";  
                        $result6 = mysqli_query($link, $sql6);  
                        $row6 = mysqli_fetch_array($result6, MYSQLI_ASSOC);  
                        $count6 = mysqli_num_rows($result6);   
                          if($count6 == 1){  
                            echo "<h1><center> Login successful medecin </center></h1>";  
                           session_start();
                           $_SESSION['user']=$row6;
                           $_SESSION['role']="medecin";
                           $_SESSION['auth']="";

                           
                          
                        } 

                        else{
                            $sql7 = "select *from pct where username = '$username' and password = '$password'";  
                            $result7 = mysqli_query($link, $sql7);  
                            $row7 = mysqli_fetch_array($result7, MYSQLI_ASSOC);  
                            $count7 = mysqli_num_rows($result7);   
                              if($count7 == 1){  
                                echo "<h1><center> Login successful pct </center></h1>";  
                                session_start();
                                $_SESSION['user']=$row7;
                                $_SESSION['role']="pct";
                                $_SESSION['auth']="";
     
                               
                            } 
                            else{
                                $sql8 = "select *from pharmacie where username = '$username' and password = '$password'";  
                                $result8 = mysqli_query($link, $sql8);  
                                $row8 = mysqli_fetch_array($result8, MYSQLI_ASSOC);  
                                $count8 = mysqli_num_rows($result8);   
                                  if($count8 == 1){  
                                    echo "<h1><center> Login successful pharmacie </center></h1>"; 
                                    
                                    session_start();
                                    $_SESSION['user']=$result10;
                                    $_SESSION['role']="pharmacie";
                                    $_SESSION['auth']="";
         
                                    
                                } 
                      
                                else{
                                    $sql9 = "select *from sephire where username = '$username' and password = '$password'";  
                                    $result9 = mysqli_query($link, $sql9);  
                                    $row9 = mysqli_fetch_array($result9, MYSQLI_ASSOC);  
                                    $count9 = mysqli_num_rows($result9);   
                                      if($count9 == 1){  
                                        echo "<h1><center> Login successful sephire </center></h1>";  
                                        session_start();
                                        $_SESSION['user']=$row9;
                                        $_SESSION['role']="sephire";
                                        $_SESSION['auth']="";
             
                                    } 

                                    else{
                                        $sql10 = "select *from spot where username = '$username' and password = '$password'";  
                                        $result10 = mysqli_query($link, $sql10);  
                                        $row10 = mysqli_fetch_array($result10, MYSQLI_ASSOC);  
                                        $count10 = mysqli_num_rows($result10);   
                                          if($count10 == 1){  
                                            echo "<h1><center> Login successful spot </center></h1>";  
                                            session_start();
                                            $_SESSION['user']=$row10;
                                            $_SESSION['role']="spot";
                                            $_SESSION['auth']="";
                 
                                        } 
    

       
                                        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            session_start();
            $_SESSION['auth']="faled";
        } } }}}}
    }}  } 
}
session_start();
if( $_SESSION['auth']=="faled"){
    header('Location: login.php');
}
else{
    header('Location: '.$_SESSION['role'].'/index.php');
}

?>  