```php
function processData(array $data, array &$processed = []): array {
  // Some data processing logic...
  if (empty($data)) {
    return []; // Handle empty input
  }

  $result = [];
  foreach ($data as $item) {
    $key = spl_object_hash($item);
    if (isset($processed[$key])) {
      continue; // Skip already processed items
    }
    $processed[$key] = true; 

    if (is_array($item)) {
      $result[] = processData($item, $processed); // Recursive call
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

// Example with circular reference (will not cause infinite recursion)
$circular = [];
$circular[] = &$circular; 

$dataWithCircular = [1,2,$circular];
$processedDataCircular = processData($dataWithCircular);
print_r($processedDataCircular);
```