<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfileSeeder::class);
        $this->call(ExperiencesSeeder::class);
        $this->call(DetailExperiencesSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(CertificationSeeder::class);
        $this->call(RecommendationsSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(PortfolioSeeder::class);
    }
}
