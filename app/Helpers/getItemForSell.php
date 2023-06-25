<?php
use App\Models\ItemsForSell;

function searchItemsByCategoryLimited($category,$limited)
{
/* This function is used to search items for sell by their category, have the limited value.
 * @category : Search item by the category.
 * @limited : The maximum number can be displayed at a time.
 */
    $items = ItemsForSell::where('category', $category)
        ->limit($limited)
        ->get();

    return $items;
}

function searchCategory($limit){
    /* This function is used to search for which category appear in database
     * @limit : Maximum number of result (0 is no limited)
     */
    if ($limit  <= 0){
        $items = ItemsForSell::pluck('category')->unique();

        return $items;
    } else {
        $items = ItemsForSell::pluck('category')->unique()->take($limit);
        return $items;
    }
}
