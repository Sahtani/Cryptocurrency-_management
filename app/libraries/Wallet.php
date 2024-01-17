<?php
require_once 'Database.php';

class Wallet extends Database {
    public function getPortfolioValueOverTime($userId) {
        try {
            $this->query("SELECT w.`Quantite`, c.`Nom` FROM `wallet` w INNER JOIN `cryptomonnaies` c ON w.`crypto_id` = c.`CryptomonnaieID` WHERE w.`User_ID` = :userId");
            $this->bind(':userId', $userId);
            $result = $this->resultSet();

            $portfolioData = [];

            foreach ($result as $row) {
                $portfolioData[$row->Nom] = $row->Quantite;
            }

            return $portfolioData;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
    public function notifications($userID){
        // Fetch notifications for the user
        $sql = "SELECT * FROM `notifications` WHERE `User_ID` = $userID ORDER BY `Timestamp` DESC";
        $result = $this->reusltExecut($sql);

    }
}

?>
