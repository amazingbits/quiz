<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Models\Quiz;

class Web extends Controller
{
    public function __construct($path = null)
    {
        parent::__construct(__DIR__."/../../public/template");
    }

    public function home()
    {
        $data = [
            "title" => "Quiz"
        ];

        echo $this->view->render("home", $data);
    }

    public function inicio()
    {
        $quiz = new Quiz();
        $todasPerguntas = [];

        $currentQuiz = $quiz->find("quiz", [1], "WHERE ID = ?", "*");

        $query = "SELECT * FROM pergunta WHERE QUIZ = ?";
        $perguntas = $quiz->executeByQuery($query, [1]);
        foreach($perguntas as $key) {
            $idPergunta = $key->ID;
            $enuniado = $key->ENUNCIADO;
            $opcoes = $quiz->executeByQuery("SELECT * FROM opcao WHERE PERGUNTA = ?", [$idPergunta]);
            $current = [
                "enunciado" => $enuniado,
                "opcoes" => $opcoes
            ];
            array_push($todasPerguntas, $current);
        }

        $data = [
            "title" => "Início",
            "currentquiz" => $currentQuiz,
            "perguntas" => $todasPerguntas
        ];

        echo $this->view->render("inicio", $data);
    }

    public function sucesso()
    {
        $pontuacao = 0;
        $total = 0;
        if(isset($_POST)) {
            $total = count($_POST);
            foreach($_POST as $opcao) {
                if($opcao === "S") {
                    $pontuacao++;
                }
            }
        }

        $data = [
            "title" => "Parabéns!",
            "total" => $total,
            "pontuacao" => $pontuacao
        ];

        echo $this->view->render("sucesso", $data);
    }

    public function error($errcode = null)
    {
        $data = [
            "title" => "Ops",
            "errcode" => $errcode
        ];
        echo $this->view->render("error", $data);
    }
}