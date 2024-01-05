<?php
class Coin
{
    private $apiUrl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    private $apiKey = 'a7be6e4e-642d-499e-bf16-00bf9db600ba';

    private $conn;

    public function __construct()
    {
        $this->conn = new Database();
    }

    public function fetchCryptoData()
    {
        $parameters = [
            'start' => '1',
            'limit' => '75',
            'convert' => 'USD'
        ];
    
        $qs = http_build_query($parameters);
        $request = "{$this->apiUrl}?{$qs}";
    
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,
            CURLOPT_HTTPHEADER => ['Accepts: application/json', "X-CMC_PRO_API_KEY: {$this->apiKey}"],
            CURLOPT_RETURNTRANSFER => 1
        ));
    
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        curl_close($curl);
    
        // Check if the 'data' key exists in the response
        if (isset($data['data'])) {
            return $data['data'];
        } else {
            return [];
        }
    }
    

    public function insertCoin($id, $name, $symbol, $slug, $max_supply)
    {
        $query = "INSERT INTO cryptomonnaies(cryptomonnaieID, nom, symbole, slug, max_supply) VALUES (:id, :name, :symbol, :slug, :max_supply)";
        
        try {
            $this->conn->query($query);
            $this->conn->bind(':id', $id);
            $this->conn->bind(':name', $name);
            $this->conn->bind(':symbol', $symbol);
            $this->conn->bind(':slug', $slug);
            $this->conn->bind(':max_supply', $max_supply);
        
            echo "Executing query: $query<br>";
            echo "Bound parameters: ";
            var_dump([$id, $name, $symbol, $slug, $max_supply]);
        
            $this->conn->execute();
            echo "Data inserted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    

    public function getCoinByName($name)
    {
        $this->conn->query("SELECT * FROM cryptomonnaies WHERE Nom= :name");
        $this->conn->bind(':name', $name);
        $this->conn->execute();

        return $this->conn->single(PDO::FETCH_ASSOC);
    }


    // public function updateWallet($cryptoId, $qte, $wallet_id){
    //     $this->conn->query("SELECT * FROM crypto_wallet WHERE crypto_id = ? AND wallet_id = ?");
    //     $this->conn->execute([$cryptoId,$wallet_id]);
    //     $row = $this->conn->single(PDO::FETCH_ASSOC);

    //     if ($row) {
    //         $this->conn->query("UPDATE crypto_wallet SET qte = qte + ? WHERE crypto_id = ? AND wallet_id = ?");
    //         $this->conn->execute([$qte, $cryptoId, $wallet_id]);
    //     } else {
    //         $this->conn->query("INSERT INTO crypto_wallet (wallet_id,crypto_id, qte) VALUES (?,?, ?)");
    //         $this->conn->execute([$wallet_id, $cryptoId, $qte]);
    //     }

    //     $this->conn->query("UPDATE wallet SET balance = balance + ? WHERE id = ?");
    //     $this->conn->execute([$qte,$wallet_id]);
    // }
}
