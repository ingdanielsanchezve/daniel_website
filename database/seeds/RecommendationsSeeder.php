<?php

use Illuminate\Database\Seeder;

class RecommendationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('recommendations')->insert([
            'text' => 'I had the chance to interview Daniel as part of a selection process and I immediately had a very good impression about him. Daniel is a very proactive professional with solid work experience and a great personal attitude.',
            'made_by' => 'Gabriele Murrone',
            'title' => 'CMO & Co-founder',
            'linkedin_profile' => 'https://www.linkedin.com/in/gabriele-murrone-4ab43521/',
            'company' => 'ifeel',
            'lang' => 'en'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Daniel Understood complicated business rules and completed the projects.',
            'made_by' => 'Keith Lubel',
            'title' => 'Chief Technology Officer and Thought Leader',
            'linkedin_profile' => 'https://www.linkedin.com/in/klubell/',
            'company' => 'Berkery Noyes LLC',
            'lang' => 'en'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Tuve la oportunidad de entrevistar a Daniel como parte de un proceso de selección e inmediatamente tuve una muy buena impresión sobre él. Daniel es un profesional muy proactivo con una experiencia laboral sólida y una gran actitud personal.',
            'made_by' => 'Gabriele Murrone',
            'title' => 'CMO & Co-fundador',
            'linkedin_profile' => 'https://www.linkedin.com/in/gabriele-murrone-4ab43521/',            
            'company' => 'ifeel',
            'lang' => 'es'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Daniel entendió reglas de negocio complicadas y completó los proyectos.',
            'made_by' => 'Keith Lubel',
            'title' => 'Director de tecnología y Líder de Pensamiento',
            'linkedin_profile' => 'https://www.linkedin.com/in/klubell/',            
            'company' => 'Berkery Noyes LLC',
            'lang' => 'es'
        ]);

    }
}
