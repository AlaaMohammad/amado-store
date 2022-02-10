<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([[
            'category' => 'Beds',
            'img_src' => 'beds.jpg',
            'slug' => 'beds'
        ], [
            'category' => 'Modern Chairs',
            'img_src' => 'modern-chairs.jpg',
            'slug' => 'modern-chairs'
        ], [
            'category' => 'Outdoor Furniture',
            'img_src' => 'outdoor.jpg',
            'slug' => 'outdoor'
        ], [
            'category' => 'Nursery Furniture',
            'img_src' => 'nursery.jpg',
            'slug' => 'nursery'
        ], [
            'category' => 'Armchairs and Chaise Longues',
            'img_src' => 'armchairs-and-chaise-longues.jpg',
            'slug' => 'armchairs-and-longues'

        ], [
            'category' => 'TV and Media ',
            'img_src' => 'tv-units.jpg',
            'slug' => 'tv-and-media'

        ], [
            'category' => 'Cabinets and Cupboards',
            'img_src' => 'cabinates.jpg',
            'slug' => 'cabinets-and-cupboards'

        ], [
            'category' => 'Bookcases and Shelving units',
            'img_src' => 'bookcases.jpg',
            'slug' => 'bookcases-and-shelving-units'

        ], [
            'category' => 'Tables and Desks',
            'img_src' => 'table-z.jpg',
            'slug' => 'tabels-and-desks'

        ], [
            'category' => 'Children Furniture',
            'img_src' => 'children.jpg',
            'slug' => 'children-furniture'

        ]]);
    }
}
