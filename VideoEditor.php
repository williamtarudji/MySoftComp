<?php

use Illuminate\Database\Seeder;

class VideoEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 3
//        DB::table('software')->insert([
//            'category_id' => 3,
//            'name' => '',
//            'description' => '',
//            'price' => 0,
//            'file_size' => 0,
//            'platform' => '',
//            'platform_count' => 0,
//            'license' => '',
//            'imagedir'=> '',
//        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'AVS Video Editor',
            'description' => 'AVS Video Editor is a video editing software published by Online Media Technologies Ltd. It is a part of AVS4YOU software suite which includes video, audio, image editing and conversion, disk editing and burning, document conversion and registry cleaner programs',
            'price' => 849305,
            'file_size' => 138,
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7, Windows XP, Windows 2003, Vista',
            'platform_count' => 7,
            'license' => 'Trialware',
            'imagedir' => 'avs.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Sony Vegas Pro',
            'description' => 'Vegas Pro (also stylized as VEGAS Pro) is a video editing software package for non-linear editing (NLE) originally published by Sonic Foundry, then by Sony Creative Software, and now by Magix',
            'price' => 4304104,
            'file_size' => 500,
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7',
            'platform_count' => 4,
            'license' => 'Proprietary (Berbayar)',
            'imagedir' => 'sonyvegas.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Corel VideoStudio',
            'description' => 'Corel VideoStudio (formerly Ulead VideoStudio) is a video editing software package for Microsoft Windows distributed by Ulead Systems (a division of Corel).',
            'price' => 1151456,
            'file_size' => 3000,
            'platform' => 'Windows 10, Windows 8, Windows 7',
            'platform_count' => 3,
            'license' => 'Proprietary (Berbayar)',
            'imagedir' => 'corelstudio.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Adobe Premiere Pro',
            'description' => 'Adobe Premiere Pro is a timeline-based video editing app developed by Adobe Systems and published as part of the Adobe Creative Cloud licensing program.',
            'price' => 305971,
            'file_size' => 1000,
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => 4,
            'license' => 'Trialware',
            'imagedir' => 'premiere.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Wondershare Filmora',
            'description' => 'Filmora is an all-in-one home video editing production software that has powerful functionality and a fully stacked feature set. Filmora is a solid app that gives you the features and styles that have been previously only available to professional film makers that have a certain level of experience and the expensive applications to match.',
            'price' => 863556,
            'file_size' => 670,
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => 4,
            'license' => 'Trialware',
            'imagedir' => 'filmora.png',
        ]);
    }
}
