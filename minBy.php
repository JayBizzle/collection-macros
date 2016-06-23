<?php
Collection::macro('minBy', function ($callback) {
    $callback = $this->valueRetriever($callback);
    return $this->reduce(function ($result, $item) use ($callback) {
        if ($result === null) {
            return $item;
        }
        return $callback($item) < $callback($result) ? $item : $result;
    });
});
