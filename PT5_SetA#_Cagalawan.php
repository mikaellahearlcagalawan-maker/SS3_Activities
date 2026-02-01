<!DOCTYPE html>
<html>
<head>
	<title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial;
        }
        input {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
	<h2>Grade Calculator</h2>

	<form method="POST">
		1st Quarter Grade: <input type="number" name="q1" 
    required><br>
		2nd Quarter Grade: <input type="number" name="q2" 
    required><br>
        3rd Quarter Grade: <input type="number" name="q3" 
    required><br>
        4th Quarter Grade: <input type="number" name="q4" 
    required><br>
		
		<input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
      
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
    
        $average = ($q1 + $q2 + $q3 + $q4) / 4;

        if ($average >= 90) {
            $description = "Outstanding";
            $remarks = "Passed";
        } elseif ($average >=85) {
            $description = "Very Satisfactory";
            $remarks = "Passed";
        } elseif ($average >=80) {
            $description = "Satisfactory";
            $remarks = "Passed";
        } elseif ($average >=75) {
            $description = "Fairly Satisfactory";
            $remarks = "Passed";
        } else {
            $description = "Did Not Expectations";
            $remarks = "Failed";
        }

        echo "<h3>Average Grade: " . number_format($average,2) . "</h3>";
        echo "<p>Description: $description</p>";
        echo "<p>Reamarks: $remarks</p";
    }
    ?>
    
</body>
</html>