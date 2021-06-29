<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        State::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        State::create([
            'title' => 'Acre',
            'letter' => 'AC',
            'iso' => '12',
        ]);
        State::create([
            'title' => 'Alagoas',
            'letter' => 'AL',
            'iso' => '27',
        ]);
        State::create([
            'title' => 'Amazonas',
            'letter' => 'AM',
            'iso' => '13',
        ]);
        State::create([
            'title' => 'Amapá',
            'letter' => 'AP',
            'iso' => '16',
        ]);
        State::create([
            'title' => 'Bahia',
            'letter' => 'BA',
            'iso' => '29',
        ]);
        State::create([
            'title' => 'Ceará',
            'letter' => 'CE',
            'iso' => '23',
        ]);
        State::create([
            'title' => 'Distrito Federal',
            'letter' => 'DF',
            'iso' => '53',
        ]);
        State::create([
            'title' => 'Espírito Santo',
            'letter' => 'ES',
            'iso' => '32',
        ]);
        State::create([
            'title' => 'Goiás',
            'letter' => 'GO',
            'iso' => '52',
        ]);
        State::create([
            'title' => 'Maranhão',
            'letter' => 'MA',
            'iso' => '21',
        ]);
        State::create([
            'title' => 'Minas Gerais',
            'letter' => 'MG',
            'iso' => '31',
        ]);
        State::create([
            'title' => 'Mato Grosso do Sul',
            'letter' => 'MS',
            'iso' => '50',
        ]);
        State::create([
            'title' => 'Mato Grosso',
            'letter' => 'MT',
            'iso' => '51',
        ]);
        State::create([
            'title' => 'Pará',
            'letter' => 'PA',
            'iso' => '15',
        ]);
        State::create([
            'title' => 'Paraiba',
            'letter' => 'PB',
            'iso' => '25',
        ]);
        State::create([
            'title' => 'Pernambuco',
            'letter' => 'PE',
            'iso' => '26',
        ]);
        State::create([
            'title' => 'Piauí',
            'letter' => 'PI',
            'iso' => '22',
        ]);
        State::create([
            'title' => 'Paraná',
            'letter' => 'PR',
            'iso' => '41',
        ]);
        State::create([
            'title' => 'Rio de Janeiro',
            'letter' => 'RJ',
            'iso' => '33',
        ]);
        State::create([
            'title' => 'Rio Grande do Norte',
            'letter' => 'RN',
            'iso' => '24',
        ]);
        State::create([
            'title' => 'Rondônia',
            'letter' => 'RO',
            'iso' => '11',
        ]);
        State::create([
            'title' => 'Roraima',
            'letter' => 'RR',
            'iso' => '14',
        ]);
        State::create([
            'title' => 'Rio Grande do Sul',
            'letter' => 'RS',
            'iso' => '43',
        ]);
        State::create([
            'title' => 'Santa Catarina',
            'letter' => 'SC',
            'iso' => '42',
        ]);
        State::create([
            'title' => 'Sergipe',
            'letter' => 'SE',
            'iso' => '28',
        ]);
        State::create([
            'title' => 'São Paulo',
            'letter' => 'SP',
            'iso' => '35',
        ]);
        State::create([
            'title' => 'Tocantins',
            'letter' => 'TO',
            'iso' => '17',
        ]);
    }

}
