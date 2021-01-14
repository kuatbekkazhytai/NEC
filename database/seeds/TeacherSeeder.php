<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher')->insert([
            [
                'name' => 'elementary' //1
            ],
            [
                'name' => 'pre-intermediate' //2
            ],
            [
                'name' => 'intermediate' //3
            ],
            [
                'name' => 'upper-intermediate' //4
            ],
            [
                'name' => 'advanced' //5
            ],
            [
                'name' => 'proficiency' //6
            ],

        ]);
    }
}
