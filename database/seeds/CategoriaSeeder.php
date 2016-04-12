<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 12/04/2016
 * Time: 14:14
 */

use Illuminate\Database\Seeder;
use  Illuminate\Database\Eloquent\Model;
use CursoLaravel\Categoria;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->truncate();
        $faker=Faker::create();
        foreach (range(1,15)as $i) {
            Categoria::create([
                'nome' => $faker->word,
                'descricao' => $faker->sentence($nbWords = 6, $variableNbWords = true)
            ]);
        }
    }
}