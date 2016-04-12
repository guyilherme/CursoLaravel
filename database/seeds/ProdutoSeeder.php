<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 12/04/2016
 * Time: 15:27
 */

use Illuminate\Database\Seeder;
use  Illuminate\Database\Eloquent\Model;
use CursoLaravel\Produtos;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->truncate();
        $faker=Faker::create();
        foreach (range(1,15)as $i) {
            Produtos::create([
                'nome' => $faker->word,
                'descricao' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'preco' => $faker->randomFloat(['nbMaxDecimals = 1', '$min = 0', '$max = null'] )
            ]);
        }
    }
}