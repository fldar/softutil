<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'name' => "admin",
        'email' => "softutil2018@gmail.com",
        'password' => bcrypt("util@soft"),
      ];

      if(User::where('name','=',$dados['name'])->count()){
        $usuario = User::where('name','=',$dados['name'])->first();
        $usuario->update($dados);
        echo "Usuario Alterado";
      }else{
        User::create($dados);
        echo "Usuario Criado";
      }
    }
}
