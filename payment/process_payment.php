<?php
require 'vendor/autoload.php';

use Square\SquareClient;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;

$accessToken = 'YOUR_ACCESS_TOKEN';

$client = new SquareClient([
    'accessToken' => $accessToken,
    'environment' => 'sandbox', // or 'production' for live transactions
]);

$body = json_decode(file_get_contents('php://input'), true);
$nonce = $body['nonce'];

$paymentsApi = $client->getPaymentsApi();

$money = new \Square\Models\Money();
$money->setAmount(100); // Amount in cents (1.00 USD)
$money->setCurrency('USD');

$body = new CreatePaymentRequest(
    $nonce,
    uniqid(),
);
$body->setAmountMoney($money);

try {
    $response = $paymentsApi->createPayment($body);
    echo json_encode(['message' => 'Payment Successful!']);
} catch (ApiException $e) {
    echo json_encode(['message' => 'Payment Failed: ' . $e->getMessage()]);
}
