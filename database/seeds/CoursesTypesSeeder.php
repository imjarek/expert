<?php

use Illuminate\Database\Seeder;

class CoursesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            ['seminar', 'Семинар'],
            ['training', 'Тренинг'],
            ['video', 'Видео'],
            ['ppt', 'Презентация'],
            ['pdf', 'PDF']
        );

        foreach ($types as $type) {
            DB::table('courses_types')->insert(['name' => $type[0], 'title' => $type[1]]);
        }
    }
}
