<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>StyleHub</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'nav.php'; ?>

<section class="hero">
  <div>
    <h1>Discover Your Style</h1>
    <p>Modern clothes store for elegant and trendy fashion.</p>
    <a class="btn" href="products.php">Shop Now</a>
  </div>
<div class="hero-image-box">
  <img src="images/dress.png" alt="Fashion Collection">
  <div class="hero-badge">NEW COLLECTION</div>
</div>
</section>

<section class="section">
  <h2 class="section-title">Featured Products</h2>

  <form class="search-form" action="products.php" method="GET">
    <input type="text" name="search" placeholder="Search clothes...">
    <button type="submit">Search</button>
  </form>

  <div class="grid">
    <?php
    $result = $conn->query("SELECT * FROM products LIMIT 6");
    while ($p = $result->fetch_assoc()):
    ?>
      <div class="card">
        <img src="<?php echo clean($p['image_url']); ?>" alt="Product">

        <div class="card-body">
          <h3><?php echo clean($p['name']); ?></h3>
          <p class="price">$<?php echo clean($p['price']); ?></p>

          <div class="actions">
            <a class="btn" href="product_detail.php?id=<?php echo $p['product_id']; ?>">Details</a>
            <a class="btn" href="add_to_cart.php?id=<?php echo $p['product_id']; ?>">Add to Cart</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>