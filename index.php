
<!DOCTYPE html> 
<html> 
      
<head> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <title> 
    Wind turbine item inspection
    </title> 
</head> 
  

<body > 
      
    <h1> 
    Turbine Safety check 
    </h1> 
      
    <h3> 
    Wind turbine item inspection
    </h3> 

    <form  method="post"> 
        <input type="submit" name="welcomeButton"
                class="button" value="Welcome Message" /> 
          
        <input type="submit" name="resultsButton"
                class="button" value="Results" /> 
    </form> 

    <?php
        if(array_key_exists('welcomeButton', $_POST)) { 
            welcomeButton(); 
        } 
        else if(array_key_exists('resultsButton', $_POST)) { 
            reusltsButton(); 
        } 
        function welcomeButton() { 
            echo "<h3>HI! My Name is Rhys Harries, 
            \n I hope you like my presentation<h3>"; 
        } 
        function reusltsButton() {
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