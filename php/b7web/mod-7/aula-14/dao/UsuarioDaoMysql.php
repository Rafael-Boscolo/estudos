<?php
require_once __DIR__."\\..\\classes\\Usuario.php";

class UsuarioDaoMysql implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $drive) { 
        $this->pdo = $drive;
    }

    // Adicionar usuário ao Banco de Dados
    public function add(Usuario $u) {
        $sql = $this->pdo->prepare('INSERT INTO usuarios (name, email) VALUES (:name, :email)');
        $sql->bindValue(':name', $u->getName());
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
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

    // Verifica se já tem um cadastro de email, caso tenha, não add
    public function findByEmail($email) {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setName($data['name']);
            $u->setEmail($data['email']);
            
            return $u;

        } else {
            return false;
        }

    } 
    
    public function findById($id) {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setName($data['name']);
            $u->setEmail($data['email']);
            
            return $u;

        } else {

            return false;

        }

    }
    
    public function update(Usuario $u) {

        $sql = $this->pdo->prepare('UPDATE usuarios SET name=:name, email=:email WHERE id=:id');
        $sql->bindValue(':name', $u->getName());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':id', $u->getId());
        $sql->execute();

        return true;
    }
    
    public function delete($id) {
    
        $sql = $this->pdo->prepare('DELETE FROM usuarios WHERE id=:id');
        $sql->bindValue(':id', $id);
        $sql->execute();

    }
}