<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Amount Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-[#111827] p-4">
    <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Send Amount</h2>

        <form action="process_transaction.php" method="post">
            <div class="mb-4">
                <label for="recipient_id" class="block text-sm font-medium text-gray-600">Recipient's User ID:</label>
                <input type="text" id="recipient_id" name="recipient_id" required
                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-600">Amount to Send:</label>
                <input type="number" id="amount" name="amount" required
                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Send Amount
            </button>
        </form>
    </div>
</body>

</html>