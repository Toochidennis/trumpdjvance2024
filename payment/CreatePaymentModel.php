require 'vendor/autoload.php';

use Square\SquareClient;
use Square\Exception\ApiException;
use Square\Models\CreatePaymentRequest;

$accessToken = 'EAAAlyuXIAmhLiTKI_49IlnAzVmvoZbXAKtIUrl2vu06dA1FatPICLtcCwE9EFnd';

$client = new SquareClient([
    'accessToken' => $accessToken,
    'environment' => 'sandbox'
    ]);

    