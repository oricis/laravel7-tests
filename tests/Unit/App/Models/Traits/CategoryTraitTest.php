<?php

namespace Tests\Unit\App\Models\Traits;

use App\Models\Category;
use Illuminate\Support\Arr;
use Tests\TestCase;

class CategoryTraitTest extends TestCase
{

    public function testGetHierarchyString(): void
    {
        $cols = ['id', 'name', 'parent_id'];
        $categoryWithoutParent = Category::whereNull('parent_id')
            ->orderBy('name')
            ->get($cols)
            ->first();
        $categoryWithParent = Category::whereNotNull('parent_id')
            ->get($cols)
            ->first();

        $this->assertNull($categoryWithoutParent->parent);
        $this->assertNotNull($categoryWithParent->parent);

        $hierarchy = Category::getHierarchyString($cols);
        $expected = $categoryWithoutParent->name;
        $result = Arr::first($hierarchy);
        $this->assertEquals($expected, $result);
    }

    public function testGetHierarchy(): void
    {
        $hierarchy = Category::getHierarchy(); // CategoryTrait
        $totalHierarchyElements = count($hierarchy);
        $this->assertTrue($totalHierarchyElements > 0);

        $categories = Category::all();
        $totalCategories = $categories->count();
        $this->assertEquals($totalCategories, $totalHierarchyElements);
    }
}
