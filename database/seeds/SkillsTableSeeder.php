<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array ([
        
          'name' => 'JavaScript',
          'description' => 'Langage de JavaScript',
          'logo' => '...',
        ],
        [
          'name' => 'HTML5 - CSS3',
          'description' => 'Langage de JavaScript',
          'logo' => '...',
        ],
        [
          'name' => 'PHP',
          'description' => 'Langage de JavaScript',
          'logo' => '...',
        ],
        [
          'name' => 'Bidule',
          'description' => 'Langage de JavaScript',
          'logo' => '...',
        ]);
    App\Skill::insert($data);    
  }
}