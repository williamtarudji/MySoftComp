<?php

use Illuminate\Database\Seeder;

class videoEditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_Editor')->insert([
            'ID' => 1,
            'imageDirectory' => 'AVS.png',
            'name' => 'AVS Video Editor',
            'price' => 849305,
            'size' => 138,
            'platform' =>'Windows 10, Windows 8.1, Windows 8, Windows 7, Windows XP, Windows 2003, Vista',
            'platformCount' => 7,
            'license' => 'Trialware',
            'version' => '8.0.2.302'
        ]);
        DB::table('video_Editor')->insert([
            'ID' => 2,
            'imageDirectory' => 'vegasPro.png',
            'name' => 'Sony Vegas Pro',
            'price' => 4304104,
            'size' => 500,
            'platform' =>'Windows 10, Windows 8.1, Windows 8, Windows 7',
            'platformCount' => 4,
            'license' => 'Proprietary',
            'version' => '16.0 Build 261'
        ]);
        DB::table('video_Editor')->insert([
            'ID' => 3,
            'imageDirectory' => 'corelDraw.png',
            'name' => 'Corel VideoStudio',
            'price' => 1151456,
            'size' => 3000,
            'platform' =>'Windows 10, Windows 8, Windows 7',
            'platformCount' => 3,
            'license' => 'Proprietary',
            'version' => 'Corel VideoStudio Pro 2018'
        ]);
        DB::table('video_Editor')->insert([
            'ID' => 4,
            'imageDirectory' => 'adobePremiere.png',
            'name' => 'Adobe Premiere Pro',
            'price' => 305971,
            'size' => 1000,
            'platform' =>'Windows 10, Windows 8, Windows 7, Mac OS X and later',
            'platformCount' => 4,
            'license' => 'Trialware',
            'version' => 'CC 2019 (13.0.1)'
        ]);
        DB::table('video_Editor')->insert([
            'ID' => 5,
            'imageDirectory' => 'filmora.png',
            'name' => 'Wondershare Filmora',
            'price' =>  863556,
            'size' => 670,
            'platform' =>'Windows 10, Windows 8, Windows 7, Mac OS X and later',
            'platformCount' => 4,
            'license' => 'Trialware',
            'version' => '8.7.5'
        ]);

    }
}
