<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Garcia Contabilidade',
            'cnpj' => '12.345.678/0001-25',
            'endereco' => 'Rua XV de Novembro, 159',
            'telefone' => '42 3623-3333',
            'atuacao' => 'Contabilidade',
            'email' => 'contabilidade@contabil.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
