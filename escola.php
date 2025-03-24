<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <title>Escola PHP</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Sesinho!!</h1>
    </header>

    <main><div id="respostas" class="container ms-2 d-flex flex-column">
    </div></main>

<?php

class Pessoa{
    public $nome;
    public $materia;
    private $nota;

    public function __construct($nome, $materia, $nota)
    {
        $this->nome = $nome;
        $this->materia = $materia;
        $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

class Aluno extends Pessoa{
    public function falar()
    {
        echo "Oi! Meu nome é {$this->nome}, sou aluno e gosto de {$this->materia}.<br>";
    }
}

class Professor extends Pessoa{
    public function falar()
    {
        echo "Oi! Sou o Professor {$this->nome} e dou aula de {$this->materia}.<br>";
    }
}

class Diretor extends Pessoa{
    public function falar()
    {
        echo "Oi! Meu nome é {$this->nome} e sou Diretor.<br>";
    }
}

class Funcionario extends Pessoa{
    public function falar()
    {
        echo "Oi! Sou o funcionário {$this->nome} e sou {$this->materia}.<br>";
    }
}

$luski = new Aluno ("Daniluski", "Matemática", 9);
$lais = new Aluno ("Laís", "Biologia", 10);
$ray = new Aluno ("Rayanne", "Lingua Portuguesa", 10);
$dani = new Aluno ("Danielli", "História", 8);
$zani = new Aluno ("Zanirato", "Matemática", 8);

$guilherme = new Professor ("Guilherme", "Lingua Portuguesa", 7);
$sonia = new Professor ("Sônia", "Matemática", 5);
$re = new Professor ("Renata", "Biologia", 7.5);
$joa = new Professor ("Joacir", "História", 8);

$edi = new Diretor ("Edivânia", "Diretora", 4.5);

$ari = new Funcionario ("Ariadne", "Coordenadora do ensino médio", 8);
$fabi = new Funcionario ("Fabiana", "Coordenadora do ensino fundamental II", 5);


echo $luski -> falar();
echo $lais -> falar();
echo $ray -> falar();
echo $dani -> falar();
echo $zani -> falar();
echo $guilherme -> falar();
echo $sonia -> falar();
echo $re -> falar();
echo $joa -> falar();
echo $edi -> falar();
echo $ari -> falar();
echo $fabi -> falar();

?>

<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>