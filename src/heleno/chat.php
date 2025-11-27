<?php
header("Content-Type: application/json");

// Lê a entrada bruta e salva para debug
$raw = file_get_contents("php://input");
file_put_contents("debug_input.txt", $raw);

$input = json_decode($raw, true);
$pergunta = $input["pergunta"] ?? null;

if (!$pergunta) {
    echo json_encode(["resposta" => "Nenhuma pergunta recebida."]);
    exit;
}

// SUA CHAVE GROQ
$token = "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";

$payload = [
    "model" => "llama-3.1-8b-instant",
    "messages" => [
        ["role" => "user", "content" => $pergunta]
    ]
];


$ch = curl_init("https://api.groq.com/openai/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $token"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

$result = curl_exec($ch);

// Salva o que a API realmente respondeu
file_put_contents("debug_api_response.txt", $result ?: "SEM RETORNO");

if (curl_errno($ch)) {
    echo json_encode([
        "resposta" => "Erro ao conectar com a API da Groq.",
        "debug" => curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

// Decodifica a resposta
$data = json_decode($result, true);

// Verifica se veio erro da API
if (isset($data["error"])) {
    echo json_encode([
        "resposta" => "Erro da API",
        "erro" => $data["error"],
        "raw" => $result
    ]);
    exit;
}

// Verifica se veio resposta
if (!isset($data["choices"][0]["message"]["content"])) {
    echo json_encode([
        "resposta" => "A IA não retornou resposta.",
        "raw" => $result
    ]);
    exit;
}

$resposta = $data["choices"][0]["message"]["content"];

echo json_encode(["resposta" => $resposta]);
