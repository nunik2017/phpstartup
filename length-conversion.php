<!DOCTYPE html>
<html>
  <head>
    <title>Temperature conversion</title>

  </head>
  <body>
     <form action="length-processor.php" method="post">
       Please enter number in centimeters: <input type="number" name="centimeters"><br>
       Please choose conversion option: <br>
       <input type="radio" name="convopt" value="meters">Meters <br>
       <input type="radio" name="convopt" value="yards">Yards (2 decimal) <br>
       <input type="radio" name="convopt" value="inches">Inches<br>
       <input type="submit" name="submit" value="Convert">
     </form>

   </body>
</html>
