<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#checkServerBtn").click(function() {
      $(".upText").html("...");
      setTimeout(function() {
        $(".upText").html("UP!");
      }, 2000);
    });
  });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

  <link rel="stylesheet" href="<?php echo base_url("assets/papercss/css/paper.min.css") ?>">
</head>

<body>
  <div class="paper container" style="width:100%;">
    <h1>Pinger Demo</h1>
    <h2>Manual check tekkis server uptime</h2>
  </div>
  <div class="paper container" style="width:100%;margin-top:1rem;">
    <button class="btn-success" id="checkServerBtn" style="margin-bottom:1rem;"><h2 style="margin:auto;">Check!</h2></button>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Auth API<BR>(tauthapi.tekkis.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Pay API<BR>(api.tpay.com.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Auth Admin<BR>(tauth-staging.tekkis.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Verify Admin<BR>(merchant-staging.tverify.com.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Pay Portal<BR>(merchant-staging.tpay.com.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header"><h2 style="margin:auto;">t-Pay Checkout<BR>(checkout-staging.tpay.com.my)</h2></div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
  </div>
</body>

</html>