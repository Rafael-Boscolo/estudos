<?php
require_once('classes/Usuario.php');

class UsuarioDaoMysql implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $drive) {
        $this->pdo = $drive;
    }


    public function create(Usuario $u) {

    }

    public function findAll() {
        $array = [];

        $sql = $this->pdo->query('SELECT * FROM usuarios');
        if($sql->rowCount()>0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $item) {
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setName($item['name']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }
        return $array;
    }
    
    public function findById($id) {

    }
    
    public function update(Usuario $u) {

    }
    
    public function delete($id) {

    }
}