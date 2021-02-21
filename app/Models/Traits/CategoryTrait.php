<?php

namespace App\Models\Traits;

use App\Models\Category;
use Illuminate\Support\Collection;

trait CategoryTrait
{
    private static $subcategorySeparator = ' > ';


    public static function getHierarchy(
        array $cols = ['id', 'name', 'order', 'parent_id'],
        bool $onlyActive = false
    ): object
    {
        $queryBuilder = Category::query();
        $queryBuilder = ($onlyActive)
            ? $queryBuilder->whereActive(0)
            : $queryBuilder;

        $rows = $queryBuilder->get($cols);
        foreach ($rows as $row) {
            $row->hierarchyString = self::composeHierarchyString($row);
        }

        return $rows;
    }

    public static function getHierarchyString(
        array $cols = ['id', 'name', 'order', 'parent_id'],
        bool $onlyActive = false
    ): array
    {
        $hierarchy = self::getHierarchy($cols, $onlyActive);
        $result    = $hierarchy->pluck('hierarchyString', 'id')->toArray();
        asort($result); // order category strings preserving indexes

        return $result;
    }

    public static function composeHierarchyString(Category $category): string
    {
        if (!$category->parent) {
            return  $category->name;
        }

        $parent = $category->parent;
        $hierarchy = [$category->name, $parent->name]; // [actual, parent]

        $grandparent = ($parent->parent_id)
            ? $parent->parent
            : null;
        if ($grandparent) {
            $hierarchy[] = $grandparent->name;

            $greatGrandparent = ($grandparent->parent_id)
                ? $grandparent->parent
                : null;

            if ($greatGrandparent) {
                $hierarchy[] = $greatGrandparent->name;

                $greatGreatGrandparent = ($greatGrandparent->parent_id)
                    ? $greatGrandparent->parent
                    : null;

                // ...
            }
        }

        $orderedHierarchy = array_reverse($hierarchy);

        return implode(self::$subcategorySeparator, $orderedHierarchy);
    }
}
