<!DOCTYPE html>
<html lang="en">

<header>
  <title>Online Bookstore</title>
  <?php include 'header.php';?>
</header>

<body>
  <?php
    require('conn.php');
    
    $sql = "SELECT id, bookName, price, imageUrl FROM textBook";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
?>

    <h1 align="center">Popular choices</h1>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div onMouseOver="this.style.cursor='pointer'" class="panel-heading" onclick="itemDetail()">
              <?php echo "No.", $row['id'], "  ", $row['bookName']; ?>
            </div>
            <div onMouseOver="this.style.cursor='pointer'" class="panel-body" onclick="itemDetail()"><img src="<?php echo $row['imageUrl']; ?>" class="img-responsive" style="width:100%" alt="Image"></div>
            <div onMouseOver="this.style.cursor='pointer'" class="panel-footer" onclick="itemDetail()">
              <?php echo "Price: ", $row['price'], "$"; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <?php echo $row['bookName']; ?>
            </div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div><br><br>

    <script>
      function itemDetail() {
        window.location.href = 'item.php';
        <?php $id = $row['id'];?>
      }
    </script>


    <footer>
      <?php include 'footer.php';?>
    </footer>

</body>

</html>