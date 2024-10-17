# Event Calendar Web Application

This is a simple event calendar web application built with PHP, HTML, CSS, and JavaScript. The application allows users to add, view, and manage events. The homepage displays upcoming events, and there is a separate page for past events. The application also includes a modern, responsive design.

## Features

- Add new events with a title, description, and date.
- View upcoming events on the homepage.
- View past events on a separate page.
- Expand event descriptions with a "Read more" link.
- Modern, responsive design with a styled navigation menu.

## Project Structure


## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/Vallintaus/event_calendar.git
    cd event_calendar
    ```

2. Set up the database:
    ```sql
    CREATE DATABASE event_calendar_db;
    USE event_calendar_db;

    CREATE TABLE events (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        event_date DATE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

3. Configure the database connection in `config/config.php`:
    ```php
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event_calendar_db";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

4. Start your local server (e.g., using XAMPP or MAMP) and navigate to the project directory.

## Usage

- **Home Page**: Displays upcoming events.
- **Add Event**: Allows users to add new events.
- **Past Events**: Displays past events.

