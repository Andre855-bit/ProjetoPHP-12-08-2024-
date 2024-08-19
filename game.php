
<?php /*

function rolarDados($expressao) {
    $partes = preg_split('/([+-])/', $expressao, -1, PREG_SPLIT_DELIM_CAPTURE);
    $total = 0;

    foreach ($partes as $parte) {
        $parte = trim($parte);
        
        if (preg_match('/^(\d*)d(\d+)$/', $parte, $matches)) {
            $quantidade = $matches[1] ?: 1;
            $lados = $matches[2];

            for ($i = 0; $i < $quantidade; $i++) {
                $total += rand(1, $lados);
            }
        } elseif (preg_match('/^[+-]\d+$/', $parte)) {
            $total += intval($parte);
        }
    }

    return $total;
}

    class Jogador {
    public $nome;
    public $vida;
    public $forca;
    public $evasao;
    public $defesa;
    public $dano; 

    public function __construct($nome, $vida, $forca, $evasao, $defesa, $dano) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->forca = $forca;
        $this->evasao = $evasao;
        $this->defesa = $defesa;
    }

    while(hp_player > 0 && num_inimig < 0):

        for(turno = 0, turno < i, ++turno){
            echo "<button onclick="">Atacar</button><button onclick="">Habilidades</button><button onclick="">Curar</button><button onclick="">Reviver</button>"
        }
    endwhile;
    
 ?>

 <form method="post">
    <button type="submit" name="atacar_jogador1">Jogador 1 Atacar</button>
    <button type="submit" name="atacar_jogador2">Jogador 2 Atacar</button>
</form>*/

<?php

// Função para rolar dados
function rolarDados($expressao) {
    $partes = preg_split('/([+-])/', $expressao, -1, PREG_SPLIT_DELIM_CAPTURE);
    $total = 0;

    foreach ($partes as $parte) {
        $parte = trim($parte);
        
        if (preg_match('/^(\d*)d(\d+)$/', $parte, $matches)) {
            $quantidade = $matches[1] ?: 1;
            $lados = $matches[2];

            for ($i = 0; $i < $quantidade; $i++) {
                $total += rand(1, $lados);
            }
        } elseif (preg_match('/^[+-]\d+$/', $parte)) {
            $total += intval($parte);
        }
    }

    return $total;
}

// Classe Jogador
class Jogador {
    public $nome;
    public $vida;
    public $forca;
    public $evasao;
    public $defesa;
    public $dano;

    public function __construct($nome, $vida, $forca, $evasao, $defesa, $dano) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->forca = $forca;
        $this->evasao = $evasao;
        $this->defesa = $defesa;
        $this->dano = $dano;
    }

    public function atacar($alvo) {
        // Rola os dados de ataque e defesa
        $dadoAtaque = rolarDados('1' . $this->forca);
        $dadoDefesa = rolarDados('1' . $alvo->evasao);

        echo "{$this->nome} rola {$dadoAtaque} no ataque.<br>";
        echo "{$alvo->nome} rola {$dadoDefesa} na defesa.<br>";

        // Verifica se o ataque foi bem-sucedido
        if ($dadoAtaque > $dadoDefesa) {
            // Aplica o dano ao alvo
            $alvo->vida -= $this->dano;
            echo "{$this->nome} ataca com sucesso e causa {$this->dano} ponto(s) de dano a {$alvo->nome}!<br>";
        } else {
            echo "{$this->nome} falha no ataque.<br>";
        }
    }
}

// Cria os jogadores
$jogador1 = new Jogador("Jogador 1", 10, d6, d4, 2, 1);
$jogador2 = new Jogador("Jogador 2", 10, d8, d8, 3, 1);

// Verifica se um dos botões foi pressionado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['atacar_jogador1'])) {
        $jogador1->atacar($jogador2);
    } elseif (isset($_POST['atacar_jogador2'])) {
        $jogador2->atacar($jogador1);
    }
}

// Checa se algum jogador foi derrotado
if ($jogador1->vida <= 0) {
    echo "{$jogador2->nome} venceu a batalha!<br>";
} elseif ($jogador2->vida <= 0) {
    echo "{$jogador1->nome} venceu a batalha!<br>";
} else {
    echo "<br>Vida de {$jogador1->nome}: {$jogador1->vida}<br>";
    echo "Vida de {$jogador2->nome}: {$jogador2->vida}<br>";
    echo '<form method="post">
            <button type="submit" name="atacar_jogador1">Jogador 1 Atacar</button>
            <button type="submit" name="atacar_jogador2">Jogador 2 Atacar</button>
          </form>';
}

?>