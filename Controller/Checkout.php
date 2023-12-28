<?php
class Checkout{
  public $price = 7000;

    public function viewStripe(){
        $this->Stripe();
    }

    private function Stripe(){
        require __DIR__ . '/../../vendor/autoload.php';
        $stripe_secret_key = 'sk_test_51OQtjoLtyhjDYgokOIUsVS9lthQbX5uibx08Gux0FIlEYvpCwXwAELh0Qp1MwdlTAnP2kRre0KWnHPaViZdG5CN0000rKLBwTY';

        \Stripe\Stripe::setApiKey($stripe_secret_key);

        $checkout_session = \Stripe\Checkout\Session::create(
            [
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                  'name' => 'Soup',
                ],
                'unit_amount' => $this->price,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost/webprog2023/1201220033_Illiyyin/PHP/success.php',
            'cancel_url' => 'http://localhost/webprog2023/1201220033_Illiyyin/PHP/home.php',
            ],
            [
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                  'name' => 'Black Soup',
                ],
                'unit_amount' => 1500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost/webprog2023/1201220033_Illiyyin/PHP/success.php',
            'cancel_url' => 'http://localhost/webprog2023/1201220033_Illiyyin/PHP/home.php',
            ]
    );
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }
}