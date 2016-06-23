<?php
/**
 * Instead of creating unnecessary temp. variables 
 * just put ->dump() whereever in your chain you need to
 * look at the current collection data.
 */
Collection::macro('dump', function () {
    var_dump($this);
    return $this;
});
