<?php
require '../config.php';
require '../templates/header.php';

if (!isset(CONN)) {
    die("Database connection not established.");
}

$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];

    // Validate input
    if (empty($title) || empty($event_date)) {
        echo "Title and Event Date are required.";
    } else {
        $stmt = CONN->prepare("INSERT INTO events (title, description, event_date) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . CONN->error);
        }
        $stmt->bind_param("sss", $title, $description, $event_date);

        if ($stmt->execute()) {
            $successMessage = "Event added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<div class="form-container">
    <?php if ($successMessage): ?>
        <div class="success-message"><?php echo $successMessage; ?></div>
    <?php endif; ?>
    <form method="post" action="?page=add_event">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4"></textarea>
        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date">
        <input type="submit" value="Add Event">
    </form>
</div>

<?php
require '../templates/footer.php';
?>