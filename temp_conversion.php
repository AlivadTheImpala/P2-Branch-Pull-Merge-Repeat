<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
  
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2>Temperature Converter</h2>
      
      <fieldset>
        <label>Temperature to Convert</label>
            <input type="number" 
                   name="temp_from" 
                   step="any" 
                   value="<?php if (isset($_POST['temp_from'])) echo htmlspecialchars($_POST['temp_from']); ?>" 
            />
        
        
        
        
        
        
      </fieldset>
      
      
    </form>
    
    <?
     //form.php
    
    
    
    ?>
    
  </body>
</html>
