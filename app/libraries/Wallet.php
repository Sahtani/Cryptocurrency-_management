<?php
require_once 'Database.php';

class Wallet extends Database {
    public function getPortfolioValueOverTime($userId) {
        try {
            $this->query("SELECT w.`Quantité`, c.`Nom` FROM `wallet` w INNER JOIN `cryptomonnaies` c ON w.`crypto_id` = c.`CryptomonnaieID` WHERE w.`User_ID` = :userId");
            $this->bind(':userId', $userId);
            $result = $this->resultSet();

            $portfolioData = [];

            foreach ($result as $row) {
                $portfolioData[$row->Nom] = $row->Quantité;
            }

            return $portfolioData;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}

$userId = 10001;
$wallet = new Wallet();
$portfolioData = $wallet->getPortfolioValueOverTime($userId);

?>
