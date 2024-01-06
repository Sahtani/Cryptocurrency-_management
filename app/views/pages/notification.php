<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Notification Popup</title>
</head>
<body>

<!-- Button to open the popup -->
<button onclick="openNotificationPopup()">Voir les notifications</button>

<!-- The Notification Popup -->
<div id="notificationPopup" class="notification-popup">
    <span class="close-btn" onclick="closeNotificationPopup()">&times;</span>
    <h2>Notifications</h2>
    <ul id="notificationList"></ul>
</div>
<style>
    /* styles.css */

.notification-popup {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 300px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.notification-popup h2 {
    margin-top: 0;
}

.notification-popup ul {
    list-style-type: none;
    padding: 0;
}

.notification-popup li {
    margin-bottom: 10px;
}

.close-btn {
    float: right;
    cursor: pointer;
}

</style>
<script>
    // scripts.js

function openNotificationPopup() {
    var popup = document.getElementById('notificationPopup');
    popup.style.display = 'block';

    // Call a function to fetch and display notifications
    fetchNotifications();
}

function closeNotificationPopup() {
    var popup = document.getElementById('notificationPopup');
    popup.style.display = 'none';
}

function fetchNotifications() {
    // Replace this with your code to fetch notifications from the server
    // Example: Assume notifications is an array of notification messages
    var notifications = ["Notification 1", "Notification 2", "Notification 3"];

    var notificationList = document.getElementById('notificationList');
    notificationList.innerHTML = ''; // Clear previous notifications

    notifications.forEach(function(notification) {
        var li = document.createElement('li');
        li.textContent = notification;
        notificationList.appendChild(li);
    });
}

</script>
</body>
</html>
