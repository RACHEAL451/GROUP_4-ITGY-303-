 // Task 2: Save Registration Details to a Text File
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $attendees = $_POST['attendees'];

    $data = "Name: $name\nEmail: $email\nEvent: $event\nPhone: $phone\nAge: $age\nAttendees: $attendees\n\n";
    
    file_put_contents('registrations.txt', $data, FILE_APPEND);

    header('Location: confirmation.php');
    exit();
}
