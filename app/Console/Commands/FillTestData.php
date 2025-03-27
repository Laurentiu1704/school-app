<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Teacher;
use App\Models\Course;
use Carbon\Carbon;

class FillTestData extends Command
{
    protected $signature = 'fill:testdata';
    protected $description = 'Vult de database met testdata voor teachers en courses';

    public function handle()
    {
        $this->info('Starten met vullen van testdata...');

        // Teachers aanmaken
        $teachers = [
            [
                'name' => 'Jan Jansen',
                'hobbies' => 'Lezen, Schaken',
                'entry_date' => Carbon::create(2020, 1, 15)
            ],
            [
                'name' => 'Piet Pieters',
                'hobbies' => 'Tennis, Reizen',
                'entry_date' => Carbon::create(2019, 5, 10)
            ],
            [
                'name' => 'Marie Verstraaten',
                'hobbies' => 'Schilderen, Koken',
                'entry_date' => Carbon::create(2021, 3, 22)
            ],
            [
                'name' => 'Erik de Vries',
                'hobbies' => 'Fietsen, Fotografie',
                'entry_date' => Carbon::create(2018, 8, 14)
            ],
            [
                'name' => 'Lisa van Dam',
                'hobbies' => 'Muziek, Yoga',
                'entry_date' => Carbon::create(2022, 2, 5)
            ]
        ];

        $courses = [
            ['name' => 'Wiskunde', 'description' => 'Algebra en meetkunde'],
            ['name' => 'Natuurkunde', 'description' => 'Mechanica en thermodynamica'],
            ['name' => 'Scheikunde', 'description' => 'Organische en anorganische chemie'],
            ['name' => 'Nederlands', 'description' => 'Taal en literatuur'],
            ['name' => 'Engels', 'description' => 'Engelse taalvaardigheid'],
            ['name' => 'Duits', 'description' => 'Duitse grammatica en conversatie'],
            ['name' => 'Frans', 'description' => 'Franse taal en cultuur'],
            ['name' => 'Geschiedenis', 'description' => 'Wereldgeschiedenis'],
            ['name' => 'Aardrijkskunde', 'description' => 'Fysische en sociale geografie'],
            ['name' => 'Economie', 'description' => 'Micro- en macro-economie']
        ];

        foreach ($teachers as $i => $teacherData) {
            $teacher = Teacher::create($teacherData);
            
            // Elke docent krijgt 2 vakken
            $teacher->courses()->create($courses[$i * 2]);
            $teacher->courses()->create($courses[$i * 2 + 1]);
        }

        $this->info('Testdata succesvol toegevoegd!');
    }
}