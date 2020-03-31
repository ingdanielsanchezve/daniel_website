<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('languages')->insert([
            'name' => 'Spanish',
            'flag' => 've',
            'level' => 'Native',
            'lang' => 'en'
        ]);

        DB::table('languages')->insert([
            'name' => 'English',
            'flag' => 'us',
            'level' => 'Advanced',
            'lang' => 'en'
        ]);

        DB::table('languages')->insert([
            'name' => 'French',
            'flag' => 'fr',
            'level' => 'Basic',
            'lang' => 'en'
        ]);
        
        DB::table('languages')->insert([
            'name' => 'Español',
            'flag' => 've',
            'level' => 'Nativo',
            'lang' => 'es'
        ]);

        DB::table('languages')->insert([
            'name' => 'Inglés',
            'flag' => 'us',
            'level' => 'Avanzado',
            'lang' => 'es'
        ]);

        DB::table('languages')->insert([
            'name' => 'Francés',
            'flag' => 'fr',
            'level' => 'Básico',
            'lang' => 'es'
        ]);
    }
}
