<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController
{
    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
       
    }

    public function view()
    {
        return view('admin/listaDeUsuarios');
    }

    public function createUsers()
    {
        if($this->verifiesIfEmailAlreadyExists($_POST['email'])) {
            $_SESSION['email_error'] = 'O email enviado já existe';
            header('Location: /listaDeUsuarios');
            exit();
        }

        $parametros = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        App::get('database')->insertUsuarios($parametros);
        header('Location: /listaDeUsuarios');
    }

    public function show()
    {
        if(isset($_GET['pagina'])){
            $page = $_GET['pagina'] ?? 1;

            if(intval($_GET['pagina']) <= 0){
                $page = 1;
            }
        }else{
            $page = 1;
        }

        $qtd_users = 6;
        //Operador de colascência nula para caso o GET['pagina'] seja NULL. 

        $start = $page - 1;
        $start *= $qtd_users;

        $users = App::get('database')->selectAll('users');
        $total_users = count($users);

        //Pegar o teto da divisão  
        $total_pages = ceil($total_users/$qtd_users);

        $users = App::get('database')->pagination('users', $start, $qtd_users);

        $identificador = 'listaDeUsuarios';
        
        return view('admin/listaDeUsuarios', compact('users', 'total_pages', 'qtd_users', 'total_users', 'start', 'page', 'identificador'));

        // return view('admin/listaDeUsuarios', $usersList);
    }

    public function deleteUsers()
    {
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /listaDeUsuarios');
    }

    public function editUsers()
    {
        $parametros = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => hash("sha512", $_POST['password'])
        ];

        App::get('database')->editUsers($parametros);
        header('Location: /listaDeUsuarios');
    }

    private function verifiesIfEmailAlreadyExists($emailDoUsuario)
    {
        return App::get('database')->search('users', 'email', $emailDoUsuario);
    }

}
