<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('education')->insert([
            'institute' => 'Valencia Universitary Technological Institute',
            'title' => 'Computer Science Engineer',
            'year_from' => '2009',
            'year_to' => '2012',
            'lang' => 'en'
        ]);

        DB::table('education')->insert([
            'institute' => 'José Antonio Paéz University',
            'title' => 'Web Application Development Diplomature',
            'year_from' => '2007',
            'year_to' => '2008',
            'lang' => 'en'
        ]);

        DB::table('education')->insert([
            'institute' => 'Valencia Universitary Technological Institute',
            'title' => 'Higher University Technician in Computer Science',
            'year_from' => '2002',
            'year_to' => '2008',
            'lang' => 'en'
        ]);

        DB::table('education')->insert([
            'institute' => 'Instituto Universitario Tecnológico de Valencia',
            'title' => 'Ingeniero en Informática',
            'year_from' => '2009',
            'year_to' => '2012',
            'lang' => 'es'
        ]);

        DB::table('education')->insert([
            'institute' => 'José Antonio Paéz University',
            'title' => 'Diplomado de Desarrollo de Aplicaciones Web',
            'year_from' => '2007',
            'year_to' => '2008',
            'lang' => 'es'
        ]);

        DB::table('education')->insert([
            'institute' => 'Instituto Universitario Tecnológico de Valencia',
            'title' => 'Técnico Superior Universitario en Informática',
            'year_from' => '2002',
            'year_to' => '2008',
            'lang' => 'es'
        ]);

    }
}
