<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Options;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Options::create([
            'bebida' => 'whisky',
            'ingrediente' => 'sal',
            'suco_fruta' => 'limão'
        ]);

        Options::create([
            'bebida' => 'angostura',
            'ingrediente' => 'açucar',
            'suco_fruta' => 'morango'
        ]);

        Options::create([
            'bebida' => 'tequila',
            'ingrediente' => 'gelo',
            'suco_fruta' => 'laranja'
        ]);

        Options::create([
            'bebida' => 'cointreau',
            'ingrediente' => 'hortelão',
            'suco_fruta' => 'abacaxi'
        ]);

        Options::create([
            'bebida' => 'rum branco',
            'ingrediente' => 'água com gás',
            'suco_fruta' => 'uva'
        ]);

        Options::create([
            'bebida' => 'curaçau',
            'ingrediente' => 'xarope de groselha',
            'suco_fruta' => 'pêssego'
        ]);

        Options::create([
            'bebida' => 'vermute',
            'ingrediente' => 'alecrim',
            'suco_fruta' => 'cereja'
        ]);

        Options::create([
            'bebida' => 'espumante',
            'ingrediente' => 'água sem gás',
            'suco_fruta' => 'cranberry'
        ]);

        Options::create([
            'bebida' => 'champanhe',
            'ingrediente' => 'xarope simples',
            'suco_fruta' => 'maçã'
        ]);

        Options::create([
            'bebida' => 'gin',
            'ingrediente' => 'coca-cola',
            'suco_fruta' => 'maracujá'
        ]);

        Options::create([
            'bebida' => 'campari',
            'ingrediente' => 'leite de coco',
            'suco_fruta' => 'framboesa'
        ]);

        Options::create([
            'bebida' => 'vermute tinto',
            'ingrediente' => 'manjericão',
            'suco_fruta' => 'amora'
        ]);

        Options::create([
            'bebida' => 'rum',
            'ingrediente' => 'mel',
            'suco_fruta' => 'carambola'
        ]);

        Options::create([
            'bebida' => 'vinho branco',
            'ingrediente' => 'leite condensado',
            'suco_fruta' => 'cajá'
        ]);

        Options::create([
            'bebida' => 'conhaque',
            'ingrediente' => 'chantily',
            'suco_fruta' => 'lichia'
        ]);

        Options::create([
            'bebida' => 'curaçau blue',
            'ingrediente' => 'sprite',
            'suco_fruta' => 'manga'
        ]);

        Options::create([
            'bebida' => 'cachaça',
            'ingrediente' => 'canela',
            'suco_fruta' => 'pitanga'
        ]);

        Options::create([
            'bebida' => 'martini',
            'ingrediente' => 'energético',
            'suco_fruta' => 'caju'
        ]);
        

    }
}
