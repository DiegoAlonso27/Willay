<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Report;
use Illuminate\Database\Seeder;



class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = Report::factory(100)->create();

        foreach ($reports as $report){
            Image::factory(1)->create([
                'imageable_id' => $report->id,
                'imageable_type' => Report::class,
            ]);
        }
    }
}
