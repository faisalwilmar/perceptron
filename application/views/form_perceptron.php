<!-- <?php
for ($i=0; $i < $data_number; $i++) {
for ($j=1; $j <= $jumlah_x; $j++) {
echo "Isi X".$j." disini ";
}
echo "Target";
echo "<br>";
}
?> -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

  <!-- Bootstrap and OneUI CSS framework -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css";?>">
  <link rel="stylesheet" id="css-main" href="<?php echo base_url()."assets/css/oneui.css";?>">
</head>
<body>

  <div class="content overflow-hidden">
    <div class="row">
      <div class="block">
        <div class="block-header">
          <h3 class="block-title">Insert Your Data</h3>
        </div>
        <div class="block-content">
          <!-- <p class="push-30">The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all data will be accessible on smaller screens (&lt; 768px).</p> -->
          <form method="post" action="<?php echo base_url()."index.php/perceptron/process";?>">
            <div class="table-responsive">
              <table class="table table-striped table-vcenter">
                <thead>
                  <tr>
                    <?php
                    for ($j=1; $j <= $jumlah_x; $j++) {
                      echo "<th class='text-center'>X".$j."</th>";
                    }
                    echo "<th>Target</th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=1; $i <= $data_number; $i++) {?>
                    <tr>
                      <?php
                      for ($j=1; $j <= $jumlah_x; $j++) {
                        ?>
                        <td><input class="form-control" type="number" name="X<?php echo $j.$i;?>" required></td>
                      <?php } ?>
                      <td><input class="form-control" type="number" name="target<?php echo $i;?>" required></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="col-sm-2">
                <div class="form-material form-material-primary floating">
                  <input class="form-control" type="number" id="alpha" name="alpha" max="10" value="1" required>
                  <input class="form-control" type="hidden" name="variables" value="<?php echo $jumlah_x;?>">
                  <input class="form-control" type="hidden" name="rows" value="<?php echo $data_number;?>">
                  <label for="alpha">Alpha Value</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <button class="btn btn-block btn-primary" type="submit">Process</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url()."assets/js/core/jquery.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/bootstrap.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/jquery.slimscroll.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/jquery.scrollLock.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/jquery.appear.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/jquery.countTo.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/jquery.placeholder.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/core/js.cookie.min.js";?>"></script>
  <script src="<?php echo base_url()."assets/js/app.js";?>"></script>
  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

  <!-- Page JS Code -->
  <script src="assets/js/pages/base_pages_login.js"></script>
</body>

</html>
