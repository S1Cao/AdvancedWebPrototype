<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Bookstore</title>
  <?php include 'header.php';?>
</head>

<body>
  <?php
    require('conn.php');
    $id = "1";
    $sql = "SELECT bookName, price, author, imageUrl, detail FROM textBook WHERE id = '$id'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <div align="center" class="col-lg-9">
      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="<?php echo $row['imageUrl']; ?>" alt="">
        <div class="card-body">
          <h3 class="card-title">
            <?php echo $row['bookName']; ?>
          </h3>
          <h3 class="card-title">
            <?php echo "Auithor: ", $row['author']; ?>
          </h3>
          <h4>
            <?php echo "Price: ", $row['price'], "$"; ?>
          </h4>
          <p class="card-text">Item detail:
            <?php echo $row['detail']; ?>
          </p>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0 stars
        </div>
      </div>
      <div class="card card-outline-secondary my-4">
        <br><br>
        <button>
            Add to cart
            </button>
      </div>
    </div>
    </div>
    </div>

</body>

</html>