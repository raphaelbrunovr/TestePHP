<?php
require_once 'Conexao.php';
class Contatos extends Conexao{
        public $id;
	public $nome;
	public $sobrenome;
	public $email;
	public $dtnascimento;
	public $cargo;
	public $empresa;
	public $telefone;
	public $celular;
	public $bairro;
	public $cidade;
	public $estado;
	public $observacoes;
        
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getSobrenome() {
            return $this->sobrenome;
        }

        function getEmail() {
            return $this->email;
        }

        function getDtnascimento() {
            return $this->dtnascimento;
        }

        function getCargo() {
            return $this->cargo;
        }

        function getEmpresa() {
            return $this->empresa;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getCelular() {
            return $this->celular;
        }

        function getBairro() {
            return $this->bairro;
        }

        function getCidade() {
            return $this->cidade;
        }

        function getEstado() {
            return $this->estado;
        }

        function getObservacoes() {
            return $this->observacoes;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setDtnascimento($dtnascimento) {
            $this->dtnascimento = $dtnascimento;
        }

        function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        function setEmpresa($empresa) {
            $this->empresa = $empresa;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setCelular($celular) {
            $this->celular = $celular;
        }

        function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setObservacoes($observacoes) {
            $this->observacoes = $observacoes;
        }

                
                
    public function ExibirContatos() {
        $conexao = new Conexao();
        $conexao->Abrir();
        $sql = "select * from tbl_contato";
        $resultado = $conexao->mysqli->query($sql);
        while($linha = $resultado->fetch_array()){
        echo "<tr>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['sobrenome']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td>".$linha['dt_nascimento']."</td>";
        echo "<td>".$linha['cargo']."</td>";
        echo "<td>".$linha['empresa']."</td>";
        echo "<td>".$linha['telefone']."</td>";
        echo "<td>".$linha['celular']."</td>";
        echo "<td>".$linha['bairro']."</td>";
        echo "<td>".$linha['cidade']."</td>";
        echo "<td>".$linha['estado']."</td>";
        echo "<td>".$linha['observacoes']."</td>";
        echo "<td><a href='editar_contatos.php?id_contato={$linha["id_contato"]}' class='btn btn-info'>Editar</a></td>";
        echo "<td><a href='inc/deletar.php?id_contato={$linha["id_contato"]}' class='btn btn-danger'>Deletar</a></td>";
        echo "</tr>";    
        }
    }
    public function cadastrarContatos(){
        $conexao = new Conexao();
        $conexao->Abrir();        
        $sql = "insert into tbl_contato (nome, sobrenome, email, dt_nascimento, cargo, empresa, telefone,
                celular, bairro, cidade, estado, observacoes) values ('{$this->getNome()}','{$this->getSobrenome()}',"
                . "'{$this->getEmail()}','{$this->getDtnascimento()}','{$this->getCargo()}','{$this->getEmpresa()}',"
                . "'{$this->getTelefone()}','{$this->getCelular()}','{$this->getBairro()}','{$this->getCidade()}',"
                . "'{$this->getEstado()}','{$this->getObservacoes()}')";
        $conexao->mysqli->query($sql);        
    }
    public function deletarContatos(){
        $conexao = new Conexao();
        $conexao->Abrir();        
        $sql = "delete from tbl_contato WHERE id_contato = '{$this->getId()}'";
        $conexao->mysqli->query($sql);        
    }
    public function editarContatos(){
        $conexao = new Conexao();
        $conexao->Abrir();        
        $sql = "update tbl_contato SET nome = '{$this->getNome()}',sobrenome = '{$this->getSobrenome()}', email = '{$this->getEmail()}',"
        . "dt_nascimento = '{$this->getDtnascimento()}', cargo ='{$this->getCargo()}', empresa='{$this->getEmpresa()}',telefone='{$this->getTelefone()}',"
        . "celular = '{$this->getCelular()}',bairro = '{$this->getBairro()}', cidade='{$this->getEstado()}',observacoes='{$this->getObservacoes()}' where id_contato = '{$this->getId()}'";
        $conexao->mysqli->query($sql); 
    }
    public function ExibirContato() {
        $conexao = new Conexao();
        $conexao->Abrir();
        $sql = "select * from tbl_contato where id_contato = '{$this->getId()}'";
        $resultado = $conexao->mysqli->query($sql);
        while($linha = $resultado->fetch_array()){
        echo "<input type='hidden' name='id_contato' value='{$linha["id_contato"]}'>";
        echo "<label>Nome</label>";
        echo "<input type='text' class='form-control' name='nome' value='{$linha["nome"]}'><br />";
        echo "<label>Sobrenome</label>";
        echo "<input type='text' class='form-control' name='sobrenome' value='{$linha["sobrenome"]}'><br />";
        echo "<label>E-mail</label>";
        echo "<input type='text' class='form-control' name='email' value='{$linha["email"]}'><br />";
        echo "<label>Data Nascimento</label>";
        echo "<input type='text' class='form-control' name='dt_nascimento' value='{$linha["dt_nascimento"]}'><br />";
        echo "<label>Cargo</label>";
        echo "<input type='text' class='form-control' name='cargo' value='{$linha["cargo"]}'><br />";
        echo "<label>Empresa</label>";
        echo "<input type='text' class='form-control' name='empresa' value='{$linha["empresa"]}'><br />";
        echo "<label>Telefone</label>";
        echo "<input type='text' class='form-control' name='telefone' value='{$linha["telefone"]}'><br />";
        echo "<label>Celular</label>";
        echo "<input type='text' class='form-control' name='celular' value='{$linha["celular"]}'><br />";
        echo "<label>Bairro</label>";
        echo "<input type='text' class='form-control' name='bairro' value='{$linha["bairro"]}'><br />";
        echo "<label>Cidade</label>";
        echo "<input type='text' class='form-control' name='cidade' value='{$linha["cidade"]}'><br />";
        echo "<label>Estado</label>";
        echo "<input type='text' class='form-control' name='estado' value='{$linha["estado"]}'><br />";
        echo "<label>Observações</label>";
        echo "<textarea class='form-control' name='observacoes'/>{$linha["observacoes"]}</textarea><br />";
        }
    }
    
}
