<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'title' => 'Academia de Inversionistas',
            'category' => 'websites',
            'url' => 'img/portfolio/academia.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Kayra Makeup International',
            'category' => 'websites',
            'url' => 'img/portfolio/kayra.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Materiales Electricos',
            'category' => 'websites',
            'url' => 'img/portfolio/matelects.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Serpro de Venezuela',
            'category' => 'websites',
            'url' => 'img/portfolio/serpro.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'SMG Corporations',
            'category' => 'websites',
            'url' => 'img/portfolio/smgcorps.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Centro Médico Grupo Vitasana',
            'category' => 'websites',
            'url' => 'img/portfolio/vitasana.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Zona Trabajo',
            'category' => 'websites',
            'url' => 'img/portfolio/zona.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Daniel Sánchez Personal Profesional Website',
            'category' => 'websites',
            'url' => 'img/portfolio/daniel.png'
        ]);

        DB::table('portfolios')->insert([
            'title' => 'Manufactura Cohesiva Website',
            'category' => 'websites',
            'url' => 'img/portfolio/manufactura.png'
        ]);
    }
}
