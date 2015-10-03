<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Nomer;

class NomersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('nomers')->delete();
        $nomers =[
            [
                'name' => 'Трехместный номер(мужской)',
                'opis' => 'Номер №2',
                'k_mest' => '3',
                'price'=>'800',
                'price_oll'=>'2300'
            ],[
                'name' => 'Трехместный номер(женский)',
                'opis' => 'Номер №3',
                'k_mest' => '3',
                'price'=>'800',
                'price_oll'=>'2300'

            ],[
                'name' => 'Двухместный номер(раздельные)',
                'opis' => 'Номер №4',
                'k_mest' => '2',
                'price'=>'1500',
                'price_oll'=>'1800'
            ],[
                'name' => 'Одноместный номер',
                'opis' => 'Номер №5',
                'k_mest' => '1',
                'price'=>'1500',
                'price_oll'=>'1800'
            ],[
                'name' => 'Одноместный номер',
                'opis' => 'Номер №6',
                'k_mest' => '1',
                'price'=>'1500',
                'price_oll'=>'1800'
            ],[
                'name' => 'Двухместный номер(180)',
                'opis' => 'Номер №7',
                'k_mest' => '2',
                'price'=>'1800',
                'price_oll'=>'2000'

            ],[
                'name' => 'Vip(51)',
                'opis' => 'Однокомнатная квартира',
                'k_mest' => '4',
                'price'=>'3000',
                'price_oll'=>'4000'
            ],[
                'name' => 'Vip(492)',
                'opis' => 'Однокомнатная квартира',
                'k_mest' => '4',
                'price'=>'3000',
                'price_oll'=>'4000'
            ],
        ];
        foreach($nomers as $nomers) {
            Nomer::create($nomers);
        }
    }

}