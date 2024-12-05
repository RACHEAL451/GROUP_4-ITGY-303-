// Task 1: Create a Registration Form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="style.css"> <!-- External CSS file -->
</head>
<body>
    <form action="save_registration.php" method="post">
        <h2>Event Registration</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="event">Event Choice:</label>
        <select id="event" name="event" required>
 <option value="">--Select an Event--</option>
            <option value="Music Concert">Music Concert</option>
            <option value="Tech Conference">Tech Conference</option>
            <option value="Art Exhibition">Art Exhibition</option>
        </select>