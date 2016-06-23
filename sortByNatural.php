<?php
// Case Insensitive string ordering
Collection::macro('sortByNatural', function ($key) {
    return $this->sortBy($key, SORT_NATURAL | SORT_FLAG_CASE);
});
