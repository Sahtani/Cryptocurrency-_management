<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#111827] text-white font-sans">

    <div class="text-center my-4">
        <h1 class="text-2xl">$0.00</h1>
    </div>

    <div class="flex justify-around my-4">
        <button class="bg-[#db2777] text-white rounded py-2 px-4">Receive</button>
        <button class="bg-[#db2777] text-white rounded py-2 px-4">Buy</button>
        <button class="bg-[#db2777] text-white rounded py-2 px-4">Send</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4">
        <div class="bg-gray-800 p-4 rounded flex items-center">
            <img src="solana-icon.png" alt="Solana" class="h-8 mr-2">
            <div>
                <p>Solana</p>
                <p class="text-sm text-gray-400">0 SOL</p>
            </div>
        </div>
        <div class="bg-gray-800 p-4 rounded flex items-center">
            <img src="ethereum-icon.png" alt="Ethereum" class="h-8 mr-2">
            <div>
                <p>Ethereum</p>
                <p class="text-sm text-gray-400">0 ETH</p>
            </div>
        </div>
        <div class="bg-gray-800 p-4 rounded flex items-center">
            <img src="polygon-icon.png" alt="Polygon" class="h-8 mr-2">
            <div>
                <p>Polygon</p>
                <p class="text-sm text-gray-400">0 MATIC</p>
            </div>
        </div>
    </div>

    <footer class="fixed bottom-0 inset-x-0 bg-gray-900 py-2">
        <div class="flex justify-around">
            <img src="wallet-icon.png" alt="Wallet" class="h-6">
            <img src="grid-icon.png" alt="Grid" class="h-6">
            <img src="transfer-icon.png" alt="Transfer" class="h-6">
            <img src="browser-icon.png" alt="Browser" class="h-6">
            <img src="play-icon.png" alt="Play" class="h-6">
        </div>
    </footer>
</body>

</html>