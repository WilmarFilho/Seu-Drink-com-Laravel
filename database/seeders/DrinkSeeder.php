<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drink;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Drink::create([
            'nome' => 'moscow mule',
            'img' => 'imagens/drinks/moscowmule.jpg',
            'preparo' => 'Em uma caneca de cobre, coloque o suco de limão, o xarope, a Angostura, a vodka, o gelo e misture bem.*Adicione a espuma por cima do drink e sirva.',
            'bebida' => '2 dash de angostura bitter',
            'bebida_adicional' => '50 ml de vodka',
            'suco_fruta' => '20 ml de suco de limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '20 ml de xarope de açúcar',
            'ingrediente_adicional_1' => 'Gelo a gosto',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'mojito tradicional',
            'img' => 'imagens/drinks/mojitotradicional.jpg',
            'preparo' => 'Em um copo, adicione o suco de limão, o açúcar e misture para dissolver.*Com um pilão ou com as mãos, macere as folhas de hortelã, coloque no copo e misture.*Acrescente o rum e misture.*Coloque o gelo e complete com a água com gás.*Decore com folhas de hortelã e sirva.',
            'bebida' => '50 ml de rum branco',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '25 ml de suco de limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1 colher de sopa rasa de açúcar',
            'ingrediente_adicional_1' => 'Água com gás a gosto',
            'ingrediente_adicional_2' => '10 folhas de hortelã',
        ]);

        Drink::create([
            'nome' => 'manhattan',
            'img' => 'imagens/drinks/manhattan.jpg',
            'preparo' => 'Na coqueteleira, coloque todos os ingredientes e bata.*Transfira o drink para um cálice e decore.*Agora é só servir.',
            'bebida' => '1/4 de dose de whisky',
            'bebida_adicional' => '3/4 de dose de vermute',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'ND',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'sex on the beach',
            'img' => 'imagens/drinks/sexonthebeach.jpg',
            'preparo' => 'Em uma coqueteleira, coloque a vodka, o licor, o suco de laranja e bata.*Adicione o gelo e misture.*Separe um copo de drink grande e despeje metade da groselha.*Transfira a mistura da coqueteleira para o copo e finalize com o restante da groselha.',
            'bebida' => '1 dose de vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/2 dose de licor de pêssego',
            'suco_fruta_adicional' => '1 dose de suco de laranja',
            'ingrediente' => '3 cubos de gelo',
            'ingrediente_adicional_1' => '1/2 dose de xarope de groselha',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'mimosa',
            'img' => 'imagens/drinks/mimosa.jpg',
            'preparo' => 'Coloque todos os ingredientes em uma taça e misture delicadamente.*',
            'bebida' => 'três partes de espumante',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'Uma parte de suco de laranja',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'ND',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'bellini',
            'img' => 'imagens/drinks/bellini.jpg',
            'preparo' => 'Higienize os pêssegos, descasque-os, retire seus caroços e transfira para um liquidificador.*Adicione o licor e bata até misturar.*Despeje o líquido igualmente em 4 taças e complete elas com a champanhe.',
            'bebida' => 'champanhe gelado o quanto bastar',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '2 pêssegos maduros gelados',
            'suco_fruta_adicional' => '1/2 dose de licor de pêssego',
            'ingrediente' => 'ND',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]); 

        Drink::create([
            'nome' => 'dry martini',
            'img' => 'imagens/drinks/drymartini.jpg',
            'preparo' => 'Em um copo largo cheio de gelo, coloque o gin, o vermute e misture delicadamente com uma colher bailarina até ficar bem gelado.*Transfira para uma taça, mas sem os gelos.*Torça uma casca de limão-siciliano nas bordas da taça e decore com a azeitona.',
            'bebida' => '150 ml de gin',
            'bebida_adicional' => '25 ml de vermute seco',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'Cubos de gelo a gosto',
            'ingrediente_adicional_1' => '1 azeitona para decorar',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'negroni',
            'img' => 'imagens/drinks/negroni.jpg',
            'preparo' => 'Em um recipiente com gelo, acrescente partes iguais (de 30 ml cada), de gin, Campari e vermute tinto.*Em seguida, misture a bebida com uma colher.*Acrescente mais gelo e uma casca de laranja.',
            'bebida' => 'gin',
            'bebida_adicional' => 'campari',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'laranja para decorar',
            'ingrediente_adicional_1' => 'gelo',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'daiquiri',
            'img' => 'imagens/drinks/daiquiri.jpg',
            'preparo' => 'Em uma coqueteleira, coloque todos os ingredientes e misture bem chacoalhando.*Coe a bebida e despeje em uma taça bem gelada.*Adicione algumas pedras de gelo e decore a taça com limão.',
            'bebida' => '60 ml de rum',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '30 ml de suco de limão taiti fresco',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '15 ml de xarope simples',
            'ingrediente_adicional_1' => 'gelo a gosto',
            'ingrediente_adicional_2' => 'rodelas de limão para decorar',
        ]);

        Drink::create([
            'nome' => 'cosmopolitan ',
            'img' => 'imagens/drinks/cosmopolitan .jpg',
            'preparo' => 'Na coqueteleira, coloque o de suco de limão, o de suco de cranberry e misture.*Em seguida, adicione o licor de laranja, a vodka e misture bem.*Acrescente o gelo na coqueteleira e mexa bem.*Coe a bebida e sirva-a em uma taça já gelada.*Decore com um pedaço de casca de laranja.',
            'bebida' => '50 ml de vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '10 ml de suco de limão',
            'suco_fruta_adicional' => '15 ml de licor de laranja',
            'ingrediente' => 'cascas de laranja para decorar',
            'ingrediente_adicional_1' => 'gelo a gosto
            ',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'aperol spritz',
            'img' => 'imagens/drinks/aperolspritz.jpg',
            'preparo' => 'Coloque bastante gelo em uma taça, despeje o aperol e misture.*Complete a taça com espumante e água com gás.',
            'bebida' => 'duas partes de aperol',
            'bebida_adicional' => 'uma parte de espumante',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo o quanto baste',
            'ingrediente_adicional_1' => 'uma parte de água com gás ou club soda',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'cuba libre',
            'img' => 'imagens/drinks/cubalibre.jpg',
            'preparo' => 'ND',
            'bebida' => '50 ml de rum',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/2 limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo',
            'ingrediente_adicional_1' => 'coca-Cola a gosto',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'piña colada',
            'img' => 'imagens/drinks/pinacolada.jpg',
            'preparo' => 'Coloque tudo em uma coqueteleira, exceto o gelo, e agite até obter uma mistura cremosa.*Transfira a bebida para um copo (ou taça), e adicione o gelo. Aproveite!',
            'bebida' => '50 ml de rum',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '100 ml de suco de abacaxi',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '50 ml de leite de coco',
            'ingrediente_adicional_1' => '1 colher de sopa de açúcar',
            'ingrediente_adicional_2' => 'cubos de gelo a gosto',
        ]);

        Drink::create([
            'nome' => 'basil smash',
            'img' => 'imagens/drinks/basilsmash.jpg',
            'preparo' => 'Em copo ou coqueteleira, adicione o manjericão e macere.*Acrescente o gin, o sumo de limão, o xarope de açúcar, 4 pedras de gelo e misture bem.*Coe o líquido e transfira para um copo com gelo.',
            'bebida' => '60 ml de gin',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '30 ml de sumo de limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '2 ramos de manjericão',
            'ingrediente_adicional_1' => '30 ml de xarope de açúcar',
            'ingrediente_adicional_2' => 'gelo a gosto',
        ]);

        Drink::create([
            'nome' => 'sangria',
            'img' => 'imagens/drinks/sangria.jpg',
            'preparo' => 'Na panela, coloque a água, o açúcar e leve ao fogo até dissolver.*Deixe esfriar completamente e reserve.*Em uma jarra, coloque as frutas, o conhaque, o licor e deixe marinar por 20 minutos.*Adicione o xarope de açúcar feito anteriormente, o vinho e misture bem.',
            'bebida' => '1/4 de xícara de chá de conhaque',
            'bebida_adicional' => '1 garrafa de vinho tinto gelado',
            'suco_fruta' => '6 pêssegos picados e sem casca',
            'suco_fruta_adicional' => '2 maçãs cortadas em cubos sem casca',
            'ingrediente' => '1/2 xícara de chá de açúcar',
            'ingrediente_adicional_1' => '1/2 xícara de chá de água',
            'ingrediente_adicional_2' => '1/4 de xícara de chá de licor de laranja',
        ]);

        Drink::create([
            'nome' => 'caipirinha de morango',
            'img' => 'imagens/drinks/.caipirinhademorangojpg',
            'preparo' => 'Coloque os morangos e o açúcar e um copo.*Macere bem até a fruta soltar o sumo e se misturar com o açúcar.*Acrescente o gelo, a cachaça e misture, delicadamente, para que os morangos se espalhem pela bebida.',
            'bebida' => '1 dose de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '5 morangos cortados em cubinhosD',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => '1 colher de sopa de açúcar',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirinha de maracujá',
            'img' => 'imagens/drinks/caipirinhademaracuja.jpg',
            'preparo' => 'Em uma coqueteleira, coloque a polpa do maracujá, o açúcar, o gelo, a cachaça e agite bem.',
            'bebida' => '1 dose de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1 maracujá',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => '2 colheres de sopa de açúcar',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirinha de cerveja',
            'img' => 'imagens/drinks/caipirinhadecerveja.jpg',
            'preparo' => 'Higienize o limão, corte ele em 4 partes e retire a parte branca.*Coloque as partes do limão em 2 copos (2 pedaços em cada).*Adicione o açúcar e macere bem com um socador.*Acrescente a cerveja, a cachaça, o gelo e misture bem.',
            'bebida' => '60 ml de cachaça (vodka, rum ou tequila)',
            'bebida_adicional' => '1 unidade de cerveja',
            'suco_fruta' => '1 limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirinha com leite condensado',
            'img' => 'imagens/drinks/caipirinhaleitecondensado.jpg',
            'preparo' => 'Esprema os limões e extraia o suco deles.*Transfira para o liquidificador, adicione o leite condensado, a cachaça, o gelo e bata por cerca de 1 a 2 minutos.',
            'bebida' => '200 ml de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '4 limões',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1 lata de leite condensado',
            'ingrediente_adicional_1' => 'gelo a gosto',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'frozen Rosé',
            'img' => 'imagens/drinks/frozenrose.jpg',
            'preparo' => 'No liquidificador, adicione os morangos, o vinho, o xarope de açúcar e o sumo de limão.*Bata até misturar tudo muito bem.',
            'bebida' => '250 ml de vinho rosé',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '6 morangos congelados',
            'suco_fruta_adicional' => '10 ml de sumo de limão',
            'ingrediente' => '25 ml de xarope de açúcar',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'lagoa azul',
            'img' => 'imagens/drinks/lagoaazul.jpg',
            'preparo' => 'Coloque o gelo e as rodelas de limão no copo.*Adicione a vodka e o Curaçao Blue.*Complete o copo com o refrigerante.',
            'bebida' => '50 ml de vodka',
            'bebida_adicional' => '45 ml de Curaçao Blue',
            'suco_fruta' => '3 rodelas de limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => '100 ml de refrigerante de limão',
            'ingrediente_adicional_2' => 'ND',
        ]);*/

       

        Drink::create([
            'nome' => 'old fashioned',
            'img' => 'imagens/drinks/oldfashioned.jpg',
            'preparo' => 'Em um copo baixo, coloque o cubo de açúcar, o bitter, algumas gotas de água e macere bem.*Adicione cubos de gelo, o whiskey e misture delicadamente.*Decore o copo com a fatia de laranja e sirva.',
            'bebida' => '45 ml de whisky bourbon',
            'bebida_adicional' => '2 gotas de bitter Angostura',
            'suco_fruta' => '1 fatia de laranja ou cereja fresca',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1 cubo de açúcar (ou 10 ml de xarope simples)',
            'ingrediente_adicional_1' => 'cubos de gelo a gosto',
            'ingrediente_adicional_2' => 'algumas gostas água (para hidratar o açúcar)',
        ]);

          Drink::create([
            'nome' => 'caipirinha de frutas vermelhas',
            'img' => 'imagens/drinks/caipirinhadefrutasvermelhas.jpg',
            'preparo' => 'Em um copo, coloque as frutas, o açúcar e macere com um socador.*Adicione a dose de cachaça e misture bem.*Complete o copo com gelo e sirva.',
            'bebida' => '1 dose de cachaça (ou vodka)',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '4 morangos pequenos',
            'suco_fruta_adicional' => '4 framboesas',
            'ingrediente' => 'cubos de gelo a gosto',
            'ingrediente_adicional_1' => '1 colher de sopa de açúcar',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirinha de abacaxi com hortelã',
            'img' => 'imagens/drinks/caipirinhadeabacaxicomhortela.jpg',
            'preparo' => 'Retire a coroa e a tampa do abacaxi.*Com uma faca de serra, vá retirando todo o miolo para transformar ele em um “copo”.*Pique o miolo do abacaxi e transfira para um coqueteleira.*Adicione as folhas de hortelãs, o açúcar e macere bem.*Acrescente o gelo, a vodka, feche a coqueteleira e chacoalhe bem.*Despeje a caipirinha no “copo” de abacaxi e decore como preferir.',
            'bebida' => '2 doses de vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1 abacaxi',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'folhas de hortelã a gosto',
            'ingrediente_adicional_1' => '2 colheres de sopa de açúcar',
            'ingrediente_adicional_2' => 'pedras de gelo a gosto',
        ]);

        Drink::create([
            'nome' => 'caipirinha de limão, gengibre e mel',
            'img' => 'imagens/drinks/Caipirinhadegengibre.jpg',
            'preparo' => 'Corte a metade do limão em 4 pedaços e retire as partes brancas.*Transfira para uma coqueteleira, adicione o mel e o gengibre.*Macere e misture os ingredientes.*Acrescente a vodka, pedras de gelo, feche e bata.*Desepeje em um copo e enfeite com limão.',
            'bebida' => '50 ml de vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/2 limão siciliano',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => '3 colheres de sopa de mel',
            'ingrediente_adicional_2' => '1 pedaço de gengibre picado a gosto em pedaços',
        ]);

        Drink::create([
            'nome' => 'caipirinha de lichia',
            'img' => 'imagens/drinks/caipirinhadelichia.jpg',
            'preparo' => 'Em uma coqueteleira (ou em um copo), coloque as lichias e macere levemente.*Adicione a cachaça, o açúcar, o gelo e misture bem.',
            'bebida' => '60 ml de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '6 lichias, sem a casca',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '2 colheres de sopa de açúcar',
            'ingrediente_adicional_1' => 'gelo a gosto',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirinha de cajá',
            'img' => 'imagens/drinks/caipirinhadecajá.jpg',
            'preparo' => 'No liquidificador, bata a polpa de cajá com cachaça, açúcar e gelo até obter uma mistura homogênea.*Coloque a bebida em um copo com gelo.',
            'bebida' => '50 ml de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/2 polpa de cajá',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1 e 1/2 colher de açúcar',
            'ingrediente_adicional_1' => 'gelo a gosto',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'caipirosca nevada',
            'img' => 'imagens/drinks/caipiroscanevada.jpg',
            'preparo' => 'Coloque todo o sumo de limão, o gelo, a vodka no liquidificador e bata.*Despeje em uma taça e decore com chantilly e raspas de limão.',
            'bebida' => 'vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'sumo de limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'chantilly',
            'ingrediente_adicional_1' => 'raspas de limão para finalizar',
            'ingrediente_adicional_2' => 'gelo',
        ]);

        Drink::create([
            'nome' => 'clericot com vinho branco',
            'img' => 'imagens/drinks/clericotcomvinhobranco.jpg',
            'preparo' => 'Retire a casca do abacaxi e corte a poupa em cubinhos.*Descasque a laranja, corte os seus gomos. Cada gomo, corte em 3 partes.*Em um jarro, adicione as frutas cortadas, o vinho branco, complete o recipiente com a água com gás e misture bem.*Decore com o raminho de hortelã e leve para a geladeira por cerca de 20 minutos.',
            'bebida' => '750ml de vinho branco seco',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/2 abacaxi',
            'suco_fruta_adicional' => '2 laranjas',
            'ingrediente' => 'água com gás',
            'ingrediente_adicional_1' => 'Um raminho de hortelã',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'vinho quente',
            'img' => 'imagens/drinks/vinhoquente.jpg',
            'preparo' => 'Em uma panela, coloque todos os ingredientes e misture bem.*Ligue o fogo e deixe esquentar, mas não ferver.',
            'bebida' => '1 litro de vinho tinto',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '5 cravos-da-índia',
            'ingrediente_adicional_1' => '2 pedaços de casca de canela',
            'ingrediente_adicional_2' => '1/2 xícara de chá de açúcar',
        ]);

        Drink::create([
            'nome' => 'twist de melancia e morangos',
            'img' => 'imagens/drinks/twistdemelanciajpg',
            'preparo' => 'Separe uma taça de vinho grande, coloque os morangos, a vodka, o xarope, o gelo e termine de encher a taça com energético de melancia.*Com cuidado, misture com uma colher e finalize com a pimenta rosa.',
            'bebida' => '1 dose de vodka',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '50 gramas de morangos',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1 dose de xarope de groselha',
            'ingrediente_adicional_1' => '1 lata de energético sabor melancia',
            'ingrediente_adicional_2' => 'pimenta rosa a gosto',
        ]);

        Drink::create([
            'nome' => 'gin tônica de maracujá',
            'img' => 'imagens/drinks/.jpg',
            'preparo' => 'Em um coqueteleira, adicione cerca de 3 cubos de gelo, metade do maracujá, o gin, o xarope, feche e misture bem por cerca de 2 minutos.*Em um copo, coloque alguns cubos de gelo, o restante do maracujá e a mistura da coqueteleira.*Acrescente a água tônica e misture bem.*Decore com folhas de hortelã e sirva.',
            'bebida' => '50ml de gin',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'polpa de um maracujá pequeno',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'folhas de hortelã',
            'ingrediente_adicional_1' => '30ml de xarope de flor de sabugueiro',
            'ingrediente_adicional_2' => '1/2 xícara de chá de água tônica gelada',
        ]);

        Drink::create([
            'nome' => 'maracujá com gin',
            'img' => 'imagens/drinks/maracujacomgin.jpg',
            'preparo' => 'Em um liquidificador, adicione todos os ingredientes e bata até ficar homogêneo.*Coe o drink, para retirar as sementes e transfira para uma taça.*Decore ela como preferir e está pronto para degustar.',
            'bebida' => '60 ml de gin',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '30 ml de suco de limão',
            'suco_fruta_adicional' => '70 g de polpa de maracujá congelada',
            'ingrediente' => '2 colheres de sopa de açúcar',
            'ingrediente_adicional_1' => '240 ml de leite de coco',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'frozen de limão',
            'img' => 'imagens/drinks/frozendelimão.jpg',
            'preparo' => 'Coloque todos os ingredientes no liquidificador e bata até misturar bem.*Coe e volte para o liquidificador.*Adicione o gelo e bata novamente.',
            'bebida' => '80 ml de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1 limão',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '3 colheres de sopa de açúcar',
            'ingrediente_adicional_1' => '8 folhas de manjericão',
            'ingrediente_adicional_2' => 'gelo a gosto',
        ]);

        Drink::create([
            'nome' => 'ND',
            'img' => 'imagens/drinks/.jpg',
            'preparo' => 'ND',
            'bebida' => 'ND',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'ND',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'fast morango',
            'img' => 'imagens/drinks/fastmorango.jpg',
            'preparo' => 'Em um copo, coloque os morangos, o leite condensado e macere.*Adicione cubos de gelo e complete com a Ice.',
            'bebida' => '1 ice da sua preferência',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '200 gramas de morango picado',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'cubos de gelo a gosto',
            'ingrediente_adicional_1' => '100 ml de leite condensado',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'batida de pitanga',
            'img' => 'imagens/drinks/batidadepitanga.jpg',
            'preparo' => 'Em um liquidificador, adicione todos os ingredientes e bata até ficar bem homogêneo.*Transfira para um copo, acrescente o gelo e decore como preferir.',
            'bebida' => '1 dose de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '1/4 de suco de limão',
            'suco_fruta_adicional' => '100 gramas de polpa de pitanga',
            'ingrediente' => 'gelo a gosto',
            'ingrediente_adicional_1' => '2 colheres de sopa de leite condensado',
            'ingrediente_adicional_2' => 'ND',
        ]);

        Drink::create([
            'nome' => 'batida de maracujá',
            'img' => 'imagens/drinks/batidademaracuja.jpg',
            'preparo' => 'Em um liquidificador, adicione a poupa de maracujá, a vodca e bata por cerca de 2 minutos.*Coe, para retirar as sementes, e despeje novamente no liquidificador.*Acrescente o açúcar, o leite condensado, o gelo e bata até ficar na consistência que desejar.',
            'bebida' => '200ml de vodka ou cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '250 gramas de polpa de maracujá',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '1/2 caixinha de leite condensado',
            'ingrediente_adicional_1' => '2 colheres de sopa de açúcar',
            'ingrediente_adicional_2' => 'gelo a gosto',
        ]);

        Drink::create([
            'nome' => 'batidinha de caju',
            'img' => 'imagens/drinks/batidinhadecaju.jpg',
            'preparo' => 'No liquidificador, coloque a cachaça, suco de caju, água, açúcar, leite condensado e gelo.*Bata tudo muito bem, até obter uma mistura homogênea e cremosa.*Finalize com gelo.',
            'bebida' => '200 ml de cachaça',
            'bebida_adicional' => 'ND',
            'suco_fruta' => '200 ml de suco de caju concentrado',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => '100 ml de água',
            'ingrediente_adicional_1' => '2 colheres de açúcar',
            'ingrediente_adicional_2' => '1/2 caixinha de leite condensado',
        ]);

        Drink::create([
            'nome' => 'martini tônica',
            'img' => 'imagens/drinks/martinitonica.jpg',
            'preparo' => 'Coloque o gelo em um copo e preencha metade com o vermute.*Misture e deixe gelar.*Acrescente a tônica até encher e decore com rodelas de limão.',
            'bebida' => 'uma parte de vermute branco (seco)',
            'bebida_adicional' => 'uma parte de tônica',
            'suco_fruta' => 'rodelas de limão a gosto',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'bastante gelo',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);

        /*Drink::create([
            'nome' => 'ND',
            'img' => 'imagens/drinks/.jpg',
            'preparo' => 'ND',
            'bebida' => 'ND',
            'bebida_adicional' => 'ND',
            'suco_fruta' => 'ND',
            'suco_fruta_adicional' => 'ND',
            'ingrediente' => 'ND',
            'ingrediente_adicional_1' => 'ND',
            'ingrediente_adicional_2' => 'ND',
        ]);*/


    }
}
