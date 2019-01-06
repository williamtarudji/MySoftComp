<?php

use Illuminate\Database\Seeder;

class CodeEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 1
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Sublime Text',
            'description' => 'Sublime Text is built from custom components, providing for unmatched responsiveness. From a powerful, 
            custom cross-platform UI toolkit, to an unmatched syntax highlighting engine, Sublime Text sets the bar for performance.',
            'price' => 1164960,
            'file_size' => 27,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free to Try',
            'imagedir'=> 'sublime.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Atom',
            'description' => 'Atom is the invention of GitHub’s greatest minds',
            'price' => 0,
            'file_size' => 140,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'atom.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Visual Studio Code',
            'description' => 'Visual Studio Code is a Microsoft-powered platform for developers. The application is thus very lightweight and does not consume much of the RAM and promotes fast access and implementation.',
            'price' => 0,
            'file_size' => 3000,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'vscode.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'jEdit',
            'description' => 'jEdit is a mature programmers text editor with hundreds (counting the time developing plugins) of person-years of development behind it.',
            'price' => 0,
            'file_size' => 4,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'jedit.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'CoffeeCup',
            'description' => 'CoffeeCup is a lightweight text editor which supports HTML/CSS programming.',
            'price' => 713538,
            'file_size' => 87,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free to Try',
            'imagedir' => 'coffeecup.png',
        ]);
    }
}
