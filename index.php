<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <h1>CGPA Calculator</h1>
    </head>
    <body>
        <form action="index.php" method="post">
        
        Enter Subject Code 1: <input type="text" name="SubjectCode1">
        Enter Marks: <input type="text" name="Marks1"><br><br>
        
        Enter Subject Code 2: <input type="text" name="SubjectCode2">
        Enter Marks: <input type="text" name="Marks2"><br><br>
        
        Enter Subject Code 3: <input type="text" name="SubjectCode3">
        Enter Marks: <input type="text" name="Marks3"><br><br>
        
        <input type="submit" value = "Calculate CGPA"><br><br>
        
        <?php
        IF (ISSET($_POST["SubjectCode1"])){
        
        $SubjectCode1 = $_POST["SubjectCode1"];
        $Marks1 = $_POST["Marks1"];
        
        $SubjectCode2 = $_POST["SubjectCode2"];
        $Marks2 = $_POST["Marks2"];
        
        $SubjectCode3 = $_POST["SubjectCode3"];
        $Marks3 = $_POST["Marks3"];
        
        $CreditHour1 = substr($SubjectCode1,-1,1);
        $CreditHour2 = substr($SubjectCode2,-1,1);
        $CreditHour3 = substr($SubjectCode3,-1,1);
       
        IF ($Marks1 > 90 and $Marks1 <=100){
            $Point1 = 4*$CreditHour1;
        }elseif ($Marks1 >= 80 and $Marks1 < 90) {
            $Point1 = 3.67*$CreditHour1;
        }
        
        IF ($Marks2 > 90 and $Marks2 <=100){
            $Point2 = 4*$CreditHour2;
        }elseif ($Marks2 >= 80 and $Marks2 < 90) {
            $Point2 = 3.67*$CreditHour2;
        }
        
        IF ($Marks3 > 90 and $Marks3 <=100){
            $Point3 = 4*$CreditHour3;
        }elseif ($Marks3 >= 80 and $Marks3 < 90) {
            $Point3 = 3.67*$CreditHour3;
        }
        
        $TotalPoint = $Point1 + $Point2 + $Point3;
        $TotalCreditHour = $CreditHour1+$CreditHour2+$CreditHour3;
        
        $CGPA = $TotalPoint/$TotalCreditHour;
        
        echo "Total Credit Hour = " . $TotalCreditHour . "<br>";
        echo "CGPA = " . $CGPA . "<br>";
        
        if ($CGPA > 3.75){
            echo "Congratulations, You Got First Class";
        }elseif ($CGPA< 3.75){
            echo "Congratulations, You Got 2nd Class Upper";
        }
        }
        ?>
    </body>
</html>
