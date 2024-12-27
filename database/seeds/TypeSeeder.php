<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $badminton = new Type();
        $badminton->name = 'Badminton';
        $badminton->save();
        $tennis = new Type();
        $tennis->name = 'Tennis';
        $tennis->save();
        $tennis = new Type();
        $tennis->name = 'Padel';
        $tennis->save();
    }
}
