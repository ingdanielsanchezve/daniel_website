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
            'text' => 'Daniel was a very important support for SoyEmpleo, a digital platform for recruitment of personnel, led a team of eight people where there were FrontEnd and BackEnd developers and their role was to direct both teams in order to comply with the times established by the Product Owner. He was always very committed and professional in all the time we worked together which was a little over two years. I recommend him 100%.',
            'made_by' => 'Juan Felipe Cucalon',
            'title' => 'CEO',
            'picture' => 'img/references/juan_felipe_cucalon.jpeg',
            'linkedin_profile' => 'https://www.linkedin.com/in/juan-felipe-cucalon/',
            'company' => 'Soy Empleo SAS',
            'lang' => 'en'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'I had the chance to interview Daniel as part of a selection process and I immediately had a very good impression about him. Daniel is a very proactive professional with solid work experience and a great personal attitude.',
            'made_by' => 'Gabriele Murrone',
            'title' => 'CMO & Co-founder',
            'picture' => 'img/references/gabriel_murrone.jpeg',            
            'linkedin_profile' => 'https://www.linkedin.com/in/gabriele-murrone-4ab43521/',
            'company' => 'ifeel',
            'lang' => 'en'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Daniel Understood complicated business rules and completed the projects.',
            'made_by' => 'Keith Lubel',
            'title' => 'Chief Technology Officer and Thought Leader',
            'picture' => 'img/references/keith_lubel.jpeg',                        
            'linkedin_profile' => 'https://www.linkedin.com/in/klubell/',
            'company' => 'Berkery Noyes LLC',
            'lang' => 'en'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Daniel fue un apoyo muy importante para SoyEmpleo, una plataforma digital de reclutamiento de personal, dirigió un equipo de ocho personas donde habian desarrolladores FrontEnd y BackEnd y su rol era dirigir ambos equipo con el objetivo de cumplir con los tiempos establecidos por el Product Owner. Siempre fue muy comprometido y profesional en todo el tiempo que trabajamos juntos que fue un poco más de dos años. Lo recomiendo al 100%.',
            'made_by' => 'Juan Felipe Cucalon',
            'title' => 'CEO',
            'picture' => 'img/references/juan_felipe_cucalon.jpeg',            
            'linkedin_profile' => 'https://www.linkedin.com/in/juan-felipe-cucalon/',
            'company' => 'Soy Empleo SAS',
            'lang' => 'es'
        ]);

        DB::table('recommendations')->insert([
            'text' => 'Tuve la oportunidad de entrevistar a Daniel como parte de un proceso de selección e inmediatamente tuve una muy buena impresión sobre él. Daniel es un profesional muy proactivo con una experiencia laboral sólida y una gran actitud personal.',
            'made_by' => 'Gabriele Murrone',
            'title' => 'CMO & Co-fundador',
            'picture' => 'img/references/gabriel_murrone.jpeg',                        
            'linkedin_profile' => 'https://www.linkedin.com/in/gabriele-murrone-4ab43521/',            
            'company' => 'ifeel',
            'lang' => 'es'
        ]);
        
        DB::table('recommendations')->insert([
            'text' => 'Daniel entendió reglas de negocio complicadas y completó los proyectos.',
            'made_by' => 'Keith Lubel',
            'title' => 'Director de tecnología y Líder de Pensamiento',
            'picture' => 'img/references/keith_lubel.jpeg',                     
            'linkedin_profile' => 'https://www.linkedin.com/in/klubell/',            
            'company' => 'Berkery Noyes LLC',
            'lang' => 'es'
        ]);

    }
}
