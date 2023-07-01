<?php
use Illuminate\Support\Facades\Schema;
function getColumnFromTable($tableName) {
    // Execute raw SQL query to retrieve column names
    $query = "DESCRIBE $tableName";
    $columns = Schema::getColumnListing($tableName);
    // Extract column names as objects
//    $columnObjects = collect($columns)->pluck('Field');

    return $columns;
}

