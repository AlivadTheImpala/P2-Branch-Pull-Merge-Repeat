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
        
        <label>Convert From:</label>
            <select name="scale_from">

                <option value="" NULL<?php if (isset($_POST['scale_from']) && $_POST['scale_from'] == NULL) echo 'selected = "unselected"'; ?>> Select one</option>

                <option value="f" <?php if (isset($_POST['scale_from']) && $_POST['scale_from'] == 'f') echo 'selected = "selected"'; ?>> Fahrenheit</option>

                <option value="c" <?php if (isset($_POST['scale_from']) && $_POST['scale_from'] == 'c') echo 'selected = "selected"'; ?>> Celsius </option>

                <option value="k" <?php if (isset($_POST['scale_from']) && $_POST['scale_from'] == 'k') echo 'selected = "selected"'; ?>> Kelvin </option>

            </select>
        
        
        
        
      </fieldset>
      
      
    </form>
    
    <?
     //form.php
    
    
    
    ?>
    
  </body>
</html>
