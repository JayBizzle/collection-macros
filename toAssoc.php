<?php

Collection::macro('toAssoc', function () {
    return $this->reduce(function ($assoc, $keyValuePair) {
        list($key, $value) = $keyValuePair;
        $assoc[$key] = $value;
        return $assoc;
    }, new static);
});

/* Usage
$emailLookup = collect([
    ['john@example.com', 'John'],
    ['jane@example.com', 'Jane'],
    ['dave@example.com', 'Dave'],
])->toAssoc();
*/

/* Output
[
  'john@example.com' => 'John',
  'jane@example.com' => 'Jane',
  'dave@example.com' => 'Dave',
]
*/
