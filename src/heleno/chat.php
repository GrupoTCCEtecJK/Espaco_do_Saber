
<?php
file_put_contents("debug.txt", file_get_contents("php://input"));
header("Content-Type: application/json");

// ler JSON enviado pelo fetch()
$input = json_decode(file_get_contents("php://input"), true);
$pergunta = $input["pergunta"] ?? null;

if (!$pergunta) {
    echo json_encode(["resposta" => "Pergunta vazia."]);
    exit;
}

$token = "SUA_CHAVE_AQUI"; // coloque sua chave nova aqui!!

$payload = [
    "model" => "gemma2-9b-it",
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

if (curl_errno($ch)) {
    echo json_encode(["resposta" => "Erro ao conectar com a IA."]);
    curl_close($ch);
    exit;
}

curl_close($ch);

$data = json_decode($result, true);
$resposta = $data["choices"][0]["message"]["content"] ?? "Sem resposta da IA.";

echo json_encode(["resposta" => $resposta]);
