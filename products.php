<?php 
$pageTitle = "Products";
$section = "products";
include("inc/products.php");
include("inc/header.php");
include("inc/index-nav.php"); ?>

<section class="products">
  <div class="container">
    <div class="row">

      <h3>Products</h3>
      <p>Please see the products available:</p>

      <?php 
        foreach($products as $product) { ?>

        <a href="contact.php">
          <div class="col-sm-6 col-md-4 product">
            <div class="thumbnail">
              <img class="productImage" data-toggle="tooltip" data-placement="top" title='For more info on <?php echo $product["name"]; ?> please contact us.' src='<?php echo $product["image"]; ?>' alt="<?php echo $product["name"]; ?>">
              <div class="caption">
                <h5><?php echo $product["name"]; ?></h5>
                <p><?php echo $product["description"]; ?></p>
<!--                 <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
              </div>
            </div>
          </div>
      </a>
      <?php } ?>


    </div>
  </div>
</section>

<script type="text/javascript">
  $('document').ready(function(){
  $('.productImage').tooltip()
});
</script>

<?php include("inc/footer.php"); ?>