<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        City::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        City::create([
            'state_id' => '21',
            'title' => 'Alta Floresta D\'oeste',
            'iso' => '1100015',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Ariquemes',
            'iso' => '1100023',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Cabixi',
            'iso' => '1100031',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Cacoal',
            'iso' => '1100049',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Cerejeiras',
            'iso' => '1100056',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Colorado do Oeste',
            'iso' => '1100064',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Corumbiara',
            'iso' => '1100072',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Costa Marques',
            'iso' => '1100080',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Espigão D\'oeste',
            'iso' => '1100098',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Guajará-Mirim',
            'iso' => '1100106',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Jaru',
            'iso' => '1100114',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Ji-Paraná',
            'iso' => '1100122',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Machadinho D\'oeste',
            'iso' => '1100130',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Nova Brasilândia D\'oeste',
            'iso' => '1100148',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Ouro Preto do Oeste',
            'iso' => '1100155',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Pimenta Bueno',
            'iso' => '1100189',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Porto Velho',
            'iso' => '1100205',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Presidente Médici',
            'iso' => '1100254',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Rio Crespo',
            'iso' => '1100262',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Rolim de Moura',
            'iso' => '1100288',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Santa Luzia D\'oeste',
            'iso' => '1100296',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Vilhena',
            'iso' => '1100304',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'São Miguel do Guaporé',
            'iso' => '1100320',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Nova Mamoré',
            'iso' => '1100338',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Alvorada D\'oeste',
            'iso' => '1100346',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Alto Alegre dos Parecis',
            'iso' => '1100379',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Alto Paraíso',
            'iso' => '1100403',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Buritis',
            'iso' => '1100452',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Novo Horizonte do Oeste',
            'iso' => '1100502',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Cacaulândia',
            'iso' => '1100601',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Campo Novo de Rondônia',
            'iso' => '1100700',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Candeias do Jamari',
            'iso' => '1100809',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Castanheiras',
            'iso' => '1100908',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Chupinguaia',
            'iso' => '1100924',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Cujubim',
            'iso' => '1100940',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Governador Jorge Teixeira',
            'iso' => '1101005',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Itapuã do Oeste',
            'iso' => '1101104',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Ministro Andreazza',
            'iso' => '1101203',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Mirante da Serra',
            'iso' => '1101302',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Monte Negro',
            'iso' => '1101401',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Nova União',
            'iso' => '1101435',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Parecis',
            'iso' => '1101450',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Pimenteiras do Oeste',
            'iso' => '1101468',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Primavera de Rondônia',
            'iso' => '1101476',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'São Felipe D\'oeste',
            'iso' => '1101484',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'São Francisco do Guaporé',
            'iso' => '1101492',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Seringueiras',
            'iso' => '1101500',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Teixeirópolis',
            'iso' => '1101559',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Theobroma',
            'iso' => '1101609',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Urupá',
            'iso' => '1101708',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Vale do Anari',
            'iso' => '1101757',
        ]);
        City::create([
            'state_id' => '21',
            'title' => 'Vale do Paraíso',
            'iso' => '1101807',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Acrelândia',
            'iso' => '1200013',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Assis Brasil',
            'iso' => '1200054',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Brasiléia',
            'iso' => '1200104',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Bujari',
            'iso' => '1200138',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Capixaba',
            'iso' => '1200179',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Cruzeiro do Sul',
            'iso' => '1200203',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Epitaciolândia',
            'iso' => '1200252',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Feijó',
            'iso' => '1200302',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Jordão',
            'iso' => '1200328',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Mâncio Lima',
            'iso' => '1200336',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Manoel Urbano',
            'iso' => '1200344',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Marechal Thaumaturgo',
            'iso' => '1200351',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Plácido de Castro',
            'iso' => '1200385',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Porto Walter',
            'iso' => '1200393',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Rio Branco',
            'iso' => '1200401',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Rodrigues Alves',
            'iso' => '1200427',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Santa Rosa do Purus',
            'iso' => '1200435',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Senador Guiomard',
            'iso' => '1200450',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Sena Madureira',
            'iso' => '1200500',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Tarauacá',
            'iso' => '1200609',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Xapuri',
            'iso' => '1200708',
        ]);
        City::create([
            'state_id' => '1',
            'title' => 'Porto Acre',
            'iso' => '1200807',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Alvarães',
            'iso' => '1300029',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Amaturá',
            'iso' => '1300060',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Anamã',
            'iso' => '1300086',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Anori',
            'iso' => '1300102',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Apuí',
            'iso' => '1300144',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Atalaia do Norte',
            'iso' => '1300201',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Autazes',
            'iso' => '1300300',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Barcelos',
            'iso' => '1300409',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Barreirinha',
            'iso' => '1300508',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Benjamin Constant',
            'iso' => '1300607',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Beruri',
            'iso' => '1300631',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Boa Vista do Ramos',
            'iso' => '1300680',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Boca do Acre',
            'iso' => '1300706',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Borba',
            'iso' => '1300805',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Caapiranga',
            'iso' => '1300839',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Canutama',
            'iso' => '1300904',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Carauari',
            'iso' => '1301001',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Careiro',
            'iso' => '1301100',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Careiro da Várzea',
            'iso' => '1301159',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Coari',
            'iso' => '1301209',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Codajás',
            'iso' => '1301308',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Eirunepé',
            'iso' => '1301407',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Envira',
            'iso' => '1301506',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Fonte Boa',
            'iso' => '1301605',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Guajará',
            'iso' => '1301654',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Humaitá',
            'iso' => '1301704',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Ipixuna',
            'iso' => '1301803',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Iranduba',
            'iso' => '1301852',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Itacoatiara',
            'iso' => '1301902',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Itamarati',
            'iso' => '1301951',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Itapiranga',
            'iso' => '1302009',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Japurá',
            'iso' => '1302108',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Juruá',
            'iso' => '1302207',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Jutaí',
            'iso' => '1302306',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Lábrea',
            'iso' => '1302405',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Manacapuru',
            'iso' => '1302504',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Manaquiri',
            'iso' => '1302553',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Manaus',
            'iso' => '1302603',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Manicoré',
            'iso' => '1302702',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Maraã',
            'iso' => '1302801',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Maués',
            'iso' => '1302900',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Nhamundá',
            'iso' => '1303007',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Nova Olinda do Norte',
            'iso' => '1303106',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Novo Airão',
            'iso' => '1303205',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Novo Aripuanã',
            'iso' => '1303304',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Parintins',
            'iso' => '1303403',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Pauini',
            'iso' => '1303502',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Presidente Figueiredo',
            'iso' => '1303536',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Rio Preto da Eva',
            'iso' => '1303569',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Santa Isabel do Rio Negro',
            'iso' => '1303601',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Santo Antônio do Içá',
            'iso' => '1303700',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'São Gabriel da Cachoeira',
            'iso' => '1303809',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'São Paulo de Olivença',
            'iso' => '1303908',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'São Sebastião do Uatumã',
            'iso' => '1303957',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Silves',
            'iso' => '1304005',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Tabatinga',
            'iso' => '1304062',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Tapauá',
            'iso' => '1304104',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Tefé',
            'iso' => '1304203',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Tonantins',
            'iso' => '1304237',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Uarini',
            'iso' => '1304260',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Urucará',
            'iso' => '1304302',
        ]);
        City::create([
            'state_id' => '3',
            'title' => 'Urucurituba',
            'iso' => '1304401',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Amajari',
            'iso' => '1400027',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Alto Alegre',
            'iso' => '1400050',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Boa Vista',
            'iso' => '1400100',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Bonfim',
            'iso' => '1400159',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Cantá',
            'iso' => '1400175',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Caracaraí',
            'iso' => '1400209',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Caroebe',
            'iso' => '1400233',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Iracema',
            'iso' => '1400282',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Mucajaí',
            'iso' => '1400308',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Normandia',
            'iso' => '1400407',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Pacaraima',
            'iso' => '1400456',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Rorainópolis',
            'iso' => '1400472',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'São João da Baliza',
            'iso' => '1400506',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'São Luiz',
            'iso' => '1400605',
        ]);
        City::create([
            'state_id' => '22',
            'title' => 'Uiramutã',
            'iso' => '1400704',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Abaetetuba',
            'iso' => '1500107',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Abel Figueiredo',
            'iso' => '1500131',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Acará',
            'iso' => '1500206',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Afuá',
            'iso' => '1500305',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Água Azul do Norte',
            'iso' => '1500347',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Alenquer',
            'iso' => '1500404',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Almeirim',
            'iso' => '1500503',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Altamira',
            'iso' => '1500602',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Anajás',
            'iso' => '1500701',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ananindeua',
            'iso' => '1500800',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Anapu',
            'iso' => '1500859',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Augusto Corrêa',
            'iso' => '1500909',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Aurora do Pará',
            'iso' => '1500958',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Aveiro',
            'iso' => '1501006',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bagre',
            'iso' => '1501105',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Baião',
            'iso' => '1501204',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bannach',
            'iso' => '1501253',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Barcarena',
            'iso' => '1501303',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Belém',
            'iso' => '1501402',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Belterra',
            'iso' => '1501451',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Benevides',
            'iso' => '1501501',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bom Jesus do Tocantins',
            'iso' => '1501576',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bonito',
            'iso' => '1501600',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bragança',
            'iso' => '1501709',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Brasil Novo',
            'iso' => '1501725',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Brejo Grande do Araguaia',
            'iso' => '1501758',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Breu Branco',
            'iso' => '1501782',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Breves',
            'iso' => '1501808',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Bujaru',
            'iso' => '1501907',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Cachoeira do Piriá',
            'iso' => '1501956',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Cachoeira do Arari',
            'iso' => '1502004',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Cametá',
            'iso' => '1502103',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Canaã dos Carajás',
            'iso' => '1502152',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Capanema',
            'iso' => '1502202',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Capitão Poço',
            'iso' => '1502301',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Castanhal',
            'iso' => '1502400',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Chaves',
            'iso' => '1502509',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Colares',
            'iso' => '1502608',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Conceição do Araguaia',
            'iso' => '1502707',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Concórdia do Pará',
            'iso' => '1502756',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Cumaru do Norte',
            'iso' => '1502764',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Curionópolis',
            'iso' => '1502772',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Curralinho',
            'iso' => '1502806',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Curuá',
            'iso' => '1502855',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Curuçá',
            'iso' => '1502905',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Dom Eliseu',
            'iso' => '1502939',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Eldorado dos Carajás',
            'iso' => '1502954',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Faro',
            'iso' => '1503002',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Floresta do Araguaia',
            'iso' => '1503044',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Garrafão do Norte',
            'iso' => '1503077',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Goianésia do Pará',
            'iso' => '1503093',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Gurupá',
            'iso' => '1503101',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Igarapé-Açu',
            'iso' => '1503200',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Igarapé-Miri',
            'iso' => '1503309',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Inhangapi',
            'iso' => '1503408',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ipixuna do Pará',
            'iso' => '1503457',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Irituia',
            'iso' => '1503507',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Itaituba',
            'iso' => '1503606',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Itupiranga',
            'iso' => '1503705',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Jacareacanga',
            'iso' => '1503754',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Jacundá',
            'iso' => '1503804',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Juruti',
            'iso' => '1503903',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Limoeiro do Ajuru',
            'iso' => '1504000',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Mãe do Rio',
            'iso' => '1504059',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Magalhães Barata',
            'iso' => '1504109',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Marabá',
            'iso' => '1504208',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Maracanã',
            'iso' => '1504307',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Marapanim',
            'iso' => '1504406',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Marituba',
            'iso' => '1504422',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Medicilândia',
            'iso' => '1504455',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Melgaço',
            'iso' => '1504505',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Mocajuba',
            'iso' => '1504604',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Moju',
            'iso' => '1504703',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Monte Alegre',
            'iso' => '1504802',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Muaná',
            'iso' => '1504901',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Nova Esperança do Piriá',
            'iso' => '1504950',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Nova Ipixuna',
            'iso' => '1504976',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Nova Timboteua',
            'iso' => '1505007',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Novo Progresso',
            'iso' => '1505031',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Novo Repartimento',
            'iso' => '1505064',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Óbidos',
            'iso' => '1505106',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Oeiras do Pará',
            'iso' => '1505205',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Oriximiná',
            'iso' => '1505304',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ourém',
            'iso' => '1505403',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ourilândia do Norte',
            'iso' => '1505437',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Pacajá',
            'iso' => '1505486',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Palestina do Pará',
            'iso' => '1505494',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Paragominas',
            'iso' => '1505502',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Parauapebas',
            'iso' => '1505536',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Pau D\'arco',
            'iso' => '1505551',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Peixe-Boi',
            'iso' => '1505601',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Piçarra',
            'iso' => '1505635',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Placas',
            'iso' => '1505650',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ponta de Pedras',
            'iso' => '1505700',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Portel',
            'iso' => '1505809',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Porto de Moz',
            'iso' => '1505908',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Prainha',
            'iso' => '1506005',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Primavera',
            'iso' => '1506104',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Quatipuru',
            'iso' => '1506112',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Redenção',
            'iso' => '1506138',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Rio Maria',
            'iso' => '1506161',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Rondon do Pará',
            'iso' => '1506187',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Rurópolis',
            'iso' => '1506195',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Salinópolis',
            'iso' => '1506203',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Salvaterra',
            'iso' => '1506302',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Bárbara do Pará',
            'iso' => '1506351',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Cruz do Arari',
            'iso' => '1506401',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Isabel do Pará',
            'iso' => '1506500',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Luzia do Pará',
            'iso' => '1506559',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Maria das Barreiras',
            'iso' => '1506583',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santa Maria do Pará',
            'iso' => '1506609',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santana do Araguaia',
            'iso' => '1506708',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santarém',
            'iso' => '1506807',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santarém Novo',
            'iso' => '1506906',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Santo Antônio do Tauá',
            'iso' => '1507003',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Caetano de Odivelas',
            'iso' => '1507102',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Domingos do Araguaia',
            'iso' => '1507151',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Domingos do Capim',
            'iso' => '1507201',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Félix do Xingu',
            'iso' => '1507300',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Francisco do Pará',
            'iso' => '1507409',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Geraldo do Araguaia',
            'iso' => '1507458',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São João da Ponta',
            'iso' => '1507466',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São João de Pirabas',
            'iso' => '1507474',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São João do Araguaia',
            'iso' => '1507508',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Miguel do Guamá',
            'iso' => '1507607',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'São Sebastião da Boa Vista',
            'iso' => '1507706',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Sapucaia',
            'iso' => '1507755',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Senador José Porfírio',
            'iso' => '1507805',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Soure',
            'iso' => '1507904',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Tailândia',
            'iso' => '1507953',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Terra Alta',
            'iso' => '1507961',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Terra Santa',
            'iso' => '1507979',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Tomé-Açu',
            'iso' => '1508001',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Tracuateua',
            'iso' => '1508035',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Trairão',
            'iso' => '1508050',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Tucumã',
            'iso' => '1508084',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Tucuruí',
            'iso' => '1508100',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Ulianópolis',
            'iso' => '1508126',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Uruará',
            'iso' => '1508159',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Vigia',
            'iso' => '1508209',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Viseu',
            'iso' => '1508308',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Vitória do Xingu',
            'iso' => '1508357',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Xinguara',
            'iso' => '1508407',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Serra do Navio',
            'iso' => '1600055',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Amapá',
            'iso' => '1600105',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Pedra Branca do Amapari',
            'iso' => '1600154',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Calçoene',
            'iso' => '1600204',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Cutias',
            'iso' => '1600212',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Ferreira Gomes',
            'iso' => '1600238',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Itaubal',
            'iso' => '1600253',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Laranjal do Jari',
            'iso' => '1600279',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Macapá',
            'iso' => '1600303',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Mazagão',
            'iso' => '1600402',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Oiapoque',
            'iso' => '1600501',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Porto Grande',
            'iso' => '1600535',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Pracuúba',
            'iso' => '1600550',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Santana',
            'iso' => '1600600',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Tartarugalzinho',
            'iso' => '1600709',
        ]);
        City::create([
            'state_id' => '4',
            'title' => 'Vitória do Jari',
            'iso' => '1600808',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Abreulândia',
            'iso' => '1700251',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Aguiarnópolis',
            'iso' => '1700301',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Aliança do Tocantins',
            'iso' => '1700350',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Almas',
            'iso' => '1700400',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Alvorada',
            'iso' => '1700707',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Ananás',
            'iso' => '1701002',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Angico',
            'iso' => '1701051',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Aparecida do Rio Negro',
            'iso' => '1701101',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Aragominas',
            'iso' => '1701309',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Araguacema',
            'iso' => '1701903',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Araguaçu',
            'iso' => '1702000',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Araguaína',
            'iso' => '1702109',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Araguanã',
            'iso' => '1702158',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Araguatins',
            'iso' => '1702208',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Arapoema',
            'iso' => '1702307',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Arraias',
            'iso' => '1702406',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Augustinópolis',
            'iso' => '1702554',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Aurora do Tocantins',
            'iso' => '1702703',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Axixá do Tocantins',
            'iso' => '1702901',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Babaçulândia',
            'iso' => '1703008',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Bandeirantes do Tocantins',
            'iso' => '1703057',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Barra do Ouro',
            'iso' => '1703073',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Barrolândia',
            'iso' => '1703107',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Bernardo Sayão',
            'iso' => '1703206',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Bom Jesus do Tocantins',
            'iso' => '1703305',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Brasilândia do Tocantins',
            'iso' => '1703602',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Brejinho de Nazaré',
            'iso' => '1703701',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Buriti do Tocantins',
            'iso' => '1703800',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Cachoeirinha',
            'iso' => '1703826',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Campos Lindos',
            'iso' => '1703842',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Cariri do Tocantins',
            'iso' => '1703867',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Carmolândia',
            'iso' => '1703883',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Carrasco Bonito',
            'iso' => '1703891',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Caseara',
            'iso' => '1703909',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Centenário',
            'iso' => '1704105',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Chapada de Areia',
            'iso' => '1704600',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Chapada da Natividade',
            'iso' => '1705102',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Colinas do Tocantins',
            'iso' => '1705508',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Combinado',
            'iso' => '1705557',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Conceição do Tocantins',
            'iso' => '1705607',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Couto de Magalhães',
            'iso' => '1706001',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Cristalândia',
            'iso' => '1706100',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Crixás do Tocantins',
            'iso' => '1706258',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Darcinópolis',
            'iso' => '1706506',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Dianópolis',
            'iso' => '1707009',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Divinópolis do Tocantins',
            'iso' => '1707108',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Dois Irmãos do Tocantins',
            'iso' => '1707207',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Dueré',
            'iso' => '1707306',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Esperantina',
            'iso' => '1707405',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Fátima',
            'iso' => '1707553',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Figueirópolis',
            'iso' => '1707652',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Filadélfia',
            'iso' => '1707702',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Formoso do Araguaia',
            'iso' => '1708205',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Fortaleza do Tabocão',
            'iso' => '1708254',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Goianorte',
            'iso' => '1708304',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Goiatins',
            'iso' => '1709005',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Guaraí',
            'iso' => '1709302',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Gurupi',
            'iso' => '1709500',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Ipueiras',
            'iso' => '1709807',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Itacajá',
            'iso' => '1710508',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Itaguatins',
            'iso' => '1710706',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Itapiratins',
            'iso' => '1710904',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Itaporã do Tocantins',
            'iso' => '1711100',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Jaú do Tocantins',
            'iso' => '1711506',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Juarina',
            'iso' => '1711803',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Lagoa da Confusão',
            'iso' => '1711902',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Lagoa do Tocantins',
            'iso' => '1711951',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Lajeado',
            'iso' => '1712009',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Lavandeira',
            'iso' => '1712157',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Lizarda',
            'iso' => '1712405',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Luzinópolis',
            'iso' => '1712454',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Marianópolis do Tocantins',
            'iso' => '1712504',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Mateiros',
            'iso' => '1712702',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Maurilândia do Tocantins',
            'iso' => '1712801',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Miracema do Tocantins',
            'iso' => '1713205',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Miranorte',
            'iso' => '1713304',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Monte do Carmo',
            'iso' => '1713601',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Monte Santo do Tocantins',
            'iso' => '1713700',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Palmeiras do Tocantins',
            'iso' => '1713809',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Muricilândia',
            'iso' => '1713957',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Natividade',
            'iso' => '1714203',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Nazaré',
            'iso' => '1714302',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Nova Olinda',
            'iso' => '1714880',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Nova Rosalândia',
            'iso' => '1715002',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Novo Acordo',
            'iso' => '1715101',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Novo Alegre',
            'iso' => '1715150',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Novo Jardim',
            'iso' => '1715259',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Oliveira de Fátima',
            'iso' => '1715507',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Palmeirante',
            'iso' => '1715705',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Palmeirópolis',
            'iso' => '1715754',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Paraíso do Tocantins',
            'iso' => '1716109',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Paranã',
            'iso' => '1716208',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pau D\'arco',
            'iso' => '1716307',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pedro Afonso',
            'iso' => '1716505',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Peixe',
            'iso' => '1716604',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pequizeiro',
            'iso' => '1716653',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Colméia',
            'iso' => '1716703',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pindorama do Tocantins',
            'iso' => '1717008',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Piraquê',
            'iso' => '1717206',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pium',
            'iso' => '1717503',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Ponte Alta do Bom Jesus',
            'iso' => '1717800',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Ponte Alta do Tocantins',
            'iso' => '1717909',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Porto Alegre do Tocantins',
            'iso' => '1718006',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Porto Nacional',
            'iso' => '1718204',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Praia Norte',
            'iso' => '1718303',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Presidente Kennedy',
            'iso' => '1718402',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Pugmil',
            'iso' => '1718451',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Recursolândia',
            'iso' => '1718501',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Riachinho',
            'iso' => '1718550',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Rio da Conceição',
            'iso' => '1718659',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Rio dos Bois',
            'iso' => '1718709',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Rio Sono',
            'iso' => '1718758',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Sampaio',
            'iso' => '1718808',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Sandolândia',
            'iso' => '1718840',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Fé do Araguaia',
            'iso' => '1718865',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Maria do Tocantins',
            'iso' => '1718881',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Rita do Tocantins',
            'iso' => '1718899',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Rosa do Tocantins',
            'iso' => '1718907',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Tereza do Tocantins',
            'iso' => '1719004',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Santa Terezinha do Tocantins',
            'iso' => '1720002',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Bento do Tocantins',
            'iso' => '1720101',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Félix do Tocantins',
            'iso' => '1720150',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Miguel do Tocantins',
            'iso' => '1720200',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Salvador do Tocantins',
            'iso' => '1720259',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Sebastião do Tocantins',
            'iso' => '1720309',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'São Valério da Natividade',
            'iso' => '1720499',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Silvanópolis',
            'iso' => '1720655',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Sítio Novo do Tocantins',
            'iso' => '1720804',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Sucupira',
            'iso' => '1720853',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Taguatinga',
            'iso' => '1720903',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Taipas do Tocantins',
            'iso' => '1720937',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Talismã',
            'iso' => '1720978',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Palmas',
            'iso' => '1721000',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Tocantínia',
            'iso' => '1721109',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Tocantinópolis',
            'iso' => '1721208',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Tupirama',
            'iso' => '1721257',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Tupiratins',
            'iso' => '1721307',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Wanderlândia',
            'iso' => '1722081',
        ]);
        City::create([
            'state_id' => '27',
            'title' => 'Xambioá',
            'iso' => '1722107',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Açailândia',
            'iso' => '2100055',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Afonso Cunha',
            'iso' => '2100105',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Água Doce do Maranhão',
            'iso' => '2100154',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Alcântara',
            'iso' => '2100204',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Aldeias Altas',
            'iso' => '2100303',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Altamira do Maranhão',
            'iso' => '2100402',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Alto Alegre do Maranhão',
            'iso' => '2100436',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Alto Alegre do Pindaré',
            'iso' => '2100477',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Alto Parnaíba',
            'iso' => '2100501',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Amapá do Maranhão',
            'iso' => '2100550',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Amarante do Maranhão',
            'iso' => '2100600',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Anajatuba',
            'iso' => '2100709',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Anapurus',
            'iso' => '2100808',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Apicum-Açu',
            'iso' => '2100832',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Araguanã',
            'iso' => '2100873',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Araioses',
            'iso' => '2100907',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Arame',
            'iso' => '2100956',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Arari',
            'iso' => '2101004',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Axixá',
            'iso' => '2101103',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bacabal',
            'iso' => '2101202',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bacabeira',
            'iso' => '2101251',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bacuri',
            'iso' => '2101301',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bacurituba',
            'iso' => '2101350',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Balsas',
            'iso' => '2101400',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Barão de Grajaú',
            'iso' => '2101509',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Barra do Corda',
            'iso' => '2101608',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Barreirinhas',
            'iso' => '2101707',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Belágua',
            'iso' => '2101731',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bela Vista do Maranhão',
            'iso' => '2101772',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Benedito Leite',
            'iso' => '2101806',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bequimão',
            'iso' => '2101905',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bernardo do Mearim',
            'iso' => '2101939',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Boa Vista do Gurupi',
            'iso' => '2101970',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bom Jardim',
            'iso' => '2102002',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bom Jesus das Selvas',
            'iso' => '2102036',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Bom Lugar',
            'iso' => '2102077',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Brejo',
            'iso' => '2102101',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Brejo de Areia',
            'iso' => '2102150',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Buriti',
            'iso' => '2102200',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Buriti Bravo',
            'iso' => '2102309',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Buriticupu',
            'iso' => '2102325',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Buritirana',
            'iso' => '2102358',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cachoeira Grande',
            'iso' => '2102374',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cajapió',
            'iso' => '2102408',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cajari',
            'iso' => '2102507',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Campestre do Maranhão',
            'iso' => '2102556',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cândido Mendes',
            'iso' => '2102606',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cantanhede',
            'iso' => '2102705',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Capinzal do Norte',
            'iso' => '2102754',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Carolina',
            'iso' => '2102804',
        ]);
        City::create([
        'state_id' => '10',
        'title' => 'Carutapera',
        'iso' => '2102903',
        ]);
        City::create([
        'state_id' => '10',
        'title' => 'Caxias',
        'iso' => '2103000',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cedral',
            'iso' => '2103109',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Central do Maranhão',
            'iso' => '2103125',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Centro do Guilherme',
            'iso' => '2103158',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Centro Novo do Maranhão',
            'iso' => '2103174',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Chapadinha',
            'iso' => '2103208',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cidelândia',
            'iso' => '2103257',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Codó',
            'iso' => '2103307',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Coelho Neto',
            'iso' => '2103406',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Colinas',
            'iso' => '2103505',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Conceição do Lago-Açu',
            'iso' => '2103554',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Coroatá',
            'iso' => '2103604',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Cururupu',
            'iso' => '2103703',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Davinópolis',
            'iso' => '2103752',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Dom Pedro',
            'iso' => '2103802',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Duque Bacelar',
            'iso' => '2103901',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Esperantinópolis',
            'iso' => '2104008',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Estreito',
            'iso' => '2104057',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Feira Nova do Maranhão',
            'iso' => '2104073',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Fernando Falcão',
            'iso' => '2104081',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Formosa da Serra Negra',
            'iso' => '2104099',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Fortaleza dos Nogueiras',
            'iso' => '2104107',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Fortuna',
            'iso' => '2104206',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Godofredo Viana',
            'iso' => '2104305',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Gonçalves Dias',
            'iso' => '2104404',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Archer',
            'iso' => '2104503',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Edison Lobão',
            'iso' => '2104552',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Eugênio Barros',
            'iso' => '2104602',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Luiz Rocha',
            'iso' => '2104628',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Newton Bello',
            'iso' => '2104651',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Governador Nunes Freire',
            'iso' => '2104677',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Graça Aranha',
            'iso' => '2104701',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Grajaú',
            'iso' => '2104800',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Guimarães',
            'iso' => '2104909',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Humberto de Campos',
            'iso' => '2105005',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Icatu',
            'iso' => '2105104',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Igarapé do Meio',
            'iso' => '2105153',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Igarapé Grande',
            'iso' => '2105203',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Imperatriz',
            'iso' => '2105302',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Itaipava do Grajaú',
            'iso' => '2105351',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Itapecuru Mirim',
            'iso' => '2105401',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Itinga do Maranhão',
            'iso' => '2105427',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Jatobá',
            'iso' => '2105450',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Jenipapo dos Vieiras',
            'iso' => '2105476',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'João Lisboa',
            'iso' => '2105500',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Joselândia',
            'iso' => '2105609',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Junco do Maranhão',
            'iso' => '2105658',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lago da Pedra',
            'iso' => '2105708',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lago do Junco',
            'iso' => '2105807',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lago Verde',
            'iso' => '2105906',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lagoa do Mato',
            'iso' => '2105922',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lago dos Rodrigues',
            'iso' => '2105948',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lagoa Grande do Maranhão',
            'iso' => '2105963',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lajeado Novo',
            'iso' => '2105989',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Lima Campos',
            'iso' => '2106003',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Loreto',
            'iso' => '2106102',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Luís Domingues',
            'iso' => '2106201',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Magalhães de Almeida',
            'iso' => '2106300',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Maracaçumé',
            'iso' => '2106326',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Marajá do Sena',
            'iso' => '2106359',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Maranhãozinho',
            'iso' => '2106375',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Mata Roma',
            'iso' => '2106409',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Matinha',
            'iso' => '2106508',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Matões',
            'iso' => '2106607',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Matões do Norte',
            'iso' => '2106631',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Milagres do Maranhão',
            'iso' => '2106672',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Mirador',
            'iso' => '2106706',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Miranda do Norte',
            'iso' => '2106755',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Mirinzal',
            'iso' => '2106805',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Monção',
            'iso' => '2106904',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Montes Altos',
            'iso' => '2107001',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Morros',
            'iso' => '2107100',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Nina Rodrigues',
            'iso' => '2107209',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Nova Colinas',
            'iso' => '2107258',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Nova Iorque',
            'iso' => '2107308',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Nova Olinda do Maranhão',
            'iso' => '2107357',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Olho D\'água das Cunhãs',
            'iso' => '2107407',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Olinda Nova do Maranhão',
            'iso' => '2107456',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Paço do Lumiar',
            'iso' => '2107506',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Palmeirândia',
            'iso' => '2107605',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Paraibano',
            'iso' => '2107704',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Parnarama',
            'iso' => '2107803',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Passagem Franca',
            'iso' => '2107902',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pastos Bons',
            'iso' => '2108009',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Paulino Neves',
            'iso' => '2108058',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Paulo Ramos',
            'iso' => '2108108',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pedreiras',
            'iso' => '2108207',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pedro do Rosário',
            'iso' => '2108256',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Penalva',
            'iso' => '2108306',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Peri Mirim',
            'iso' => '2108405',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Peritoró',
            'iso' => '2108454',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pindaré-Mirim',
            'iso' => '2108504',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pinheiro',
            'iso' => '2108603',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pio Xii',
            'iso' => '2108702',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Pirapemas',
            'iso' => '2108801',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Poção de Pedras',
            'iso' => '2108900',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Porto Franco',
            'iso' => '2109007',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Porto Rico do Maranhão',
            'iso' => '2109056',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Presidente Dutra',
            'iso' => '2109106',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Presidente Juscelino',
            'iso' => '2109205',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Presidente Médici',
            'iso' => '2109239',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Presidente Sarney',
            'iso' => '2109270',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Presidente Vargas',
            'iso' => '2109304',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Primeira Cruz',
            'iso' => '2109403',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Raposa',
            'iso' => '2109452',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Riachão',
            'iso' => '2109502',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Ribamar Fiquene',
            'iso' => '2109551',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Rosário',
            'iso' => '2109601',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Sambaíba',
            'iso' => '2109700',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Filomena do Maranhão',
            'iso' => '2109759',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Helena',
            'iso' => '2109809',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Inês',
            'iso' => '2109908',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Luzia',
            'iso' => '2110005',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Luzia do Paruá',
            'iso' => '2110039',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Quitéria do Maranhão',
            'iso' => '2110104',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santa Rita',
            'iso' => '2110203',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santana do Maranhão',
            'iso' => '2110237',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santo Amaro do Maranhão',
            'iso' => '2110278',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Santo Antônio dos Lopes',
            'iso' => '2110302',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Benedito do Rio Preto',
            'iso' => '2110401',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Bento',
            'iso' => '2110500',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Bernardo',
            'iso' => '2110609',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Domingos do Azeitão',
            'iso' => '2110658',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Domingos do Maranhão',
            'iso' => '2110708',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Félix de Balsas',
            'iso' => '2110807',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Francisco do Brejão',
            'iso' => '2110856',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Francisco do Maranhão',
            'iso' => '2110906',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São João Batista',
            'iso' => '2111003',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São João do Carú',
            'iso' => '2111029',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São João do Paraíso',
            'iso' => '2111052',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São João do Soter',
            'iso' => '2111078',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São João dos Patos',
            'iso' => '2111102',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São José de Ribamar',
            'iso' => '2111201',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São José dos Basílios',
            'iso' => '2111250',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Luís',
            'iso' => '2111300',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Luís Gonzaga do Maranhão',
            'iso' => '2111409',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Mateus do Maranhão',
            'iso' => '2111508',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Pedro da Água Branca',
            'iso' => '2111532',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Pedro dos Crentes',
            'iso' => '2111573',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Raimundo das Mangabeiras',
            'iso' => '2111607',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Raimundo do Doca Bezerra',
            'iso' => '2111631',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Roberto',
            'iso' => '2111672',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'São Vicente Ferrer',
            'iso' => '2111706',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Satubinha',
            'iso' => '2111722',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Senador Alexandre Costa',
            'iso' => '2111748',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Senador La Rocque',
            'iso' => '2111763',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Serrano do Maranhão',
            'iso' => '2111789',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Sítio Novo',
            'iso' => '2111805',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Sucupira do Norte',
            'iso' => '2111904',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Sucupira do Riachão',
            'iso' => '2111953',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Tasso Fragoso',
            'iso' => '2112001',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Timbiras',
            'iso' => '2112100',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Timon',
            'iso' => '2112209',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Trizidela do Vale',
            'iso' => '2112233',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Tufilândia',
            'iso' => '2112274',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Tuntum',
            'iso' => '2112308',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Turiaçu',
            'iso' => '2112407',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Turilândia',
            'iso' => '2112456',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Tutóia',
            'iso' => '2112506',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Urbano Santos',
            'iso' => '2112605',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Vargem Grande',
            'iso' => '2112704',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Viana',
            'iso' => '2112803',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Vila Nova dos Martírios',
            'iso' => '2112852',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Vitória do Mearim',
            'iso' => '2112902',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Vitorino Freire',
            'iso' => '2113009',
        ]);
        City::create([
            'state_id' => '10',
            'title' => 'Zé Doca',
            'iso' => '2114007',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Acauã',
            'iso' => '2200053',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Agricolândia',
            'iso' => '2200103',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Água Branca',
            'iso' => '2200202',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Alagoinha do Piauí',
            'iso' => '2200251',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Alegrete do Piauí',
            'iso' => '2200277',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Alto Longá',
            'iso' => '2200301',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Altos',
            'iso' => '2200400',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Alvorada do Gurguéia',
            'iso' => '2200459',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Amarante',
            'iso' => '2200509',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Angical do Piauí',
            'iso' => '2200608',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Anísio de Abreu',
            'iso' => '2200707',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Antônio Almeida',
            'iso' => '2200806',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Aroazes',
            'iso' => '2200905',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Aroeiras do Itaim',
            'iso' => '2200954',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Arraial',
            'iso' => '2201002',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Assunção do Piauí',
            'iso' => '2201051',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Avelino Lopes',
            'iso' => '2201101',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Baixa Grande do Ribeiro',
            'iso' => '2201150',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Barra D\'alcântara',
            'iso' => '2201176',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Barras',
            'iso' => '2201200',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Barreiras do Piauí',
            'iso' => '2201309',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Barro Duro',
            'iso' => '2201408',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Batalha',
            'iso' => '2201507',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bela Vista do Piauí',
            'iso' => '2201556',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Belém do Piauí',
            'iso' => '2201572',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Beneditinos',
            'iso' => '2201606',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bertolínia',
            'iso' => '2201705',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Betânia do Piauí',
            'iso' => '2201739',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Boa Hora',
            'iso' => '2201770',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bocaina',
            'iso' => '2201804',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bom Jesus',
            'iso' => '2201903',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bom Princípio do Piauí',
            'iso' => '2201919',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Bonfim do Piauí',
            'iso' => '2201929',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Boqueirão do Piauí',
            'iso' => '2201945',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Brasileira',
            'iso' => '2201960',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Brejo do Piauí',
            'iso' => '2201988',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Buriti dos Lopes',
            'iso' => '2202000',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Buriti dos Montes',
            'iso' => '2202026',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cabeceiras do Piauí',
            'iso' => '2202059',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cajazeiras do Piauí',
            'iso' => '2202075',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cajueiro da Praia',
            'iso' => '2202083',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Caldeirão Grande do Piauí',
            'iso' => '2202091',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Campinas do Piauí',
            'iso' => '2202109',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Campo Alegre do Fidalgo',
            'iso' => '2202117',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Campo Grande do Piauí',
            'iso' => '2202133',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Campo Largo do Piauí',
            'iso' => '2202174',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Campo Maior',
            'iso' => '2202208',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Canavieira',
            'iso' => '2202251',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Canto do Buriti',
            'iso' => '2202307',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Capitão de Campos',
            'iso' => '2202406',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Capitão Gervásio Oliveira',
            'iso' => '2202455',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Caracol',
            'iso' => '2202505',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Caraúbas do Piauí',
            'iso' => '2202539',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Caridade do Piauí',
            'iso' => '2202554',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Castelo do Piauí',
            'iso' => '2202604',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Caxingó',
            'iso' => '2202653',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cocal',
            'iso' => '2202703',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cocal de Telha',
            'iso' => '2202711',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cocal dos Alves',
            'iso' => '2202729',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Coivaras',
            'iso' => '2202737',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Colônia do Gurguéia',
            'iso' => '2202752',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Colônia do Piauí',
            'iso' => '2202778',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Conceição do Canindé',
            'iso' => '2202802',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Coronel José Dias',
            'iso' => '2202851',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Corrente',
            'iso' => '2202901',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cristalândia do Piauí',
            'iso' => '2203008',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Cristino Castro',
            'iso' => '2203107',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Curimatá',
            'iso' => '2203206',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Currais',
            'iso' => '2203230',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Curralinhos',
            'iso' => '2203255',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Curral Novo do Piauí',
            'iso' => '2203271',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Demerval Lobão',
            'iso' => '2203305',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Dirceu Arcoverde',
            'iso' => '2203354',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Dom Expedito Lopes',
            'iso' => '2203404',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Domingos Mourão',
            'iso' => '2203420',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Dom Inocêncio',
            'iso' => '2203453',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Elesbão Veloso',
            'iso' => '2203503',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Eliseu Martins',
            'iso' => '2203602',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Esperantina',
            'iso' => '2203701',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Fartura do Piauí',
            'iso' => '2203750',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Flores do Piauí',
            'iso' => '2203800',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Floresta do Piauí',
            'iso' => '2203859',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Floriano',
            'iso' => '2203909',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Francinópolis',
            'iso' => '2204006',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Francisco Ayres',
            'iso' => '2204105',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Francisco Macedo',
            'iso' => '2204154',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Francisco Santos',
            'iso' => '2204204',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Fronteiras',
            'iso' => '2204303',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Geminiano',
            'iso' => '2204352',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Gilbués',
            'iso' => '2204402',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Guadalupe',
            'iso' => '2204501',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Guaribas',
            'iso' => '2204550',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Hugo Napoleão',
            'iso' => '2204600',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Ilha Grande',
            'iso' => '2204659',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Inhuma',
            'iso' => '2204709',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Ipiranga do Piauí',
            'iso' => '2204808',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Isaías Coelho',
            'iso' => '2204907',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Itainópolis',
            'iso' => '2205003',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Itaueira',
            'iso' => '2205102',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jacobina do Piauí',
            'iso' => '2205151',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jaicós',
            'iso' => '2205201',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jardim do Mulato',
            'iso' => '2205250',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jatobá do Piauí',
            'iso' => '2205276',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jerumenha',
            'iso' => '2205300',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'João Costa',
            'iso' => '2205359',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Joaquim Pires',
            'iso' => '2205409',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Joca Marques',
            'iso' => '2205458',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'José de Freitas',
            'iso' => '2205508',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Juazeiro do Piauí',
            'iso' => '2205516',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Júlio Borges',
            'iso' => '2205524',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Jurema',
            'iso' => '2205532',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoinha do Piauí',
            'iso' => '2205540',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoa Alegre',
            'iso' => '2205557',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoa do Barro do Piauí',
            'iso' => '2205565',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoa de São Francisco',
            'iso' => '2205573',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoa do Piauí',
            'iso' => '2205581',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Lagoa do Sítio',
            'iso' => '2205599',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Landri Sales',
            'iso' => '2205607',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Luís Correia',
            'iso' => '2205706',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Luzilândia',
            'iso' => '2205805',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Madeiro',
            'iso' => '2205854',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Manoel Emídio',
            'iso' => '2205904',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Marcolândia',
            'iso' => '2205953',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Marcos Parente',
            'iso' => '2206001',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Massapê do Piauí',
            'iso' => '2206050',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Matias Olímpio',
            'iso' => '2206100',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Miguel Alves',
            'iso' => '2206209',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Miguel Leão',
            'iso' => '2206308',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Milton Brandão',
            'iso' => '2206357',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Monsenhor Gil',
            'iso' => '2206407',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Monsenhor Hipólito',
            'iso' => '2206506',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Monte Alegre do Piauí',
            'iso' => '2206605',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Morro Cabeça No Tempo',
            'iso' => '2206654',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Morro do Chapéu do Piauí',
            'iso' => '2206670',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Murici dos Portelas',
            'iso' => '2206696',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Nazaré do Piauí',
            'iso' => '2206704',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Nossa Senhora de Nazaré',
            'iso' => '2206753',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Nossa Senhora dos Remédios',
            'iso' => '2206803',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Novo Oriente do Piauí',
            'iso' => '2206902',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Novo Santo Antônio',
            'iso' => '2206951',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Oeiras',
            'iso' => '2207009',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Olho D\'água do Piauí',
            'iso' => '2207108',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Padre Marcos',
            'iso' => '2207207',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Paes Landim',
            'iso' => '2207306',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pajeú do Piauí',
            'iso' => '2207355',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Palmeira do Piauí',
            'iso' => '2207405',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Palmeirais',
            'iso' => '2207504',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Paquetá',
            'iso' => '2207553',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Parnaguá',
            'iso' => '2207603',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Parnaíba',
            'iso' => '2207702',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Passagem Franca do Piauí',
            'iso' => '2207751',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Patos do Piauí',
            'iso' => '2207777',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pau D\'arco do Piauí',
            'iso' => '2207793',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Paulistana',
            'iso' => '2207801',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pavussu',
            'iso' => '2207850',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pedro Ii',
            'iso' => '2207900',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pedro Laurentino',
            'iso' => '2207934',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Nova Santa Rita',
            'iso' => '2207959',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Picos',
            'iso' => '2208007',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pimenteiras',
            'iso' => '2208106',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Pio Ix',
            'iso' => '2208205',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Piracuruca',
            'iso' => '2208304',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Piripiri',
            'iso' => '2208403',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Porto',
            'iso' => '2208502',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Porto Alegre do Piauí',
            'iso' => '2208551',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Prata do Piauí',
            'iso' => '2208601',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Queimada Nova',
            'iso' => '2208650',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Redenção do Gurguéia',
            'iso' => '2208700',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Regeneração',
            'iso' => '2208809',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Riacho Frio',
            'iso' => '2208858',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Ribeira do Piauí',
            'iso' => '2208874',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Ribeiro Gonçalves',
            'iso' => '2208908',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Rio Grande do Piauí',
            'iso' => '2209005',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santa Cruz do Piauí',
            'iso' => '2209104',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santa Cruz dos Milagres',
            'iso' => '2209153',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santa Filomena',
            'iso' => '2209203',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santa Luz',
            'iso' => '2209302',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santana do Piauí',
            'iso' => '2209351',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santa Rosa do Piauí',
            'iso' => '2209377',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santo Antônio de Lisboa',
            'iso' => '2209401',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santo Antônio dos Milagres',
            'iso' => '2209450',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Santo Inácio do Piauí',
            'iso' => '2209500',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Braz do Piauí',
            'iso' => '2209559',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Félix do Piauí',
            'iso' => '2209609',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Francisco de Assis do Piauí',
            'iso' => '2209658',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Francisco do Piauí',
            'iso' => '2209708',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Gonçalo do Gurguéia',
            'iso' => '2209757',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Gonçalo do Piauí',
            'iso' => '2209807',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João da Canabrava',
            'iso' => '2209856',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João da Fronteira',
            'iso' => '2209872',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João da Serra',
            'iso' => '2209906',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João da Varjota',
            'iso' => '2209955',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João do Arraial',
            'iso' => '2209971',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São João do Piauí',
            'iso' => '2210003',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São José do Divino',
            'iso' => '2210052',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São José do Peixe',
            'iso' => '2210102',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São José do Piauí',
            'iso' => '2210201',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Julião',
            'iso' => '2210300',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Lourenço do Piauí',
            'iso' => '2210359',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Luis do Piauí',
            'iso' => '2210375',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Miguel da Baixa Grande',
            'iso' => '2210383',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Miguel do Fidalgo',
            'iso' => '2210391',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Miguel do Tapuio',
            'iso' => '2210409',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Pedro do Piauí',
            'iso' => '2210508',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'São Raimundo Nonato',
            'iso' => '2210607',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Sebastião Barros',
            'iso' => '2210623',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Sebastião Leal',
            'iso' => '2210631',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Sigefredo Pacheco',
            'iso' => '2210656',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Simões',
            'iso' => '2210706',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Simplício Mendes',
            'iso' => '2210805',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Socorro do Piauí',
            'iso' => '2210904',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Sussuapara',
            'iso' => '2210938',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Tamboril do Piauí',
            'iso' => '2210953',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Tanque do Piauí',
            'iso' => '2210979',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Teresina',
            'iso' => '2211001',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'União',
            'iso' => '2211100',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Uruçuí',
            'iso' => '2211209',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Valença do Piauí',
            'iso' => '2211308',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Várzea Branca',
            'iso' => '2211357',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Várzea Grande',
            'iso' => '2211407',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Vera Mendes',
            'iso' => '2211506',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Vila Nova do Piauí',
            'iso' => '2211605',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Wall Ferraz',
            'iso' => '2211704',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Abaiara',
            'iso' => '2300101',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Acarape',
            'iso' => '2300150',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Acaraú',
            'iso' => '2300200',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Acopiara',
            'iso' => '2300309',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aiuaba',
            'iso' => '2300408',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Alcântaras',
            'iso' => '2300507',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Altaneira',
            'iso' => '2300606',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Alto Santo',
            'iso' => '2300705',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Amontada',
            'iso' => '2300754',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Antonina do Norte',
            'iso' => '2300804',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Apuiarés',
            'iso' => '2300903',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aquiraz',
            'iso' => '2301000',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aracati',
            'iso' => '2301109',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aracoiaba',
            'iso' => '2301208',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ararendá',
            'iso' => '2301257',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Araripe',
            'iso' => '2301307',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aratuba',
            'iso' => '2301406',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Arneiroz',
            'iso' => '2301505',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Assaré',
            'iso' => '2301604',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Aurora',
            'iso' => '2301703',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Baixio',
            'iso' => '2301802',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Banabuiú',
            'iso' => '2301851',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Barbalha',
            'iso' => '2301901',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Barreira',
            'iso' => '2301950',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Barro',
            'iso' => '2302008',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Barroquinha',
            'iso' => '2302057',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Baturité',
            'iso' => '2302107',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Beberibe',
            'iso' => '2302206',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Bela Cruz',
            'iso' => '2302305',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Boa Viagem',
            'iso' => '2302404',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Brejo Santo',
            'iso' => '2302503',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Camocim',
            'iso' => '2302602',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Campos Sales',
            'iso' => '2302701',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Canindé',
            'iso' => '2302800',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Capistrano',
            'iso' => '2302909',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Caridade',
            'iso' => '2303006',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Cariré',
            'iso' => '2303105',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Caririaçu',
            'iso' => '2303204',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Cariús',
            'iso' => '2303303',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Carnaubal',
            'iso' => '2303402',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Cascavel',
            'iso' => '2303501',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Catarina',
            'iso' => '2303600',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Catunda',
            'iso' => '2303659',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Caucaia',
            'iso' => '2303709',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Cedro',
            'iso' => '2303808',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Chaval',
            'iso' => '2303907',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Choró',
            'iso' => '2303931',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Chorozinho',
            'iso' => '2303956',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Coreaú',
            'iso' => '2304004',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Crateús',
            'iso' => '2304103',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Crato',
            'iso' => '2304202',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Croatá',
            'iso' => '2304236',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Cruz',
            'iso' => '2304251',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Deputado Irapuan Pinheiro',
            'iso' => '2304269',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ererê',
            'iso' => '2304277',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Eusébio',
            'iso' => '2304285',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Farias Brito',
            'iso' => '2304301',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Forquilha',
            'iso' => '2304350',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Fortaleza',
            'iso' => '2304400',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Fortim',
            'iso' => '2304459',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Frecheirinha',
            'iso' => '2304509',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'General Sampaio',
            'iso' => '2304608',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Graça',
            'iso' => '2304657',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Granja',
            'iso' => '2304707',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Granjeiro',
            'iso' => '2304806',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Groaíras',
            'iso' => '2304905',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Guaiúba',
            'iso' => '2304954',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Guaraciaba do Norte',
            'iso' => '2305001',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Guaramiranga',
            'iso' => '2305100',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Hidrolândia',
            'iso' => '2305209',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Horizonte',
            'iso' => '2305233',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ibaretama',
            'iso' => '2305266',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ibiapina',
            'iso' => '2305308',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ibicuitinga',
            'iso' => '2305332',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Icapuí',
            'iso' => '2305357',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Icó',
            'iso' => '2305407',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Iguatu',
            'iso' => '2305506',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Independência',
            'iso' => '2305605',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ipaporanga',
            'iso' => '2305654',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ipaumirim',
            'iso' => '2305704',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ipu',
            'iso' => '2305803',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ipueiras',
            'iso' => '2305902',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Iracema',
            'iso' => '2306009',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Irauçuba',
            'iso' => '2306108',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itaiçaba',
            'iso' => '2306207',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itaitinga',
            'iso' => '2306256',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itapagé',
            'iso' => '2306306',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itapipoca',
            'iso' => '2306405',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itapiúna',
            'iso' => '2306504',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itarema',
            'iso' => '2306553',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Itatira',
            'iso' => '2306603',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jaguaretama',
            'iso' => '2306702',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jaguaribara',
            'iso' => '2306801',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jaguaribe',
            'iso' => '2306900',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jaguaruana',
            'iso' => '2307007',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jardim',
            'iso' => '2307106',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jati',
            'iso' => '2307205',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jijoca de Jericoacoara',
            'iso' => '2307254',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Juazeiro do Norte',
            'iso' => '2307304',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Jucás',
            'iso' => '2307403',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Lavras da Mangabeira',
            'iso' => '2307502',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Limoeiro do Norte',
            'iso' => '2307601',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Madalena',
            'iso' => '2307635',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Maracanaú',
            'iso' => '2307650',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Maranguape',
            'iso' => '2307700',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Marco',
            'iso' => '2307809',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Martinópole',
            'iso' => '2307908',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Massapê',
            'iso' => '2308005',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Mauriti',
            'iso' => '2308104',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Meruoca',
            'iso' => '2308203',
        ]);
        City::create([
        'state_id' => '6',
        'title' => 'Milagres',
        'iso' => '2308302',
        ]);
        City::create([
        'state_id' => '6',
        'title' => 'Milhã',
        'iso' => '2308351',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Miraíma',
            'iso' => '2308377',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Missão Velha',
            'iso' => '2308401',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Mombaça',
            'iso' => '2308500',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Monsenhor Tabosa',
            'iso' => '2308609',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Morada Nova',
            'iso' => '2308708',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Moraújo',
            'iso' => '2308807',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Morrinhos',
            'iso' => '2308906',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Mucambo',
            'iso' => '2309003',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Mulungu',
            'iso' => '2309102',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Nova Olinda',
            'iso' => '2309201',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Nova Russas',
            'iso' => '2309300',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Novo Oriente',
            'iso' => '2309409',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ocara',
            'iso' => '2309458',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Orós',
            'iso' => '2309508',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pacajus',
            'iso' => '2309607',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pacatuba',
            'iso' => '2309706',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pacoti',
            'iso' => '2309805',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pacujá',
            'iso' => '2309904',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Palhano',
            'iso' => '2310001',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Palmácia',
            'iso' => '2310100',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Paracuru',
            'iso' => '2310209',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Paraipaba',
            'iso' => '2310258',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Parambu',
            'iso' => '2310308',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Paramoti',
            'iso' => '2310407',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pedra Branca',
            'iso' => '2310506',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Penaforte',
            'iso' => '2310605',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pentecoste',
            'iso' => '2310704',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pereiro',
            'iso' => '2310803',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pindoretama',
            'iso' => '2310852',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Piquet Carneiro',
            'iso' => '2310902',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Pires Ferreira',
            'iso' => '2310951',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Poranga',
            'iso' => '2311009',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Porteiras',
            'iso' => '2311108',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Potengi',
            'iso' => '2311207',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Potiretama',
            'iso' => '2311231',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Quiterianópolis',
            'iso' => '2311264',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Quixadá',
            'iso' => '2311306',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Quixelô',
            'iso' => '2311355',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Quixeramobim',
            'iso' => '2311405',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Quixeré',
            'iso' => '2311504',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Redenção',
            'iso' => '2311603',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Reriutaba',
            'iso' => '2311702',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Russas',
            'iso' => '2311801',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Saboeiro',
            'iso' => '2311900',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Salitre',
            'iso' => '2311959',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Santana do Acaraú',
            'iso' => '2312007',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Santana do Cariri',
            'iso' => '2312106',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Santa Quitéria',
            'iso' => '2312205',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'São Benedito',
            'iso' => '2312304',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'São Gonçalo do Amarante',
            'iso' => '2312403',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'São João do Jaguaribe',
            'iso' => '2312502',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'São Luís do Curu',
            'iso' => '2312601',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Senador Pompeu',
            'iso' => '2312700',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Senador Sá',
            'iso' => '2312809',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Sobral',
            'iso' => '2312908',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Solonópole',
            'iso' => '2313005',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tabuleiro do Norte',
            'iso' => '2313104',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tamboril',
            'iso' => '2313203',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tarrafas',
            'iso' => '2313252',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tauá',
            'iso' => '2313302',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tejuçuoca',
            'iso' => '2313351',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tianguá',
            'iso' => '2313401',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Trairi',
            'iso' => '2313500',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Tururu',
            'iso' => '2313559',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Ubajara',
            'iso' => '2313609',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Umari',
            'iso' => '2313708',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Umirim',
            'iso' => '2313757',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Uruburetama',
            'iso' => '2313807',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Uruoca',
            'iso' => '2313906',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Varjota',
            'iso' => '2313955',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Várzea Alegre',
            'iso' => '2314003',
        ]);
        City::create([
            'state_id' => '6',
            'title' => 'Viçosa do Ceará',
            'iso' => '2314102',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Acari',
            'iso' => '2400109',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Açu',
            'iso' => '2400208',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Afonso Bezerra',
            'iso' => '2400307',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Água Nova',
            'iso' => '2400406',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Alexandria',
            'iso' => '2400505',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Almino Afonso',
            'iso' => '2400604',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Alto do Rodrigues',
            'iso' => '2400703',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Angicos',
            'iso' => '2400802',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Antônio Martins',
            'iso' => '2400901',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Apodi',
            'iso' => '2401008',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Areia Branca',
            'iso' => '2401107',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Arês',
            'iso' => '2401206',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Augusto Severo',
            'iso' => '2401305',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Baía Formosa',
            'iso' => '2401404',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Baraúna',
            'iso' => '2401453',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Barcelona',
            'iso' => '2401503',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Bento Fernandes',
            'iso' => '2401602',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Bodó',
            'iso' => '2401651',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Bom Jesus',
            'iso' => '2401701',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Brejinho',
            'iso' => '2401800',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Caiçara do Norte',
            'iso' => '2401859',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Caiçara do Rio do Vento',
            'iso' => '2401909',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Caicó',
            'iso' => '2402006',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Campo Redondo',
            'iso' => '2402105',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Canguaretama',
            'iso' => '2402204',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Caraúbas',
            'iso' => '2402303',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Carnaúba dos Dantas',
            'iso' => '2402402',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Carnaubais',
            'iso' => '2402501',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ceará-Mirim',
            'iso' => '2402600',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Cerro Corá',
            'iso' => '2402709',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Coronel Ezequiel',
            'iso' => '2402808',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Coronel João Pessoa',
            'iso' => '2402907',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Cruzeta',
            'iso' => '2403004',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Currais Novos',
            'iso' => '2403103',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Doutor Severiano',
            'iso' => '2403202',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Parnamirim',
            'iso' => '2403251',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Encanto',
            'iso' => '2403301',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Equador',
            'iso' => '2403400',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Espírito Santo',
            'iso' => '2403509',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Extremoz',
            'iso' => '2403608',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Felipe Guerra',
            'iso' => '2403707',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Fernando Pedroza',
            'iso' => '2403756',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Florânia',
            'iso' => '2403806',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Francisco Dantas',
            'iso' => '2403905',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Frutuoso Gomes',
            'iso' => '2404002',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Galinhos',
            'iso' => '2404101',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Goianinha',
            'iso' => '2404200',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Governador Dix-Sept Rosado',
            'iso' => '2404309',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Grossos',
            'iso' => '2404408',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Guamaré',
            'iso' => '2404507',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ielmo Marinho',
            'iso' => '2404606',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ipanguaçu',
            'iso' => '2404705',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ipueira',
            'iso' => '2404804',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Itajá',
            'iso' => '2404853',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Itaú',
            'iso' => '2404903',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jaçanã',
            'iso' => '2405009',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jandaíra',
            'iso' => '2405108',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Janduís',
            'iso' => '2405207',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Januário Cicco',
            'iso' => '2405306',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Japi',
            'iso' => '2405405',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jardim de Angicos',
            'iso' => '2405504',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jardim de Piranhas',
            'iso' => '2405603',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jardim do Seridó',
            'iso' => '2405702',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'João Câmara',
            'iso' => '2405801',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'João Dias',
            'iso' => '2405900',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'José da Penha',
            'iso' => '2406007',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jucurutu',
            'iso' => '2406106',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Jundiá',
            'iso' => '2406155',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lagoa D\'anta',
            'iso' => '2406205',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lagoa de Pedras',
            'iso' => '2406304',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lagoa de Velhos',
            'iso' => '2406403',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lagoa Nova',
            'iso' => '2406502',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lagoa Salgada',
            'iso' => '2406601',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lajes',
            'iso' => '2406700',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lajes Pintadas',
            'iso' => '2406809',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Lucrécia',
            'iso' => '2406908',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Luís Gomes',
            'iso' => '2407005',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Macaíba',
            'iso' => '2407104',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Macau',
            'iso' => '2407203',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Major Sales',
            'iso' => '2407252',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Marcelino Vieira',
            'iso' => '2407302',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Martins',
            'iso' => '2407401',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Maxaranguape',
            'iso' => '2407500',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Messias Targino',
            'iso' => '2407609',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Montanhas',
            'iso' => '2407708',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Monte Alegre',
            'iso' => '2407807',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Monte das Gameleiras',
            'iso' => '2407906',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Mossoró',
            'iso' => '2408003',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Natal',
            'iso' => '2408102',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Nísia Floresta',
            'iso' => '2408201',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Nova Cruz',
            'iso' => '2408300',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Olho-D\'água do Borges',
            'iso' => '2408409',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ouro Branco',
            'iso' => '2408508',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Paraná',
            'iso' => '2408607',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Paraú',
            'iso' => '2408706',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Parazinho',
            'iso' => '2408805',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Parelhas',
            'iso' => '2408904',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Rio do Fogo',
            'iso' => '2408953',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Passa e Fica',
            'iso' => '2409100',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Passagem',
            'iso' => '2409209',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Patu',
            'iso' => '2409308',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Santa Maria',
            'iso' => '2409332',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pau dos Ferros',
            'iso' => '2409407',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pedra Grande',
            'iso' => '2409506',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pedra Preta',
            'iso' => '2409605',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pedro Avelino',
            'iso' => '2409704',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pedro Velho',
            'iso' => '2409803',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pendências',
            'iso' => '2409902',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pilões',
            'iso' => '2410009',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Poço Branco',
            'iso' => '2410108',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Portalegre',
            'iso' => '2410207',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Porto do Mangue',
            'iso' => '2410256',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Presidente Juscelino',
            'iso' => '2410306',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Pureza',
            'iso' => '2410405',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Rafael Fernandes',
            'iso' => '2410504',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Rafael Godeiro',
            'iso' => '2410603',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Riacho da Cruz',
            'iso' => '2410702',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Riacho de Santana',
            'iso' => '2410801',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Riachuelo',
            'iso' => '2410900',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Rodolfo Fernandes',
            'iso' => '2411007',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Tibau',
            'iso' => '2411056',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Ruy Barbosa',
            'iso' => '2411106',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Santa Cruz',
            'iso' => '2411205',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Santana do Matos',
            'iso' => '2411403',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Santana do Seridó',
            'iso' => '2411429',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Santo Antônio',
            'iso' => '2411502',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Bento do Norte',
            'iso' => '2411601',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Bento do Trairí',
            'iso' => '2411700',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Fernando',
            'iso' => '2411809',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Francisco do Oeste',
            'iso' => '2411908',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Gonçalo do Amarante',
            'iso' => '2412005',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São João do Sabugi',
            'iso' => '2412104',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São José de Mipibu',
            'iso' => '2412203',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São José do Campestre',
            'iso' => '2412302',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São José do Seridó',
            'iso' => '2412401',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Miguel',
            'iso' => '2412500',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Miguel do Gostoso',
            'iso' => '2412559',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Paulo do Potengi',
            'iso' => '2412609',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Pedro',
            'iso' => '2412708',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Rafael',
            'iso' => '2412807',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Tomé',
            'iso' => '2412906',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'São Vicente',
            'iso' => '2413003',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Senador Elói de Souza',
            'iso' => '2413102',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Senador Georgino Avelino',
            'iso' => '2413201',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Serra de São Bento',
            'iso' => '2413300',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Serra do Mel',
            'iso' => '2413359',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Serra Negra do Norte',
            'iso' => '2413409',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Serrinha',
            'iso' => '2413508',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Serrinha dos Pintos',
            'iso' => '2413557',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Severiano Melo',
            'iso' => '2413607',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Sítio Novo',
            'iso' => '2413706',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Taboleiro Grande',
            'iso' => '2413805',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Taipu',
            'iso' => '2413904',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Tangará',
            'iso' => '2414001',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Tenente Ananias',
            'iso' => '2414100',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Tenente Laurentino Cruz',
            'iso' => '2414159',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Tibau do Sul',
            'iso' => '2414209',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Timbaúba dos Batistas',
            'iso' => '2414308',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Touros',
            'iso' => '2414407',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Triunfo Potiguar',
            'iso' => '2414456',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Umarizal',
            'iso' => '2414506',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Upanema',
            'iso' => '2414605',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Várzea',
            'iso' => '2414704',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Venha-Ver',
            'iso' => '2414753',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Vera Cruz',
            'iso' => '2414803',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Viçosa',
            'iso' => '2414902',
        ]);
        City::create([
            'state_id' => '20',
            'title' => 'Vila Flor',
            'iso' => '2415008',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Água Branca',
            'iso' => '2500106',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Aguiar',
            'iso' => '2500205',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Alagoa Grande',
            'iso' => '2500304',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Alagoa Nova',
            'iso' => '2500403',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Alagoinha',
            'iso' => '2500502',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Alcantil',
            'iso' => '2500536',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Algodão de Jandaíra',
            'iso' => '2500577',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Alhandra',
            'iso' => '2500601',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São João do Rio do Peixe',
            'iso' => '2500700',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Amparo',
            'iso' => '2500734',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Aparecida',
            'iso' => '2500775',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Araçagi',
            'iso' => '2500809',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Arara',
            'iso' => '2500908',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Araruna',
            'iso' => '2501005',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Areia',
            'iso' => '2501104',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Areia de Baraúnas',
            'iso' => '2501153',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Areial',
            'iso' => '2501203',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Aroeiras',
            'iso' => '2501302',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Assunção',
            'iso' => '2501351',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Baía da Traição',
            'iso' => '2501401',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bananeiras',
            'iso' => '2501500',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Baraúna',
            'iso' => '2501534',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Barra de Santana',
            'iso' => '2501575',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Barra de Santa Rosa',
            'iso' => '2501609',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Barra de São Miguel',
            'iso' => '2501708',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bayeux',
            'iso' => '2501807',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Belém',
            'iso' => '2501906',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Belém do Brejo do Cruz',
            'iso' => '2502003',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bernardino Batista',
            'iso' => '2502052',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Boa Ventura',
            'iso' => '2502102',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Boa Vista',
            'iso' => '2502151',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bom Jesus',
            'iso' => '2502201',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bom Sucesso',
            'iso' => '2502300',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Bonito de Santa Fé',
            'iso' => '2502409',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Boqueirão',
            'iso' => '2502508',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Igaracy',
            'iso' => '2502607',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Borborema',
            'iso' => '2502706',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Brejo do Cruz',
            'iso' => '2502805',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Brejo dos Santos',
            'iso' => '2502904',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Caaporã',
            'iso' => '2503001',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cabaceiras',
            'iso' => '2503100',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cabedelo',
            'iso' => '2503209',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cachoeira dos Índios',
            'iso' => '2503308',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cacimba de Areia',
            'iso' => '2503407',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cacimba de Dentro',
            'iso' => '2503506',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cacimbas',
            'iso' => '2503555',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Caiçara',
            'iso' => '2503605',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cajazeiras',
            'iso' => '2503704',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cajazeirinhas',
            'iso' => '2503753',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Caldas Brandão',
            'iso' => '2503803',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Camalaú',
            'iso' => '2503902',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Campina Grande',
            'iso' => '2504009',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Capim',
            'iso' => '2504033',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Caraúbas',
            'iso' => '2504074',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Carrapateira',
            'iso' => '2504108',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Casserengue',
            'iso' => '2504157',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Catingueira',
            'iso' => '2504207',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Catolé do Rocha',
            'iso' => '2504306',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Caturité',
            'iso' => '2504355',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Conceição',
            'iso' => '2504405',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Condado',
            'iso' => '2504504',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Conde',
            'iso' => '2504603',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Congo',
            'iso' => '2504702',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Coremas',
            'iso' => '2504801',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Coxixola',
            'iso' => '2504850',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cruz do Espírito Santo',
            'iso' => '2504900',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cubati',
            'iso' => '2505006',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cuité',
            'iso' => '2505105',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cuitegi',
            'iso' => '2505204',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Cuité de Mamanguape',
            'iso' => '2505238',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Curral de Cima',
            'iso' => '2505279',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Curral Velho',
            'iso' => '2505303',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Damião',
            'iso' => '2505352',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Desterro',
            'iso' => '2505402',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Vista Serrana',
            'iso' => '2505501',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Diamante',
            'iso' => '2505600',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Dona Inês',
            'iso' => '2505709',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Duas Estradas',
            'iso' => '2505808',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Emas',
            'iso' => '2505907',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Esperança',
            'iso' => '2506004',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Fagundes',
            'iso' => '2506103',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Frei Martinho',
            'iso' => '2506202',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Gado Bravo',
            'iso' => '2506251',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Guarabira',
            'iso' => '2506301',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Gurinhém',
            'iso' => '2506400',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Gurjão',
            'iso' => '2506509',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Ibiara',
            'iso' => '2506608',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Imaculada',
            'iso' => '2506707',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Ingá',
            'iso' => '2506806',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Itabaiana',
            'iso' => '2506905',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Itaporanga',
            'iso' => '2507002',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Itapororoca',
            'iso' => '2507101',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Itatuba',
            'iso' => '2507200',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Jacaraú',
            'iso' => '2507309',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Jericó',
            'iso' => '2507408',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'João Pessoa',
            'iso' => '2507507',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Juarez Távora',
            'iso' => '2507606',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Juazeirinho',
            'iso' => '2507705',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Junco do Seridó',
            'iso' => '2507804',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Juripiranga',
            'iso' => '2507903',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Juru',
            'iso' => '2508000',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Lagoa',
            'iso' => '2508109',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Lagoa de Dentro',
            'iso' => '2508208',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Lagoa Seca',
            'iso' => '2508307',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Lastro',
            'iso' => '2508406',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Livramento',
            'iso' => '2508505',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Logradouro',
            'iso' => '2508554',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Lucena',
            'iso' => '2508604',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mãe D\'água',
            'iso' => '2508703',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Malta',
            'iso' => '2508802',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mamanguape',
            'iso' => '2508901',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Manaíra',
            'iso' => '2509008',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Marcação',
            'iso' => '2509057',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mari',
            'iso' => '2509107',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Marizópolis',
            'iso' => '2509156',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Massaranduba',
            'iso' => '2509206',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mataraca',
            'iso' => '2509305',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Matinhas',
            'iso' => '2509339',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mato Grosso',
            'iso' => '2509370',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Maturéia',
            'iso' => '2509396',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mogeiro',
            'iso' => '2509404',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Montadas',
            'iso' => '2509503',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Monte Horebe',
            'iso' => '2509602',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Monteiro',
            'iso' => '2509701',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Mulungu',
            'iso' => '2509800',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Natuba',
            'iso' => '2509909',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Nazarezinho',
            'iso' => '2510006',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Nova Floresta',
            'iso' => '2510105',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Nova Olinda',
            'iso' => '2510204',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Nova Palmeira',
            'iso' => '2510303',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Olho D\'água',
            'iso' => '2510402',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Olivedos',
            'iso' => '2510501',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Ouro Velho',
            'iso' => '2510600',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Parari',
            'iso' => '2510659',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Passagem',
            'iso' => '2510709',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Patos',
            'iso' => '2510808',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Paulista',
            'iso' => '2510907',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pedra Branca',
            'iso' => '2511004',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pedra Lavrada',
            'iso' => '2511103',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pedras de Fogo',
            'iso' => '2511202',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Piancó',
            'iso' => '2511301',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Picuí',
            'iso' => '2511400',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pilar',
            'iso' => '2511509',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pilões',
            'iso' => '2511608',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pilõezinhos',
            'iso' => '2511707',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pirpirituba',
            'iso' => '2511806',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pitimbu',
            'iso' => '2511905',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pocinhos',
            'iso' => '2512002',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Poço Dantas',
            'iso' => '2512036',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Poço de José de Moura',
            'iso' => '2512077',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pombal',
            'iso' => '2512101',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Prata',
            'iso' => '2512200',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Princesa Isabel',
            'iso' => '2512309',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Puxinanã',
            'iso' => '2512408',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Queimadas',
            'iso' => '2512507',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Quixabá',
            'iso' => '2512606',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Remígio',
            'iso' => '2512705',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Pedro Régis',
            'iso' => '2512721',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Riachão',
            'iso' => '2512747',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Riachão do Bacamarte',
            'iso' => '2512754',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Riachão do Poço',
            'iso' => '2512762',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Riacho de Santo Antônio',
            'iso' => '2512788',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Riacho dos Cavalos',
            'iso' => '2512804',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Rio Tinto',
            'iso' => '2512903',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Salgadinho',
            'iso' => '2513000',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Salgado de São Félix',
            'iso' => '2513109',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Cecília',
            'iso' => '2513158',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Cruz',
            'iso' => '2513208',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Helena',
            'iso' => '2513307',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Inês',
            'iso' => '2513356',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Luzia',
            'iso' => '2513406',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santana de Mangueira',
            'iso' => '2513505',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santana dos Garrotes',
            'iso' => '2513604',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santarém',
            'iso' => '2513653',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Rita',
            'iso' => '2513703',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santa Teresinha',
            'iso' => '2513802',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Santo André',
            'iso' => '2513851',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Bento',
            'iso' => '2513901',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Bentinho',
            'iso' => '2513927',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Domingos do Cariri',
            'iso' => '2513943',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Domingos de Pombal',
            'iso' => '2513968',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Francisco',
            'iso' => '2513984',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São João do Cariri',
            'iso' => '2514008',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São João do Tigre',
            'iso' => '2514107',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José da Lagoa Tapada',
            'iso' => '2514206',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José de Caiana',
            'iso' => '2514305',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José de Espinharas',
            'iso' => '2514404',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José dos Ramos',
            'iso' => '2514453',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José de Piranhas',
            'iso' => '2514503',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José de Princesa',
            'iso' => '2514552',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José do Bonfim',
            'iso' => '2514602',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José do Brejo do Cruz',
            'iso' => '2514651',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José do Sabugi',
            'iso' => '2514701',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São José dos Cordeiros',
            'iso' => '2514800',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Mamede',
            'iso' => '2514909',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Miguel de Taipu',
            'iso' => '2515005',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Sebastião de Lagoa de Roça',
            'iso' => '2515104',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'São Sebastião do Umbuzeiro',
            'iso' => '2515203',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sapé',
            'iso' => '2515302',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Seridó',
            'iso' => '2515401',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Serra Branca',
            'iso' => '2515500',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Serra da Raiz',
            'iso' => '2515609',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Serra Grande',
            'iso' => '2515708',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Serra Redonda',
            'iso' => '2515807',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Serraria',
            'iso' => '2515906',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sertãozinho',
            'iso' => '2515930',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sobrado',
            'iso' => '2515971',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Solânea',
            'iso' => '2516003',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Soledade',
            'iso' => '2516102',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sossêgo',
            'iso' => '2516151',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sousa',
            'iso' => '2516201',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Sumé',
            'iso' => '2516300',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Campo de Santana',
            'iso' => '2516409',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Taperoá',
            'iso' => '2516508',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Tavares',
            'iso' => '2516607',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Teixeira',
            'iso' => '2516706',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Tenório',
            'iso' => '2516755',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Triunfo',
            'iso' => '2516805',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Uiraúna',
            'iso' => '2516904',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Umbuzeiro',
            'iso' => '2517001',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Várzea',
            'iso' => '2517100',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Vieirópolis',
            'iso' => '2517209',
        ]);
        City::create([
            'state_id' => '15',
            'title' => 'Zabelê',
            'iso' => '2517407',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Abreu e Lima',
            'iso' => '2600054',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Afogados da Ingazeira',
            'iso' => '2600104',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Afrânio',
            'iso' => '2600203',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Agrestina',
            'iso' => '2600302',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Água Preta',
            'iso' => '2600401',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Águas Belas',
            'iso' => '2600500',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Alagoinha',
            'iso' => '2600609',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Aliança',
            'iso' => '2600708',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Altinho',
            'iso' => '2600807',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Amaraji',
            'iso' => '2600906',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Angelim',
            'iso' => '2601003',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Araçoiaba',
            'iso' => '2601052',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Araripina',
            'iso' => '2601102',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Arcoverde',
            'iso' => '2601201',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Barra de Guabiraba',
            'iso' => '2601300',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Barreiros',
            'iso' => '2601409',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Belém de Maria',
            'iso' => '2601508',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Belém de São Francisco',
            'iso' => '2601607',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Belo Jardim',
            'iso' => '2601706',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Betânia',
            'iso' => '2601805',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Bezerros',
            'iso' => '2601904',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Bodocó',
            'iso' => '2602001',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Bom Conselho',
            'iso' => '2602100',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Bom Jardim',
            'iso' => '2602209',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Bonito',
            'iso' => '2602308',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Brejão',
            'iso' => '2602407',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Brejinho',
            'iso' => '2602506',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Brejo da Madre de Deus',
            'iso' => '2602605',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Buenos Aires',
            'iso' => '2602704',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Buíque',
            'iso' => '2602803',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cabo de Santo Agostinho',
            'iso' => '2602902',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cabrobó',
            'iso' => '2603009',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cachoeirinha',
            'iso' => '2603108',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Caetés',
            'iso' => '2603207',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Calçado',
            'iso' => '2603306',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Calumbi',
            'iso' => '2603405',
        ]);
        City::create([
        'state_id' => '16',
        'title' => 'Camaragibe',
        'iso' => '2603454',
        ]);
        City::create([
        'state_id' => '16',
        'title' => 'Camocim de São Félix',
        'iso' => '2603504',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Camutanga',
            'iso' => '2603603',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Canhotinho',
            'iso' => '2603702',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Capoeiras',
            'iso' => '2603801',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Carnaíba',
            'iso' => '2603900',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Carnaubeira da Penha',
            'iso' => '2603926',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Carpina',
            'iso' => '2604007',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Caruaru',
            'iso' => '2604106',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Casinhas',
            'iso' => '2604155',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Catende',
            'iso' => '2604205',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cedro',
            'iso' => '2604304',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Chã de Alegria',
            'iso' => '2604403',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Chã Grande',
            'iso' => '2604502',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Condado',
            'iso' => '2604601',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Correntes',
            'iso' => '2604700',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cortês',
            'iso' => '2604809',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cumaru',
            'iso' => '2604908',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Cupira',
            'iso' => '2605004',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Custódia',
            'iso' => '2605103',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Dormentes',
            'iso' => '2605152',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Escada',
            'iso' => '2605202',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Exu',
            'iso' => '2605301',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Feira Nova',
            'iso' => '2605400',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Fernando de Noronha',
            'iso' => '2605459',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ferreiros',
            'iso' => '2605509',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Flores',
            'iso' => '2605608',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Floresta',
            'iso' => '2605707',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Frei Miguelinho',
            'iso' => '2605806',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Gameleira',
            'iso' => '2605905',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Garanhuns',
            'iso' => '2606002',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Glória do Goitá',
            'iso' => '2606101',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Goiana',
            'iso' => '2606200',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Granito',
            'iso' => '2606309',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Gravatá',
            'iso' => '2606408',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Iati',
            'iso' => '2606507',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ibimirim',
            'iso' => '2606606',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ibirajuba',
            'iso' => '2606705',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Igarassu',
            'iso' => '2606804',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Iguaraci',
            'iso' => '2606903',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Inajá',
            'iso' => '2607000',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ingazeira',
            'iso' => '2607109',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ipojuca',
            'iso' => '2607208',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ipubi',
            'iso' => '2607307',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itacuruba',
            'iso' => '2607406',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itaíba',
            'iso' => '2607505',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ilha de Itamaracá',
            'iso' => '2607604',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itambé',
            'iso' => '2607653',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itapetim',
            'iso' => '2607703',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itapissuma',
            'iso' => '2607752',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Itaquitinga',
            'iso' => '2607802',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jaboatão dos Guararapes',
            'iso' => '2607901',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jaqueira',
            'iso' => '2607950',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jataúba',
            'iso' => '2608008',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jatobá',
            'iso' => '2608057',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'João Alfredo',
            'iso' => '2608107',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Joaquim Nabuco',
            'iso' => '2608206',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jucati',
            'iso' => '2608255',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jupi',
            'iso' => '2608305',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Jurema',
            'iso' => '2608404',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lagoa do Carro',
            'iso' => '2608453',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lagoa do Itaenga',
            'iso' => '2608503',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lagoa do Ouro',
            'iso' => '2608602',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lagoa dos Gatos',
            'iso' => '2608701',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lagoa Grande',
            'iso' => '2608750',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Lajedo',
            'iso' => '2608800',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Limoeiro',
            'iso' => '2608909',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Macaparana',
            'iso' => '2609006',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Machados',
            'iso' => '2609105',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Manari',
            'iso' => '2609154',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Maraial',
            'iso' => '2609204',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Mirandiba',
            'iso' => '2609303',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Moreno',
            'iso' => '2609402',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Nazaré da Mata',
            'iso' => '2609501',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Olinda',
            'iso' => '2609600',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Orobó',
            'iso' => '2609709',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Orocó',
            'iso' => '2609808',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ouricuri',
            'iso' => '2609907',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Palmares',
            'iso' => '2610004',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Palmeirina',
            'iso' => '2610103',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Panelas',
            'iso' => '2610202',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Paranatama',
            'iso' => '2610301',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Parnamirim',
            'iso' => '2610400',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Passira',
            'iso' => '2610509',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Paudalho',
            'iso' => '2610608',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Paulista',
            'iso' => '2610707',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Pedra',
            'iso' => '2610806',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Pesqueira',
            'iso' => '2610905',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Petrolândia',
            'iso' => '2611002',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Petrolina',
            'iso' => '2611101',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Poção',
            'iso' => '2611200',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Pombos',
            'iso' => '2611309',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Primavera',
            'iso' => '2611408',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Quipapá',
            'iso' => '2611507',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Quixaba',
            'iso' => '2611533',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Recife',
            'iso' => '2611606',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Riacho das Almas',
            'iso' => '2611705',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Ribeirão',
            'iso' => '2611804',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Rio Formoso',
            'iso' => '2611903',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Sairé',
            'iso' => '2612000',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Salgadinho',
            'iso' => '2612109',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Salgueiro',
            'iso' => '2612208',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Saloá',
            'iso' => '2612307',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Sanharó',
            'iso' => '2612406',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Cruz',
            'iso' => '2612455',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Cruz da Baixa Verde',
            'iso' => '2612471',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Cruz do Capibaribe',
            'iso' => '2612505',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Filomena',
            'iso' => '2612554',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Maria da Boa Vista',
            'iso' => '2612604',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Maria do Cambucá',
            'iso' => '2612703',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Santa Terezinha',
            'iso' => '2612802',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Benedito do Sul',
            'iso' => '2612901',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Bento do Una',
            'iso' => '2613008',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Caitano',
            'iso' => '2613107',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São João',
            'iso' => '2613206',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Joaquim do Monte',
            'iso' => '2613305',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São José da Coroa Grande',
            'iso' => '2613404',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São José do Belmonte',
            'iso' => '2613503',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São José do Egito',
            'iso' => '2613602',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Lourenço da Mata',
            'iso' => '2613701',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'São Vicente Ferrer',
            'iso' => '2613800',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Serra Talhada',
            'iso' => '2613909',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Serrita',
            'iso' => '2614006',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Sertânia',
            'iso' => '2614105',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Sirinhaém',
            'iso' => '2614204',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Moreilândia',
            'iso' => '2614303',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Solidão',
            'iso' => '2614402',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Surubim',
            'iso' => '2614501',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tabira',
            'iso' => '2614600',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tacaimbó',
            'iso' => '2614709',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tacaratu',
            'iso' => '2614808',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tamandaré',
            'iso' => '2614857',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Taquaritinga do Norte',
            'iso' => '2615003',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Terezinha',
            'iso' => '2615102',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Terra Nova',
            'iso' => '2615201',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Timbaúba',
            'iso' => '2615300',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Toritama',
            'iso' => '2615409',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tracunhaém',
            'iso' => '2615508',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Trindade',
            'iso' => '2615607',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Triunfo',
            'iso' => '2615706',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tupanatinga',
            'iso' => '2615805',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Tuparetama',
            'iso' => '2615904',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Venturosa',
            'iso' => '2616001',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Verdejante',
            'iso' => '2616100',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Vertente do Lério',
            'iso' => '2616183',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Vertentes',
            'iso' => '2616209',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Vicência',
            'iso' => '2616308',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Vitória de Santo Antão',
            'iso' => '2616407',
        ]);
        City::create([
            'state_id' => '16',
            'title' => 'Xexéu',
            'iso' => '2616506',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Água Branca',
            'iso' => '2700102',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Anadia',
            'iso' => '2700201',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Arapiraca',
            'iso' => '2700300',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Atalaia',
            'iso' => '2700409',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Barra de Santo Antônio',
            'iso' => '2700508',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Barra de São Miguel',
            'iso' => '2700607',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Batalha',
            'iso' => '2700706',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Belém',
            'iso' => '2700805',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Belo Monte',
            'iso' => '2700904',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Boca da Mata',
            'iso' => '2701001',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Branquinha',
            'iso' => '2701100',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Cacimbinhas',
            'iso' => '2701209',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Cajueiro',
            'iso' => '2701308',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Campestre',
            'iso' => '2701357',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Campo Alegre',
            'iso' => '2701407',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Campo Grande',
            'iso' => '2701506',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Canapi',
            'iso' => '2701605',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Capela',
            'iso' => '2701704',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Carneiros',
            'iso' => '2701803',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Chã Preta',
            'iso' => '2701902',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Coité do Nóia',
            'iso' => '2702009',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Colônia Leopoldina',
            'iso' => '2702108',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Coqueiro Seco',
            'iso' => '2702207',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Coruripe',
            'iso' => '2702306',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Craíbas',
            'iso' => '2702355',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Delmiro Gouveia',
            'iso' => '2702405',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Dois Riachos',
            'iso' => '2702504',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Estrela de Alagoas',
            'iso' => '2702553',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Feira Grande',
            'iso' => '2702603',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Feliz Deserto',
            'iso' => '2702702',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Flexeiras',
            'iso' => '2702801',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Girau do Ponciano',
            'iso' => '2702900',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Ibateguara',
            'iso' => '2703007',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Igaci',
            'iso' => '2703106',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Igreja Nova',
            'iso' => '2703205',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Inhapi',
            'iso' => '2703304',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Jacaré dos Homens',
            'iso' => '2703403',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Jacuípe',
            'iso' => '2703502',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Japaratinga',
            'iso' => '2703601',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Jaramataia',
            'iso' => '2703700',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Jequiá da Praia',
            'iso' => '2703759',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Joaquim Gomes',
            'iso' => '2703809',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Jundiá',
            'iso' => '2703908',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Junqueiro',
            'iso' => '2704005',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Lagoa da Canoa',
            'iso' => '2704104',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Limoeiro de Anadia',
            'iso' => '2704203',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Maceió',
            'iso' => '2704302',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Major Isidoro',
            'iso' => '2704401',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Maragogi',
            'iso' => '2704500',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Maravilha',
            'iso' => '2704609',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Marechal Deodoro',
            'iso' => '2704708',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Maribondo',
            'iso' => '2704807',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Mar Vermelho',
            'iso' => '2704906',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Mata Grande',
            'iso' => '2705002',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Matriz de Camaragibe',
            'iso' => '2705101',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Messias',
            'iso' => '2705200',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Minador do Negrão',
            'iso' => '2705309',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Monteirópolis',
            'iso' => '2705408',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Murici',
            'iso' => '2705507',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Novo Lino',
            'iso' => '2705606',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Olho D\'água das Flores',
            'iso' => '2705705',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Olho D\'água do Casado',
            'iso' => '2705804',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Olho D\'água Grande',
            'iso' => '2705903',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Olivença',
            'iso' => '2706000',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Ouro Branco',
            'iso' => '2706109',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Palestina',
            'iso' => '2706208',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Palmeira dos Índios',
            'iso' => '2706307',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Pão de Açúcar',
            'iso' => '2706406',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Pariconha',
            'iso' => '2706422',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Paripueira',
            'iso' => '2706448',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Passo de Camaragibe',
            'iso' => '2706505',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Paulo Jacinto',
            'iso' => '2706604',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Penedo',
            'iso' => '2706703',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Piaçabuçu',
            'iso' => '2706802',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Pilar',
            'iso' => '2706901',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Pindoba',
            'iso' => '2707008',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Piranhas',
            'iso' => '2707107',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Poço das Trincheiras',
            'iso' => '2707206',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Porto Calvo',
            'iso' => '2707305',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Porto de Pedras',
            'iso' => '2707404',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Porto Real do Colégio',
            'iso' => '2707503',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Quebrangulo',
            'iso' => '2707602',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Rio Largo',
            'iso' => '2707701',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Roteiro',
            'iso' => '2707800',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Santa Luzia do Norte',
            'iso' => '2707909',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Santana do Ipanema',
            'iso' => '2708006',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Santana do Mundaú',
            'iso' => '2708105',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São Brás',
            'iso' => '2708204',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São José da Laje',
            'iso' => '2708303',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São José da Tapera',
            'iso' => '2708402',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São Luís do Quitunde',
            'iso' => '2708501',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São Miguel dos Campos',
            'iso' => '2708600',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São Miguel dos Milagres',
            'iso' => '2708709',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'São Sebastião',
            'iso' => '2708808',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Satuba',
            'iso' => '2708907',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Senador Rui Palmeira',
            'iso' => '2708956',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Tanque D\'arca',
            'iso' => '2709004',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Taquarana',
            'iso' => '2709103',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Teotônio Vilela',
            'iso' => '2709152',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Traipu',
            'iso' => '2709202',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'União dos Palmares',
            'iso' => '2709301',
        ]);
        City::create([
            'state_id' => '2',
            'title' => 'Viçosa',
            'iso' => '2709400',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Amparo de São Francisco',
            'iso' => '2800100',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Aquidabã',
            'iso' => '2800209',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Aracaju',
            'iso' => '2800308',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Arauá',
            'iso' => '2800407',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Areia Branca',
            'iso' => '2800506',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Barra dos Coqueiros',
            'iso' => '2800605',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Boquim',
            'iso' => '2800670',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Brejo Grande',
            'iso' => '2800704',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Campo do Brito',
            'iso' => '2801009',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Canhoba',
            'iso' => '2801108',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Canindé de São Francisco',
            'iso' => '2801207',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Capela',
            'iso' => '2801306',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Carira',
            'iso' => '2801405',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Carmópolis',
            'iso' => '2801504',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Cedro de São João',
            'iso' => '2801603',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Cristinápolis',
            'iso' => '2801702',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Cumbe',
            'iso' => '2801900',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Divina Pastora',
            'iso' => '2802007',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Estância',
            'iso' => '2802106',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Feira Nova',
            'iso' => '2802205',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Frei Paulo',
            'iso' => '2802304',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Gararu',
            'iso' => '2802403',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'General Maynard',
            'iso' => '2802502',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Gracho Cardoso',
            'iso' => '2802601',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Ilha das Flores',
            'iso' => '2802700',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Indiaroba',
            'iso' => '2802809',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Itabaiana',
            'iso' => '2802908',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Itabaianinha',
            'iso' => '2803005',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Itabi',
            'iso' => '2803104',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Itaporanga D\'ajuda',
            'iso' => '2803203',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Japaratuba',
            'iso' => '2803302',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Japoatã',
            'iso' => '2803401',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Lagarto',
            'iso' => '2803500',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Laranjeiras',
            'iso' => '2803609',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Macambira',
            'iso' => '2803708',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Malhada dos Bois',
            'iso' => '2803807',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Malhador',
            'iso' => '2803906',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Maruim',
            'iso' => '2804003',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Moita Bonita',
            'iso' => '2804102',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Monte Alegre de Sergipe',
            'iso' => '2804201',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Muribeca',
            'iso' => '2804300',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Neópolis',
            'iso' => '2804409',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Nossa Senhora Aparecida',
            'iso' => '2804458',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Nossa Senhora da Glória',
            'iso' => '2804508',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Nossa Senhora das Dores',
            'iso' => '2804607',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Nossa Senhora de Lourdes',
            'iso' => '2804706',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Nossa Senhora do Socorro',
            'iso' => '2804805',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Pacatuba',
            'iso' => '2804904',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Pedra Mole',
            'iso' => '2805000',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Pedrinhas',
            'iso' => '2805109',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Pinhão',
            'iso' => '2805208',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Pirambu',
            'iso' => '2805307',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Poço Redondo',
            'iso' => '2805406',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Poço Verde',
            'iso' => '2805505',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Porto da Folha',
            'iso' => '2805604',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Propriá',
            'iso' => '2805703',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Riachão do Dantas',
            'iso' => '2805802',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Riachuelo',
            'iso' => '2805901',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Ribeirópolis',
            'iso' => '2806008',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Rosário do Catete',
            'iso' => '2806107',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Salgado',
            'iso' => '2806206',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Santa Luzia do Itanhy',
            'iso' => '2806305',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Santana do São Francisco',
            'iso' => '2806404',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Santa Rosa de Lima',
            'iso' => '2806503',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Santo Amaro das Brotas',
            'iso' => '2806602',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'São Cristóvão',
            'iso' => '2806701',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'São Domingos',
            'iso' => '2806800',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'São Francisco',
            'iso' => '2806909',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'São Miguel do Aleixo',
            'iso' => '2807006',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Simão Dias',
            'iso' => '2807105',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Siriri',
            'iso' => '2807204',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Telha',
            'iso' => '2807303',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Tobias Barreto',
            'iso' => '2807402',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Tomar do Geru',
            'iso' => '2807501',
        ]);
        City::create([
            'state_id' => '25',
            'title' => 'Umbaúba',
            'iso' => '2807600',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Abaíra',
            'iso' => '2900108',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Abaré',
            'iso' => '2900207',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Acajutiba',
            'iso' => '2900306',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Adustina',
            'iso' => '2900355',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Água Fria',
            'iso' => '2900405',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Érico Cardoso',
            'iso' => '2900504',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aiquara',
            'iso' => '2900603',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Alagoinhas',
            'iso' => '2900702',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Alcobaça',
            'iso' => '2900801',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Almadina',
            'iso' => '2900900',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Amargosa',
            'iso' => '2901007',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Amélia Rodrigues',
            'iso' => '2901106',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'América Dourada',
            'iso' => '2901155',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Anagé',
            'iso' => '2901205',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Andaraí',
            'iso' => '2901304',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Andorinha',
            'iso' => '2901353',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Angical',
            'iso' => '2901403',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Anguera',
            'iso' => '2901502',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Antas',
            'iso' => '2901601',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Antônio Cardoso',
            'iso' => '2901700',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Antônio Gonçalves',
            'iso' => '2901809',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aporá',
            'iso' => '2901908',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Apuarema',
            'iso' => '2901957',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aracatu',
            'iso' => '2902005',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Araças',
            'iso' => '2902054',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Araci',
            'iso' => '2902104',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aramari',
            'iso' => '2902203',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Arataca',
            'iso' => '2902252',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aratuípe',
            'iso' => '2902302',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Aurelino Leal',
            'iso' => '2902401',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Baianópolis',
            'iso' => '2902500',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Baixa Grande',
            'iso' => '2902609',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Banzaê',
            'iso' => '2902658',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barra',
            'iso' => '2902708',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barra da Estiva',
            'iso' => '2902807',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barra do Choça',
            'iso' => '2902906',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barra do Mendes',
            'iso' => '2903003',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barra do Rocha',
            'iso' => '2903102',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barreiras',
            'iso' => '2903201',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barro Alto',
            'iso' => '2903235',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barrocas',
            'iso' => '2903276',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Barro Preto',
            'iso' => '2903300',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Belmonte',
            'iso' => '2903409',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Belo Campo',
            'iso' => '2903508',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Biritinga',
            'iso' => '2903607',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Boa Nova',
            'iso' => '2903706',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Boa Vista do Tupim',
            'iso' => '2903805',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Bom Jesus da Lapa',
            'iso' => '2903904',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Bom Jesus da Serra',
            'iso' => '2903953',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Boninal',
            'iso' => '2904001',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Bonito',
            'iso' => '2904050',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Boquira',
            'iso' => '2904100',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Botuporã',
            'iso' => '2904209',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Brejões',
            'iso' => '2904308',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Brejolândia',
            'iso' => '2904407',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Brotas de Macaúbas',
            'iso' => '2904506',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Brumado',
            'iso' => '2904605',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Buerarema',
            'iso' => '2904704',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Buritirama',
            'iso' => '2904753',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caatiba',
            'iso' => '2904803',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cabaceiras do Paraguaçu',
            'iso' => '2904852',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cachoeira',
            'iso' => '2904902',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caculé',
            'iso' => '2905008',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caém',
            'iso' => '2905107',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caetanos',
            'iso' => '2905156',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caetité',
            'iso' => '2905206',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cafarnaum',
            'iso' => '2905305',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cairu',
            'iso' => '2905404',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caldeirão Grande',
            'iso' => '2905503',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Camacan',
            'iso' => '2905602',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Camaçari',
            'iso' => '2905701',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Camamu',
            'iso' => '2905800',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Campo Alegre de Lourdes',
            'iso' => '2905909',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Campo Formoso',
            'iso' => '2906006',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Canápolis',
            'iso' => '2906105',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Canarana',
            'iso' => '2906204',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Canavieiras',
            'iso' => '2906303',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Candeal',
            'iso' => '2906402',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Candeias',
            'iso' => '2906501',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Candiba',
            'iso' => '2906600',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cândido Sales',
            'iso' => '2906709',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cansanção',
            'iso' => '2906808',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Canudos',
            'iso' => '2906824',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Capela do Alto Alegre',
            'iso' => '2906857',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Capim Grosso',
            'iso' => '2906873',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caraíbas',
            'iso' => '2906899',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caravelas',
            'iso' => '2906907',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cardeal da Silva',
            'iso' => '2907004',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Carinhanha',
            'iso' => '2907103',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Casa Nova',
            'iso' => '2907202',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Castro Alves',
            'iso' => '2907301',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Catolândia',
            'iso' => '2907400',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Catu',
            'iso' => '2907509',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Caturama',
            'iso' => '2907558',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Central',
            'iso' => '2907608',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Chorrochó',
            'iso' => '2907707',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cícero Dantas',
            'iso' => '2907806',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cipó',
            'iso' => '2907905',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Coaraci',
            'iso' => '2908002',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cocos',
            'iso' => '2908101',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Conceição da Feira',
            'iso' => '2908200',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Conceição do Almeida',
            'iso' => '2908309',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Conceição do Coité',
            'iso' => '2908408',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Conceição do Jacuípe',
            'iso' => '2908507',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Conde',
            'iso' => '2908606',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Condeúba',
            'iso' => '2908705',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Contendas do Sincorá',
            'iso' => '2908804',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Coração de Maria',
            'iso' => '2908903',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cordeiros',
            'iso' => '2909000',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Coribe',
            'iso' => '2909109',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Coronel João Sá',
            'iso' => '2909208',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Correntina',
            'iso' => '2909307',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cotegipe',
            'iso' => '2909406',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cravolândia',
            'iso' => '2909505',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Crisópolis',
            'iso' => '2909604',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cristópolis',
            'iso' => '2909703',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Cruz das Almas',
            'iso' => '2909802',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Curaçá',
            'iso' => '2909901',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Dário Meira',
            'iso' => '2910008',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Dias D\'ávila',
            'iso' => '2910057',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Dom Basílio',
            'iso' => '2910107',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Dom Macedo Costa',
            'iso' => '2910206',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Elísio Medrado',
            'iso' => '2910305',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Encruzilhada',
            'iso' => '2910404',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Entre Rios',
            'iso' => '2910503',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Esplanada',
            'iso' => '2910602',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Euclides da Cunha',
            'iso' => '2910701',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Eunápolis',
            'iso' => '2910727',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Fátima',
            'iso' => '2910750',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Feira da Mata',
            'iso' => '2910776',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Feira de Santana',
            'iso' => '2910800',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Filadélfia',
            'iso' => '2910859',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Firmino Alves',
            'iso' => '2910909',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Floresta Azul',
            'iso' => '2911006',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Formosa do Rio Preto',
            'iso' => '2911105',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Gandu',
            'iso' => '2911204',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Gavião',
            'iso' => '2911253',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Gentio do Ouro',
            'iso' => '2911303',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Glória',
            'iso' => '2911402',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Gongogi',
            'iso' => '2911501',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Governador Mangabeira',
            'iso' => '2911600',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Guajeru',
            'iso' => '2911659',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Guanambi',
            'iso' => '2911709',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Guaratinga',
            'iso' => '2911808',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Heliópolis',
            'iso' => '2911857',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Iaçu',
            'iso' => '2911907',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibiassucê',
            'iso' => '2912004',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibicaraí',
            'iso' => '2912103',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibicoara',
            'iso' => '2912202',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibicuí',
            'iso' => '2912301',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibipeba',
            'iso' => '2912400',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibipitanga',
            'iso' => '2912509',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibiquera',
            'iso' => '2912608',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibirapitanga',
            'iso' => '2912707',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibirapuã',
            'iso' => '2912806',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibirataia',
            'iso' => '2912905',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibitiara',
            'iso' => '2913002',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibititá',
            'iso' => '2913101',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ibotirama',
            'iso' => '2913200',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ichu',
            'iso' => '2913309',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Igaporã',
            'iso' => '2913408',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Igrapiúna',
            'iso' => '2913457',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Iguaí',
            'iso' => '2913507',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ilhéus',
            'iso' => '2913606',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Inhambupe',
            'iso' => '2913705',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ipecaetá',
            'iso' => '2913804',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ipiaú',
            'iso' => '2913903',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ipirá',
            'iso' => '2914000',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ipupiara',
            'iso' => '2914109',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Irajuba',
            'iso' => '2914208',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Iramaia',
            'iso' => '2914307',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Iraquara',
            'iso' => '2914406',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Irará',
            'iso' => '2914505',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Irecê',
            'iso' => '2914604',
        ]);
        City::create([
        'state_id' => '5',
        'title' => 'Itabela',
        'iso' => '2914653',
        ]);
        City::create([
        'state_id' => '5',
        'title' => 'Itaberaba',
        'iso' => '2914703',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itabuna',
            'iso' => '2914802',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itacaré',
            'iso' => '2914901',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itaeté',
            'iso' => '2915007',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itagi',
            'iso' => '2915106',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itagibá',
            'iso' => '2915205',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itagimirim',
            'iso' => '2915304',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itaguaçu da Bahia',
            'iso' => '2915353',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itaju do Colônia',
            'iso' => '2915403',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itajuípe',
            'iso' => '2915502',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itamaraju',
            'iso' => '2915601',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itamari',
            'iso' => '2915700',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itambé',
            'iso' => '2915809',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itanagra',
            'iso' => '2915908',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itanhém',
            'iso' => '2916005',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itaparica',
            'iso' => '2916104',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itapé',
            'iso' => '2916203',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itapebi',
            'iso' => '2916302',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itapetinga',
            'iso' => '2916401',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itapicuru',
            'iso' => '2916500',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itapitanga',
            'iso' => '2916609',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itaquara',
            'iso' => '2916708',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itarantim',
            'iso' => '2916807',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itatim',
            'iso' => '2916856',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itiruçu',
            'iso' => '2916906',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itiúba',
            'iso' => '2917003',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Itororó',
            'iso' => '2917102',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ituaçu',
            'iso' => '2917201',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ituberá',
            'iso' => '2917300',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Iuiú',
            'iso' => '2917334',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jaborandi',
            'iso' => '2917359',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jacaraci',
            'iso' => '2917409',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jacobina',
            'iso' => '2917508',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jaguaquara',
            'iso' => '2917607',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jaguarari',
            'iso' => '2917706',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jaguaripe',
            'iso' => '2917805',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jandaíra',
            'iso' => '2917904',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jequié',
            'iso' => '2918001',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jeremoabo',
            'iso' => '2918100',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jiquiriçá',
            'iso' => '2918209',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jitaúna',
            'iso' => '2918308',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'João Dourado',
            'iso' => '2918357',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Juazeiro',
            'iso' => '2918407',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jucuruçu',
            'iso' => '2918456',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jussara',
            'iso' => '2918506',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jussari',
            'iso' => '2918555',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Jussiape',
            'iso' => '2918605',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lafaiete Coutinho',
            'iso' => '2918704',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lagoa Real',
            'iso' => '2918753',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Laje',
            'iso' => '2918803',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lajedão',
            'iso' => '2918902',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lajedinho',
            'iso' => '2919009',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lajedo do Tabocal',
            'iso' => '2919058',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lamarão',
            'iso' => '2919108',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lapão',
            'iso' => '2919157',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lauro de Freitas',
            'iso' => '2919207',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Lençóis',
            'iso' => '2919306',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Licínio de Almeida',
            'iso' => '2919405',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Livramento de Nossa Senhora',
            'iso' => '2919504',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Luís Eduardo Magalhães',
            'iso' => '2919553',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Macajuba',
            'iso' => '2919603',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Macarani',
            'iso' => '2919702',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Macaúbas',
            'iso' => '2919801',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Macururé',
            'iso' => '2919900',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Madre de Deus',
            'iso' => '2919926',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Maetinga',
            'iso' => '2919959',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Maiquinique',
            'iso' => '2920007',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mairi',
            'iso' => '2920106',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Malhada',
            'iso' => '2920205',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Malhada de Pedras',
            'iso' => '2920304',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Manoel Vitorino',
            'iso' => '2920403',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mansidão',
            'iso' => '2920452',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Maracás',
            'iso' => '2920502',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Maragogipe',
            'iso' => '2920601',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Maraú',
            'iso' => '2920700',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Marcionílio Souza',
            'iso' => '2920809',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mascote',
            'iso' => '2920908',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mata de São João',
            'iso' => '2921005',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Matina',
            'iso' => '2921054',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Medeiros Neto',
            'iso' => '2921104',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Miguel Calmon',
            'iso' => '2921203',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Milagres',
            'iso' => '2921302',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mirangaba',
            'iso' => '2921401',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mirante',
            'iso' => '2921450',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Monte Santo',
            'iso' => '2921500',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Morpará',
            'iso' => '2921609',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Morro do Chapéu',
            'iso' => '2921708',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mortugaba',
            'iso' => '2921807',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mucugê',
            'iso' => '2921906',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mucuri',
            'iso' => '2922003',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mulungu do Morro',
            'iso' => '2922052',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mundo Novo',
            'iso' => '2922102',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Muniz Ferreira',
            'iso' => '2922201',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Muquém de São Francisco',
            'iso' => '2922250',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Muritiba',
            'iso' => '2922300',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Mutuípe',
            'iso' => '2922409',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nazaré',
            'iso' => '2922508',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nilo Peçanha',
            'iso' => '2922607',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nordestina',
            'iso' => '2922656',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Canaã',
            'iso' => '2922706',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Fátima',
            'iso' => '2922730',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Ibiá',
            'iso' => '2922755',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Itarana',
            'iso' => '2922805',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Redenção',
            'iso' => '2922854',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Soure',
            'iso' => '2922904',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Nova Viçosa',
            'iso' => '2923001',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Novo Horizonte',
            'iso' => '2923035',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Novo Triunfo',
            'iso' => '2923050',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Olindina',
            'iso' => '2923100',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Oliveira dos Brejinhos',
            'iso' => '2923209',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ouriçangas',
            'iso' => '2923308',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ourolândia',
            'iso' => '2923357',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Palmas de Monte Alto',
            'iso' => '2923407',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Palmeiras',
            'iso' => '2923506',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Paramirim',
            'iso' => '2923605',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Paratinga',
            'iso' => '2923704',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Paripiranga',
            'iso' => '2923803',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pau Brasil',
            'iso' => '2923902',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Paulo Afonso',
            'iso' => '2924009',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pé de Serra',
            'iso' => '2924058',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pedrão',
            'iso' => '2924108',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pedro Alexandre',
            'iso' => '2924207',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Piatã',
            'iso' => '2924306',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pilão Arcado',
            'iso' => '2924405',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pindaí',
            'iso' => '2924504',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pindobaçu',
            'iso' => '2924603',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pintadas',
            'iso' => '2924652',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Piraí do Norte',
            'iso' => '2924678',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Piripá',
            'iso' => '2924702',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Piritiba',
            'iso' => '2924801',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Planaltino',
            'iso' => '2924900',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Planalto',
            'iso' => '2925006',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Poções',
            'iso' => '2925105',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Pojuca',
            'iso' => '2925204',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ponto Novo',
            'iso' => '2925253',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Porto Seguro',
            'iso' => '2925303',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Potiraguá',
            'iso' => '2925402',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Prado',
            'iso' => '2925501',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Presidente Dutra',
            'iso' => '2925600',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Presidente Jânio Quadros',
            'iso' => '2925709',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Presidente Tancredo Neves',
            'iso' => '2925758',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Queimadas',
            'iso' => '2925808',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Quijingue',
            'iso' => '2925907',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Quixabeira',
            'iso' => '2925931',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rafael Jambeiro',
            'iso' => '2925956',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Remanso',
            'iso' => '2926004',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Retirolândia',
            'iso' => '2926103',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Riachão das Neves',
            'iso' => '2926202',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Riachão do Jacuípe',
            'iso' => '2926301',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Riacho de Santana',
            'iso' => '2926400',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ribeira do Amparo',
            'iso' => '2926509',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ribeira do Pombal',
            'iso' => '2926608',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ribeirão do Largo',
            'iso' => '2926657',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rio de Contas',
            'iso' => '2926707',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rio do Antônio',
            'iso' => '2926806',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rio do Pires',
            'iso' => '2926905',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rio Real',
            'iso' => '2927002',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Rodelas',
            'iso' => '2927101',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ruy Barbosa',
            'iso' => '2927200',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Salinas da Margarida',
            'iso' => '2927309',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Salvador',
            'iso' => '2927408',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Bárbara',
            'iso' => '2927507',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Brígida',
            'iso' => '2927606',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Cruz Cabrália',
            'iso' => '2927705',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Cruz da Vitória',
            'iso' => '2927804',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Inês',
            'iso' => '2927903',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santaluz',
            'iso' => '2928000',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Luzia',
            'iso' => '2928059',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Maria da Vitória',
            'iso' => '2928109',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santana',
            'iso' => '2928208',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santanópolis',
            'iso' => '2928307',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Rita de Cássia',
            'iso' => '2928406',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santa Teresinha',
            'iso' => '2928505',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santo Amaro',
            'iso' => '2928604',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santo Antônio de Jesus',
            'iso' => '2928703',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Santo Estêvão',
            'iso' => '2928802',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Desidério',
            'iso' => '2928901',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Domingos',
            'iso' => '2928950',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Félix',
            'iso' => '2929008',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Félix do Coribe',
            'iso' => '2929057',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Felipe',
            'iso' => '2929107',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Francisco do Conde',
            'iso' => '2929206',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Gabriel',
            'iso' => '2929255',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Gonçalo dos Campos',
            'iso' => '2929305',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São José da Vitória',
            'iso' => '2929354',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São José do Jacuípe',
            'iso' => '2929370',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Miguel das Matas',
            'iso' => '2929404',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'São Sebastião do Passé',
            'iso' => '2929503',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sapeaçu',
            'iso' => '2929602',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sátiro Dias',
            'iso' => '2929701',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Saubara',
            'iso' => '2929750',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Saúde',
            'iso' => '2929800',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Seabra',
            'iso' => '2929909',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sebastião Laranjeiras',
            'iso' => '2930006',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Senhor do Bonfim',
            'iso' => '2930105',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Serra do Ramalho',
            'iso' => '2930154',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sento Sé',
            'iso' => '2930204',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Serra Dourada',
            'iso' => '2930303',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Serra Preta',
            'iso' => '2930402',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Serrinha',
            'iso' => '2930501',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Serrolândia',
            'iso' => '2930600',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Simões Filho',
            'iso' => '2930709',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sítio do Mato',
            'iso' => '2930758',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sítio do Quinto',
            'iso' => '2930766',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Sobradinho',
            'iso' => '2930774',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Souto Soares',
            'iso' => '2930808',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tabocas do Brejo Velho',
            'iso' => '2930907',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tanhaçu',
            'iso' => '2931004',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tanque Novo',
            'iso' => '2931053',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tanquinho',
            'iso' => '2931103',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Taperoá',
            'iso' => '2931202',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tapiramutá',
            'iso' => '2931301',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Teixeira de Freitas',
            'iso' => '2931350',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Teodoro Sampaio',
            'iso' => '2931400',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Teofilândia',
            'iso' => '2931509',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Teolândia',
            'iso' => '2931608',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Terra Nova',
            'iso' => '2931707',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tremedal',
            'iso' => '2931806',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Tucano',
            'iso' => '2931905',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Uauá',
            'iso' => '2932002',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ubaíra',
            'iso' => '2932101',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ubaitaba',
            'iso' => '2932200',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Ubatã',
            'iso' => '2932309',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Uibaí',
            'iso' => '2932408',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Umburanas',
            'iso' => '2932457',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Una',
            'iso' => '2932507',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Urandi',
            'iso' => '2932606',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Uruçuca',
            'iso' => '2932705',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Utinga',
            'iso' => '2932804',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Valença',
            'iso' => '2932903',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Valente',
            'iso' => '2933000',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Várzea da Roça',
            'iso' => '2933059',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Várzea do Poço',
            'iso' => '2933109',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Várzea Nova',
            'iso' => '2933158',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Varzedo',
            'iso' => '2933174',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Vera Cruz',
            'iso' => '2933208',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Vereda',
            'iso' => '2933257',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Vitória da Conquista',
            'iso' => '2933307',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Wagner',
            'iso' => '2933406',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Wanderley',
            'iso' => '2933455',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Wenceslau Guimarães',
            'iso' => '2933505',
        ]);
        City::create([
            'state_id' => '5',
            'title' => 'Xique-Xique',
            'iso' => '2933604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Abadia dos Dourados',
            'iso' => '3100104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Abaeté',
            'iso' => '3100203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Abre Campo',
            'iso' => '3100302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Acaiaca',
            'iso' => '3100401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Açucena',
            'iso' => '3100500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Água Boa',
            'iso' => '3100609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Água Comprida',
            'iso' => '3100708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Aguanil',
            'iso' => '3100807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Águas Formosas',
            'iso' => '3100906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Águas Vermelhas',
            'iso' => '3101003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Aimorés',
            'iso' => '3101102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Aiuruoca',
            'iso' => '3101201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alagoa',
            'iso' => '3101300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Albertina',
            'iso' => '3101409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Além Paraíba',
            'iso' => '3101508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alfenas',
            'iso' => '3101607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alfredo Vasconcelos',
            'iso' => '3101631',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Almenara',
            'iso' => '3101706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alpercata',
            'iso' => '3101805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alpinópolis',
            'iso' => '3101904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alterosa',
            'iso' => '3102001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alto Caparaó',
            'iso' => '3102050',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alto Rio Doce',
            'iso' => '3102100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alvarenga',
            'iso' => '3102209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alvinópolis',
            'iso' => '3102308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alvorada de Minas',
            'iso' => '3102407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Amparo do Serra',
            'iso' => '3102506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Andradas',
            'iso' => '3102605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cachoeira de Pajeú',
            'iso' => '3102704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Andrelândia',
            'iso' => '3102803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Angelândia',
            'iso' => '3102852',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Antônio Carlos',
            'iso' => '3102902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Antônio Dias',
            'iso' => '3103009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Antônio Prado de Minas',
            'iso' => '3103108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araçaí',
            'iso' => '3103207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Aracitaba',
            'iso' => '3103306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araçuaí',
            'iso' => '3103405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araguari',
            'iso' => '3103504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Arantina',
            'iso' => '3103603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araponga',
            'iso' => '3103702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araporã',
            'iso' => '3103751',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Arapuá',
            'iso' => '3103801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araújos',
            'iso' => '3103900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Araxá',
            'iso' => '3104007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Arceburgo',
            'iso' => '3104106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Arcos',
            'iso' => '3104205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Areado',
            'iso' => '3104304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Argirita',
            'iso' => '3104403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Aricanduva',
            'iso' => '3104452',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Arinos',
            'iso' => '3104502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Astolfo Dutra',
            'iso' => '3104601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ataléia',
            'iso' => '3104700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Augusto de Lima',
            'iso' => '3104809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Baependi',
            'iso' => '3104908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Baldim',
            'iso' => '3105004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bambuí',
            'iso' => '3105103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bandeira',
            'iso' => '3105202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bandeira do Sul',
            'iso' => '3105301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Barão de Cocais',
            'iso' => '3105400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Barão de Monte Alto',
            'iso' => '3105509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Barbacena',
            'iso' => '3105608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Barra Longa',
            'iso' => '3105707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Barroso',
            'iso' => '3105905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bela Vista de Minas',
            'iso' => '3106002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Belmiro Braga',
            'iso' => '3106101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Belo Horizonte',
            'iso' => '3106200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Belo Oriente',
            'iso' => '3106309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Belo Vale',
            'iso' => '3106408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Berilo',
            'iso' => '3106507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bertópolis',
            'iso' => '3106606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Berizal',
            'iso' => '3106655',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Betim',
            'iso' => '3106705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bias Fortes',
            'iso' => '3106804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bicas',
            'iso' => '3106903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Biquinhas',
            'iso' => '3107000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Boa Esperança',
            'iso' => '3107109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bocaina de Minas',
            'iso' => '3107208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bocaiúva',
            'iso' => '3107307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Despacho',
            'iso' => '3107406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Jardim de Minas',
            'iso' => '3107505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Jesus da Penha',
            'iso' => '3107604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Jesus do Amparo',
            'iso' => '3107703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Jesus do Galho',
            'iso' => '3107802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Repouso',
            'iso' => '3107901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bom Sucesso',
            'iso' => '3108008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bonfim',
            'iso' => '3108107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bonfinópolis de Minas',
            'iso' => '3108206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bonito de Minas',
            'iso' => '3108255',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Borda da Mata',
            'iso' => '3108305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Botelhos',
            'iso' => '3108404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Botumirim',
            'iso' => '3108503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Brasilândia de Minas',
            'iso' => '3108552',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Brasília de Minas',
            'iso' => '3108602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Brás Pires',
            'iso' => '3108701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Braúnas',
            'iso' => '3108800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Brasópolis',
            'iso' => '3108909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Brumadinho',
            'iso' => '3109006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bueno Brandão',
            'iso' => '3109105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Buenópolis',
            'iso' => '3109204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Bugre',
            'iso' => '3109253',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Buritis',
            'iso' => '3109303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Buritizeiro',
            'iso' => '3109402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cabeceira Grande',
            'iso' => '3109451',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cabo Verde',
            'iso' => '3109501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cachoeira da Prata',
            'iso' => '3109600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cachoeira de Minas',
            'iso' => '3109709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cachoeira Dourada',
            'iso' => '3109808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caetanópolis',
            'iso' => '3109907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caeté',
            'iso' => '3110004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caiana',
            'iso' => '3110103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cajuri',
            'iso' => '3110202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caldas',
            'iso' => '3110301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Camacho',
            'iso' => '3110400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Camanducaia',
            'iso' => '3110509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cambuí',
            'iso' => '3110608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cambuquira',
            'iso' => '3110707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campanário',
            'iso' => '3110806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campanha',
            'iso' => '3110905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campestre',
            'iso' => '3111002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campina Verde',
            'iso' => '3111101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campo Azul',
            'iso' => '3111150',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campo Belo',
            'iso' => '3111200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campo do Meio',
            'iso' => '3111309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campo Florido',
            'iso' => '3111408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campos Altos',
            'iso' => '3111507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Campos Gerais',
            'iso' => '3111606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Canaã',
            'iso' => '3111705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Canápolis',
            'iso' => '3111804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cana Verde',
            'iso' => '3111903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Candeias',
            'iso' => '3112000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cantagalo',
            'iso' => '3112059',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caparaó',
            'iso' => '3112109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capela Nova',
            'iso' => '3112208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capelinha',
            'iso' => '3112307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capetinga',
            'iso' => '3112406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capim Branco',
            'iso' => '3112505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capinópolis',
            'iso' => '3112604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capitão Andrade',
            'iso' => '3112653',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capitão Enéas',
            'iso' => '3112703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Capitólio',
            'iso' => '3112802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caputira',
            'iso' => '3112901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caraí',
            'iso' => '3113008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caranaíba',
            'iso' => '3113107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carandaí',
            'iso' => '3113206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carangola',
            'iso' => '3113305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caratinga',
            'iso' => '3113404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carbonita',
            'iso' => '3113503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Careaçu',
            'iso' => '3113602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carlos Chagas',
            'iso' => '3113701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmésia',
            'iso' => '3113800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo da Cachoeira',
            'iso' => '3113909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo da Mata',
            'iso' => '3114006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo de Minas',
            'iso' => '3114105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo do Cajuru',
            'iso' => '3114204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo do Paranaíba',
            'iso' => '3114303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmo do Rio Claro',
            'iso' => '3114402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carmópolis de Minas',
            'iso' => '3114501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carneirinho',
            'iso' => '3114550',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carrancas',
            'iso' => '3114600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carvalhópolis',
            'iso' => '3114709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Carvalhos',
            'iso' => '3114808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Casa Grande',
            'iso' => '3114907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cascalho Rico',
            'iso' => '3115003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cássia',
            'iso' => '3115102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição da Barra de Minas',
            'iso' => '3115201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cataguases',
            'iso' => '3115300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Catas Altas',
            'iso' => '3115359',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Catas Altas da Noruega',
            'iso' => '3115409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Catuji',
            'iso' => '3115458',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Catuti',
            'iso' => '3115474',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Caxambu',
            'iso' => '3115508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cedro do Abaeté',
            'iso' => '3115607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Central de Minas',
            'iso' => '3115706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Centralina',
            'iso' => '3115805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Chácara',
            'iso' => '3115904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Chalé',
            'iso' => '3116001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Chapada do Norte',
            'iso' => '3116100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Chapada Gaúcha',
            'iso' => '3116159',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Chiador',
            'iso' => '3116209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cipotânea',
            'iso' => '3116308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Claraval',
            'iso' => '3116407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Claro dos Poções',
            'iso' => '3116506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cláudio',
            'iso' => '3116605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coimbra',
            'iso' => '3116704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coluna',
            'iso' => '3116803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Comendador Gomes',
            'iso' => '3116902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Comercinho',
            'iso' => '3117009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição da Aparecida',
            'iso' => '3117108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição das Pedras',
            'iso' => '3117207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição das Alagoas',
            'iso' => '3117306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição de Ipanema',
            'iso' => '3117405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição do Mato Dentro',
            'iso' => '3117504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição do Pará',
            'iso' => '3117603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição do Rio Verde',
            'iso' => '3117702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conceição dos Ouros',
            'iso' => '3117801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cônego Marinho',
            'iso' => '3117836',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Confins',
            'iso' => '3117876',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Congonhal',
            'iso' => '3117900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Congonhas',
            'iso' => '3118007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Congonhas do Norte',
            'iso' => '3118106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conquista',
            'iso' => '3118205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conselheiro Lafaiete',
            'iso' => '3118304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Conselheiro Pena',
            'iso' => '3118403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Consolação',
            'iso' => '3118502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Contagem',
            'iso' => '3118601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coqueiral',
            'iso' => '3118700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coração de Jesus',
            'iso' => '3118809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cordisburgo',
            'iso' => '3118908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cordislândia',
            'iso' => '3119005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Corinto',
            'iso' => '3119104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coroaci',
            'iso' => '3119203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coromandel',
            'iso' => '3119302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coronel Fabriciano',
            'iso' => '3119401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coronel Murta',
            'iso' => '3119500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coronel Pacheco',
            'iso' => '3119609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Coronel Xavier Chaves',
            'iso' => '3119708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Córrego Danta',
            'iso' => '3119807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Córrego do Bom Jesus',
            'iso' => '3119906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Córrego Fundo',
            'iso' => '3119955',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Córrego Novo',
            'iso' => '3120003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Couto de Magalhães de Minas',
            'iso' => '3120102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Crisólita',
            'iso' => '3120151',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cristais',
            'iso' => '3120201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cristália',
            'iso' => '3120300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cristiano Otoni',
            'iso' => '3120409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cristina',
            'iso' => '3120508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Crucilândia',
            'iso' => '3120607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cruzeiro da Fortaleza',
            'iso' => '3120706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cruzília',
            'iso' => '3120805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Cuparaque',
            'iso' => '3120839',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Curral de Dentro',
            'iso' => '3120870',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Curvelo',
            'iso' => '3120904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Datas',
            'iso' => '3121001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Delfim Moreira',
            'iso' => '3121100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Delfinópolis',
            'iso' => '3121209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Delta',
            'iso' => '3121258',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Descoberto',
            'iso' => '3121308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Desterro de Entre Rios',
            'iso' => '3121407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Desterro do Melo',
            'iso' => '3121506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Diamantina',
            'iso' => '3121605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Diogo de Vasconcelos',
            'iso' => '3121704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dionísio',
            'iso' => '3121803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divinésia',
            'iso' => '3121902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divino',
            'iso' => '3122009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divino das Laranjeiras',
            'iso' => '3122108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divinolândia de Minas',
            'iso' => '3122207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divinópolis',
            'iso' => '3122306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divisa Alegre',
            'iso' => '3122355',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divisa Nova',
            'iso' => '3122405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Divisópolis',
            'iso' => '3122454',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dom Bosco',
            'iso' => '3122470',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dom Cavati',
            'iso' => '3122504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dom Joaquim',
            'iso' => '3122603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dom Silvério',
            'iso' => '3122702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dom Viçoso',
            'iso' => '3122801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dona Eusébia',
            'iso' => '3122900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dores de Campos',
            'iso' => '3123007',
        ]);
        City::create([
        'state_id' => '11',
        'title' => 'Dores de Guanhães',
        'iso' => '3123106',
        ]);
        City::create([
        'state_id' => '11',
        'title' => 'Dores do Indaiá',
        'iso' => '3123205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Dores do Turvo',
            'iso' => '3123304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Doresópolis',
            'iso' => '3123403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Douradoquara',
            'iso' => '3123502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Durandé',
            'iso' => '3123528',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Elói Mendes',
            'iso' => '3123601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Engenheiro Caldas',
            'iso' => '3123700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Engenheiro Navarro',
            'iso' => '3123809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Entre Folhas',
            'iso' => '3123858',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Entre Rios de Minas',
            'iso' => '3123908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ervália',
            'iso' => '3124005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Esmeraldas',
            'iso' => '3124104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Espera Feliz',
            'iso' => '3124203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Espinosa',
            'iso' => '3124302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Espírito Santo do Dourado',
            'iso' => '3124401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Estiva',
            'iso' => '3124500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Estrela Dalva',
            'iso' => '3124609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Estrela do Indaiá',
            'iso' => '3124708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Estrela do Sul',
            'iso' => '3124807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Eugenópolis',
            'iso' => '3124906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ewbank da Câmara',
            'iso' => '3125002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Extrema',
            'iso' => '3125101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fama',
            'iso' => '3125200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Faria Lemos',
            'iso' => '3125309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Felício dos Santos',
            'iso' => '3125408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gonçalo do Rio Preto',
            'iso' => '3125507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Felisburgo',
            'iso' => '3125606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Felixlândia',
            'iso' => '3125705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fernandes Tourinho',
            'iso' => '3125804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ferros',
            'iso' => '3125903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fervedouro',
            'iso' => '3125952',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Florestal',
            'iso' => '3126000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Formiga',
            'iso' => '3126109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Formoso',
            'iso' => '3126208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fortaleza de Minas',
            'iso' => '3126307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fortuna de Minas',
            'iso' => '3126406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Francisco Badaró',
            'iso' => '3126505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Francisco Dumont',
            'iso' => '3126604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Francisco Sá',
            'iso' => '3126703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Franciscópolis',
            'iso' => '3126752',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Frei Gaspar',
            'iso' => '3126802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Frei Inocêncio',
            'iso' => '3126901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Frei Lagonegro',
            'iso' => '3126950',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fronteira',
            'iso' => '3127008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fronteira dos Vales',
            'iso' => '3127057',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Fruta de Leite',
            'iso' => '3127073',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Frutal',
            'iso' => '3127107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Funilândia',
            'iso' => '3127206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Galiléia',
            'iso' => '3127305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Gameleiras',
            'iso' => '3127339',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Glaucilândia',
            'iso' => '3127354',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Goiabeira',
            'iso' => '3127370',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Goianá',
            'iso' => '3127388',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Gonçalves',
            'iso' => '3127404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Gonzaga',
            'iso' => '3127503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Gouveia',
            'iso' => '3127602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Governador Valadares',
            'iso' => '3127701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Grão Mogol',
            'iso' => '3127800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Grupiara',
            'iso' => '3127909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guanhães',
            'iso' => '3128006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guapé',
            'iso' => '3128105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guaraciaba',
            'iso' => '3128204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guaraciama',
            'iso' => '3128253',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guaranésia',
            'iso' => '3128303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guarani',
            'iso' => '3128402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guarará',
            'iso' => '3128501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guarda-Mor',
            'iso' => '3128600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guaxupé',
            'iso' => '3128709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guidoval',
            'iso' => '3128808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guimarânia',
            'iso' => '3128907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Guiricema',
            'iso' => '3129004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Gurinhatã',
            'iso' => '3129103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Heliodora',
            'iso' => '3129202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Iapu',
            'iso' => '3129301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibertioga',
            'iso' => '3129400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibiá',
            'iso' => '3129509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibiaí',
            'iso' => '3129608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibiracatu',
            'iso' => '3129657',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibiraci',
            'iso' => '3129707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibirité',
            'iso' => '3129806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibitiúra de Minas',
            'iso' => '3129905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ibituruna',
            'iso' => '3130002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Icaraí de Minas',
            'iso' => '3130051',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Igarapé',
            'iso' => '3130101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Igaratinga',
            'iso' => '3130200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Iguatama',
            'iso' => '3130309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ijaci',
            'iso' => '3130408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ilicínea',
            'iso' => '3130507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Imbé de Minas',
            'iso' => '3130556',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Inconfidentes',
            'iso' => '3130606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Indaiabira',
            'iso' => '3130655',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Indianópolis',
            'iso' => '3130705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ingaí',
            'iso' => '3130804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Inhapim',
            'iso' => '3130903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Inhaúma',
            'iso' => '3131000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Inimutaba',
            'iso' => '3131109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ipaba',
            'iso' => '3131158',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ipanema',
            'iso' => '3131208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ipatinga',
            'iso' => '3131307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ipiaçu',
            'iso' => '3131406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ipuiúna',
            'iso' => '3131505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Iraí de Minas',
            'iso' => '3131604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itabira',
            'iso' => '3131703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itabirinha',
            'iso' => '3131802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itabirito',
            'iso' => '3131901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itacambira',
            'iso' => '3132008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itacarambi',
            'iso' => '3132107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaguara',
            'iso' => '3132206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaipé',
            'iso' => '3132305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itajubá',
            'iso' => '3132404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itamarandiba',
            'iso' => '3132503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itamarati de Minas',
            'iso' => '3132602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itambacuri',
            'iso' => '3132701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itambé do Mato Dentro',
            'iso' => '3132800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itamogi',
            'iso' => '3132909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itamonte',
            'iso' => '3133006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itanhandu',
            'iso' => '3133105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itanhomi',
            'iso' => '3133204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaobim',
            'iso' => '3133303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itapagipe',
            'iso' => '3133402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itapecerica',
            'iso' => '3133501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itapeva',
            'iso' => '3133600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itatiaiuçu',
            'iso' => '3133709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaú de Minas',
            'iso' => '3133758',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaúna',
            'iso' => '3133808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itaverava',
            'iso' => '3133907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itinga',
            'iso' => '3134004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itueta',
            'iso' => '3134103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ituiutaba',
            'iso' => '3134202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itumirim',
            'iso' => '3134301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Iturama',
            'iso' => '3134400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Itutinga',
            'iso' => '3134509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jaboticatubas',
            'iso' => '3134608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jacinto',
            'iso' => '3134707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jacuí',
            'iso' => '3134806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jacutinga',
            'iso' => '3134905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jaguaraçu',
            'iso' => '3135001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jaíba',
            'iso' => '3135050',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jampruca',
            'iso' => '3135076',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Janaúba',
            'iso' => '3135100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Januária',
            'iso' => '3135209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Japaraíba',
            'iso' => '3135308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Japonvar',
            'iso' => '3135357',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jeceaba',
            'iso' => '3135407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jenipapo de Minas',
            'iso' => '3135456',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jequeri',
            'iso' => '3135506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jequitaí',
            'iso' => '3135605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jequitibá',
            'iso' => '3135704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jequitinhonha',
            'iso' => '3135803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jesuânia',
            'iso' => '3135902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Joaíma',
            'iso' => '3136009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Joanésia',
            'iso' => '3136108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'João Monlevade',
            'iso' => '3136207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'João Pinheiro',
            'iso' => '3136306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Joaquim Felício',
            'iso' => '3136405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Jordânia',
            'iso' => '3136504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'José Gonçalves de Minas',
            'iso' => '3136520',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'José Raydan',
            'iso' => '3136553',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Josenópolis',
            'iso' => '3136579',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova União',
            'iso' => '3136603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Juatuba',
            'iso' => '3136652',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Juiz de Fora',
            'iso' => '3136702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Juramento',
            'iso' => '3136801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Juruaia',
            'iso' => '3136900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Juvenília',
            'iso' => '3136959',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ladainha',
            'iso' => '3137007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagamar',
            'iso' => '3137106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa da Prata',
            'iso' => '3137205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa dos Patos',
            'iso' => '3137304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa Dourada',
            'iso' => '3137403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa Formosa',
            'iso' => '3137502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa Grande',
            'iso' => '3137536',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lagoa Santa',
            'iso' => '3137601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lajinha',
            'iso' => '3137700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lambari',
            'iso' => '3137809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lamim',
            'iso' => '3137908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Laranjal',
            'iso' => '3138005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lassance',
            'iso' => '3138104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lavras',
            'iso' => '3138203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Leandro Ferreira',
            'iso' => '3138302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Leme do Prado',
            'iso' => '3138351',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Leopoldina',
            'iso' => '3138401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Liberdade',
            'iso' => '3138500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lima Duarte',
            'iso' => '3138609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Limeira do Oeste',
            'iso' => '3138625',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Lontra',
            'iso' => '3138658',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Luisburgo',
            'iso' => '3138674',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Luislândia',
            'iso' => '3138682',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Luminárias',
            'iso' => '3138708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Luz',
            'iso' => '3138807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Machacalis',
            'iso' => '3138906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Machado',
            'iso' => '3139003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Madre de Deus de Minas',
            'iso' => '3139102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Malacacheta',
            'iso' => '3139201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mamonas',
            'iso' => '3139250',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Manga',
            'iso' => '3139300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Manhuaçu',
            'iso' => '3139409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Manhumirim',
            'iso' => '3139508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mantena',
            'iso' => '3139607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Maravilhas',
            'iso' => '3139706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mar de Espanha',
            'iso' => '3139805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Maria da Fé',
            'iso' => '3139904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mariana',
            'iso' => '3140001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Marilac',
            'iso' => '3140100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mário Campos',
            'iso' => '3140159',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Maripá de Minas',
            'iso' => '3140209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Marliéria',
            'iso' => '3140308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Marmelópolis',
            'iso' => '3140407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Martinho Campos',
            'iso' => '3140506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Martins Soares',
            'iso' => '3140530',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mata Verde',
            'iso' => '3140555',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Materlândia',
            'iso' => '3140605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mateus Leme',
            'iso' => '3140704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Matias Barbosa',
            'iso' => '3140803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Matias Cardoso',
            'iso' => '3140852',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Matipó',
            'iso' => '3140902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mato Verde',
            'iso' => '3141009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Matozinhos',
            'iso' => '3141108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Matutina',
            'iso' => '3141207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Medeiros',
            'iso' => '3141306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Medina',
            'iso' => '3141405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mendes Pimentel',
            'iso' => '3141504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mercês',
            'iso' => '3141603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mesquita',
            'iso' => '3141702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Minas Novas',
            'iso' => '3141801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Minduri',
            'iso' => '3141900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mirabela',
            'iso' => '3142007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Miradouro',
            'iso' => '3142106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Miraí',
            'iso' => '3142205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Miravânia',
            'iso' => '3142254',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Moeda',
            'iso' => '3142304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Moema',
            'iso' => '3142403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monjolos',
            'iso' => '3142502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monsenhor Paulo',
            'iso' => '3142601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Montalvânia',
            'iso' => '3142700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Alegre de Minas',
            'iso' => '3142809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Azul',
            'iso' => '3142908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Belo',
            'iso' => '3143005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Carmelo',
            'iso' => '3143104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Formoso',
            'iso' => '3143153',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Santo de Minas',
            'iso' => '3143203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Montes Claros',
            'iso' => '3143302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Monte Sião',
            'iso' => '3143401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Montezuma',
            'iso' => '3143450',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Morada Nova de Minas',
            'iso' => '3143500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Morro da Garça',
            'iso' => '3143609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Morro do Pilar',
            'iso' => '3143708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Munhoz',
            'iso' => '3143807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Muriaé',
            'iso' => '3143906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mutum',
            'iso' => '3144003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Muzambinho',
            'iso' => '3144102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nacip Raydan',
            'iso' => '3144201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nanuque',
            'iso' => '3144300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Naque',
            'iso' => '3144359',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Natalândia',
            'iso' => '3144375',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Natércia',
            'iso' => '3144409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nazareno',
            'iso' => '3144508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nepomuceno',
            'iso' => '3144607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ninheira',
            'iso' => '3144656',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Belém',
            'iso' => '3144672',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Era',
            'iso' => '3144706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Lima',
            'iso' => '3144805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Módica',
            'iso' => '3144904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Ponte',
            'iso' => '3145000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Porteirinha',
            'iso' => '3145059',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Resende',
            'iso' => '3145109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Nova Serrana',
            'iso' => '3145208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Novo Cruzeiro',
            'iso' => '3145307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Novo Oriente de Minas',
            'iso' => '3145356',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Novorizonte',
            'iso' => '3145372',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Olaria',
            'iso' => '3145406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Olhos-D\'água',
            'iso' => '3145455',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Olímpio Noronha',
            'iso' => '3145505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Oliveira',
            'iso' => '3145604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Oliveira Fortes',
            'iso' => '3145703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Onça de Pitangui',
            'iso' => '3145802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Oratórios',
            'iso' => '3145851',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Orizânia',
            'iso' => '3145877',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ouro Branco',
            'iso' => '3145901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ouro Fino',
            'iso' => '3146008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ouro Preto',
            'iso' => '3146107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ouro Verde de Minas',
            'iso' => '3146206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Padre Carvalho',
            'iso' => '3146255',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Padre Paraíso',
            'iso' => '3146305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paineiras',
            'iso' => '3146404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pains',
            'iso' => '3146503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pai Pedro',
            'iso' => '3146552',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paiva',
            'iso' => '3146602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Palma',
            'iso' => '3146701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Palmópolis',
            'iso' => '3146750',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Papagaios',
            'iso' => '3146909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paracatu',
            'iso' => '3147006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pará de Minas',
            'iso' => '3147105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paraguaçu',
            'iso' => '3147204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paraisópolis',
            'iso' => '3147303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paraopeba',
            'iso' => '3147402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Passabém',
            'iso' => '3147501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Passa Quatro',
            'iso' => '3147600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Passa Tempo',
            'iso' => '3147709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Passa-Vinte',
            'iso' => '3147808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Passos',
            'iso' => '3147907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Patis',
            'iso' => '3147956',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Patos de Minas',
            'iso' => '3148004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Patrocínio',
            'iso' => '3148103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Patrocínio do Muriaé',
            'iso' => '3148202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paula Cândido',
            'iso' => '3148301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Paulistas',
            'iso' => '3148400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pavão',
            'iso' => '3148509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Peçanha',
            'iso' => '3148608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedra Azul',
            'iso' => '3148707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedra Bonita',
            'iso' => '3148756',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedra do Anta',
            'iso' => '3148806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedra do Indaiá',
            'iso' => '3148905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedra Dourada',
            'iso' => '3149002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedralva',
            'iso' => '3149101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedras de Maria da Cruz',
            'iso' => '3149150',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedrinópolis',
            'iso' => '3149200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedro Leopoldo',
            'iso' => '3149309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pedro Teixeira',
            'iso' => '3149408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pequeri',
            'iso' => '3149507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pequi',
            'iso' => '3149606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Perdigão',
            'iso' => '3149705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Perdizes',
            'iso' => '3149804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Perdões',
            'iso' => '3149903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Periquito',
            'iso' => '3149952',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pescador',
            'iso' => '3150000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piau',
            'iso' => '3150109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piedade de Caratinga',
            'iso' => '3150158',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piedade de Ponte Nova',
            'iso' => '3150208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piedade do Rio Grande',
            'iso' => '3150307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piedade dos Gerais',
            'iso' => '3150406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pimenta',
            'iso' => '3150505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pingo-D\'água',
            'iso' => '3150539',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pintópolis',
            'iso' => '3150570',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piracema',
            'iso' => '3150604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pirajuba',
            'iso' => '3150703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piranga',
            'iso' => '3150802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piranguçu',
            'iso' => '3150901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piranguinho',
            'iso' => '3151008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pirapetinga',
            'iso' => '3151107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pirapora',
            'iso' => '3151206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piraúba',
            'iso' => '3151305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pitangui',
            'iso' => '3151404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Piumhi',
            'iso' => '3151503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Planura',
            'iso' => '3151602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Poço Fundo',
            'iso' => '3151701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Poços de Caldas',
            'iso' => '3151800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pocrane',
            'iso' => '3151909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pompéu',
            'iso' => '3152006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ponte Nova',
            'iso' => '3152105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ponto Chique',
            'iso' => '3152131',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ponto dos Volantes',
            'iso' => '3152170',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Porteirinha',
            'iso' => '3152204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Porto Firme',
            'iso' => '3152303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Poté',
            'iso' => '3152402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pouso Alegre',
            'iso' => '3152501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pouso Alto',
            'iso' => '3152600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Prados',
            'iso' => '3152709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Prata',
            'iso' => '3152808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pratápolis',
            'iso' => '3152907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Pratinha',
            'iso' => '3153004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Presidente Bernardes',
            'iso' => '3153103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Presidente Juscelino',
            'iso' => '3153202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Presidente Kubitschek',
            'iso' => '3153301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Presidente Olegário',
            'iso' => '3153400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Alto Jequitibá',
            'iso' => '3153509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Prudente de Morais',
            'iso' => '3153608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Quartel Geral',
            'iso' => '3153707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Queluzito',
            'iso' => '3153806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Raposos',
            'iso' => '3153905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Raul Soares',
            'iso' => '3154002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Recreio',
            'iso' => '3154101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Reduto',
            'iso' => '3154150',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Resende Costa',
            'iso' => '3154200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Resplendor',
            'iso' => '3154309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ressaquinha',
            'iso' => '3154408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Riachinho',
            'iso' => '3154457',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Riacho dos Machados',
            'iso' => '3154507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ribeirão das Neves',
            'iso' => '3154606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ribeirão Vermelho',
            'iso' => '3154705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Acima',
            'iso' => '3154804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Casca',
            'iso' => '3154903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Doce',
            'iso' => '3155009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio do Prado',
            'iso' => '3155108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Espera',
            'iso' => '3155207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Manso',
            'iso' => '3155306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Novo',
            'iso' => '3155405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Paranaíba',
            'iso' => '3155504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Pardo de Minas',
            'iso' => '3155603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Piracicaba',
            'iso' => '3155702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Pomba',
            'iso' => '3155801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Preto',
            'iso' => '3155900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rio Vermelho',
            'iso' => '3156007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ritápolis',
            'iso' => '3156106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rochedo de Minas',
            'iso' => '3156205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rodeiro',
            'iso' => '3156304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Romaria',
            'iso' => '3156403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rosário da Limeira',
            'iso' => '3156452',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rubelita',
            'iso' => '3156502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Rubim',
            'iso' => '3156601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sabará',
            'iso' => '3156700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sabinópolis',
            'iso' => '3156809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sacramento',
            'iso' => '3156908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Salinas',
            'iso' => '3157005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Salto da Divisa',
            'iso' => '3157104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Bárbara',
            'iso' => '3157203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Bárbara do Leste',
            'iso' => '3157252',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Bárbara do Monte Verde',
            'iso' => '3157278',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Bárbara do Tugúrio',
            'iso' => '3157302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Cruz de Minas',
            'iso' => '3157336',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Cruz de Salinas',
            'iso' => '3157377',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Cruz do Escalvado',
            'iso' => '3157401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Efigênia de Minas',
            'iso' => '3157500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Fé de Minas',
            'iso' => '3157609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Helena de Minas',
            'iso' => '3157658',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Juliana',
            'iso' => '3157708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Luzia',
            'iso' => '3157807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Margarida',
            'iso' => '3157906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Maria de Itabira',
            'iso' => '3158003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Maria do Salto',
            'iso' => '3158102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Maria do Suaçuí',
            'iso' => '3158201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana da Vargem',
            'iso' => '3158300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana de Cataguases',
            'iso' => '3158409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana de Pirapama',
            'iso' => '3158508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Deserto',
            'iso' => '3158607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Garambéu',
            'iso' => '3158706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Jacaré',
            'iso' => '3158805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Manhuaçu',
            'iso' => '3158904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Paraíso',
            'iso' => '3158953',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana do Riacho',
            'iso' => '3159001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santana dos Montes',
            'iso' => '3159100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita de Caldas',
            'iso' => '3159209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita de Jacutinga',
            'iso' => '3159308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita de Minas',
            'iso' => '3159357',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita de Ibitipoca',
            'iso' => '3159407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita do Itueto',
            'iso' => '3159506',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rita do Sapucaí',
            'iso' => '3159605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Rosa da Serra',
            'iso' => '3159704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santa Vitória',
            'iso' => '3159803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Amparo',
            'iso' => '3159902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Aventureiro',
            'iso' => '3160009',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Grama',
            'iso' => '3160108',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Itambé',
            'iso' => '3160207',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Jacinto',
            'iso' => '3160306',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Monte',
            'iso' => '3160405',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Retiro',
            'iso' => '3160454',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Antônio do Rio Abaixo',
            'iso' => '3160504',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santo Hipólito',
            'iso' => '3160603',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Santos Dumont',
            'iso' => '3160702',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Bento Abade',
            'iso' => '3160801',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Brás do Suaçuí',
            'iso' => '3160900',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Domingos das Dores',
            'iso' => '3160959',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Domingos do Prata',
            'iso' => '3161007',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Félix de Minas',
            'iso' => '3161056',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Francisco',
            'iso' => '3161106',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Francisco de Paula',
            'iso' => '3161205',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Francisco de Sales',
            'iso' => '3161304',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Francisco do Glória',
            'iso' => '3161403',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Geraldo',
            'iso' => '3161502',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Geraldo da Piedade',
            'iso' => '3161601',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Geraldo do Baixio',
            'iso' => '3161650',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gonçalo do Abaeté',
            'iso' => '3161700',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gonçalo do Pará',
            'iso' => '3161809',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gonçalo do Rio Abaixo',
            'iso' => '3161908',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gonçalo do Sapucaí',
            'iso' => '3162005',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Gotardo',
            'iso' => '3162104',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João Batista do Glória',
            'iso' => '3162203',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João da Lagoa',
            'iso' => '3162252',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João da Mata',
            'iso' => '3162302',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João da Ponte',
            'iso' => '3162401',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João das Missões',
            'iso' => '3162450',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João Del Rei',
            'iso' => '3162500',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João do Manhuaçu',
            'iso' => '3162559',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João do Manteninha',
            'iso' => '3162575',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João do Oriente',
            'iso' => '3162609',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João do Pacuí',
            'iso' => '3162658',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João do Paraíso',
            'iso' => '3162708',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João Evangelista',
            'iso' => '3162807',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São João Nepomuceno',
            'iso' => '3162906',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Joaquim de Bicas',
            'iso' => '3162922',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José da Barra',
            'iso' => '3162948',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José da Lapa',
            'iso' => '3162955',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José da Safira',
            'iso' => '3163003',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José da Varginha',
            'iso' => '3163102',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José do Alegre',
            'iso' => '3163201',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José do Divino',
            'iso' => '3163300',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José do Goiabal',
            'iso' => '3163409',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José do Jacuri',
            'iso' => '3163508',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São José do Mantimento',
            'iso' => '3163607',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Lourenço',
            'iso' => '3163706',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Miguel do Anta',
            'iso' => '3163805',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Pedro da União',
            'iso' => '3163904',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Pedro dos Ferros',
            'iso' => '3164001',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Pedro do Suaçuí',
            'iso' => '3164100',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Romão',
            'iso' => '3164209',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Roque de Minas',
            'iso' => '3164308',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião da Bela Vista',
            'iso' => '3164407',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião da Vargem Alegre',
            'iso' => '3164431',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião do Anta',
            'iso' => '3164472',
        ]);
        City::create([
        'state_id' => '11',
        'title' => 'São Sebastião do Maranhão',
        'iso' => '3164506',
        ]);
        City::create([
        'state_id' => '11',
        'title' => 'São Sebastião do Oeste',
        'iso' => '3164605',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião do Paraíso',
            'iso' => '3164704',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião do Rio Preto',
            'iso' => '3164803',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Sebastião do Rio Verde',
            'iso' => '3164902',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Tiago',
            'iso' => '3165008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Tomás de Aquino',
            'iso' => '3165107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Thomé das Letras',
            'iso' => '3165206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'São Vicente de Minas',
            'iso' => '3165305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sapucaí-Mirim',
            'iso' => '3165404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sardoá',
            'iso' => '3165503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sarzedo',
            'iso' => '3165537',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Setubinha',
            'iso' => '3165552',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sem-Peixe',
            'iso' => '3165560',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senador Amaral',
            'iso' => '3165578',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senador Cortes',
            'iso' => '3165602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senador Firmino',
            'iso' => '3165701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senador José Bento',
            'iso' => '3165800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senador Modestino Gonçalves',
            'iso' => '3165909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senhora de Oliveira',
            'iso' => '3166006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senhora do Porto',
            'iso' => '3166105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Senhora dos Remédios',
            'iso' => '3166204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sericita',
            'iso' => '3166303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Seritinga',
            'iso' => '3166402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serra Azul de Minas',
            'iso' => '3166501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serra da Saudade',
            'iso' => '3166600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serra dos Aimorés',
            'iso' => '3166709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serra do Salitre',
            'iso' => '3166808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serrania',
            'iso' => '3166907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serranópolis de Minas',
            'iso' => '3166956',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serranos',
            'iso' => '3167004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Serro',
            'iso' => '3167103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sete Lagoas',
            'iso' => '3167202',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Silveirânia',
            'iso' => '3167301',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Silvianópolis',
            'iso' => '3167400',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Simão Pereira',
            'iso' => '3167509',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Simonésia',
            'iso' => '3167608',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Sobrália',
            'iso' => '3167707',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Soledade de Minas',
            'iso' => '3167806',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tabuleiro',
            'iso' => '3167905',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Taiobeiras',
            'iso' => '3168002',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Taparuba',
            'iso' => '3168051',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tapira',
            'iso' => '3168101',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tapiraí',
            'iso' => '3168200',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Taquaraçu de Minas',
            'iso' => '3168309',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tarumirim',
            'iso' => '3168408',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Teixeiras',
            'iso' => '3168507',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Teófilo Otoni',
            'iso' => '3168606',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Timóteo',
            'iso' => '3168705',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tiradentes',
            'iso' => '3168804',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tiros',
            'iso' => '3168903',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tocantins',
            'iso' => '3169000',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tocos do Moji',
            'iso' => '3169059',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Toledo',
            'iso' => '3169109',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tombos',
            'iso' => '3169208',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Três Corações',
            'iso' => '3169307',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Três Marias',
            'iso' => '3169356',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Três Pontas',
            'iso' => '3169406',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tumiritinga',
            'iso' => '3169505',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Tupaciguara',
            'iso' => '3169604',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Turmalina',
            'iso' => '3169703',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Turvolândia',
            'iso' => '3169802',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ubá',
            'iso' => '3169901',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ubaí',
            'iso' => '3170008',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Ubaporanga',
            'iso' => '3170057',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Uberaba',
            'iso' => '3170107',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Uberlândia',
            'iso' => '3170206',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Umburatiba',
            'iso' => '3170305',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Unaí',
            'iso' => '3170404',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'União de Minas',
            'iso' => '3170438',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Uruana de Minas',
            'iso' => '3170479',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Urucânia',
            'iso' => '3170503',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Urucuia',
            'iso' => '3170529',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vargem Alegre',
            'iso' => '3170578',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vargem Bonita',
            'iso' => '3170602',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vargem Grande do Rio Pardo',
            'iso' => '3170651',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Varginha',
            'iso' => '3170701',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Varjão de Minas',
            'iso' => '3170750',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Várzea da Palma',
            'iso' => '3170800',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Varzelândia',
            'iso' => '3170909',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vazante',
            'iso' => '3171006',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Verdelândia',
            'iso' => '3171030',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Veredinha',
            'iso' => '3171071',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Veríssimo',
            'iso' => '3171105',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vermelho Novo',
            'iso' => '3171154',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vespasiano',
            'iso' => '3171204',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Viçosa',
            'iso' => '3171303',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Vieiras',
            'iso' => '3171402',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Mathias Lobato',
            'iso' => '3171501',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Virgem da Lapa',
            'iso' => '3171600',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Virgínia',
            'iso' => '3171709',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Virginópolis',
            'iso' => '3171808',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Virgolândia',
            'iso' => '3171907',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Visconde do Rio Branco',
            'iso' => '3172004',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Volta Grande',
            'iso' => '3172103',
        ]);
        City::create([
            'state_id' => '11',
            'title' => 'Wenceslau Braz',
            'iso' => '3172202',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Afonso Cláudio',
            'iso' => '3200102',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Águia Branca',
            'iso' => '3200136',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Água Doce do Norte',
            'iso' => '3200169',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Alegre',
            'iso' => '3200201',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Alfredo Chaves',
            'iso' => '3200300',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Alto Rio Novo',
            'iso' => '3200359',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Anchieta',
            'iso' => '3200409',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Apiacá',
            'iso' => '3200508',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Aracruz',
            'iso' => '3200607',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Atilio Vivacqua',
            'iso' => '3200706',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Baixo Guandu',
            'iso' => '3200805',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Barra de São Francisco',
            'iso' => '3200904',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Boa Esperança',
            'iso' => '3201001',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Bom Jesus do Norte',
            'iso' => '3201100',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Brejetuba',
            'iso' => '3201159',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Cachoeiro de Itapemirim',
            'iso' => '3201209',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Cariacica',
            'iso' => '3201308',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Castelo',
            'iso' => '3201407',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Colatina',
            'iso' => '3201506',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Conceição da Barra',
            'iso' => '3201605',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Conceição do Castelo',
            'iso' => '3201704',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Divino de São Lourenço',
            'iso' => '3201803',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Domingos Martins',
            'iso' => '3201902',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Dores do Rio Preto',
            'iso' => '3202009',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Ecoporanga',
            'iso' => '3202108',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Fundão',
            'iso' => '3202207',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Governador Lindenberg',
            'iso' => '3202256',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Guaçuí',
            'iso' => '3202306',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Guarapari',
            'iso' => '3202405',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Ibatiba',
            'iso' => '3202454',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Ibiraçu',
            'iso' => '3202504',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Ibitirama',
            'iso' => '3202553',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Iconha',
            'iso' => '3202603',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Irupi',
            'iso' => '3202652',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Itaguaçu',
            'iso' => '3202702',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Itapemirim',
            'iso' => '3202801',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Itarana',
            'iso' => '3202900',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Iúna',
            'iso' => '3203007',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Jaguaré',
            'iso' => '3203056',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Jerônimo Monteiro',
            'iso' => '3203106',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'João Neiva',
            'iso' => '3203130',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Laranja da Terra',
            'iso' => '3203163',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Linhares',
            'iso' => '3203205',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Mantenópolis',
            'iso' => '3203304',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Marataízes',
            'iso' => '3203320',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Marechal Floriano',
            'iso' => '3203346',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Marilândia',
            'iso' => '3203353',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Mimoso do Sul',
            'iso' => '3203403',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Montanha',
            'iso' => '3203502',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Mucurici',
            'iso' => '3203601',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Muniz Freire',
            'iso' => '3203700',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Muqui',
            'iso' => '3203809',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Nova Venécia',
            'iso' => '3203908',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Pancas',
            'iso' => '3204005',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Pedro Canário',
            'iso' => '3204054',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Pinheiros',
            'iso' => '3204104',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Piúma',
            'iso' => '3204203',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Ponto Belo',
            'iso' => '3204252',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Presidente Kennedy',
            'iso' => '3204302',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Rio Bananal',
            'iso' => '3204351',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Rio Novo do Sul',
            'iso' => '3204401',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Santa Leopoldina',
            'iso' => '3204500',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Santa Maria de Jetibá',
            'iso' => '3204559',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Santa Teresa',
            'iso' => '3204609',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'São Domingos do Norte',
            'iso' => '3204658',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'São Gabriel da Palha',
            'iso' => '3204708',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'São José do Calçado',
            'iso' => '3204807',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'São Mateus',
            'iso' => '3204906',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'São Roque do Canaã',
            'iso' => '3204955',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Serra',
            'iso' => '3205002',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Sooretama',
            'iso' => '3205010',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Vargem Alta',
            'iso' => '3205036',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Venda Nova do Imigrante',
            'iso' => '3205069',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Viana',
            'iso' => '3205101',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Vila Pavão',
            'iso' => '3205150',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Vila Valério',
            'iso' => '3205176',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Vila Velha',
            'iso' => '3205200',
        ]);
        City::create([
            'state_id' => '8',
            'title' => 'Vitória',
            'iso' => '3205309',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Angra dos Reis',
            'iso' => '3300100',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Aperibé',
            'iso' => '3300159',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Araruama',
            'iso' => '3300209',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Areal',
            'iso' => '3300225',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Armação dos Búzios',
            'iso' => '3300233',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Arraial do Cabo',
            'iso' => '3300258',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Barra do Piraí',
            'iso' => '3300308',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Barra Mansa',
            'iso' => '3300407',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Belford Roxo',
            'iso' => '3300456',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Bom Jardim',
            'iso' => '3300506',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Bom Jesus do Itabapoana',
            'iso' => '3300605',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cabo Frio',
            'iso' => '3300704',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cachoeiras de Macacu',
            'iso' => '3300803',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cambuci',
            'iso' => '3300902',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Carapebus',
            'iso' => '3300936',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Comendador Levy Gasparian',
            'iso' => '3300951',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Campos dos Goytacazes',
            'iso' => '3301009',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cantagalo',
            'iso' => '3301108',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cardoso Moreira',
            'iso' => '3301157',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Carmo',
            'iso' => '3301207',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Casimiro de Abreu',
            'iso' => '3301306',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Conceição de Macabu',
            'iso' => '3301405',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Cordeiro',
            'iso' => '3301504',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Duas Barras',
            'iso' => '3301603',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Duque de Caxias',
            'iso' => '3301702',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Engenheiro Paulo de Frontin',
            'iso' => '3301801',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Guapimirim',
            'iso' => '3301850',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Iguaba Grande',
            'iso' => '3301876',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Itaboraí',
            'iso' => '3301900',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Itaguaí',
            'iso' => '3302007',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Italva',
            'iso' => '3302056',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Itaocara',
            'iso' => '3302106',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Itaperuna',
            'iso' => '3302205',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Itatiaia',
            'iso' => '3302254',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Japeri',
            'iso' => '3302270',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Laje do Muriaé',
            'iso' => '3302304',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Macaé',
            'iso' => '3302403',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Macuco',
            'iso' => '3302452',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Magé',
            'iso' => '3302502',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Mangaratiba',
            'iso' => '3302601',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Maricá',
            'iso' => '3302700',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Mendes',
            'iso' => '3302809',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Mesquita',
            'iso' => '3302858',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Miguel Pereira',
            'iso' => '3302908',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Miracema',
            'iso' => '3303005',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Natividade',
            'iso' => '3303104',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Nilópolis',
            'iso' => '3303203',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Niterói',
            'iso' => '3303302',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Nova Friburgo',
            'iso' => '3303401',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Nova Iguaçu',
            'iso' => '3303500',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Paracambi',
            'iso' => '3303609',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Paraíba do Sul',
            'iso' => '3303708',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Paraty',
            'iso' => '3303807',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Paty do Alferes',
            'iso' => '3303856',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Petrópolis',
            'iso' => '3303906',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Pinheiral',
            'iso' => '3303955',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Piraí',
            'iso' => '3304003',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Porciúncula',
            'iso' => '3304102',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Porto Real',
            'iso' => '3304110',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Quatis',
            'iso' => '3304128',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Queimados',
            'iso' => '3304144',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Quissamã',
            'iso' => '3304151',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Resende',
            'iso' => '3304201',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Rio Bonito',
            'iso' => '3304300',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Rio Claro',
            'iso' => '3304409',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Rio das Flores',
            'iso' => '3304508',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Rio das Ostras',
            'iso' => '3304524',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Rio de Janeiro',
            'iso' => '3304557',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Santa Maria Madalena',
            'iso' => '3304607',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Santo Antônio de Pádua',
            'iso' => '3304706',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São Francisco de Itabapoana',
            'iso' => '3304755',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São Fidélis',
            'iso' => '3304805',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São Gonçalo',
            'iso' => '3304904',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São João da Barra',
            'iso' => '3305000',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São João de Meriti',
            'iso' => '3305109',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São José de Ubá',
            'iso' => '3305133',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São José do Vale do Rio Preto',
            'iso' => '3305158',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São Pedro da Aldeia',
            'iso' => '3305208',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'São Sebastião do Alto',
            'iso' => '3305307',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Sapucaia',
            'iso' => '3305406',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Saquarema',
            'iso' => '3305505',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Seropédica',
            'iso' => '3305554',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Silva Jardim',
            'iso' => '3305604',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Sumidouro',
            'iso' => '3305703',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Tanguá',
            'iso' => '3305752',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Teresópolis',
            'iso' => '3305802',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Trajano de Morais',
            'iso' => '3305901',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Três Rios',
            'iso' => '3306008',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Valença',
            'iso' => '3306107',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Varre-Sai',
            'iso' => '3306156',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Vassouras',
            'iso' => '3306206',
        ]);
        City::create([
            'state_id' => '19',
            'title' => 'Volta Redonda',
            'iso' => '3306305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Adamantina',
            'iso' => '3500105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Adolfo',
            'iso' => '3500204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Aguaí',
            'iso' => '3500303',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Águas da Prata',
            'iso' => '3500402',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Águas de Lindóia',
            'iso' => '3500501',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Águas de Santa Bárbara',
            'iso' => '3500550',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Águas de São Pedro',
            'iso' => '3500600',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Agudos',
            'iso' => '3500709',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Alambari',
            'iso' => '3500758',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Alfredo Marcondes',
            'iso' => '3500808',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Altair',
            'iso' => '3500907',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Altinópolis',
            'iso' => '3501004',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Alto Alegre',
            'iso' => '3501103',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Alumínio',
            'iso' => '3501152',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Álvares Florence',
            'iso' => '3501202',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Álvares Machado',
            'iso' => '3501301',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Álvaro de Carvalho',
            'iso' => '3501400',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Alvinlândia',
            'iso' => '3501509',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Americana',
            'iso' => '3501608',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Américo Brasiliense',
            'iso' => '3501707',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Américo de Campos',
            'iso' => '3501806',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Amparo',
            'iso' => '3501905',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Analândia',
            'iso' => '3502002',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Andradina',
            'iso' => '3502101',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Angatuba',
            'iso' => '3502200',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Anhembi',
            'iso' => '3502309',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Anhumas',
            'iso' => '3502408',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Aparecida',
            'iso' => '3502507',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Aparecida D\'oeste',
            'iso' => '3502606',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Apiaí',
            'iso' => '3502705',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Araçariguama',
            'iso' => '3502754',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Araçatuba',
            'iso' => '3502804',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Araçoiaba da Serra',
            'iso' => '3502903',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Aramina',
            'iso' => '3503000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Arandu',
            'iso' => '3503109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Arapeí',
            'iso' => '3503158',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Araraquara',
            'iso' => '3503208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Araras',
            'iso' => '3503307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Arco-Íris',
            'iso' => '3503356',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Arealva',
            'iso' => '3503406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Areias',
            'iso' => '3503505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Areiópolis',
            'iso' => '3503604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ariranha',
            'iso' => '3503703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Artur Nogueira',
            'iso' => '3503802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Arujá',
            'iso' => '3503901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Aspásia',
            'iso' => '3503950',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Assis',
            'iso' => '3504008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Atibaia',
            'iso' => '3504107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Auriflama',
            'iso' => '3504206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Avaí',
            'iso' => '3504305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Avanhandava',
            'iso' => '3504404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Avaré',
            'iso' => '3504503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bady Bassitt',
            'iso' => '3504602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Balbinos',
            'iso' => '3504701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bálsamo',
            'iso' => '3504800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bananal',
            'iso' => '3504909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barão de Antonina',
            'iso' => '3505005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barbosa',
            'iso' => '3505104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bariri',
            'iso' => '3505203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barra Bonita',
            'iso' => '3505302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barra do Chapéu',
            'iso' => '3505351',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barra do Turvo',
            'iso' => '3505401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barretos',
            'iso' => '3505500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barrinha',
            'iso' => '3505609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Barueri',
            'iso' => '3505708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bastos',
            'iso' => '3505807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Batatais',
            'iso' => '3505906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bauru',
            'iso' => '3506003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bebedouro',
            'iso' => '3506102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bento de Abreu',
            'iso' => '3506201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bernardino de Campos',
            'iso' => '3506300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bertioga',
            'iso' => '3506359',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bilac',
            'iso' => '3506409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Birigui',
            'iso' => '3506508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Biritiba-Mirim',
            'iso' => '3506607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Boa Esperança do Sul',
            'iso' => '3506706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bocaina',
            'iso' => '3506805',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bofete',
            'iso' => '3506904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Boituva',
            'iso' => '3507001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bom Jesus dos Perdões',
            'iso' => '3507100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bom Sucesso de Itararé',
            'iso' => '3507159',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Borá',
            'iso' => '3507209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Boracéia',
            'iso' => '3507308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Borborema',
            'iso' => '3507407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Borebi',
            'iso' => '3507456',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Botucatu',
            'iso' => '3507506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Bragança Paulista',
            'iso' => '3507605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Braúna',
            'iso' => '3507704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Brejo Alegre',
            'iso' => '3507753',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Brodowski',
            'iso' => '3507803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Brotas',
            'iso' => '3507902',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Buri',
            'iso' => '3508009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Buritama',
            'iso' => '3508108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Buritizal',
            'iso' => '3508207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cabrália Paulista',
            'iso' => '3508306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cabreúva',
            'iso' => '3508405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caçapava',
            'iso' => '3508504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cachoeira Paulista',
            'iso' => '3508603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caconde',
            'iso' => '3508702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cafelândia',
            'iso' => '3508801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caiabu',
            'iso' => '3508900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caieiras',
            'iso' => '3509007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caiuá',
            'iso' => '3509106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cajamar',
            'iso' => '3509205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cajati',
            'iso' => '3509254',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cajobi',
            'iso' => '3509304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cajuru',
            'iso' => '3509403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Campina do Monte Alegre',
            'iso' => '3509452',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Campinas',
            'iso' => '3509502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Campo Limpo Paulista',
            'iso' => '3509601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Campos do Jordão',
            'iso' => '3509700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Campos Novos Paulista',
            'iso' => '3509809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cananéia',
            'iso' => '3509908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Canas',
            'iso' => '3509957',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cândido Mota',
            'iso' => '3510005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cândido Rodrigues',
            'iso' => '3510104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Canitar',
            'iso' => '3510153',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Capão Bonito',
            'iso' => '3510203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Capela do Alto',
            'iso' => '3510302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Capivari',
            'iso' => '3510401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Caraguatatuba',
            'iso' => '3510500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Carapicuíba',
            'iso' => '3510609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cardoso',
            'iso' => '3510708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Casa Branca',
            'iso' => '3510807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cássia dos Coqueiros',
            'iso' => '3510906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Castilho',
            'iso' => '3511003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Catanduva',
            'iso' => '3511102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Catiguá',
            'iso' => '3511201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cedral',
            'iso' => '3511300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cerqueira César',
            'iso' => '3511409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cerquilho',
            'iso' => '3511508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cesário Lange',
            'iso' => '3511607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Charqueada',
            'iso' => '3511706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Clementina',
            'iso' => '3511904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Colina',
            'iso' => '3512001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Colômbia',
            'iso' => '3512100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Conchal',
            'iso' => '3512209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Conchas',
            'iso' => '3512308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cordeirópolis',
            'iso' => '3512407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Coroados',
            'iso' => '3512506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Coronel Macedo',
            'iso' => '3512605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Corumbataí',
            'iso' => '3512704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cosmópolis',
            'iso' => '3512803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cosmorama',
            'iso' => '3512902',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cotia',
            'iso' => '3513009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cravinhos',
            'iso' => '3513108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cristais Paulista',
            'iso' => '3513207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cruzália',
            'iso' => '3513306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cruzeiro',
            'iso' => '3513405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cubatão',
            'iso' => '3513504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Cunha',
            'iso' => '3513603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Descalvado',
            'iso' => '3513702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Diadema',
            'iso' => '3513801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dirce Reis',
            'iso' => '3513850',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Divinolândia',
            'iso' => '3513900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dobrada',
            'iso' => '3514007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dois Córregos',
            'iso' => '3514106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dolcinópolis',
            'iso' => '3514205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dourado',
            'iso' => '3514304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dracena',
            'iso' => '3514403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Duartina',
            'iso' => '3514502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Dumont',
            'iso' => '3514601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Echaporã',
            'iso' => '3514700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Eldorado',
            'iso' => '3514809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Elias Fausto',
            'iso' => '3514908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Elisiário',
            'iso' => '3514924',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Embaúba',
            'iso' => '3514957',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Embu',
            'iso' => '3515004',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Embu-Guaçu',
            'iso' => '3515103',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Emilianópolis',
            'iso' => '3515129',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Engenheiro Coelho',
            'iso' => '3515152',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Espírito Santo do Pinhal',
            'iso' => '3515186',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Espírito Santo do Turvo',
            'iso' => '3515194',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Estrela D\'oeste',
            'iso' => '3515202',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Estrela do Norte',
            'iso' => '3515301',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Euclides da Cunha Paulista',
            'iso' => '3515350',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Fartura',
            'iso' => '3515400',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Fernandópolis',
            'iso' => '3515509',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Fernando Prestes',
            'iso' => '3515608',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Fernão',
            'iso' => '3515657',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ferraz de Vasconcelos',
            'iso' => '3515707',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Flora Rica',
            'iso' => '3515806',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Floreal',
            'iso' => '3515905',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Flórida Paulista',
            'iso' => '3516002',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Florínia',
            'iso' => '3516101',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Franca',
            'iso' => '3516200',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Francisco Morato',
            'iso' => '3516309',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Franco da Rocha',
            'iso' => '3516408',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Gabriel Monteiro',
            'iso' => '3516507',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Gália',
            'iso' => '3516606',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Garça',
            'iso' => '3516705',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Gastão Vidigal',
            'iso' => '3516804',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Gavião Peixoto',
            'iso' => '3516853',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'General Salgado',
            'iso' => '3516903',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Getulina',
            'iso' => '3517000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Glicério',
            'iso' => '3517109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaiçara',
            'iso' => '3517208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaimbê',
            'iso' => '3517307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaíra',
            'iso' => '3517406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guapiaçu',
            'iso' => '3517505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guapiara',
            'iso' => '3517604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guará',
            'iso' => '3517703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaraçaí',
            'iso' => '3517802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaraci',
            'iso' => '3517901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guarani D\'oeste',
            'iso' => '3518008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guarantã',
            'iso' => '3518107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guararapes',
            'iso' => '3518206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guararema',
            'iso' => '3518305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guaratinguetá',
            'iso' => '3518404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guareí',
            'iso' => '3518503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guariba',
            'iso' => '3518602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guarujá',
            'iso' => '3518701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guarulhos',
            'iso' => '3518800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guatapará',
            'iso' => '3518859',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Guzolândia',
            'iso' => '3518909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Herculândia',
            'iso' => '3519006',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Holambra',
            'iso' => '3519055',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Hortolândia',
            'iso' => '3519071',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iacanga',
            'iso' => '3519105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iacri',
            'iso' => '3519204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iaras',
            'iso' => '3519253',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ibaté',
            'iso' => '3519303',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ibirá',
            'iso' => '3519402',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ibirarema',
            'iso' => '3519501',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ibitinga',
            'iso' => '3519600',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ibiúna',
            'iso' => '3519709',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Icém',
            'iso' => '3519808',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iepê',
            'iso' => '3519907',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Igaraçu do Tietê',
            'iso' => '3520004',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Igarapava',
            'iso' => '3520103',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Igaratá',
            'iso' => '3520202',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iguape',
            'iso' => '3520301',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ilhabela',
            'iso' => '3520400',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ilha Comprida',
            'iso' => '3520426',
        ]);
        City::create([
        'state_id' => '26',
        'title' => 'Ilha Solteira',
        'iso' => '3520442',
        ]);
        City::create([
        'state_id' => '26',
        'title' => 'Indaiatuba',
        'iso' => '3520509',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Indiana',
            'iso' => '3520608',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Indiaporã',
            'iso' => '3520707',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Inúbia Paulista',
            'iso' => '3520806',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ipaussu',
            'iso' => '3520905',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iperó',
            'iso' => '3521002',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ipeúna',
            'iso' => '3521101',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ipiguá',
            'iso' => '3521150',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iporanga',
            'iso' => '3521200',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ipuã',
            'iso' => '3521309',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Iracemápolis',
            'iso' => '3521408',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Irapuã',
            'iso' => '3521507',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Irapuru',
            'iso' => '3521606',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaberá',
            'iso' => '3521705',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaí',
            'iso' => '3521804',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itajobi',
            'iso' => '3521903',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaju',
            'iso' => '3522000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itanhaém',
            'iso' => '3522109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaóca',
            'iso' => '3522158',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapecerica da Serra',
            'iso' => '3522208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapetininga',
            'iso' => '3522307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapeva',
            'iso' => '3522406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapevi',
            'iso' => '3522505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapira',
            'iso' => '3522604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapirapuã Paulista',
            'iso' => '3522653',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itápolis',
            'iso' => '3522703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaporanga',
            'iso' => '3522802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapuí',
            'iso' => '3522901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itapura',
            'iso' => '3523008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itaquaquecetuba',
            'iso' => '3523107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itararé',
            'iso' => '3523206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itariri',
            'iso' => '3523305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itatiba',
            'iso' => '3523404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itatinga',
            'iso' => '3523503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itirapina',
            'iso' => '3523602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itirapuã',
            'iso' => '3523701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itobi',
            'iso' => '3523800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itu',
            'iso' => '3523909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Itupeva',
            'iso' => '3524006',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ituverava',
            'iso' => '3524105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jaborandi',
            'iso' => '3524204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jaboticabal',
            'iso' => '3524303',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jacareí',
            'iso' => '3524402',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jaci',
            'iso' => '3524501',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jacupiranga',
            'iso' => '3524600',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jaguariúna',
            'iso' => '3524709',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jales',
            'iso' => '3524808',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jambeiro',
            'iso' => '3524907',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jandira',
            'iso' => '3525003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jardinópolis',
            'iso' => '3525102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jarinu',
            'iso' => '3525201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jaú',
            'iso' => '3525300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jeriquara',
            'iso' => '3525409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Joanópolis',
            'iso' => '3525508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'João Ramalho',
            'iso' => '3525607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'José Bonifácio',
            'iso' => '3525706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Júlio Mesquita',
            'iso' => '3525805',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jumirim',
            'iso' => '3525854',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Jundiaí',
            'iso' => '3525904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Junqueirópolis',
            'iso' => '3526001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Juquiá',
            'iso' => '3526100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Juquitiba',
            'iso' => '3526209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lagoinha',
            'iso' => '3526308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Laranjal Paulista',
            'iso' => '3526407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lavínia',
            'iso' => '3526506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lavrinhas',
            'iso' => '3526605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Leme',
            'iso' => '3526704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lençóis Paulista',
            'iso' => '3526803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Limeira',
            'iso' => '3526902',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lindóia',
            'iso' => '3527009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lins',
            'iso' => '3527108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lorena',
            'iso' => '3527207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lourdes',
            'iso' => '3527256',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Louveira',
            'iso' => '3527306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lucélia',
            'iso' => '3527405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lucianópolis',
            'iso' => '3527504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Luís Antônio',
            'iso' => '3527603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Luiziânia',
            'iso' => '3527702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lupércio',
            'iso' => '3527801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Lutécia',
            'iso' => '3527900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Macatuba',
            'iso' => '3528007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Macaubal',
            'iso' => '3528106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Macedônia',
            'iso' => '3528205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Magda',
            'iso' => '3528304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mairinque',
            'iso' => '3528403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mairiporã',
            'iso' => '3528502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Manduri',
            'iso' => '3528601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Marabá Paulista',
            'iso' => '3528700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Maracaí',
            'iso' => '3528809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Marapoama',
            'iso' => '3528858',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mariápolis',
            'iso' => '3528908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Marília',
            'iso' => '3529005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Marinópolis',
            'iso' => '3529104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Martinópolis',
            'iso' => '3529203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Matão',
            'iso' => '3529302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mauá',
            'iso' => '3529401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mendonça',
            'iso' => '3529500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Meridiano',
            'iso' => '3529609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mesópolis',
            'iso' => '3529658',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Miguelópolis',
            'iso' => '3529708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mineiros do Tietê',
            'iso' => '3529807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Miracatu',
            'iso' => '3529906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mira Estrela',
            'iso' => '3530003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mirandópolis',
            'iso' => '3530102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mirante do Paranapanema',
            'iso' => '3530201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mirassol',
            'iso' => '3530300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mirassolândia',
            'iso' => '3530409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mococa',
            'iso' => '3530508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mogi das Cruzes',
            'iso' => '3530607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mogi Guaçu',
            'iso' => '3530706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mogi Mirim',
            'iso' => '3530805',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mombuca',
            'iso' => '3530904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monções',
            'iso' => '3531001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Mongaguá',
            'iso' => '3531100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Alegre do Sul',
            'iso' => '3531209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Alto',
            'iso' => '3531308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Aprazível',
            'iso' => '3531407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Azul Paulista',
            'iso' => '3531506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Castelo',
            'iso' => '3531605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monteiro Lobato',
            'iso' => '3531704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Monte Mor',
            'iso' => '3531803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Morro Agudo',
            'iso' => '3531902',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Morungaba',
            'iso' => '3532009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Motuca',
            'iso' => '3532058',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Murutinga do Sul',
            'iso' => '3532108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nantes',
            'iso' => '3532157',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Narandiba',
            'iso' => '3532207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Natividade da Serra',
            'iso' => '3532306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nazaré Paulista',
            'iso' => '3532405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Neves Paulista',
            'iso' => '3532504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nhandeara',
            'iso' => '3532603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nipoã',
            'iso' => '3532702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Aliança',
            'iso' => '3532801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Campina',
            'iso' => '3532827',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Canaã Paulista',
            'iso' => '3532843',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Castilho',
            'iso' => '3532868',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Europa',
            'iso' => '3532900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Granada',
            'iso' => '3533007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Guataporanga',
            'iso' => '3533106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Independência',
            'iso' => '3533205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Novais',
            'iso' => '3533254',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Luzitânia',
            'iso' => '3533304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nova Odessa',
            'iso' => '3533403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Novo Horizonte',
            'iso' => '3533502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Nuporanga',
            'iso' => '3533601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ocauçu',
            'iso' => '3533700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Óleo',
            'iso' => '3533809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Olímpia',
            'iso' => '3533908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Onda Verde',
            'iso' => '3534005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Oriente',
            'iso' => '3534104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Orindiúva',
            'iso' => '3534203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Orlândia',
            'iso' => '3534302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Osasco',
            'iso' => '3534401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Oscar Bressane',
            'iso' => '3534500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Osvaldo Cruz',
            'iso' => '3534609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ourinhos',
            'iso' => '3534708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ouroeste',
            'iso' => '3534757',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ouro Verde',
            'iso' => '3534807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pacaembu',
            'iso' => '3534906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Palestina',
            'iso' => '3535002',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Palmares Paulista',
            'iso' => '3535101',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Palmeira D\'oeste',
            'iso' => '3535200',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Palmital',
            'iso' => '3535309',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Panorama',
            'iso' => '3535408',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paraguaçu Paulista',
            'iso' => '3535507',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paraibuna',
            'iso' => '3535606',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paraíso',
            'iso' => '3535705',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paranapanema',
            'iso' => '3535804',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paranapuã',
            'iso' => '3535903',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Parapuã',
            'iso' => '3536000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pardinho',
            'iso' => '3536109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pariquera-Açu',
            'iso' => '3536208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Parisi',
            'iso' => '3536257',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Patrocínio Paulista',
            'iso' => '3536307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paulicéia',
            'iso' => '3536406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paulínia',
            'iso' => '3536505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paulistânia',
            'iso' => '3536570',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Paulo de Faria',
            'iso' => '3536604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pederneiras',
            'iso' => '3536703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedra Bela',
            'iso' => '3536802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedranópolis',
            'iso' => '3536901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedregulho',
            'iso' => '3537008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedreira',
            'iso' => '3537107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedrinhas Paulista',
            'iso' => '3537156',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pedro de Toledo',
            'iso' => '3537206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Penápolis',
            'iso' => '3537305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pereira Barreto',
            'iso' => '3537404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pereiras',
            'iso' => '3537503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Peruíbe',
            'iso' => '3537602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piacatu',
            'iso' => '3537701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piedade',
            'iso' => '3537800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pilar do Sul',
            'iso' => '3537909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pindamonhangaba',
            'iso' => '3538006',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pindorama',
            'iso' => '3538105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pinhalzinho',
            'iso' => '3538204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piquerobi',
            'iso' => '3538303',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piquete',
            'iso' => '3538501',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piracaia',
            'iso' => '3538600',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piracicaba',
            'iso' => '3538709',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piraju',
            'iso' => '3538808',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pirajuí',
            'iso' => '3538907',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pirangi',
            'iso' => '3539004',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pirapora do Bom Jesus',
            'iso' => '3539103',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pirapozinho',
            'iso' => '3539202',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pirassununga',
            'iso' => '3539301',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Piratininga',
            'iso' => '3539400',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pitangueiras',
            'iso' => '3539509',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Planalto',
            'iso' => '3539608',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Platina',
            'iso' => '3539707',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Poá',
            'iso' => '3539806',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Poloni',
            'iso' => '3539905',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pompéia',
            'iso' => '3540002',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pongaí',
            'iso' => '3540101',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pontal',
            'iso' => '3540200',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pontalinda',
            'iso' => '3540259',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pontes Gestal',
            'iso' => '3540309',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Populina',
            'iso' => '3540408',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Porangaba',
            'iso' => '3540507',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Porto Feliz',
            'iso' => '3540606',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Porto Ferreira',
            'iso' => '3540705',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Potim',
            'iso' => '3540754',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Potirendaba',
            'iso' => '3540804',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pracinha',
            'iso' => '3540853',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pradópolis',
            'iso' => '3540903',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Praia Grande',
            'iso' => '3541000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Pratânia',
            'iso' => '3541059',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Presidente Alves',
            'iso' => '3541109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Presidente Bernardes',
            'iso' => '3541208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Presidente Epitácio',
            'iso' => '3541307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Presidente Prudente',
            'iso' => '3541406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Presidente Venceslau',
            'iso' => '3541505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Promissão',
            'iso' => '3541604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Quadra',
            'iso' => '3541653',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Quatá',
            'iso' => '3541703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Queiroz',
            'iso' => '3541802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Queluz',
            'iso' => '3541901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Quintana',
            'iso' => '3542008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rafard',
            'iso' => '3542107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rancharia',
            'iso' => '3542206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Redenção da Serra',
            'iso' => '3542305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Regente Feijó',
            'iso' => '3542404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Reginópolis',
            'iso' => '3542503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Registro',
            'iso' => '3542602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Restinga',
            'iso' => '3542701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeira',
            'iso' => '3542800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Bonito',
            'iso' => '3542909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Branco',
            'iso' => '3543006',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Corrente',
            'iso' => '3543105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão do Sul',
            'iso' => '3543204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão dos Índios',
            'iso' => '3543238',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Grande',
            'iso' => '3543253',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Pires',
            'iso' => '3543303',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ribeirão Preto',
            'iso' => '3543402',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Riversul',
            'iso' => '3543501',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rifaina',
            'iso' => '3543600',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rincão',
            'iso' => '3543709',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rinópolis',
            'iso' => '3543808',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rio Claro',
            'iso' => '3543907',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rio das Pedras',
            'iso' => '3544004',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rio Grande da Serra',
            'iso' => '3544103',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Riolândia',
            'iso' => '3544202',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rosana',
            'iso' => '3544251',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Roseira',
            'iso' => '3544301',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rubiácea',
            'iso' => '3544400',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Rubinéia',
            'iso' => '3544509',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sabino',
            'iso' => '3544608',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sagres',
            'iso' => '3544707',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sales',
            'iso' => '3544806',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sales Oliveira',
            'iso' => '3544905',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Salesópolis',
            'iso' => '3545001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Salmourão',
            'iso' => '3545100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Saltinho',
            'iso' => '3545159',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Salto',
            'iso' => '3545209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Salto de Pirapora',
            'iso' => '3545308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Salto Grande',
            'iso' => '3545407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sandovalina',
            'iso' => '3545506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Adélia',
            'iso' => '3545605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Albertina',
            'iso' => '3545704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Bárbara D\'oeste',
            'iso' => '3545803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Branca',
            'iso' => '3546009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Clara D\'oeste',
            'iso' => '3546108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Cruz da Conceição',
            'iso' => '3546207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Cruz da Esperança',
            'iso' => '3546256',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Cruz das Palmeiras',
            'iso' => '3546306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Cruz do Rio Pardo',
            'iso' => '3546405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Ernestina',
            'iso' => '3546504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Fé do Sul',
            'iso' => '3546603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Gertrudes',
            'iso' => '3546702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Isabel',
            'iso' => '3546801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Lúcia',
            'iso' => '3546900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Maria da Serra',
            'iso' => '3547007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Mercedes',
            'iso' => '3547106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santana da Ponte Pensa',
            'iso' => '3547205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santana de Parnaíba',
            'iso' => '3547304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Rita D\'oeste',
            'iso' => '3547403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Rita do Passa Quatro',
            'iso' => '3547502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Rosa de Viterbo',
            'iso' => '3547601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santa Salete',
            'iso' => '3547650',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Anastácio',
            'iso' => '3547700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo André',
            'iso' => '3547809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Antônio da Alegria',
            'iso' => '3547908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Antônio de Posse',
            'iso' => '3548005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Antônio do Aracanguá',
            'iso' => '3548054',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Antônio do Jardim',
            'iso' => '3548104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Antônio do Pinhal',
            'iso' => '3548203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santo Expedito',
            'iso' => '3548302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santópolis do Aguapeí',
            'iso' => '3548401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Santos',
            'iso' => '3548500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Bento do Sapucaí',
            'iso' => '3548609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Bernardo do Campo',
            'iso' => '3548708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Caetano do Sul',
            'iso' => '3548807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Carlos',
            'iso' => '3548906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Francisco',
            'iso' => '3549003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São João da Boa Vista',
            'iso' => '3549102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São João das Duas Pontes',
            'iso' => '3549201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São João de Iracema',
            'iso' => '3549250',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São João do Pau D\'alho',
            'iso' => '3549300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Joaquim da Barra',
            'iso' => '3549409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São José da Bela Vista',
            'iso' => '3549508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São José do Barreiro',
            'iso' => '3549607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São José do Rio Pardo',
            'iso' => '3549706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São José do Rio Preto',
            'iso' => '3549805',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São José dos Campos',
            'iso' => '3549904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Lourenço da Serra',
            'iso' => '3549953',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Luís do Paraitinga',
            'iso' => '3550001',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Manuel',
            'iso' => '3550100',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Miguel Arcanjo',
            'iso' => '3550209',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Paulo',
            'iso' => '3550308',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Pedro',
            'iso' => '3550407',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Pedro do Turvo',
            'iso' => '3550506',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Roque',
            'iso' => '3550605',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Sebastião',
            'iso' => '3550704',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Sebastião da Grama',
            'iso' => '3550803',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Simão',
            'iso' => '3550902',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'São Vicente',
            'iso' => '3551009',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sarapuí',
            'iso' => '3551108',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sarutaiá',
            'iso' => '3551207',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sebastianópolis do Sul',
            'iso' => '3551306',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Serra Azul',
            'iso' => '3551405',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Serrana',
            'iso' => '3551504',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Serra Negra',
            'iso' => '3551603',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sertãozinho',
            'iso' => '3551702',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sete Barras',
            'iso' => '3551801',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Severínia',
            'iso' => '3551900',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Silveiras',
            'iso' => '3552007',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Socorro',
            'iso' => '3552106',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sorocaba',
            'iso' => '3552205',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sud Mennucci',
            'iso' => '3552304',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Sumaré',
            'iso' => '3552403',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Suzano',
            'iso' => '3552502',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Suzanápolis',
            'iso' => '3552551',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tabapuã',
            'iso' => '3552601',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tabatinga',
            'iso' => '3552700',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taboão da Serra',
            'iso' => '3552809',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taciba',
            'iso' => '3552908',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taguaí',
            'iso' => '3553005',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taiaçu',
            'iso' => '3553104',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taiúva',
            'iso' => '3553203',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tambaú',
            'iso' => '3553302',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tanabi',
            'iso' => '3553401',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tapiraí',
            'iso' => '3553500',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tapiratiba',
            'iso' => '3553609',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taquaral',
            'iso' => '3553658',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taquaritinga',
            'iso' => '3553708',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taquarituba',
            'iso' => '3553807',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taquarivaí',
            'iso' => '3553856',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tarabai',
            'iso' => '3553906',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tarumã',
            'iso' => '3553955',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tatuí',
            'iso' => '3554003',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Taubaté',
            'iso' => '3554102',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tejupá',
            'iso' => '3554201',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Teodoro Sampaio',
            'iso' => '3554300',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Terra Roxa',
            'iso' => '3554409',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tietê',
            'iso' => '3554508',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Timburi',
            'iso' => '3554607',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Torre de Pedra',
            'iso' => '3554656',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Torrinha',
            'iso' => '3554706',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Trabiju',
            'iso' => '3554755',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tremembé',
            'iso' => '3554805',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Três Fronteiras',
            'iso' => '3554904',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tuiuti',
            'iso' => '3554953',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tupã',
            'iso' => '3555000',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Tupi Paulista',
            'iso' => '3555109',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Turiúba',
            'iso' => '3555208',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Turmalina',
            'iso' => '3555307',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ubarana',
            'iso' => '3555356',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ubatuba',
            'iso' => '3555406',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Ubirajara',
            'iso' => '3555505',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Uchoa',
            'iso' => '3555604',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'União Paulista',
            'iso' => '3555703',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Urânia',
            'iso' => '3555802',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Uru',
            'iso' => '3555901',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Urupês',
            'iso' => '3556008',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Valentim Gentil',
            'iso' => '3556107',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Valinhos',
            'iso' => '3556206',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Valparaíso',
            'iso' => '3556305',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vargem',
            'iso' => '3556354',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vargem Grande do Sul',
            'iso' => '3556404',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vargem Grande Paulista',
            'iso' => '3556453',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Várzea Paulista',
            'iso' => '3556503',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vera Cruz',
            'iso' => '3556602',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vinhedo',
            'iso' => '3556701',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Viradouro',
            'iso' => '3556800',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vista Alegre do Alto',
            'iso' => '3556909',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Vitória Brasil',
            'iso' => '3556958',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Votorantim',
            'iso' => '3557006',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Votuporanga',
            'iso' => '3557105',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Zacarias',
            'iso' => '3557154',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Chavantes',
            'iso' => '3557204',
        ]);
        City::create([
            'state_id' => '26',
            'title' => 'Estiva Gerbi',
            'iso' => '3557303',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Abatiá',
            'iso' => '4100103',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Adrianópolis',
            'iso' => '4100202',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Agudos do Sul',
            'iso' => '4100301',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Almirante Tamandaré',
            'iso' => '4100400',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Altamira do Paraná',
            'iso' => '4100459',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Altônia',
            'iso' => '4100509',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Alto Paraná',
            'iso' => '4100608',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Alto Piquiri',
            'iso' => '4100707',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Alvorada do Sul',
            'iso' => '4100806',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Amaporã',
            'iso' => '4100905',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ampére',
            'iso' => '4101002',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Anahy',
            'iso' => '4101051',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Andirá',
            'iso' => '4101101',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ângulo',
            'iso' => '4101150',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Antonina',
            'iso' => '4101200',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Antônio Olinto',
            'iso' => '4101309',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Apucarana',
            'iso' => '4101408',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Arapongas',
            'iso' => '4101507',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Arapoti',
            'iso' => '4101606',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Arapuã',
            'iso' => '4101655',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Araruna',
            'iso' => '4101705',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Araucária',
            'iso' => '4101804',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ariranha do Ivaí',
            'iso' => '4101853',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Assaí',
            'iso' => '4101903',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Assis Chateaubriand',
            'iso' => '4102000',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Astorga',
            'iso' => '4102109',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Atalaia',
            'iso' => '4102208',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Balsa Nova',
            'iso' => '4102307',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bandeirantes',
            'iso' => '4102406',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Barbosa Ferraz',
            'iso' => '4102505',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Barracão',
            'iso' => '4102604',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Barra do Jacaré',
            'iso' => '4102703',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bela Vista da Caroba',
            'iso' => '4102752',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bela Vista do Paraíso',
            'iso' => '4102802',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bituruna',
            'iso' => '4102901',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Boa Esperança',
            'iso' => '4103008',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Boa Esperança do Iguaçu',
            'iso' => '4103024',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Boa Ventura de São Roque',
            'iso' => '4103040',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Boa Vista da Aparecida',
            'iso' => '4103057',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bocaiúva do Sul',
            'iso' => '4103107',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bom Jesus do Sul',
            'iso' => '4103156',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bom Sucesso',
            'iso' => '4103206',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Bom Sucesso do Sul',
            'iso' => '4103222',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Borrazópolis',
            'iso' => '4103305',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Braganey',
            'iso' => '4103354',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Brasilândia do Sul',
            'iso' => '4103370',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cafeara',
            'iso' => '4103404',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cafelândia',
            'iso' => '4103453',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cafezal do Sul',
            'iso' => '4103479',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Califórnia',
            'iso' => '4103503',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cambará',
            'iso' => '4103602',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cambé',
            'iso' => '4103701',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cambira',
            'iso' => '4103800',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campina da Lagoa',
            'iso' => '4103909',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campina do Simão',
            'iso' => '4103958',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campina Grande do Sul',
            'iso' => '4104006',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campo Bonito',
            'iso' => '4104055',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campo do Tenente',
            'iso' => '4104105',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campo Largo',
            'iso' => '4104204',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campo Magro',
            'iso' => '4104253',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Campo Mourão',
            'iso' => '4104303',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cândido de Abreu',
            'iso' => '4104402',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Candói',
            'iso' => '4104428',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cantagalo',
            'iso' => '4104451',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Capanema',
            'iso' => '4104501',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Capitão Leônidas Marques',
            'iso' => '4104600',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Carambeí',
            'iso' => '4104659',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Carlópolis',
            'iso' => '4104709',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cascavel',
            'iso' => '4104808',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Castro',
            'iso' => '4104907',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Catanduvas',
            'iso' => '4105003',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Centenário do Sul',
            'iso' => '4105102',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cerro Azul',
            'iso' => '4105201',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Céu Azul',
            'iso' => '4105300',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Chopinzinho',
            'iso' => '4105409',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cianorte',
            'iso' => '4105508',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cidade Gaúcha',
            'iso' => '4105607',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Clevelândia',
            'iso' => '4105706',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Colombo',
            'iso' => '4105805',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Colorado',
            'iso' => '4105904',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Congonhinhas',
            'iso' => '4106001',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Conselheiro Mairinck',
            'iso' => '4106100',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Contenda',
            'iso' => '4106209',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Corbélia',
            'iso' => '4106308',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cornélio Procópio',
            'iso' => '4106407',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Coronel Domingos Soares',
            'iso' => '4106456',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Coronel Vivida',
            'iso' => '4106506',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Corumbataí do Sul',
            'iso' => '4106555',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cruzeiro do Iguaçu',
            'iso' => '4106571',
        ]);
        City::create([
        'state_id' => '18',
        'title' => 'Cruzeiro do Oeste',
        'iso' => '4106605',
        ]);
        City::create([
        'state_id' => '18',
        'title' => 'Cruzeiro do Sul',
        'iso' => '4106704',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cruz Machado',
            'iso' => '4106803',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Cruzmaltina',
            'iso' => '4106852',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Curitiba',
            'iso' => '4106902',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Curiúva',
            'iso' => '4107009',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Diamante do Norte',
            'iso' => '4107108',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Diamante do Sul',
            'iso' => '4107124',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Diamante D\'oeste',
            'iso' => '4107157',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Dois Vizinhos',
            'iso' => '4107207',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Douradina',
            'iso' => '4107256',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Doutor Camargo',
            'iso' => '4107306',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Enéas Marques',
            'iso' => '4107405',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Engenheiro Beltrão',
            'iso' => '4107504',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Esperança Nova',
            'iso' => '4107520',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Entre Rios do Oeste',
            'iso' => '4107538',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Espigão Alto do Iguaçu',
            'iso' => '4107546',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Farol',
            'iso' => '4107553',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Faxinal',
            'iso' => '4107603',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Fazenda Rio Grande',
            'iso' => '4107652',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Fênix',
            'iso' => '4107702',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Fernandes Pinheiro',
            'iso' => '4107736',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Figueira',
            'iso' => '4107751',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Floraí',
            'iso' => '4107801',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Flor da Serra do Sul',
            'iso' => '4107850',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Floresta',
            'iso' => '4107900',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Florestópolis',
            'iso' => '4108007',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Flórida',
            'iso' => '4108106',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Formosa do Oeste',
            'iso' => '4108205',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Foz do Iguaçu',
            'iso' => '4108304',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Francisco Alves',
            'iso' => '4108320',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Francisco Beltrão',
            'iso' => '4108403',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Foz do Jordão',
            'iso' => '4108452',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'General Carneiro',
            'iso' => '4108502',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Godoy Moreira',
            'iso' => '4108551',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Goioerê',
            'iso' => '4108601',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Goioxim',
            'iso' => '4108650',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Grandes Rios',
            'iso' => '4108700',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaíra',
            'iso' => '4108809',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guairaçá',
            'iso' => '4108908',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guamiranga',
            'iso' => '4108957',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guapirama',
            'iso' => '4109005',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaporema',
            'iso' => '4109104',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaraci',
            'iso' => '4109203',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaraniaçu',
            'iso' => '4109302',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guarapuava',
            'iso' => '4109401',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaraqueçaba',
            'iso' => '4109500',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Guaratuba',
            'iso' => '4109609',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Honório Serpa',
            'iso' => '4109658',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ibaiti',
            'iso' => '4109708',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ibema',
            'iso' => '4109757',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ibiporã',
            'iso' => '4109807',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Icaraíma',
            'iso' => '4109906',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Iguaraçu',
            'iso' => '4110003',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Iguatu',
            'iso' => '4110052',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Imbaú',
            'iso' => '4110078',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Imbituva',
            'iso' => '4110102',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Inácio Martins',
            'iso' => '4110201',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Inajá',
            'iso' => '4110300',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Indianópolis',
            'iso' => '4110409',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ipiranga',
            'iso' => '4110508',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Iporã',
            'iso' => '4110607',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Iracema do Oeste',
            'iso' => '4110656',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Irati',
            'iso' => '4110706',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Iretama',
            'iso' => '4110805',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itaguajé',
            'iso' => '4110904',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itaipulândia',
            'iso' => '4110953',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itambaracá',
            'iso' => '4111001',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itambé',
            'iso' => '4111100',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itapejara D\'oeste',
            'iso' => '4111209',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itaperuçu',
            'iso' => '4111258',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Itaúna do Sul',
            'iso' => '4111308',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ivaí',
            'iso' => '4111407',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ivaiporã',
            'iso' => '4111506',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ivaté',
            'iso' => '4111555',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ivatuba',
            'iso' => '4111605',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jaboti',
            'iso' => '4111704',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jacarezinho',
            'iso' => '4111803',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jaguapitã',
            'iso' => '4111902',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jaguariaíva',
            'iso' => '4112009',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jandaia do Sul',
            'iso' => '4112108',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Janiópolis',
            'iso' => '4112207',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Japira',
            'iso' => '4112306',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Japurá',
            'iso' => '4112405',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jardim Alegre',
            'iso' => '4112504',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jardim Olinda',
            'iso' => '4112603',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jataizinho',
            'iso' => '4112702',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jesuítas',
            'iso' => '4112751',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Joaquim Távora',
            'iso' => '4112801',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jundiaí do Sul',
            'iso' => '4112900',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Juranda',
            'iso' => '4112959',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Jussara',
            'iso' => '4113007',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Kaloré',
            'iso' => '4113106',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lapa',
            'iso' => '4113205',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Laranjal',
            'iso' => '4113254',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Laranjeiras do Sul',
            'iso' => '4113304',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Leópolis',
            'iso' => '4113403',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lidianópolis',
            'iso' => '4113429',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lindoeste',
            'iso' => '4113452',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Loanda',
            'iso' => '4113502',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lobato',
            'iso' => '4113601',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Londrina',
            'iso' => '4113700',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Luiziana',
            'iso' => '4113734',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lunardelli',
            'iso' => '4113759',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Lupionópolis',
            'iso' => '4113809',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mallet',
            'iso' => '4113908',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mamborê',
            'iso' => '4114005',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mandaguaçu',
            'iso' => '4114104',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mandaguari',
            'iso' => '4114203',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mandirituba',
            'iso' => '4114302',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Manfrinópolis',
            'iso' => '4114351',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mangueirinha',
            'iso' => '4114401',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Manoel Ribas',
            'iso' => '4114500',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marechal Cândido Rondon',
            'iso' => '4114609',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Maria Helena',
            'iso' => '4114708',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marialva',
            'iso' => '4114807',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marilândia do Sul',
            'iso' => '4114906',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marilena',
            'iso' => '4115002',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mariluz',
            'iso' => '4115101',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Maringá',
            'iso' => '4115200',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mariópolis',
            'iso' => '4115309',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Maripá',
            'iso' => '4115358',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marmeleiro',
            'iso' => '4115408',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marquinho',
            'iso' => '4115457',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Marumbi',
            'iso' => '4115507',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Matelândia',
            'iso' => '4115606',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Matinhos',
            'iso' => '4115705',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mato Rico',
            'iso' => '4115739',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mauá da Serra',
            'iso' => '4115754',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Medianeira',
            'iso' => '4115804',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mercedes',
            'iso' => '4115853',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Mirador',
            'iso' => '4115903',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Miraselva',
            'iso' => '4116000',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Missal',
            'iso' => '4116059',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Moreira Sales',
            'iso' => '4116109',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Morretes',
            'iso' => '4116208',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Munhoz de Melo',
            'iso' => '4116307',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nossa Senhora das Graças',
            'iso' => '4116406',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Aliança do Ivaí',
            'iso' => '4116505',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova América da Colina',
            'iso' => '4116604',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Aurora',
            'iso' => '4116703',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Cantu',
            'iso' => '4116802',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Esperança',
            'iso' => '4116901',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Esperança do Sudoeste',
            'iso' => '4116950',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Fátima',
            'iso' => '4117008',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Laranjeiras',
            'iso' => '4117057',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Londrina',
            'iso' => '4117107',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Olímpia',
            'iso' => '4117206',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Santa Bárbara',
            'iso' => '4117214',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Santa Rosa',
            'iso' => '4117222',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Prata do Iguaçu',
            'iso' => '4117255',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Nova Tebas',
            'iso' => '4117271',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Novo Itacolomi',
            'iso' => '4117297',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ortigueira',
            'iso' => '4117305',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ourizona',
            'iso' => '4117404',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ouro Verde do Oeste',
            'iso' => '4117453',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paiçandu',
            'iso' => '4117503',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Palmas',
            'iso' => '4117602',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Palmeira',
            'iso' => '4117701',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Palmital',
            'iso' => '4117800',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Palotina',
            'iso' => '4117909',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paraíso do Norte',
            'iso' => '4118006',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paranacity',
            'iso' => '4118105',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paranaguá',
            'iso' => '4118204',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paranapoema',
            'iso' => '4118303',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paranavaí',
            'iso' => '4118402',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pato Bragado',
            'iso' => '4118451',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pato Branco',
            'iso' => '4118501',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paula Freitas',
            'iso' => '4118600',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Paulo Frontin',
            'iso' => '4118709',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Peabiru',
            'iso' => '4118808',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Perobal',
            'iso' => '4118857',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pérola',
            'iso' => '4118907',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pérola D\'oeste',
            'iso' => '4119004',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Piên',
            'iso' => '4119103',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pinhais',
            'iso' => '4119152',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pinhalão',
            'iso' => '4119202',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pinhal de São Bento',
            'iso' => '4119251',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pinhão',
            'iso' => '4119301',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Piraí do Sul',
            'iso' => '4119400',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Piraquara',
            'iso' => '4119509',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pitanga',
            'iso' => '4119608',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pitangueiras',
            'iso' => '4119657',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Planaltina do Paraná',
            'iso' => '4119707',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Planalto',
            'iso' => '4119806',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ponta Grossa',
            'iso' => '4119905',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pontal do Paraná',
            'iso' => '4119954',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Porecatu',
            'iso' => '4120002',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Porto Amazonas',
            'iso' => '4120101',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Porto Barreiro',
            'iso' => '4120150',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Porto Rico',
            'iso' => '4120200',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Porto Vitória',
            'iso' => '4120309',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Prado Ferreira',
            'iso' => '4120333',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Pranchita',
            'iso' => '4120358',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Presidente Castelo Branco',
            'iso' => '4120408',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Primeiro de Maio',
            'iso' => '4120507',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Prudentópolis',
            'iso' => '4120606',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quarto Centenário',
            'iso' => '4120655',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quatiguá',
            'iso' => '4120705',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quatro Barras',
            'iso' => '4120804',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quatro Pontes',
            'iso' => '4120853',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quedas do Iguaçu',
            'iso' => '4120903',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Querência do Norte',
            'iso' => '4121000',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quinta do Sol',
            'iso' => '4121109',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Quitandinha',
            'iso' => '4121208',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ramilândia',
            'iso' => '4121257',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rancho Alegre',
            'iso' => '4121307',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rancho Alegre D\'oeste',
            'iso' => '4121356',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Realeza',
            'iso' => '4121406',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rebouças',
            'iso' => '4121505',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Renascença',
            'iso' => '4121604',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Reserva',
            'iso' => '4121703',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Reserva do Iguaçu',
            'iso' => '4121752',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ribeirão Claro',
            'iso' => '4121802',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ribeirão do Pinhal',
            'iso' => '4121901',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Azul',
            'iso' => '4122008',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Bom',
            'iso' => '4122107',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Bonito do Iguaçu',
            'iso' => '4122156',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Branco do Ivaí',
            'iso' => '4122172',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Branco do Sul',
            'iso' => '4122206',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rio Negro',
            'iso' => '4122305',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rolândia',
            'iso' => '4122404',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Roncador',
            'iso' => '4122503',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rondon',
            'iso' => '4122602',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Rosário do Ivaí',
            'iso' => '4122651',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sabáudia',
            'iso' => '4122701',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Salgado Filho',
            'iso' => '4122800',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Salto do Itararé',
            'iso' => '4122909',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Salto do Lontra',
            'iso' => '4123006',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Amélia',
            'iso' => '4123105',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Cecília do Pavão',
            'iso' => '4123204',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Cruz de Monte Castelo',
            'iso' => '4123303',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Fé',
            'iso' => '4123402',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Helena',
            'iso' => '4123501',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Inês',
            'iso' => '4123600',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Isabel do Ivaí',
            'iso' => '4123709',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Izabel do Oeste',
            'iso' => '4123808',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Lúcia',
            'iso' => '4123824',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Maria do Oeste',
            'iso' => '4123857',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Mariana',
            'iso' => '4123907',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Mônica',
            'iso' => '4123956',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santana do Itararé',
            'iso' => '4124004',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Tereza do Oeste',
            'iso' => '4124020',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santa Terezinha de Itaipu',
            'iso' => '4124053',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santo Antônio da Platina',
            'iso' => '4124103',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santo Antônio do Caiuá',
            'iso' => '4124202',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santo Antônio do Paraíso',
            'iso' => '4124301',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santo Antônio do Sudoeste',
            'iso' => '4124400',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Santo Inácio',
            'iso' => '4124509',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Carlos do Ivaí',
            'iso' => '4124608',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Jerônimo da Serra',
            'iso' => '4124707',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São João',
            'iso' => '4124806',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São João do Caiuá',
            'iso' => '4124905',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São João do Ivaí',
            'iso' => '4125001',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São João do Triunfo',
            'iso' => '4125100',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Jorge D\'oeste',
            'iso' => '4125209',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Jorge do Ivaí',
            'iso' => '4125308',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Jorge do Patrocínio',
            'iso' => '4125357',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São José da Boa Vista',
            'iso' => '4125407',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São José das Palmeiras',
            'iso' => '4125456',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São José dos Pinhais',
            'iso' => '4125506',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Manoel do Paraná',
            'iso' => '4125555',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Mateus do Sul',
            'iso' => '4125605',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Miguel do Iguaçu',
            'iso' => '4125704',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Pedro do Iguaçu',
            'iso' => '4125753',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Pedro do Ivaí',
            'iso' => '4125803',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Pedro do Paraná',
            'iso' => '4125902',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Sebastião da Amoreira',
            'iso' => '4126009',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'São Tomé',
            'iso' => '4126108',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sapopema',
            'iso' => '4126207',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sarandi',
            'iso' => '4126256',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Saudade do Iguaçu',
            'iso' => '4126272',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sengés',
            'iso' => '4126306',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Serranópolis do Iguaçu',
            'iso' => '4126355',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sertaneja',
            'iso' => '4126405',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sertanópolis',
            'iso' => '4126504',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Siqueira Campos',
            'iso' => '4126603',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Sulina',
            'iso' => '4126652',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tamarana',
            'iso' => '4126678',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tamboara',
            'iso' => '4126702',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tapejara',
            'iso' => '4126801',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tapira',
            'iso' => '4126900',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Teixeira Soares',
            'iso' => '4127007',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Telêmaco Borba',
            'iso' => '4127106',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Terra Boa',
            'iso' => '4127205',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Terra Rica',
            'iso' => '4127304',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Terra Roxa',
            'iso' => '4127403',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tibagi',
            'iso' => '4127502',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tijucas do Sul',
            'iso' => '4127601',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Toledo',
            'iso' => '4127700',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tomazina',
            'iso' => '4127809',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Três Barras do Paraná',
            'iso' => '4127858',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tunas do Paraná',
            'iso' => '4127882',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tuneiras do Oeste',
            'iso' => '4127908',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Tupãssi',
            'iso' => '4127957',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Turvo',
            'iso' => '4127965',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ubiratã',
            'iso' => '4128005',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Umuarama',
            'iso' => '4128104',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'União da Vitória',
            'iso' => '4128203',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Uniflor',
            'iso' => '4128302',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Uraí',
            'iso' => '4128401',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Wenceslau Braz',
            'iso' => '4128500',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Ventania',
            'iso' => '4128534',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Vera Cruz do Oeste',
            'iso' => '4128559',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Verê',
            'iso' => '4128609',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Alto Paraíso',
            'iso' => '4128625',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Doutor Ulysses',
            'iso' => '4128633',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Virmond',
            'iso' => '4128658',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Vitorino',
            'iso' => '4128708',
        ]);
        City::create([
            'state_id' => '18',
            'title' => 'Xambrê',
            'iso' => '4128807',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Abdon Batista',
            'iso' => '4200051',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Abelardo Luz',
            'iso' => '4200101',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Agrolândia',
            'iso' => '4200200',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Agronômica',
            'iso' => '4200309',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Água Doce',
            'iso' => '4200408',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Águas de Chapecó',
            'iso' => '4200507',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Águas Frias',
            'iso' => '4200556',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Águas Mornas',
            'iso' => '4200606',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Alfredo Wagner',
            'iso' => '4200705',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Alto Bela Vista',
            'iso' => '4200754',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Anchieta',
            'iso' => '4200804',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Angelina',
            'iso' => '4200903',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Anita Garibaldi',
            'iso' => '4201000',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Anitápolis',
            'iso' => '4201109',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Antônio Carlos',
            'iso' => '4201208',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Apiúna',
            'iso' => '4201257',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Arabutã',
            'iso' => '4201273',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Araquari',
            'iso' => '4201307',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Araranguá',
            'iso' => '4201406',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Armazém',
            'iso' => '4201505',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Arroio Trinta',
            'iso' => '4201604',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Arvoredo',
            'iso' => '4201653',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ascurra',
            'iso' => '4201703',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Atalanta',
            'iso' => '4201802',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Aurora',
            'iso' => '4201901',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Arroio do Silva',
            'iso' => '4201950',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Camboriú',
            'iso' => '4202008',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Barra do Sul',
            'iso' => '4202057',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Gaivota',
            'iso' => '4202073',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bandeirante',
            'iso' => '4202081',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Barra Bonita',
            'iso' => '4202099',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Barra Velha',
            'iso' => '4202107',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bela Vista do Toldo',
            'iso' => '4202131',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Belmonte',
            'iso' => '4202156',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Benedito Novo',
            'iso' => '4202206',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Biguaçu',
            'iso' => '4202305',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Blumenau',
            'iso' => '4202404',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bocaina do Sul',
            'iso' => '4202438',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bombinhas',
            'iso' => '4202453',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bom Jardim da Serra',
            'iso' => '4202503',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bom Jesus',
            'iso' => '4202537',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bom Jesus do Oeste',
            'iso' => '4202578',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Bom Retiro',
            'iso' => '4202602',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Botuverá',
            'iso' => '4202701',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Braço do Norte',
            'iso' => '4202800',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Braço do Trombudo',
            'iso' => '4202859',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Brunópolis',
            'iso' => '4202875',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Brusque',
            'iso' => '4202909',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Caçador',
            'iso' => '4203006',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Caibi',
            'iso' => '4203105',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Calmon',
            'iso' => '4203154',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Camboriú',
            'iso' => '4203204',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Capão Alto',
            'iso' => '4203253',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Campo Alegre',
            'iso' => '4203303',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Campo Belo do Sul',
            'iso' => '4203402',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Campo Erê',
            'iso' => '4203501',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Campos Novos',
            'iso' => '4203600',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Canelinha',
            'iso' => '4203709',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Canoinhas',
            'iso' => '4203808',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Capinzal',
            'iso' => '4203907',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Capivari de Baixo',
            'iso' => '4203956',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Catanduvas',
            'iso' => '4204004',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Caxambu do Sul',
            'iso' => '4204103',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Celso Ramos',
            'iso' => '4204152',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Cerro Negro',
            'iso' => '4204178',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Chapadão do Lageado',
            'iso' => '4204194',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Chapecó',
            'iso' => '4204202',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Cocal do Sul',
            'iso' => '4204251',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Concórdia',
            'iso' => '4204301',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Cordilheira Alta',
            'iso' => '4204350',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Coronel Freitas',
            'iso' => '4204400',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Coronel Martins',
            'iso' => '4204459',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Corupá',
            'iso' => '4204509',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Correia Pinto',
            'iso' => '4204558',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Criciúma',
            'iso' => '4204608',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Cunha Porã',
            'iso' => '4204707',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Cunhataí',
            'iso' => '4204756',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Curitibanos',
            'iso' => '4204806',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Descanso',
            'iso' => '4204905',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Dionísio Cerqueira',
            'iso' => '4205001',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Dona Emma',
            'iso' => '4205100',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Doutor Pedrinho',
            'iso' => '4205159',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Entre Rios',
            'iso' => '4205175',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ermo',
            'iso' => '4205191',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Erval Velho',
            'iso' => '4205209',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Faxinal dos Guedes',
            'iso' => '4205308',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Flor do Sertão',
            'iso' => '4205357',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Florianópolis',
            'iso' => '4205407',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Formosa do Sul',
            'iso' => '4205431',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Forquilhinha',
            'iso' => '4205456',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Fraiburgo',
            'iso' => '4205506',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Frei Rogério',
            'iso' => '4205555',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Galvão',
            'iso' => '4205605',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Garopaba',
            'iso' => '4205704',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Garuva',
            'iso' => '4205803',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Gaspar',
            'iso' => '4205902',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Governador Celso Ramos',
            'iso' => '4206009',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Grão Pará',
            'iso' => '4206108',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Gravatal',
            'iso' => '4206207',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Guabiruba',
            'iso' => '4206306',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Guaraciaba',
            'iso' => '4206405',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Guaramirim',
            'iso' => '4206504',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Guarujá do Sul',
            'iso' => '4206603',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Guatambú',
            'iso' => '4206652',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Herval D\'oeste',
            'iso' => '4206702',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ibiam',
            'iso' => '4206751',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ibicaré',
            'iso' => '4206801',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ibirama',
            'iso' => '4206900',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Içara',
            'iso' => '4207007',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ilhota',
            'iso' => '4207106',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Imaruí',
            'iso' => '4207205',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Imbituba',
            'iso' => '4207304',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Imbuia',
            'iso' => '4207403',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Indaial',
            'iso' => '4207502',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Iomerê',
            'iso' => '4207577',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ipira',
            'iso' => '4207601',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Iporã do Oeste',
            'iso' => '4207650',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ipuaçu',
            'iso' => '4207684',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ipumirim',
            'iso' => '4207700',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Iraceminha',
            'iso' => '4207759',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Irani',
            'iso' => '4207809',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Irati',
            'iso' => '4207858',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Irineópolis',
            'iso' => '4207908',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itá',
            'iso' => '4208005',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itaiópolis',
            'iso' => '4208104',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itajaí',
            'iso' => '4208203',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itapema',
            'iso' => '4208302',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itapiranga',
            'iso' => '4208401',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Itapoá',
            'iso' => '4208450',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ituporanga',
            'iso' => '4208500',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jaborá',
            'iso' => '4208609',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jacinto Machado',
            'iso' => '4208708',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jaguaruna',
            'iso' => '4208807',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jaraguá do Sul',
            'iso' => '4208906',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jardinópolis',
            'iso' => '4208955',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Joaçaba',
            'iso' => '4209003',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Joinville',
            'iso' => '4209102',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'José Boiteux',
            'iso' => '4209151',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Jupiá',
            'iso' => '4209177',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lacerdópolis',
            'iso' => '4209201',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lages',
            'iso' => '4209300',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Laguna',
            'iso' => '4209409',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lajeado Grande',
            'iso' => '4209458',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Laurentino',
            'iso' => '4209508',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lauro Muller',
            'iso' => '4209607',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lebon Régis',
            'iso' => '4209706',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Leoberto Leal',
            'iso' => '4209805',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lindóia do Sul',
            'iso' => '4209854',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Lontras',
            'iso' => '4209904',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Luiz Alves',
            'iso' => '4210001',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Luzerna',
            'iso' => '4210035',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Macieira',
            'iso' => '4210050',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Mafra',
            'iso' => '4210100',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Major Gercino',
            'iso' => '4210209',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Major Vieira',
            'iso' => '4210308',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Maracajá',
            'iso' => '4210407',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Maravilha',
            'iso' => '4210506',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Marema',
            'iso' => '4210555',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Massaranduba',
            'iso' => '4210605',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Matos Costa',
            'iso' => '4210704',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Meleiro',
            'iso' => '4210803',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Mirim Doce',
            'iso' => '4210852',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Modelo',
            'iso' => '4210902',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Mondaí',
            'iso' => '4211009',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Monte Carlo',
            'iso' => '4211058',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Monte Castelo',
            'iso' => '4211108',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Morro da Fumaça',
            'iso' => '4211207',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Morro Grande',
            'iso' => '4211256',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Navegantes',
            'iso' => '4211306',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Nova Erechim',
            'iso' => '4211405',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Nova Itaberaba',
            'iso' => '4211454',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Nova Trento',
            'iso' => '4211504',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Nova Veneza',
            'iso' => '4211603',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Novo Horizonte',
            'iso' => '4211652',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Orleans',
            'iso' => '4211702',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Otacílio Costa',
            'iso' => '4211751',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ouro',
            'iso' => '4211801',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ouro Verde',
            'iso' => '4211850',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Paial',
            'iso' => '4211876',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Painel',
            'iso' => '4211892',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Palhoça',
            'iso' => '4211900',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Palma Sola',
            'iso' => '4212007',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Palmeira',
            'iso' => '4212056',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Palmitos',
            'iso' => '4212106',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Papanduva',
            'iso' => '4212205',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Paraíso',
            'iso' => '4212239',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Passo de Torres',
            'iso' => '4212254',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Passos Maia',
            'iso' => '4212270',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Paulo Lopes',
            'iso' => '4212304',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pedras Grandes',
            'iso' => '4212403',
        ]);
        City::create([
        'state_id' => '24',
        'title' => 'Penha',
        'iso' => '4212502',
        ]);
        City::create([
        'state_id' => '24',
        'title' => 'Peritiba',
        'iso' => '4212601',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Petrolândia',
            'iso' => '4212700',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Piçarras',
            'iso' => '4212809',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pinhalzinho',
            'iso' => '4212908',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pinheiro Preto',
            'iso' => '4213005',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Piratuba',
            'iso' => '4213104',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Planalto Alegre',
            'iso' => '4213153',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pomerode',
            'iso' => '4213203',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ponte Alta',
            'iso' => '4213302',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ponte Alta do Norte',
            'iso' => '4213351',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Ponte Serrada',
            'iso' => '4213401',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Porto Belo',
            'iso' => '4213500',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Porto União',
            'iso' => '4213609',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pouso Redondo',
            'iso' => '4213708',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Praia Grande',
            'iso' => '4213807',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Presidente Castello Branco',
            'iso' => '4213906',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Presidente Getúlio',
            'iso' => '4214003',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Presidente Nereu',
            'iso' => '4214102',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Princesa',
            'iso' => '4214151',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Quilombo',
            'iso' => '4214201',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rancho Queimado',
            'iso' => '4214300',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio das Antas',
            'iso' => '4214409',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio do Campo',
            'iso' => '4214508',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio do Oeste',
            'iso' => '4214607',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio dos Cedros',
            'iso' => '4214706',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio do Sul',
            'iso' => '4214805',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio Fortuna',
            'iso' => '4214904',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio Negrinho',
            'iso' => '4215000',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rio Rufino',
            'iso' => '4215059',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Riqueza',
            'iso' => '4215075',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Rodeio',
            'iso' => '4215109',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Romelândia',
            'iso' => '4215208',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Salete',
            'iso' => '4215307',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Saltinho',
            'iso' => '4215356',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Salto Veloso',
            'iso' => '4215406',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Sangão',
            'iso' => '4215455',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Cecília',
            'iso' => '4215505',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Helena',
            'iso' => '4215554',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Rosa de Lima',
            'iso' => '4215604',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Rosa do Sul',
            'iso' => '4215653',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Terezinha',
            'iso' => '4215679',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santa Terezinha do Progresso',
            'iso' => '4215687',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santiago do Sul',
            'iso' => '4215695',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Santo Amaro da Imperatriz',
            'iso' => '4215703',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Bernardino',
            'iso' => '4215752',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Bento do Sul',
            'iso' => '4215802',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Bonifácio',
            'iso' => '4215901',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Carlos',
            'iso' => '4216008',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Cristovão do Sul',
            'iso' => '4216057',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Domingos',
            'iso' => '4216107',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Francisco do Sul',
            'iso' => '4216206',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São João do Oeste',
            'iso' => '4216255',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São João Batista',
            'iso' => '4216305',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São João do Itaperiú',
            'iso' => '4216354',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São João do Sul',
            'iso' => '4216404',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Joaquim',
            'iso' => '4216503',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São José',
            'iso' => '4216602',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São José do Cedro',
            'iso' => '4216701',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São José do Cerrito',
            'iso' => '4216800',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Lourenço do Oeste',
            'iso' => '4216909',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Ludgero',
            'iso' => '4217006',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Martinho',
            'iso' => '4217105',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Miguel da Boa Vista',
            'iso' => '4217154',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Miguel do Oeste',
            'iso' => '4217204',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'São Pedro de Alcântara',
            'iso' => '4217253',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Saudades',
            'iso' => '4217303',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Schroeder',
            'iso' => '4217402',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Seara',
            'iso' => '4217501',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Serra Alta',
            'iso' => '4217550',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Siderópolis',
            'iso' => '4217600',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Sombrio',
            'iso' => '4217709',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Sul Brasil',
            'iso' => '4217758',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Taió',
            'iso' => '4217808',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Tangará',
            'iso' => '4217907',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Tigrinhos',
            'iso' => '4217956',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Tijucas',
            'iso' => '4218004',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Timbé do Sul',
            'iso' => '4218103',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Timbó',
            'iso' => '4218202',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Timbó Grande',
            'iso' => '4218251',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Três Barras',
            'iso' => '4218301',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Treviso',
            'iso' => '4218350',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Treze de Maio',
            'iso' => '4218400',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Treze Tílias',
            'iso' => '4218509',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Trombudo Central',
            'iso' => '4218608',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Tubarão',
            'iso' => '4218707',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Tunápolis',
            'iso' => '4218756',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Turvo',
            'iso' => '4218806',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'União do Oeste',
            'iso' => '4218855',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Urubici',
            'iso' => '4218905',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Urupema',
            'iso' => '4218954',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Urussanga',
            'iso' => '4219002',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Vargeão',
            'iso' => '4219101',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Vargem',
            'iso' => '4219150',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Vargem Bonita',
            'iso' => '4219176',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Vidal Ramos',
            'iso' => '4219200',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Videira',
            'iso' => '4219309',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Vitor Meireles',
            'iso' => '4219358',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Witmarsum',
            'iso' => '4219408',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Xanxerê',
            'iso' => '4219507',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Xavantina',
            'iso' => '4219606',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Xaxim',
            'iso' => '4219705',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Zortéa',
            'iso' => '4219853',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Aceguá',
            'iso' => '4300034',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Água Santa',
            'iso' => '4300059',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Agudo',
            'iso' => '4300109',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ajuricaba',
            'iso' => '4300208',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alecrim',
            'iso' => '4300307',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alegrete',
            'iso' => '4300406',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alegria',
            'iso' => '4300455',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Almirante Tamandaré do Sul',
            'iso' => '4300471',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alpestre',
            'iso' => '4300505',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alto Alegre',
            'iso' => '4300554',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alto Feliz',
            'iso' => '4300570',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Alvorada',
            'iso' => '4300604',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Amaral Ferrador',
            'iso' => '4300638',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ametista do Sul',
            'iso' => '4300646',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'André da Rocha',
            'iso' => '4300661',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Anta Gorda',
            'iso' => '4300703',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Antônio Prado',
            'iso' => '4300802',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arambaré',
            'iso' => '4300851',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Araricá',
            'iso' => '4300877',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Aratiba',
            'iso' => '4300901',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio do Meio',
            'iso' => '4301008',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio do Sal',
            'iso' => '4301057',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio do Padre',
            'iso' => '4301073',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio dos Ratos',
            'iso' => '4301107',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio do Tigre',
            'iso' => '4301206',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arroio Grande',
            'iso' => '4301305',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Arvorezinha',
            'iso' => '4301404',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Augusto Pestana',
            'iso' => '4301503',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Áurea',
            'iso' => '4301552',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bagé',
            'iso' => '4301602',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Balneário Pinhal',
            'iso' => '4301636',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barão',
            'iso' => '4301651',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barão de Cotegipe',
            'iso' => '4301701',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barão do Triunfo',
            'iso' => '4301750',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barracão',
            'iso' => '4301800',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barra do Guarita',
            'iso' => '4301859',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barra do Quaraí',
            'iso' => '4301875',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barra do Ribeiro',
            'iso' => '4301909',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barra do Rio Azul',
            'iso' => '4301925',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barra Funda',
            'iso' => '4301958',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Barros Cassal',
            'iso' => '4302006',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Benjamin Constant do Sul',
            'iso' => '4302055',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bento Gonçalves',
            'iso' => '4302105',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boa Vista das Missões',
            'iso' => '4302154',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boa Vista do Buricá',
            'iso' => '4302204',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boa Vista do Cadeado',
            'iso' => '4302220',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boa Vista do Incra',
            'iso' => '4302238',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boa Vista do Sul',
            'iso' => '4302253',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bom Jesus',
            'iso' => '4302303',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bom Princípio',
            'iso' => '4302352',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bom Progresso',
            'iso' => '4302378',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bom Retiro do Sul',
            'iso' => '4302402',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Boqueirão do Leão',
            'iso' => '4302451',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bossoroca',
            'iso' => '4302501',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Bozano',
            'iso' => '4302584',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Braga',
            'iso' => '4302600',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Brochier',
            'iso' => '4302659',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Butiá',
            'iso' => '4302709',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caçapava do Sul',
            'iso' => '4302808',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cacequi',
            'iso' => '4302907',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cachoeira do Sul',
            'iso' => '4303004',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cachoeirinha',
            'iso' => '4303103',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cacique Doble',
            'iso' => '4303202',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caibaté',
            'iso' => '4303301',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caiçara',
            'iso' => '4303400',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Camaquã',
            'iso' => '4303509',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Camargo',
            'iso' => '4303558',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cambará do Sul',
            'iso' => '4303608',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campestre da Serra',
            'iso' => '4303673',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campina das Missões',
            'iso' => '4303707',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campinas do Sul',
            'iso' => '4303806',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campo Bom',
            'iso' => '4303905',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campo Novo',
            'iso' => '4304002',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Campos Borges',
            'iso' => '4304101',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Candelária',
            'iso' => '4304200',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cândido Godói',
            'iso' => '4304309',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Candiota',
            'iso' => '4304358',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Canela',
            'iso' => '4304408',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Canguçu',
            'iso' => '4304507',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Canoas',
            'iso' => '4304606',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Canudos do Vale',
            'iso' => '4304614',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capão Bonito do Sul',
            'iso' => '4304622',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capão da Canoa',
            'iso' => '4304630',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capão do Cipó',
            'iso' => '4304655',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capão do Leão',
            'iso' => '4304663',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capivari do Sul',
            'iso' => '4304671',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capela de Santana',
            'iso' => '4304689',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Capitão',
            'iso' => '4304697',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Carazinho',
            'iso' => '4304705',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caraá',
            'iso' => '4304713',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Carlos Barbosa',
            'iso' => '4304804',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Carlos Gomes',
            'iso' => '4304853',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Casca',
            'iso' => '4304903',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caseiros',
            'iso' => '4304952',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Catuípe',
            'iso' => '4305009',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Caxias do Sul',
            'iso' => '4305108',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Centenário',
            'iso' => '4305116',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cerrito',
            'iso' => '4305124',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cerro Branco',
            'iso' => '4305132',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cerro Grande',
            'iso' => '4305157',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cerro Grande do Sul',
            'iso' => '4305173',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cerro Largo',
            'iso' => '4305207',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Chapada',
            'iso' => '4305306',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Charqueadas',
            'iso' => '4305355',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Charrua',
            'iso' => '4305371',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Chiapetta',
            'iso' => '4305405',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Chuí',
            'iso' => '4305439',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Chuvisca',
            'iso' => '4305447',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cidreira',
            'iso' => '4305454',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ciríaco',
            'iso' => '4305504',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Colinas',
            'iso' => '4305587',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Colorado',
            'iso' => '4305603',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Condor',
            'iso' => '4305702',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Constantina',
            'iso' => '4305801',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coqueiro Baixo',
            'iso' => '4305835',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coqueiros do Sul',
            'iso' => '4305850',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coronel Barros',
            'iso' => '4305871',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coronel Bicaco',
            'iso' => '4305900',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coronel Pilar',
            'iso' => '4305934',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cotiporã',
            'iso' => '4305959',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Coxilha',
            'iso' => '4305975',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Crissiumal',
            'iso' => '4306007',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cristal',
            'iso' => '4306056',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cristal do Sul',
            'iso' => '4306072',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cruz Alta',
            'iso' => '4306106',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cruzaltense',
            'iso' => '4306130',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Cruzeiro do Sul',
            'iso' => '4306205',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'David Canabarro',
            'iso' => '4306304',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Derrubadas',
            'iso' => '4306320',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dezesseis de Novembro',
            'iso' => '4306353',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dilermando de Aguiar',
            'iso' => '4306379',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dois Irmãos',
            'iso' => '4306403',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dois Irmãos das Missões',
            'iso' => '4306429',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dois Lajeados',
            'iso' => '4306452',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dom Feliciano',
            'iso' => '4306502',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dom Pedro de Alcântara',
            'iso' => '4306551',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dom Pedrito',
            'iso' => '4306601',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Dona Francisca',
            'iso' => '4306700',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Doutor Maurício Cardoso',
            'iso' => '4306734',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Doutor Ricardo',
            'iso' => '4306759',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Eldorado do Sul',
            'iso' => '4306767',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Encantado',
            'iso' => '4306809',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Encruzilhada do Sul',
            'iso' => '4306908',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Engenho Velho',
            'iso' => '4306924',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Entre-Ijuís',
            'iso' => '4306932',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Entre Rios do Sul',
            'iso' => '4306957',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Erebango',
            'iso' => '4306973',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Erechim',
            'iso' => '4307005',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ernestina',
            'iso' => '4307054',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Herval',
            'iso' => '4307104',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Erval Grande',
            'iso' => '4307203',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Erval Seco',
            'iso' => '4307302',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Esmeralda',
            'iso' => '4307401',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Esperança do Sul',
            'iso' => '4307450',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Espumoso',
            'iso' => '4307500',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Estação',
            'iso' => '4307559',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Estância Velha',
            'iso' => '4307609',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Esteio',
            'iso' => '4307708',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Estrela',
            'iso' => '4307807',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Estrela Velha',
            'iso' => '4307815',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Eugênio de Castro',
            'iso' => '4307831',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Fagundes Varela',
            'iso' => '4307864',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Farroupilha',
            'iso' => '4307906',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Faxinal do Soturno',
            'iso' => '4308003',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Faxinalzinho',
            'iso' => '4308052',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Fazenda Vilanova',
            'iso' => '4308078',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Feliz',
            'iso' => '4308102',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Flores da Cunha',
            'iso' => '4308201',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Floriano Peixoto',
            'iso' => '4308250',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Fontoura Xavier',
            'iso' => '4308300',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Formigueiro',
            'iso' => '4308409',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Forquetinha',
            'iso' => '4308433',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Fortaleza dos Valos',
            'iso' => '4308458',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Frederico Westphalen',
            'iso' => '4308508',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Garibaldi',
            'iso' => '4308607',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Garruchos',
            'iso' => '4308656',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gaurama',
            'iso' => '4308706',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'General Câmara',
            'iso' => '4308805',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gentil',
            'iso' => '4308854',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Getúlio Vargas',
            'iso' => '4308904',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Giruá',
            'iso' => '4309001',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Glorinha',
            'iso' => '4309050',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gramado',
            'iso' => '4309100',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gramado dos Loureiros',
            'iso' => '4309126',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gramado Xavier',
            'iso' => '4309159',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Gravataí',
            'iso' => '4309209',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Guabiju',
            'iso' => '4309258',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Guaíba',
            'iso' => '4309308',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Guaporé',
            'iso' => '4309407',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Guarani das Missões',
            'iso' => '4309506',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Harmonia',
            'iso' => '4309555',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Herveiras',
            'iso' => '4309571',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Horizontina',
            'iso' => '4309605',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Hulha Negra',
            'iso' => '4309654',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Humaitá',
            'iso' => '4309704',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ibarama',
            'iso' => '4309753',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ibiaçá',
            'iso' => '4309803',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ibiraiaras',
            'iso' => '4309902',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ibirapuitã',
            'iso' => '4309951',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ibirubá',
            'iso' => '4310009',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Igrejinha',
            'iso' => '4310108',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ijuí',
            'iso' => '4310207',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ilópolis',
            'iso' => '4310306',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Imbé',
            'iso' => '4310330',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Imigrante',
            'iso' => '4310363',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Independência',
            'iso' => '4310405',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Inhacorá',
            'iso' => '4310413',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ipê',
            'iso' => '4310439',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ipiranga do Sul',
            'iso' => '4310462',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Iraí',
            'iso' => '4310504',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itaara',
            'iso' => '4310538',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itacurubi',
            'iso' => '4310553',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itapuca',
            'iso' => '4310579',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itaqui',
            'iso' => '4310603',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itati',
            'iso' => '4310652',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Itatiba do Sul',
            'iso' => '4310702',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ivorá',
            'iso' => '4310751',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ivoti',
            'iso' => '4310801',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jaboticaba',
            'iso' => '4310850',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jacuizinho',
            'iso' => '4310876',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jacutinga',
            'iso' => '4310900',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jaguarão',
            'iso' => '4311007',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jaguari',
            'iso' => '4311106',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jaquirana',
            'iso' => '4311122',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jari',
            'iso' => '4311130',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Jóia',
            'iso' => '4311155',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Júlio de Castilhos',
            'iso' => '4311205',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lagoa Bonita do Sul',
            'iso' => '4311239',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lagoão',
            'iso' => '4311254',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lagoa dos Três Cantos',
            'iso' => '4311270',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lagoa Vermelha',
            'iso' => '4311304',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lajeado',
            'iso' => '4311403',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lajeado do Bugre',
            'iso' => '4311429',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lavras do Sul',
            'iso' => '4311502',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Liberato Salzano',
            'iso' => '4311601',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Lindolfo Collor',
            'iso' => '4311627',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Linha Nova',
            'iso' => '4311643',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Machadinho',
            'iso' => '4311700',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Maçambara',
            'iso' => '4311718',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mampituba',
            'iso' => '4311734',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Manoel Viana',
            'iso' => '4311759',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Maquiné',
            'iso' => '4311775',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Maratá',
            'iso' => '4311791',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Marau',
            'iso' => '4311809',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Marcelino Ramos',
            'iso' => '4311908',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mariana Pimentel',
            'iso' => '4311981',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mariano Moro',
            'iso' => '4312005',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Marques de Souza',
            'iso' => '4312054',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mata',
            'iso' => '4312104',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mato Castelhano',
            'iso' => '4312138',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mato Leitão',
            'iso' => '4312153',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mato Queimado',
            'iso' => '4312179',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Maximiliano de Almeida',
            'iso' => '4312203',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Minas do Leão',
            'iso' => '4312252',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Miraguaí',
            'iso' => '4312302',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Montauri',
            'iso' => '4312351',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Monte Alegre dos Campos',
            'iso' => '4312377',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Monte Belo do Sul',
            'iso' => '4312385',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Montenegro',
            'iso' => '4312401',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mormaço',
            'iso' => '4312427',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Morrinhos do Sul',
            'iso' => '4312443',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Morro Redondo',
            'iso' => '4312450',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Morro Reuter',
            'iso' => '4312476',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Mostardas',
            'iso' => '4312500',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Muçum',
            'iso' => '4312609',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Muitos Capões',
            'iso' => '4312617',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Muliterno',
            'iso' => '4312625',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Não-Me-Toque',
            'iso' => '4312658',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nicolau Vergueiro',
            'iso' => '4312674',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nonoai',
            'iso' => '4312708',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Alvorada',
            'iso' => '4312757',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Araçá',
            'iso' => '4312807',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Bassano',
            'iso' => '4312906',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Boa Vista',
            'iso' => '4312955',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Bréscia',
            'iso' => '4313003',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Candelária',
            'iso' => '4313011',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Esperança do Sul',
            'iso' => '4313037',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Hartz',
            'iso' => '4313060',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Pádua',
            'iso' => '4313086',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Palma',
            'iso' => '4313102',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Petrópolis',
            'iso' => '4313201',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Prata',
            'iso' => '4313300',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Ramada',
            'iso' => '4313334',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Roma do Sul',
            'iso' => '4313359',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Nova Santa Rita',
            'iso' => '4313375',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Cabrais',
            'iso' => '4313391',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Hamburgo',
            'iso' => '4313409',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Machado',
            'iso' => '4313425',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Tiradentes',
            'iso' => '4313441',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Xingu',
            'iso' => '4313466',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Novo Barreiro',
            'iso' => '4313490',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Osório',
            'iso' => '4313508',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Paim Filho',
            'iso' => '4313607',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Palmares do Sul',
            'iso' => '4313656',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Palmeira das Missões',
            'iso' => '4313706',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Palmitinho',
            'iso' => '4313805',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Panambi',
            'iso' => '4313904',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pantano Grande',
            'iso' => '4313953',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Paraí',
            'iso' => '4314001',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Paraíso do Sul',
            'iso' => '4314027',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pareci Novo',
            'iso' => '4314035',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Parobé',
            'iso' => '4314050',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Passa Sete',
            'iso' => '4314068',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Passo do Sobrado',
            'iso' => '4314076',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Passo Fundo',
            'iso' => '4314100',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Paulo Bento',
            'iso' => '4314134',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Paverama',
            'iso' => '4314159',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pedras Altas',
            'iso' => '4314175',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pedro Osório',
            'iso' => '4314209',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pejuçara',
            'iso' => '4314308',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pelotas',
            'iso' => '4314407',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Picada Café',
            'iso' => '4314423',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinhal',
            'iso' => '4314456',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinhal da Serra',
            'iso' => '4314464',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinhal Grande',
            'iso' => '4314472',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinheirinho do Vale',
            'iso' => '4314498',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinheiro Machado',
            'iso' => '4314506',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pirapó',
            'iso' => '4314555',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Piratini',
            'iso' => '4314605',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Planalto',
            'iso' => '4314704',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Poço das Antas',
            'iso' => '4314753',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pontão',
            'iso' => '4314779',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ponte Preta',
            'iso' => '4314787',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Portão',
            'iso' => '4314803',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Porto Alegre',
            'iso' => '4314902',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Porto Lucena',
            'iso' => '4315008',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Porto Mauá',
            'iso' => '4315057',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Porto Vera Cruz',
            'iso' => '4315073',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Porto Xavier',
            'iso' => '4315107',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pouso Novo',
            'iso' => '4315131',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Presidente Lucena',
            'iso' => '4315149',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Progresso',
            'iso' => '4315156',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Protásio Alves',
            'iso' => '4315172',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Putinga',
            'iso' => '4315206',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Quaraí',
            'iso' => '4315305',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Quatro Irmãos',
            'iso' => '4315313',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Quevedos',
            'iso' => '4315321',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Quinze de Novembro',
            'iso' => '4315354',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Redentora',
            'iso' => '4315404',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Relvado',
            'iso' => '4315453',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Restinga Seca',
            'iso' => '4315503',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rio dos Índios',
            'iso' => '4315552',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rio Grande',
            'iso' => '4315602',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rio Pardo',
            'iso' => '4315701',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Riozinho',
            'iso' => '4315750',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Roca Sales',
            'iso' => '4315800',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rodeio Bonito',
            'iso' => '4315909',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rolador',
            'iso' => '4315958',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rolante',
            'iso' => '4316006',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ronda Alta',
            'iso' => '4316105',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rondinha',
            'iso' => '4316204',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Roque Gonzales',
            'iso' => '4316303',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Rosário do Sul',
            'iso' => '4316402',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sagrada Família',
            'iso' => '4316428',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Saldanha Marinho',
            'iso' => '4316436',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Salto do Jacuí',
            'iso' => '4316451',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Salvador das Missões',
            'iso' => '4316477',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Salvador do Sul',
            'iso' => '4316501',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sananduva',
            'iso' => '4316600',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Bárbara do Sul',
            'iso' => '4316709',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Cecília do Sul',
            'iso' => '4316733',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Clara do Sul',
            'iso' => '4316758',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Cruz do Sul',
            'iso' => '4316808',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Maria',
            'iso' => '4316907',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Maria do Herval',
            'iso' => '4316956',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Margarida do Sul',
            'iso' => '4316972',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santana da Boa Vista',
            'iso' => '4317004',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santana do Livramento',
            'iso' => '4317103',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Rosa',
            'iso' => '4317202',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Tereza',
            'iso' => '4317251',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santa Vitória do Palmar',
            'iso' => '4317301',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santiago',
            'iso' => '4317400',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Ângelo',
            'iso' => '4317509',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Antônio do Palma',
            'iso' => '4317558',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Antônio da Patrulha',
            'iso' => '4317608',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Antônio das Missões',
            'iso' => '4317707',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Antônio do Planalto',
            'iso' => '4317756',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Augusto',
            'iso' => '4317806',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Cristo',
            'iso' => '4317905',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Santo Expedito do Sul',
            'iso' => '4317954',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Borja',
            'iso' => '4318002',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Domingos do Sul',
            'iso' => '4318051',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Francisco de Assis',
            'iso' => '4318101',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Francisco de Paula',
            'iso' => '4318200',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Gabriel',
            'iso' => '4318309',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Jerônimo',
            'iso' => '4318408',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São João da Urtiga',
            'iso' => '4318424',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São João do Polêsine',
            'iso' => '4318432',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Jorge',
            'iso' => '4318440',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José das Missões',
            'iso' => '4318457',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Herval',
            'iso' => '4318465',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Hortêncio',
            'iso' => '4318481',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Inhacorá',
            'iso' => '4318499',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Norte',
            'iso' => '4318507',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Ouro',
            'iso' => '4318606',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José do Sul',
            'iso' => '4318614',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São José dos Ausentes',
            'iso' => '4318622',
        ]);
        City::create([
        'state_id' => '23',
        'title' => 'São Leopoldo',
        'iso' => '4318705',
        ]);
        City::create([
        'state_id' => '23',
        'title' => 'São Lourenço do Sul',
        'iso' => '4318804',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Luiz Gonzaga',
            'iso' => '4318903',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Marcos',
            'iso' => '4319000',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Martinho',
            'iso' => '4319109',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Martinho da Serra',
            'iso' => '4319125',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Miguel das Missões',
            'iso' => '4319158',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Nicolau',
            'iso' => '4319208',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Paulo das Missões',
            'iso' => '4319307',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Pedro da Serra',
            'iso' => '4319356',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Pedro das Missões',
            'iso' => '4319364',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Pedro do Butiá',
            'iso' => '4319372',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Pedro do Sul',
            'iso' => '4319406',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Sebastião do Caí',
            'iso' => '4319505',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Sepé',
            'iso' => '4319604',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Valentim',
            'iso' => '4319703',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Valentim do Sul',
            'iso' => '4319711',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Valério do Sul',
            'iso' => '4319737',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Vendelino',
            'iso' => '4319752',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'São Vicente do Sul',
            'iso' => '4319802',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sapiranga',
            'iso' => '4319901',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sapucaia do Sul',
            'iso' => '4320008',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sarandi',
            'iso' => '4320107',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Seberi',
            'iso' => '4320206',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sede Nova',
            'iso' => '4320230',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Segredo',
            'iso' => '4320263',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Selbach',
            'iso' => '4320305',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Senador Salgado Filho',
            'iso' => '4320321',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sentinela do Sul',
            'iso' => '4320354',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Serafina Corrêa',
            'iso' => '4320404',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sério',
            'iso' => '4320453',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sertão',
            'iso' => '4320503',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sertão Santana',
            'iso' => '4320552',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sete de Setembro',
            'iso' => '4320578',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Severiano de Almeida',
            'iso' => '4320602',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Silveira Martins',
            'iso' => '4320651',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sinimbu',
            'iso' => '4320677',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Sobradinho',
            'iso' => '4320701',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Soledade',
            'iso' => '4320800',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tabaí',
            'iso' => '4320859',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tapejara',
            'iso' => '4320909',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tapera',
            'iso' => '4321006',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tapes',
            'iso' => '4321105',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Taquara',
            'iso' => '4321204',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Taquari',
            'iso' => '4321303',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Taquaruçu do Sul',
            'iso' => '4321329',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tavares',
            'iso' => '4321352',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tenente Portela',
            'iso' => '4321402',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Terra de Areia',
            'iso' => '4321436',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Teutônia',
            'iso' => '4321451',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tio Hugo',
            'iso' => '4321469',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tiradentes do Sul',
            'iso' => '4321477',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Toropi',
            'iso' => '4321493',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Torres',
            'iso' => '4321501',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tramandaí',
            'iso' => '4321600',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Travesseiro',
            'iso' => '4321626',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Arroios',
            'iso' => '4321634',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Cachoeiras',
            'iso' => '4321667',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Coroas',
            'iso' => '4321709',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três de Maio',
            'iso' => '4321808',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Forquilhas',
            'iso' => '4321832',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Palmeiras',
            'iso' => '4321857',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Três Passos',
            'iso' => '4321907',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Trindade do Sul',
            'iso' => '4321956',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Triunfo',
            'iso' => '4322004',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tucunduva',
            'iso' => '4322103',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tunas',
            'iso' => '4322152',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tupanci do Sul',
            'iso' => '4322186',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tupanciretã',
            'iso' => '4322202',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tupandi',
            'iso' => '4322251',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Tuparendi',
            'iso' => '4322301',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Turuçu',
            'iso' => '4322327',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Ubiretama',
            'iso' => '4322343',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'União da Serra',
            'iso' => '4322350',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Unistalda',
            'iso' => '4322376',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Uruguaiana',
            'iso' => '4322400',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vacaria',
            'iso' => '4322509',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vale Verde',
            'iso' => '4322525',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vale do Sol',
            'iso' => '4322533',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vale Real',
            'iso' => '4322541',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vanini',
            'iso' => '4322558',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Venâncio Aires',
            'iso' => '4322608',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vera Cruz',
            'iso' => '4322707',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Veranópolis',
            'iso' => '4322806',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vespasiano Correa',
            'iso' => '4322855',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Viadutos',
            'iso' => '4322905',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Viamão',
            'iso' => '4323002',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vicente Dutra',
            'iso' => '4323101',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Victor Graeff',
            'iso' => '4323200',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vila Flores',
            'iso' => '4323309',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vila Lângaro',
            'iso' => '4323358',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vila Maria',
            'iso' => '4323408',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vila Nova do Sul',
            'iso' => '4323457',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vista Alegre',
            'iso' => '4323507',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vista Alegre do Prata',
            'iso' => '4323606',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vista Gaúcha',
            'iso' => '4323705',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Vitória das Missões',
            'iso' => '4323754',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Westfalia',
            'iso' => '4323770',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Xangri-Lá',
            'iso' => '4323804',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Água Clara',
            'iso' => '5000203',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Alcinópolis',
            'iso' => '5000252',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Amambaí',
            'iso' => '5000609',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Anastácio',
            'iso' => '5000708',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Anaurilândia',
            'iso' => '5000807',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Angélica',
            'iso' => '5000856',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Antônio João',
            'iso' => '5000906',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Aparecida do Taboado',
            'iso' => '5001003',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Aquidauana',
            'iso' => '5001102',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Aral Moreira',
            'iso' => '5001243',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Bandeirantes',
            'iso' => '5001508',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Bataguassu',
            'iso' => '5001904',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Batayporã',
            'iso' => '5002001',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Bela Vista',
            'iso' => '5002100',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Bodoquena',
            'iso' => '5002159',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Bonito',
            'iso' => '5002209',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Brasilândia',
            'iso' => '5002308',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Caarapó',
            'iso' => '5002407',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Camapuã',
            'iso' => '5002605',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Campo Grande',
            'iso' => '5002704',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Caracol',
            'iso' => '5002803',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Cassilândia',
            'iso' => '5002902',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Chapadão do Sul',
            'iso' => '5002951',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Corguinho',
            'iso' => '5003108',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Coronel Sapucaia',
            'iso' => '5003157',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Corumbá',
            'iso' => '5003207',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Costa Rica',
            'iso' => '5003256',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Coxim',
            'iso' => '5003306',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Deodápolis',
            'iso' => '5003454',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Dois Irmãos do Buriti',
            'iso' => '5003488',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Douradina',
            'iso' => '5003504',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Dourados',
            'iso' => '5003702',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Eldorado',
            'iso' => '5003751',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Fátima do Sul',
            'iso' => '5003801',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Figueirão',
            'iso' => '5003900',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Glória de Dourados',
            'iso' => '5004007',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Guia Lopes da Laguna',
            'iso' => '5004106',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Iguatemi',
            'iso' => '5004304',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Inocência',
            'iso' => '5004403',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Itaporã',
            'iso' => '5004502',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Itaquiraí',
            'iso' => '5004601',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Ivinhema',
            'iso' => '5004700',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Japorã',
            'iso' => '5004809',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Jaraguari',
            'iso' => '5004908',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Jardim',
            'iso' => '5005004',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Jateí',
            'iso' => '5005103',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Juti',
            'iso' => '5005152',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Ladário',
            'iso' => '5005202',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Laguna Carapã',
            'iso' => '5005251',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Maracaju',
            'iso' => '5005400',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Miranda',
            'iso' => '5005608',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Mundo Novo',
            'iso' => '5005681',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Naviraí',
            'iso' => '5005707',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Nioaque',
            'iso' => '5005806',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Nova Alvorada do Sul',
            'iso' => '5006002',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Nova Andradina',
            'iso' => '5006200',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Novo Horizonte do Sul',
            'iso' => '5006259',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Paranaíba',
            'iso' => '5006309',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Paranhos',
            'iso' => '5006358',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Pedro Gomes',
            'iso' => '5006408',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Ponta Porã',
            'iso' => '5006606',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Porto Murtinho',
            'iso' => '5006903',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Ribas do Rio Pardo',
            'iso' => '5007109',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Rio Brilhante',
            'iso' => '5007208',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Rio Negro',
            'iso' => '5007307',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Rio Verde de Mato Grosso',
            'iso' => '5007406',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Rochedo',
            'iso' => '5007505',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Santa Rita do Pardo',
            'iso' => '5007554',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'São Gabriel do Oeste',
            'iso' => '5007695',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Sete Quedas',
            'iso' => '5007703',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Selvíria',
            'iso' => '5007802',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Sidrolândia',
            'iso' => '5007901',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Sonora',
            'iso' => '5007935',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Tacuru',
            'iso' => '5007950',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Taquarussu',
            'iso' => '5007976',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Terenos',
            'iso' => '5008008',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Três Lagoas',
            'iso' => '5008305',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Vicentina',
            'iso' => '5008404',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Acorizal',
            'iso' => '5100102',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Água Boa',
            'iso' => '5100201',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alta Floresta',
            'iso' => '5100250',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alto Araguaia',
            'iso' => '5100300',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alto Boa Vista',
            'iso' => '5100359',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alto Garças',
            'iso' => '5100409',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alto Paraguai',
            'iso' => '5100508',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Alto Taquari',
            'iso' => '5100607',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Apiacás',
            'iso' => '5100805',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Araguaiana',
            'iso' => '5101001',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Araguainha',
            'iso' => '5101209',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Araputanga',
            'iso' => '5101258',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Arenápolis',
            'iso' => '5101308',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Aripuanã',
            'iso' => '5101407',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Barão de Melgaço',
            'iso' => '5101605',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Barra do Bugres',
            'iso' => '5101704',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Barra do Garças',
            'iso' => '5101803',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Bom Jesus do Araguaia',
            'iso' => '5101852',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Brasnorte',
            'iso' => '5101902',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Cáceres',
            'iso' => '5102504',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Campinápolis',
            'iso' => '5102603',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Campo Novo do Parecis',
            'iso' => '5102637',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Campo Verde',
            'iso' => '5102678',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Campos de Júlio',
            'iso' => '5102686',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Canabrava do Norte',
            'iso' => '5102694',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Canarana',
            'iso' => '5102702',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Carlinda',
            'iso' => '5102793',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Castanheira',
            'iso' => '5102850',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Chapada dos Guimarães',
            'iso' => '5103007',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Cláudia',
            'iso' => '5103056',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Cocalinho',
            'iso' => '5103106',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Colíder',
            'iso' => '5103205',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Colniza',
            'iso' => '5103254',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Comodoro',
            'iso' => '5103304',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Confresa',
            'iso' => '5103353',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Conquista D\'oeste',
            'iso' => '5103361',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Cotriguaçu',
            'iso' => '5103379',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Cuiabá',
            'iso' => '5103403',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Curvelândia',
            'iso' => '5103437',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Denise',
            'iso' => '5103452',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Diamantino',
            'iso' => '5103502',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Dom Aquino',
            'iso' => '5103601',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Feliz Natal',
            'iso' => '5103700',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Figueirópolis D\'oeste',
            'iso' => '5103809',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Gaúcha do Norte',
            'iso' => '5103858',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'General Carneiro',
            'iso' => '5103908',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Glória D\'oeste',
            'iso' => '5103957',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Guarantã do Norte',
            'iso' => '5104104',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Guiratinga',
            'iso' => '5104203',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Indiavaí',
            'iso' => '5104500',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Ipiranga do Norte',
            'iso' => '5104526',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Itanhangá',
            'iso' => '5104542',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Itaúba',
            'iso' => '5104559',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Itiquira',
            'iso' => '5104609',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Jaciara',
            'iso' => '5104807',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Jangada',
            'iso' => '5104906',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Jauru',
            'iso' => '5105002',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Juara',
            'iso' => '5105101',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Juína',
            'iso' => '5105150',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Juruena',
            'iso' => '5105176',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Juscimeira',
            'iso' => '5105200',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Lambari D\'oeste',
            'iso' => '5105234',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Lucas do Rio Verde',
            'iso' => '5105259',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Luciára',
            'iso' => '5105309',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Vila Bela da Santíssima Trindade',
            'iso' => '5105507',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Marcelândia',
            'iso' => '5105580',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Matupá',
            'iso' => '5105606',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Mirassol D\'oeste',
            'iso' => '5105622',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nobres',
            'iso' => '5105903',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nortelândia',
            'iso' => '5106000',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nossa Senhora do Livramento',
            'iso' => '5106109',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Bandeirantes',
            'iso' => '5106158',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Nazaré',
            'iso' => '5106174',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Lacerda',
            'iso' => '5106182',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Santa Helena',
            'iso' => '5106190',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Brasilândia',
            'iso' => '5106208',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Canaã do Norte',
            'iso' => '5106216',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Mutum',
            'iso' => '5106224',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Olímpia',
            'iso' => '5106232',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Ubiratã',
            'iso' => '5106240',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Xavantina',
            'iso' => '5106257',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Novo Mundo',
            'iso' => '5106265',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Novo Horizonte do Norte',
            'iso' => '5106273',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Novo São Joaquim',
            'iso' => '5106281',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Paranaíta',
            'iso' => '5106299',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Paranatinga',
            'iso' => '5106307',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Novo Santo Antônio',
            'iso' => '5106315',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Pedra Preta',
            'iso' => '5106372',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Peixoto de Azevedo',
            'iso' => '5106422',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Planalto da Serra',
            'iso' => '5106455',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Poconé',
            'iso' => '5106505',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Pontal do Araguaia',
            'iso' => '5106653',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Ponte Branca',
            'iso' => '5106703',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Pontes e Lacerda',
            'iso' => '5106752',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Porto Alegre do Norte',
            'iso' => '5106778',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Porto dos Gaúchos',
            'iso' => '5106802',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Porto Esperidião',
            'iso' => '5106828',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Porto Estrela',
            'iso' => '5106851',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Poxoréo',
            'iso' => '5107008',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Primavera do Leste',
            'iso' => '5107040',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Querência',
            'iso' => '5107065',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São José dos Quatro Marcos',
            'iso' => '5107107',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Reserva do Cabaçal',
            'iso' => '5107156',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Ribeirão Cascalheira',
            'iso' => '5107180',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Ribeirãozinho',
            'iso' => '5107198',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Rio Branco',
            'iso' => '5107206',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santa Carmem',
            'iso' => '5107248',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santo Afonso',
            'iso' => '5107263',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São José do Povo',
            'iso' => '5107297',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São José do Rio Claro',
            'iso' => '5107305',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São José do Xingu',
            'iso' => '5107354',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São Pedro da Cipa',
            'iso' => '5107404',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Rondolândia',
            'iso' => '5107578',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Rondonópolis',
            'iso' => '5107602',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Rosário Oeste',
            'iso' => '5107701',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santa Cruz do Xingu',
            'iso' => '5107743',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Salto do Céu',
            'iso' => '5107750',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santa Rita do Trivelato',
            'iso' => '5107768',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santa Terezinha',
            'iso' => '5107776',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santo Antônio do Leste',
            'iso' => '5107792',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Santo Antônio do Leverger',
            'iso' => '5107800',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'São Félix do Araguaia',
            'iso' => '5107859',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Sapezal',
            'iso' => '5107875',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Serra Nova Dourada',
            'iso' => '5107883',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Sinop',
            'iso' => '5107909',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Sorriso',
            'iso' => '5107925',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Tabaporã',
            'iso' => '5107941',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Tangará da Serra',
            'iso' => '5107958',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Tapurah',
            'iso' => '5108006',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Terra Nova do Norte',
            'iso' => '5108055',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Tesouro',
            'iso' => '5108105',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Torixoréu',
            'iso' => '5108204',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'União do Sul',
            'iso' => '5108303',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Vale de São Domingos',
            'iso' => '5108352',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Várzea Grande',
            'iso' => '5108402',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Vera',
            'iso' => '5108501',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Vila Rica',
            'iso' => '5108600',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Guarita',
            'iso' => '5108808',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Marilândia',
            'iso' => '5108857',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Maringá',
            'iso' => '5108907',
        ]);
        City::create([
            'state_id' => '13',
            'title' => 'Nova Monte Verde',
            'iso' => '5108956',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Abadia de Goiás',
            'iso' => '5200050',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Abadiânia',
            'iso' => '5200100',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Acreúna',
            'iso' => '5200134',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Adelândia',
            'iso' => '5200159',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Água Fria de Goiás',
            'iso' => '5200175',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Água Limpa',
            'iso' => '5200209',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Águas Lindas de Goiás',
            'iso' => '5200258',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Alexânia',
            'iso' => '5200308',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aloândia',
            'iso' => '5200506',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Alto Horizonte',
            'iso' => '5200555',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Alto Paraíso de Goiás',
            'iso' => '5200605',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Alvorada do Norte',
            'iso' => '5200803',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Amaralina',
            'iso' => '5200829',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Americano do Brasil',
            'iso' => '5200852',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Amorinópolis',
            'iso' => '5200902',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Anápolis',
            'iso' => '5201108',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Anhanguera',
            'iso' => '5201207',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Anicuns',
            'iso' => '5201306',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aparecida de Goiânia',
            'iso' => '5201405',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aparecida do Rio Doce',
            'iso' => '5201454',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aporé',
            'iso' => '5201504',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Araçu',
            'iso' => '5201603',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aragarças',
            'iso' => '5201702',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aragoiânia',
            'iso' => '5201801',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Araguapaz',
            'iso' => '5202155',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Arenópolis',
            'iso' => '5202353',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aruanã',
            'iso' => '5202502',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Aurilândia',
            'iso' => '5202601',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Avelinópolis',
            'iso' => '5202809',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Baliza',
            'iso' => '5203104',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Barro Alto',
            'iso' => '5203203',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Bela Vista de Goiás',
            'iso' => '5203302',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Bom Jardim de Goiás',
            'iso' => '5203401',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Bom Jesus de Goiás',
            'iso' => '5203500',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Bonfinópolis',
            'iso' => '5203559',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Bonópolis',
            'iso' => '5203575',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Brazabrantes',
            'iso' => '5203609',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Britânia',
            'iso' => '5203807',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Buriti Alegre',
            'iso' => '5203906',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Buriti de Goiás',
            'iso' => '5203939',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Buritinópolis',
            'iso' => '5203962',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cabeceiras',
            'iso' => '5204003',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cachoeira Alta',
            'iso' => '5204102',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cachoeira de Goiás',
            'iso' => '5204201',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cachoeira Dourada',
            'iso' => '5204250',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Caçu',
            'iso' => '5204300',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Caiapônia',
            'iso' => '5204409',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Caldas Novas',
            'iso' => '5204508',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Caldazinha',
            'iso' => '5204557',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campestre de Goiás',
            'iso' => '5204607',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campinaçu',
            'iso' => '5204656',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campinorte',
            'iso' => '5204706',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campo Alegre de Goiás',
            'iso' => '5204805',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campo Limpo de Goiás',
            'iso' => '5204854',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campos Belos',
            'iso' => '5204904',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Campos Verdes',
            'iso' => '5204953',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Carmo do Rio Verde',
            'iso' => '5205000',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Castelândia',
            'iso' => '5205059',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Catalão',
            'iso' => '5205109',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Caturaí',
            'iso' => '5205208',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cavalcante',
            'iso' => '5205307',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ceres',
            'iso' => '5205406',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cezarina',
            'iso' => '5205455',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Chapadão do Céu',
            'iso' => '5205471',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cidade Ocidental',
            'iso' => '5205497',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cocalzinho de Goiás',
            'iso' => '5205513',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Colinas do Sul',
            'iso' => '5205521',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Córrego do Ouro',
            'iso' => '5205703',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Corumbá de Goiás',
            'iso' => '5205802',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Corumbaíba',
            'iso' => '5205901',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cristalina',
            'iso' => '5206206',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cristianópolis',
            'iso' => '5206305',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Crixás',
            'iso' => '5206404',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cromínia',
            'iso' => '5206503',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Cumari',
            'iso' => '5206602',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Damianópolis',
            'iso' => '5206701',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Damolândia',
            'iso' => '5206800',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Davinópolis',
            'iso' => '5206909',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Diorama',
            'iso' => '5207105',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Doverlândia',
            'iso' => '5207253',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Edealina',
            'iso' => '5207352',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Edéia',
            'iso' => '5207402',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Estrela do Norte',
            'iso' => '5207501',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Faina',
            'iso' => '5207535',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Fazenda Nova',
            'iso' => '5207600',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Firminópolis',
            'iso' => '5207808',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Flores de Goiás',
            'iso' => '5207907',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Formosa',
            'iso' => '5208004',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Formoso',
            'iso' => '5208103',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Gameleira de Goiás',
            'iso' => '5208152',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Divinópolis de Goiás',
            'iso' => '5208301',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goianápolis',
            'iso' => '5208400',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goiandira',
            'iso' => '5208509',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goianésia',
            'iso' => '5208608',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goiânia',
            'iso' => '5208707',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goianira',
            'iso' => '5208806',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goiás',
            'iso' => '5208905',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Goiatuba',
            'iso' => '5209101',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Gouvelândia',
            'iso' => '5209150',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Guapó',
            'iso' => '5209200',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Guaraíta',
            'iso' => '5209291',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Guarani de Goiás',
            'iso' => '5209408',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Guarinos',
            'iso' => '5209457',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Heitoraí',
            'iso' => '5209606',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Hidrolândia',
            'iso' => '5209705',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Hidrolina',
            'iso' => '5209804',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Iaciara',
            'iso' => '5209903',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Inaciolândia',
            'iso' => '5209937',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Indiara',
            'iso' => '5209952',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Inhumas',
            'iso' => '5210000',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ipameri',
            'iso' => '5210109',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ipiranga de Goiás',
            'iso' => '5210158',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Iporá',
            'iso' => '5210208',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Israelândia',
            'iso' => '5210307',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itaberaí',
            'iso' => '5210406',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itaguari',
            'iso' => '5210562',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itaguaru',
            'iso' => '5210604',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itajá',
            'iso' => '5210802',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itapaci',
            'iso' => '5210901',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itapirapuã',
            'iso' => '5211008',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itapuranga',
            'iso' => '5211206',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itarumã',
            'iso' => '5211305',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itauçu',
            'iso' => '5211404',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Itumbiara',
            'iso' => '5211503',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ivolândia',
            'iso' => '5211602',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jandaia',
            'iso' => '5211701',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jaraguá',
            'iso' => '5211800',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jataí',
            'iso' => '5211909',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jaupaci',
            'iso' => '5212006',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jesúpolis',
            'iso' => '5212055',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Joviânia',
            'iso' => '5212105',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Jussara',
            'iso' => '5212204',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Lagoa Santa',
            'iso' => '5212253',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Leopoldo de Bulhões',
            'iso' => '5212303',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Luziânia',
            'iso' => '5212501',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mairipotaba',
            'iso' => '5212600',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mambaí',
            'iso' => '5212709',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mara Rosa',
            'iso' => '5212808',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Marzagão',
            'iso' => '5212907',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Matrinchã',
            'iso' => '5212956',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Maurilândia',
            'iso' => '5213004',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mimoso de Goiás',
            'iso' => '5213053',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Minaçu',
            'iso' => '5213087',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mineiros',
            'iso' => '5213103',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Moiporá',
            'iso' => '5213400',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Monte Alegre de Goiás',
            'iso' => '5213509',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Montes Claros de Goiás',
            'iso' => '5213707',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Montividiu',
            'iso' => '5213756',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Montividiu do Norte',
            'iso' => '5213772',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Morrinhos',
            'iso' => '5213806',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Morro Agudo de Goiás',
            'iso' => '5213855',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mossâmedes',
            'iso' => '5213905',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mozarlândia',
            'iso' => '5214002',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mundo Novo',
            'iso' => '5214051',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Mutunópolis',
            'iso' => '5214101',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nazário',
            'iso' => '5214408',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nerópolis',
            'iso' => '5214507',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Niquelândia',
            'iso' => '5214606',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova América',
            'iso' => '5214705',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Aurora',
            'iso' => '5214804',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Crixás',
            'iso' => '5214838',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Glória',
            'iso' => '5214861',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Iguaçu de Goiás',
            'iso' => '5214879',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Roma',
            'iso' => '5214903',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Nova Veneza',
            'iso' => '5215009',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Novo Brasil',
            'iso' => '5215207',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Novo Gama',
            'iso' => '5215231',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Novo Planalto',
            'iso' => '5215256',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Orizona',
            'iso' => '5215306',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ouro Verde de Goiás',
            'iso' => '5215405',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Ouvidor',
            'iso' => '5215504',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Padre Bernardo',
            'iso' => '5215603',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Palestina de Goiás',
            'iso' => '5215652',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Palmeiras de Goiás',
            'iso' => '5215702',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Palmelo',
            'iso' => '5215801',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Palminópolis',
            'iso' => '5215900',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Panamá',
            'iso' => '5216007',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Paranaiguara',
            'iso' => '5216304',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Paraúna',
            'iso' => '5216403',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Perolândia',
            'iso' => '5216452',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Petrolina de Goiás',
            'iso' => '5216809',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Pilar de Goiás',
            'iso' => '5216908',
        ]);
        City::create([
        'state_id' => '9',
        'title' => 'Piracanjuba',
        'iso' => '5217104',
        ]);
        City::create([
        'state_id' => '9',
        'title' => 'Piranhas',
        'iso' => '5217203',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Pirenópolis',
            'iso' => '5217302',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Pires do Rio',
            'iso' => '5217401',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Planaltina',
            'iso' => '5217609',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Pontalina',
            'iso' => '5217708',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Porangatu',
            'iso' => '5218003',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Porteirão',
            'iso' => '5218052',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Portelândia',
            'iso' => '5218102',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Posse',
            'iso' => '5218300',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Professor Jamil',
            'iso' => '5218391',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Quirinópolis',
            'iso' => '5218508',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Rialma',
            'iso' => '5218607',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Rianápolis',
            'iso' => '5218706',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Rio Quente',
            'iso' => '5218789',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Rio Verde',
            'iso' => '5218805',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Rubiataba',
            'iso' => '5218904',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Sanclerlândia',
            'iso' => '5219001',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Bárbara de Goiás',
            'iso' => '5219100',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Cruz de Goiás',
            'iso' => '5219209',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Fé de Goiás',
            'iso' => '5219258',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Helena de Goiás',
            'iso' => '5219308',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Isabel',
            'iso' => '5219357',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Rita do Araguaia',
            'iso' => '5219407',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Rita do Novo Destino',
            'iso' => '5219456',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Rosa de Goiás',
            'iso' => '5219506',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Tereza de Goiás',
            'iso' => '5219605',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santa Terezinha de Goiás',
            'iso' => '5219704',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santo Antônio da Barra',
            'iso' => '5219712',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santo Antônio de Goiás',
            'iso' => '5219738',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Santo Antônio do Descoberto',
            'iso' => '5219753',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Domingos',
            'iso' => '5219803',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Francisco de Goiás',
            'iso' => '5219902',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São João D\'aliança',
            'iso' => '5220009',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São João da Paraúna',
            'iso' => '5220058',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Luís de Montes Belos',
            'iso' => '5220108',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Luíz do Norte',
            'iso' => '5220157',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Miguel do Araguaia',
            'iso' => '5220207',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Miguel do Passa Quatro',
            'iso' => '5220264',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Patrício',
            'iso' => '5220280',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'São Simão',
            'iso' => '5220405',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Senador Canedo',
            'iso' => '5220454',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Serranópolis',
            'iso' => '5220504',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Silvânia',
            'iso' => '5220603',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Simolândia',
            'iso' => '5220686',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Sítio D\'abadia',
            'iso' => '5220702',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Taquaral de Goiás',
            'iso' => '5221007',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Teresina de Goiás',
            'iso' => '5221080',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Terezópolis de Goiás',
            'iso' => '5221197',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Três Ranchos',
            'iso' => '5221304',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Trindade',
            'iso' => '5221403',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Trombas',
            'iso' => '5221452',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Turvânia',
            'iso' => '5221502',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Turvelândia',
            'iso' => '5221551',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Uirapuru',
            'iso' => '5221577',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Uruaçu',
            'iso' => '5221601',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Uruana',
            'iso' => '5221700',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Urutaí',
            'iso' => '5221809',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Valparaíso de Goiás',
            'iso' => '5221858',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Varjão',
            'iso' => '5221908',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Vianópolis',
            'iso' => '5222005',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Vicentinópolis',
            'iso' => '5222054',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Vila Boa',
            'iso' => '5222203',
        ]);
        City::create([
            'state_id' => '9',
            'title' => 'Vila Propício',
            'iso' => '5222302',
        ]);
        City::create([
            'state_id' => '7',
            'title' => 'Brasília',
            'iso' => '5300108',
        ]);
        City::create([
            'state_id' => '14',
            'title' => 'Mojuí dos Campos',
            'iso' => '1504752',
        ]);
        City::create([
            'state_id' => '17',
            'title' => 'Nazaria',
            'iso' => '2206720',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Pescaria Brava',
            'iso' => '4212650',
        ]);
        City::create([
            'state_id' => '24',
            'title' => 'Balneário Rincão',
            'iso' => '4220000',
        ]);
        City::create([
            'state_id' => '23',
            'title' => 'Pinto Bandeira',
            'iso' => '4314548',
        ]);
        City::create([
            'state_id' => '12',
            'title' => 'Paraíso das Aguás',
            'iso' => '5006275',
        ]);
    }

}
