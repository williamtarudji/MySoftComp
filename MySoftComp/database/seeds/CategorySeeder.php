<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

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
        DB::table('categories')->insert([
            'category_id' => 'CE001',
            'category_name' => 'Source Code Editor',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'category_id' => 'TE001',
            'category_name' => 'Text Editor',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'category_id' => 'VE001',
            'category_name' => 'Video Editor',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
