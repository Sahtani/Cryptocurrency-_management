<?php

class Wallets
{
    private $db;
    private $apiUrl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    private $apiKey = 'a7be6e4e-642d-499e-bf16-00bf9db600ba';


    public function __construct()
    {
        $this->db = new Database;
    }
    public function getWalletForUser($userId)
    {
        $this->db->query('SELECT wallet.* , cryptomonnaies.* FROM wallet INNER JOIN cryptomonnaies
        ON wallet.crypto_id = cryptomonnaies.CryptomonnaieID
        WHERE User_ID = :User_ID');
        $this->db->bind(':User_ID', $userId);
        $wallet = $this->db->resultSet();
        return $wallet;
    }


    public function sendAmount($amount, $userId)
    {
        $this->db->query("UPDATE wallet SET Quantité = Quantité - :amount WHERE User_ID = :User_ID");
        $this->db->bind(':amount', $amount);
        $this->db->bind(':User_ID', $userId);
        $trans = $this->db->single();
        return $trans;
    }
    public function fetchCryptoData($userWallet)
    {
        // Extract the cryptocurrency IDs from the user's wallet
        $cryptoIds = array_column($userWallet, 'Cryptocurrency_ID');

        // Fetch data for cryptocurrencies in the user's wallet
        $parameters = [
            'start' => '1',
        ];

        $qs = http_build_query($parameters);
        $request = "{$this->apiUrl}?{$qs}";

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $request,
                CURLOPT_HTTPHEADER => ['Accepts: application/json', "X-CMC_PRO_API_KEY: {$this->apiKey}"],
                CURLOPT_RETURNTRANSFER => 1
            )
        );

        $response = curl_exec($curl);
        $allCryptoData = json_decode($response, true);
        curl_close($curl);

        // Filter the data to include only cryptocurrencies present in the user's wallet
        $filteredCryptoData = array_filter(
            $allCryptoData['data'] ?? [],
            function ($crypto) use ($cryptoIds) {
                return in_array($crypto['id'], $cryptoIds);
            }
        );

        return $filteredCryptoData;
    }




}
