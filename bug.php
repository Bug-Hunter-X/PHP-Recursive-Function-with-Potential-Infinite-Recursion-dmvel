```php
function processData(array $data): array {
  // Some data processing logic...
  if (empty($data)) {
    return []; // Handle empty input
  }

  $result = [];
  foreach ($data as $item) {
    // Process each item and add to $result
    // ... some complex processing logic

    if (is_array($item)) {
      $result[] = $this->processData($item); // Recursive call
    } else {
      // Handle non-array item
      $result[] = $item; 
    }
  }

  return $result;
}

$data = [1, 2, [3, 4, [5,6]]];
$processedData = processData($data);
print_r($processedData); 
```