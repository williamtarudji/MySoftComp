<?php

use Illuminate\Database\Seeder;

class TextEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 2
//        DB::table('software')->insert([
//            'category_id' => 2,
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
            'category_id' => 2,
            'name' => 'Apache OpenOffice',
            'description' => 'Apache OpenOffice is both an open-source product and a project. The product is a multiplatform office productivity suite.',
            'price' => '0',
            'file_size' => '234',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'openoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'LibreOffice',
            'description' => 'LibreOffice is an open-source personal productivity suite that gives you six feature rich applications for all your document production and data processing needs, writer, calc, impress, draw, math, and base. Support and documentation is free.',
            'price' => 0,
            'file_size' => 140,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'libreoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'WPS Office Premium',
            'description' => 'Fully compatible with Microsoft Office, WPS Office comes with Writer, Presentation and Spreadsheets allowing you to open, edit and create almost any document type.',
            'price' => 413710,
            'file_size' => 79,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free to Try',
            'imagedir' => 'wpsoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Polaris Office',
            'description' => 'Polaris Office is a free office app with all-in-one feature to view, edit, share, memo and archive all types of documents anytime and anywhere.',
            'price' => 0,
            'file_size' => 75,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'polarisoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'iWork',
            'description' => 'iWork, Apple productivity suite, is the easiest way to create great-looking documents, spreadsheets, and presentations. iWork is compatible with Microsoft Office, so sharing your work is even easier.',
            'price' => 0,
            'file_size' => 302,
            'platform' => 'iOS, Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'iwork.png',
        ]);
    }
}
