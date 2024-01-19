<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <button onclick="getData()">click here</button>

    <div id="content"></div>




    <script>

        let content = document.getElementById('content');
        let displayName = [];


        const apiUrl = 'https://api.example.com/users/123';
        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(userData => {
                // Process the retrieved user data
                console.log('User Data:', userData);
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function getData() {
            fetch('http://universities.hipolabs.com/search?country=India')
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>