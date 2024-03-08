<?php
session_start();
$shopping_list = $_SESSION['anjan'] ?? [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do the Shopping!</title>
</head>

<body>
  <main>
    <h1>Lets Go Shopping 🛒</h1>
    <!-- Form to submit -->
    <section>
      <form action="/add-to-cart.php" method="post">
        <input type="text" name="shopping">
        <button type="submit">Add to Cart 🛒</button>
      </form>
    </section>
    <!-- List to display -->

    <section>
      <h4>Shopping list here 👇</h4>
      <ul>

        <?php
        foreach ($shopping_list as $value) {
          echo "<li>{$value}</li>";
        }
        ?>

      </ul>
    </section>
  </main>
</body>

</html>