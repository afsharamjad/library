<?php
include 'connect.php'; // Ensure that the database connection is established

// Check if the search query is provided in the URL
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Prepare and execute the SQL statement to search for books
    $stmt = $db->prepare("SELECT * FROM booklist WHERE book_Name LIKE ?");
    $search_query = '%' . $search_query . '%'; // Add wildcards for partial matching
    $stmt->bind_param('s', $search_query);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output the results as you did in the books.php file
            echo "<div class='col-lg-3'>
                    <div class='card-deck'>
                        <div class='card p-2 border-secondary mb-2'>
                            <img src='" . $row['book_image'] . "' class='card-img-top' height='200' width='150'>
                            <div class='card-body p-1'>
                                <h6 class='card-title'>" . $row['book_pages'] . "</h6>
                                <button type='button' class='btn btn-secondary btn-sm'>Download</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    } else {
        echo "<p>No books found: " . htmlspecialchars($search_query) . "</p>";
    }

    $stmt->close(); // Close the statement
} else {
    // Handle the case when no search query is provided
    echo "No search query provided.";
}

$db->close(); // Close the database connection
?>
