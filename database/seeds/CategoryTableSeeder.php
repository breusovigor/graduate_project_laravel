<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_code' => 'business',
                'category_name' => 'Бизнес',
            ],
            [
                'category_code' => 'sport',
                'category_name' => 'Спорт',
            ],
            [
                'category_code' => 'health',
                'category_name' => 'Здоровье',
            ],
            [
                'category_code' => 'it',
                'category_name' => 'Компьютеры',
            ],
            [
                'category_code' => 'culture',
                'category_name' => 'Культура',
            ],
            [
                'category_code' => 'politics',
                'category_name' => 'Политика',
            ],
            [
                'category_code' => 'life',
                'category_name' => 'Жизнь',
            ],

        ]);
    }
}
