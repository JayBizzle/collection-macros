<?php

Collection::macro('mapToAssoc', function ($callback) {
    return $this->map($callback)->toAssoc();
});

/* Usage
$emailLookup = $employees->mapToAssoc(function ($employee) {
    return [$employee['email'], $employee['name']];    
});
*/
