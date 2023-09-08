<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Astronaut',
                'description' => 'Jouw enige wapens zijn het vermogen, om het gedrag van andere astronauten te analyseren en zodoende aliens te identificeren, en de overtuigingskracht, die nodig is om te voorkomen dat een onschuldige astronauten veroordeeld wordt.',
                'image' => '/images/astronaut.png',
                'percentage' => 0,
                'max' => null
            ],
            [
                'id' => 2,
                'name' => 'Alien',
                'description' => 'Iedere nacht verslinden zij een astronaut. Overdag proberen zij hun nachtelijke gedaante te verbergen en zo aan de wraak van de astronauten te ontsnappen.',               
                'image' => '/images/alien.png',
                'percentage' => 0.20,
                'max' => null
            ],
            [
                'id' => 3,
                'name' => 'Heks',
                'description' => 'Zij kan twee buitengewoon potente toverdrankjes brouwen: levenselixir en vergif. De heks mag beide toverdranken in dezelfde nacht toedienen. Zij mag de toverdranken niet aan dezelfde speler geven. Dit kan betekenen, dat er de volgende morgen géén, één, of twee doden te betreuren zijn.',
                'image' => '/images/heks.png',
                'percentage' => 0.09,
                'max' => 1
            ],
            [
                'id' => 4,
                'name' => 'Ziener',
                'description' => 'Elke nacht kan zij door haar gave achter de ware gedaante van een andere speler komen. Zij zou de andere astronauten moeten helpen, maar discreet blijven om te voorkomen dat zij door de aliens geïdentificeerd wordt.',
                'image' => '/images/ziener.png',
                'percentage' => 0.08,
                'max' => 1
            ],
            [
                'id' => 5,
                'name' => 'Jager',
                'description' => 'Als de jager door aliens verslonden wordt, of door de andere astronauten vermoord wordt, heeft hij nog een kleine surprise. Hij mag, voordat hij de geest geeft, terugslaan door onmiddellijk een andere speler te elimineren.',
                'image' => '/images/jager.png',
                'percentage' => 0.13,
                'max' => 1
            ],
            [
                'id' => 6,
                'name' => 'Cupido',
                'description' => 'Door zijn beroemde pijlen af te schieten, kan Cupido ervoor zorgen, dat twee spelers van zijn keuze voor altijd verliefd op elkaar zijn. In de eerste nacht (de eerste beurt), mag Cupido twee spelers aanwijzen. Cupido mag zichzelf als één van de vrijers aanwijzen.',
                'image' => '/images/cupido.png',
                'percentage' => 0.10,
                'max' => 1
            ],
            [
                'id' => 7,
                'name' => 'Stiekeme Meisje',
                'description' => 'Het meisje mag de aliens bespioneren door \'s nachts door haar wimpers te gluren. Als zij door een alien gesnapt wordt, sterft ze direct (en in stilte) in de plaats van het aangewezen slachtoffer. Het onschuldige meisje mag uitsluitend ‟s nachts spioneren, als de aliens actief zijn.',
                'image' => '/images/stiekemeMeisje.png',
                'percentage' => 0.11,
                'max' => 1
            ]
        ]);
    }
}
