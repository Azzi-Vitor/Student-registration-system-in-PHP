<?php
    header('Content-Type: application/json; charset=UTF-8');
    $method = $_SERVER['REQUEST_METHOD'];
    $arquivoAlunos = __DIR__ . '/alunos.json';
    $alunos = file_exists($arquivoAlunos)
        ? json_decode(file_get_contents($arquivoAlunos), true)
        : [];

        

    switch ($method) {
        case 'GET':
            if (!is_array($alunos)) {
                $alunos = [];
            }

            echo json_encode($alunos);
            break;
        case 'POST':

            $dados = json_decode(file_get_contents('php://input'), true);

            if (isset($dados['limpar']) && $dados['limpar'] === true) {

                file_put_contents(
                    $arquivoAlunos,
                    json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
                    LOCK_EX
                );

                echo json_encode(['mensagem' => 'Cadastros limpos com sucesso!']);

                exit;
            }


            if (!isset($dados['nome']) || trim($dados['nome']) === '') {
                http_response_code(400);
                echo json_encode(['erro' => 'Nome nao informado']);
                exit;
            }else
            if (!isset($dados['nota']) || trim($dados['nota']) === '') {
                http_response_code(400);
                echo json_encode(['erro' => 'Nota nao informada']);
                exit;
            }else
            if ($dados['nota']>10 || $dados['nota']<0){
                http_response_code(400);
                echo json_encode(['erro' => 'A nota deve ser entre 0 e 10']);
                exit;
            }else
            if (!isset($dados['disciplina']) || trim($dados['disciplina']) === '') {
                http_response_code(400);
                echo json_encode(['erro' => 'Disciplina nao informada']);
                exit;
            }

            $alunos[] = [
                'nome' => trim($dados['nome']),
                'nota' => trim($dados['nota']),
                'disciplina' => trim($dados['disciplina'])
            ];

            file_put_contents(
                $arquivoAlunos,
                json_encode($alunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
                LOCK_EX
            );

            http_response_code(201);
            echo json_encode($alunos);
            break;
        
        default:
            http_response_code(405);
            echo json_encode([
            'status' => 'nao suportado',
            'descricao' => 'o metodo http utilizado nao eh suportado pelo sistema'
        ]);
        exit;
    }
?>