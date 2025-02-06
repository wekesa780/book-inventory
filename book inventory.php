<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Inventory System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f0f8ff; /* Light blue background */
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: white;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .availability {
            font-weight: bold;
        }
        .in-stock {
            color: green;
        }
        .out-of-stock {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book Inventory System</h2>
        <form method="post" action="">
            <input type="submit" name="show_books" value="Show Book Inventory">
        </form>

        <?php
        // Array of books (associative arrays)
        $books = [
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "quantity" => 5
            ],
            [
                "title" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "quantity" => 3
            ],
            [
                "title" => "1984",
                "author" => "George Orwell",
                "quantity" => 0
            ],
            [
                "title" => "Pride and Prejudice",
                "author" => "Jane Austen",
                "quantity" => 7
            ],
            [
                "title" => "The Catcher in the Rye",
                "author" => "J.D. Salinger",
                "quantity" => 2
            ]
        ];

        // Process form submission
        if (isset($_POST['show_books'])) {
            echo "<h3>Book Inventory</h3>";
            echo "<table>";
            echo "<tr><th>Title</th><th>Author</th><th>Quantity</th><th>Availability</th></tr>";

            // Loop through the books array and display details
            foreach ($books as $book) {
                $title = $book["title"];
                $author = $book["author"];
                $quantity = $book["quantity"];
                $availability = ($quantity > 0) ? "<span class='availability in-stock'>In Stock</span>" : "<span class='availability out-of-stock'>Out of Stock</span>";

                echo "<tr>";
                echo "<td>$title</td>";
                echo "<td>$author</td>";
                echo "<td>$quantity</td>";
                echo "<td>$availability</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        ?>
    </div>
</body>
</html>