```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number; 
    } else {
      // Handle non-numeric values appropriately, e.g., throw an exception or log an error.
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Now it handles the non-numeric value correctly
```