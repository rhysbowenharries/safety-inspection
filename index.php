
<!DOCTYPE html> 
<html> 
      
<head> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <title> 
    Wind turbine item inspetion
    </title> 
</head> 
  

<body > 
      
    <h1 style="rgba(0,255,0,.75);"> 
    Turbine Safety check 
    </h1> 
      
    <h3> 
    Wind turbine item inspection

    </h3> 
      <form style="margin: 20px;" method="post"> 
        <input type="submit" name="button1"
                class="button" value="Welcome Message" /> 
          
        <input type="submit" name="button2"
                class="button" value="Results" /> 
    </form> 

    <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            echo "<h3>HI! My Name is Rhys Harries, 
            \n I hope you like my presentation<h3>"; 
        } 
        function button2() {
          for ($i = 1; $i <= 100; $i++) {
            $result = "";
            if($i % 3 === 0) {$result .= "Coating Damage";}
            if($i % 5 === 0) {
              if ($result === "") {$result .= "Lightning Strike";}
              else {$result .= " and Lightning Strike";}
            }
        
            if($result === "") { $result = $i;}
            print "<p>$result</p>"; 
          }
        }
    ?> 
  
    
</head> 
  
</html> 