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
          <h3 class="block-title">EPOCH <?php echo $epoch; ?></h3>
          <form method="post" action="<?php echo base_url()."index.php/perceptron/process_lanjutan";?>">
          <input class="form-control" type="hidden" name="epoch" value="<?php echo $epoch;?>">
        </div>
        <div class="block-content">
          <!-- <p class="push-30">The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all data will be accessible on smaller screens (&lt; 768px).</p> -->
            <div class="table-responsive">
              <table class="table table-striped table-vcenter">
                <thead>
                  <tr>
                    <?php
                    for ($j=1; $j <= $jumlah_x; $j++) {
                      echo "<th class='text-center'>X".$j."</th>";
                    }
                    echo "<th class='text-center'>Net</th>";
                    echo "<th class='text-center'>Out</th>";
                    echo "<th class='text-center'>Target</th>";
                    for ($j=1; $j <= $jumlah_x; $j++) {
                      echo "<th class='text-center'>dW".$j."</th>";
                    }
                    echo "<th class='text-center'>db</th>";
                    for ($j=1; $j <= $jumlah_x; $j++) {
                      echo "<th class='text-center'>W".$j."</th>";
                    }
                    echo "<th class='text-center'>b</th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=1; $i <= $data_number; $i++) {?>
                    <tr>
                      <?php
                      for ($j=1; $j <= $jumlah_x; $j++) {
                        ?>
                        <td class='text-center'><input class="form-control" type="hidden" name="X<?php echo $j.$i;?>" value="<?php echo $x_value[$i][$j-1];?>" required><?php echo $x_value[$i][$j-1];?></td>
                      <?php } ?>
                      <td class='text-center'><?php echo $net[$i];?></td>
                      <td class='text-center'><?php echo $out[$i];?></td>
                      <td class='text-center'><input class="form-control" type="hidden" name="target<?php echo $i;?>" value="<?php echo $target[$i];?>" required><?php echo $target[$i];?></td>
                      <?php
                      for ($j=0; $j <= $jumlah_x; $j++) {
                        ?>
                        <td class='text-center'><?php echo $d_weight[$i][$j];?></td>
                      <?php } ?>
                      <?php
                      for ($j=0; $j <= $jumlah_x; $j++) {
                        ?>
                        <td class='text-center'><?php echo $weight_value[$i][$j];?></td>
                      <?php } ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php
              for ($j=0; $j <= $jumlah_x; $j++) {
                ?>
                <input class="form-control" type="hidden" name="W<?php echo $j;?>" value="<?php echo $weight_value[$data_number][$j];?>" required>
              <?php } ?>
              <div class="col-sm-2">
                <div class="form-material form-material-primary floating">
                  <input class="form-control" type="hidden" id="alpha" name="alpha" max="10" value="<?php echo $alpha;?>" required>
                  <?php echo $alpha;?>
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
  <script src="<?php echo base_url()."assets/js/plugins/jquery-validation/jquery.validate.min.js";?>"></script>

  <!-- Page JS Code -->
  <script src="<?php echo base_url()."assets/js/pages/base_pages_login.js";?>"></script>
</body>

</html>
