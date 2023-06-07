<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Senza categoria'],
            ['name' => 'Videogiochi'],
            ['name' => 'Esperimenti'],
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->slug = Str::slug($category['name'], '-');
            $newCategory->save();
        }
    }
}
