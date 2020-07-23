<?php
    $total = 0;
    if(isset($_POST['submit']))
    {
        $val1 = $_POST['value1'];
        $val2 = $_POST['value2'];
        $total = $val1+$val2;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Addition</title>
    </head>
    <body>
        <h3>Sum of 2 numbers</h3>
        <form method="post">
            <label>    Value 1</label>
            <input type="text" name="value1" value=""><br/>
            <label>    Value 2</label>
            <input type="text" name="value2" value=""><br/>
            <label>    Total is: <?php echo $total; ?></label><br/>
            <input  type="submit" name="submit" value="Submit"/>
           
        
           
        </form>
    </body>
</html>
