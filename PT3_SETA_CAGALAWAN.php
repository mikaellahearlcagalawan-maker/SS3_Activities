<?php

$weight = 67;          // weight in kilograms
$lifestyle = 'S';        // 'A' = Active, 'S' = Sedentary

echo "<h2>Daily Calorie Recommendation</h2>";
echo "<hr>";

echo "Weight: <strong>$weight kg</strong><br>";
echo "Lifestyle: <strong>$lifestyle</strong><br><br>";

if ($lifestyle == 'S') {
    $activityFactor = 13;
    echo "Lifestyle Type: Sedentary<br>";
} elseif ($lifestyle == 'A') {
    $activityFactor = 15;
    echo "Lifestyle Type: Active<br>";
} else {
    echo "Invalid lifestyle input!<br>";
    exit;
}

$recommendedCalories = $weight * $activityFactor;

echo "<br>";
echo "Activity Factor Used: <strong>$activityFactor</strong><br>";
echo "Recommended Daily Calories: ";
echo "<strong>" . number_format($recommendedCalories, 2) . " calories</strong>";

echo "<hr>";
echo "<em>Stay healthy and energized!</em>";
?>
