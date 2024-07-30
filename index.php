<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp SMS Online</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Add your CSS file -->
</head>
<body>
    <h1>Temporary SMS Numbers</h1>

    <button id="fetchNumbers">Fetch Numbers</button>
    <div id="numbersList"></div>

    <h2>Messages for a Number</h2>
    <input type="text" id="numberInput" placeholder="Enter number">
    <button id="fetchMessages">Fetch Messages</button>
    <div id="messagesList"></div>

    <script>
        document.getElementById('fetchNumbers').addEventListener('click', () => {
            fetch('fetch_numbers.php')
                .then(response => response.json())
                .then(data => {
                    const numbersList = document.getElementById('numbersList');
                    numbersList.innerHTML = ''; // Clear previous data
                    if (data.length > 0) {
                        data.forEach(number => {
                            const div = document.createElement('div');
                            div.textContent = number;
                            numbersList.appendChild(div);
                        });
                    } else {
                        numbersList.textContent = 'No numbers available.';
                    }
                });
        });

        document.getElementById('fetchMessages').addEventListener('click', () => {
            const number = document.getElementById('numberInput').value;
            fetch(`fetch_messages.php?number=${encodeURIComponent(number)}`)
                .then(response => response.json())
                .then(data => {
                    const messagesList = document.getElementById('messagesList');
                    messagesList.innerHTML = ''; // Clear previous data
                    if (data.length > 0) {
                        data.forEach(message => {
                            const div = document.createElement('div');
                            div.textContent = message;
                            messagesList.appendChild(div);
                        });
                    } else {
                        messagesList.textContent = 'No messages found for this number.';
                    }
                });
        });
    </script>
</body>
</html>
