<?php

Collection::macro('sortByIds', function ($ids) {
    return $this->sortBy(function ($model) use ($ids) {
        return array_search($model->getKey(), $ids);
    });
});
