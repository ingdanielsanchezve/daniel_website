<?php

use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('certifications')->insert([
            'url' => 'https://udemy-certificate.s3.amazonaws.com/image/UC-RK9XV96Z.jpg',
            'img' => 'https://udemy-certificate.s3.amazonaws.com/image/UC-RK9XV96Z.jpg',
            'title' => 'Visual Studio Code: Mejora tu velocidad para codificar',
            'width' => '185',
            'height' => '120',
            'certified_by' => 'Udemy'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://udemy-certificate.s3.amazonaws.com/image/UC-1CEW03K2.jpg',
            'img' => 'https://udemy-certificate.s3.amazonaws.com/image/UC-1CEW03K2.jpg',
            'title' => 'Primeros pasos con Vue.js | Vue en ejercicios',
            'width' => '185',
            'height' => '120',
            'certified_by' => 'Udemy'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/9fcd63c330374e8ea794f05eab66eff0',
            'level' => 'silver',
            'name' => 'Daniel Sánchez',
            'title' => 'HTML/CSS',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/e1ea931a8a6b4d908f475a16b30014ba',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'JavaScript',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);            

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/fb8705ff118f483d9fe948a958ade68e',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Angular ',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/b15db6c923564003bcfa49eda1875e9e',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'PHP',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/6fffefe6867d4a9aa3c5b14d70620fe6',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'SQL ',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/452d1f5c4be8469ebbc850088e987b2a',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'PHP, MySQL, and SQL',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/05046c27aefc494ba3a70544e24d584b',
            'level' => 'silver',
            'name' => 'Daniel Sánchez',
            'title' => 'MySQL and SQL',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/7f32f5a5cbbe4c2a8ff443deef8844cd',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Linux ',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/69bf6011be8d446192e0832ed979234a',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Verbal Reasoning',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/ba7acaa0446742c0a180efe34b40d989',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Logical Reasoning',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/280c8c1cbf51441fa5bcdccc05a87f1b',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Numerical Reasoning',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);

        DB::table('certifications')->insert([
            'url' => 'https://www.testdome.com/cert/71ba1891c00a4483a0f066addf871846',
            'level' => 'gold',
            'name' => 'Daniel Sánchez',
            'title' => 'Numerical Reasoning (Hard)',
            'certified_by' => 'TestDome',
            'certified_type' => 'Certificate'
        ]);


    }
}
