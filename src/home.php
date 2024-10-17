<?php
require '../config.php';
require '../templates/header.php';

// Fetch future events from the database
$currentDate = date('Y-m-d');
$result = $conn->query("SELECT * FROM events WHERE event_date >= '$currentDate' ORDER BY event_date ASC");

echo "<h2>Upcoming Events</h2>";
echo "<div class='event-list-container'>";
echo "<ul class='event-list'>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $description = $row['description'];
        $truncatedDescription = strlen($description) > 100 ? substr($description, 0, 100) . '...' : $description;
        echo "<li>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p class='event-date'><strong>Date:</strong> " . $row['event_date'] . "</p>";
        echo "<p class='event-description'>" . $truncatedDescription . "</p>";
        if (strlen($description) > 100) {
            echo "<p class='full-description' style='display: none;'>" . $description . "</p>";
            echo "<a href='#' class='read-more'>Read more</a>";
        }
        echo "</li>";
    }
} else {
    echo "<p>No upcoming events found.</p>";
}

echo "</ul>";
echo "</div>";

require '../templates/footer.php';
?>