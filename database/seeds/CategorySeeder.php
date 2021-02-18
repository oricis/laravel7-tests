<?php

namespace Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 20)->create();

        $categories = Category::all();
        $this->setSubcategories($categories[0], $categories, [2, 3, 4]);
        $this->setSubcategories($categories[1], $categories, [10, 12, 18]);
        $this->setSubcategories($categories[2], $categories, [5, 6]);
    }


    private function setSubcategories(
        Category $parentCategory,
        object $categories,
        array $positions
    ): void
    {
        $parentCategoryId = $parentCategory->id;
        foreach ($positions as $position) {
            $category = $categories[$position];
            $category->parent_id = $parentCategoryId;
            $category->save();
        }
    }
}
