<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name'           => 'Daniel Sánchez',
            'picture'        => 'img/resume/about-me/me.jpg',
            'title'          => 'Desarrollador Full Stack - Ingeniero en Informática',
            'technologies'   => 'PHP / Javascript / HTML5 / CSS3 / Laravel / NodeJs / Angular / VueJs / MySQL / Oracle / MongoDB / Linux / AWS / Docker',
            'location'       => 'El Vendrell, Tarragona',
            'subtitle'       => 'SERVICIOS INFORMÁTICOS',
            'linkedin'       => 'https://www.linkedin.com/in/ingdanielsanchezvzla/',
            'github'         => 'https://github.com/ingdanielsanchezve/',
            'skype'          => 'live:ing.danielsanchez',
            'cv_url'         => 'https://iamdanielsanchez.ml/cv/Daniel_Sánchez_Ing_en_Informática.pdf',
            'aboutme'        => 'Soy Ingeniero en Informática con experiencia en desarrollo web e ingeniería de software usando tecnologías LAMP y MEAN stack, administración de servidores, bases de datos y tecnologías basadas en la nube.',
            'aboutme_more1'  => 'He trabajado con HTML5, CSS3, Bootstrap, Javascript, Jquery, Ajax, AngularJS, BackboneJS, Underscore, Mustache, GruntJs, VueJs, NodeJs, MochaJs, ChaiJs, PHP, Laravel Framework, SQL, MySQL, Oracle, PostgreSQL, Firebird, MongoDB, DynamoDB Databases, Linux, GIT, SVN, Implementación de APIs de desarrolladores de Facebook, Twier, Instagram, LinkedIn, Pinterest, Mailchimp y PayU, Desarrollo de Web Services y RESTful APIs, Desarrollo orientado a pruebas TDD.',
            'aboutme_more2'  => 'También tengo experiencia con Pruebas unitarias, Patrón de arquitectura de software MVC, Implementación de módulos de Apache Server, Administración de Servidores Virtualizados EC2 en Amazon Web Services AWS, Administración de Servidores Linux (Debian, Ubuntu, CentOS), Pl-SQL, Desarrollo de aplicaciones Oracle utilizando Oracle Developer Suite 6 y 10, Visual Studio 6, Metodología de desarrollo SCRUM, Creación de Imagenes y contenedores con Docker.',
            'aboutme_more3'  => 'He diseñado, desarrollado y apoyado con éxito el uso en vivo y las aplicaciones web de alto tráfico, creando y diseñando la UI / UX y programando la lógica de negocios a nivel de backend y base de datos.',
            'aboutme_more4'  => 'Con un título en Ingeniería Informática, tengo una comprensión completa del ciclo de vida completo de un proyecto de desarrollo de software.',
            'birthdate'      => '24 Marzo 1986',
            'marital_status' => 'Soltero',
            'nationality'    => 'Venezolano',
            'phone'          => '34603249528',
            'whatsapp'       => '(+34) 603-249528',
            'email'          => 'ingdanielsanchezve@gmail.com',
            'lang'           => 'es'
        ]);
        
        DB::table('profiles')->insert([
            'name'           => 'Daniel Sánchez',
            'picture'        => 'img/resume/about-me/me.jpg',            
            'title'          => 'Full Stack Developer - Computer Engineer',
            'technologies'   => 'PHP / Javascript / HTML5 / CSS3 / Laravel / NodeJs / Angular / VueJs / MySQL / Oracle / MongoDB / Linux / AWS / Docker',
            'location'       => 'El Vendrell, Tarragona',
            'subtitle'       => 'INFORMATION TECHNOLOGY & SERVICES',
            'linkedin'       => 'https://www.linkedin.com/in/ingdanielsanchezvzla/',
            'github'         => 'https://github.com/ingdanielsanchezve/',
            'skype'          => 'live:ing.danielsanchez',
            'cv_url'         => 'https://iamdanielsanchez.ml/cv/Daniel_Sanchez_Computer_Engineer.pdf',
            'aboutme'        => 'I am a Computer engineer with a large web development and software engineering experience using LAMP and MEAN stacks, databases and servers administration and cloud base technologies.',
            'aboutme_more1'  => 'I have worked with HTML5, CSS3, Bootstrap, Javascript, Jquery, Ajax, AngularJS, BackboneJS, Underscore, Mustache, GruntJs, VueJs,NodeJs, MochaJs, ChaiJs, PHP, Laravel Framework, SQL, MySQL, Oracle, PostgreSQL, Firebird, MongoDB Databases, Linux, GIT, SVN, Facebook, Twitter, Instagram, LinkedIn, Pinterest, Mailchimp and PayU developers APIs, Web Services and RESTful APIs development, Test Driven Development TDD.',
            'aboutme_more2'  => 'Also i have experience with Unit Testing, MVC software architecture pattern, Apache module implementation, Virtual Servers administration on Amazon Web Services AWS EC2 instances, Linux Server Administration (Debian, Ubuntu, CentOS), SEO knowledges, Pl-SQL, Application Development with Oracle Developer Suite 6, Visual Studio 6, Agile development methodologies XP and SCRUM, Docker Images and containers.',
            'aboutme_more3'  => 'I have successfully designed, developed and supported live use and high traffic web applications creating and designing the UI/UX and programming the bussiness logic.',
            'aboutme_more4'  => 'With a degree in Computer Engineering, I have a full understanding of the full lifecycle of a software development project.',
            'birthdate'      => '1986 March 24',
            'marital_status' => 'Single',
            'nationality'    => 'Venezuelan',
            'phone'          => '34603249528',
            'whatsapp'       => '(+34) 603-249528',
            'email'          => 'ingdanielsanchezve@gmail.com',
            'lang'           => 'en'
        ]);
    }
}
