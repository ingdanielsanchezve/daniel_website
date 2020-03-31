<?php

use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('experiences')->insert([
            'title' => 'Senior Frontend Developer',
            'company' => 'Reliq Health Systems',
            'location' => 'Ontario, Cánada (Remote)',
            'observation' => '(Contracted by Cecropia Solutions)',
            'duration_from' => 'Apr 2018',
            'duration_to' => 'Jul 2018',
            'duration_time' => '4 MONTHS',
            'lang' => 'en'
        ]);
        
        DB::table('experiences')->insert([
            'title' => 'Senior Frontend Developer',
            'company' => 'Berkery Noyes LLC',
            'location' => 'New York, USA (Remote)',
            'observation' => '(Contracted by Cecropia Solutions)',
            'duration_from' => 'Jul 2017',
            'duration_to' => 'Mar 2018',
            'duration_time' => '9 MONTHS',
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'title' => 'CTO - Chief Technology Officer',
            'company' => 'Soy Empleo SAS',
            'location' => 'Medellín, Colombia (Remote)',
            'observation' => '',
            'duration_from' => 'Oct 2015',
            'duration_to' => 'Sep 2017',
            'duration_time' => '2 YEARS',
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Senior Fullstack Developer',
            'company' => 'Octopus Software',
            'location' => 'Valencia - Venezuela',
            'observation' => '',
            'duration_from' => 'Sep 2013',
            'duration_to' => 'Nov 2015',
            'duration_time' => '2 YEARS 3 MONTHS',
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Development Analyst II',
            'company' => 'Valencia City Hall',
            'location' => 'Valencia - Venezuela',
            'observation' => '',
            'duration_from' => 'Jan 2012',
            'duration_to' => 'Jul 2014',
            'duration_time' => '2 YEARS 7 MONTHS',
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Technological Process Analyst II',
            'company' => 'Valencia City Hall',
            'location' => 'Valencia - Venezuela',
            'observation' => '',
            'duration_from' => 'Aug 2008',
            'duration_to' => 'Jan 2012',
            'duration_time' => '3 YEARS 6 MONTHS',
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Desarrollador Frontend Senior',
            'company' => 'Reliq Health Systems',
            'location' => 'Ontario, Cánada (Remoto)',
            'observation' => '(Contratado por Cecropia Solutions)',
            'duration_from' => 'Abr 2018',
            'duration_to' => 'Jul 2018',
            'duration_time' => '4 MESES',
            'lang' => 'es'
        ]);
        
        DB::table('experiences')->insert([
            'title' => 'Desarrollador Frontend Senior',
            'company' => 'Berkery Noyes LLC',
            'location' => 'New York, USA (Remoto)',
            'observation' => '(Contratado por Cecropia Solutions)',
            'duration_from' => 'Jul 2017',
            'duration_to' => 'Mar 2018',
            'duration_time' => '9 MESES',
            'lang' => 'es'
        ]);

        DB::table('experiences')->insert([
            'title' => 'CTO - Director de Tecnología',
            'company' => 'Soy Empleo SAS',
            'location' => 'Medellín, Colombia (Remoto)',
            'observation' => '',
            'duration_from' => 'Oct 2015',
            'duration_to' => 'Sep 2017',
            'duration_time' => '2 AÑOS',
            'lang' => 'es'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Desarrollador Fullstack Senior',
            'company' => 'Octopus Software',
            'location' => 'Valencia, Venezuela',
            'observation' => '',
            'duration_from' => 'Sep 2013',
            'duration_to' => 'Nov 2015',
            'duration_time' => '2 AÑOS 3 MESES',
            'lang' => 'es'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Analista de Desarrollo II',
            'company' => 'Alcaldía de Valencia',
            'location' => 'Valencia, Venezuela',
            'observation' => '',
            'duration_from' => 'Ene 2012',
            'duration_to' => 'Jul 2014',
            'duration_time' => '2 AÑOS 7 MESES',
            'lang' => 'es'
        ]);

        DB::table('experiences')->insert([
            'title' => 'Analista de Procesos Tecnológicos II',
            'company' => 'Alcaldía de Valencia',
            'location' => 'Valencia, Venezuela',
            'observation' => '',
            'duration_from' => 'Ago 2008',
            'duration_to' => 'Ene 2012',
            'duration_time' => '3 AÑOS 6 MESES',
            'lang' => 'es'
        ]);
     
        DB::table('experiences')->insert([
            'title' => 'Senior Frontend Developer',
            'company' => 'Cires21',
            'location' => 'Madrid, Spain (Remote)',
            'observation' => '',
            'duration_from' => 'Jul 2019',
            'duration_to' => 'Present',
            'duration_time' => '9 MONTHS',
            'lang' => 'en'
        ]);        

        DB::table('experiences')->insert([
            'title' => 'Desarrollador Frontend Senior',
            'company' => 'Cires21',
            'location' => 'Madrid, España (Remoto)',
            'observation' => '',
            'duration_from' => 'Jul 2019',
            'duration_to' => 'Presente',
            'duration_time' => '9 MESES',
            'lang' => 'es'
        ]);        
    }
}
