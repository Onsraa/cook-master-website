<?php

function searchLessons()
{
    $lessons = \App\Models\CookingLesson::take(10)->get();

    return $lessons;
}

function searchUniqueCato($query)
{
    $categories = \App\Models\CookingLesson::pluck($query)->unique();

    return $categories;
}
