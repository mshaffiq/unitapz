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
  <div class="paper container">
    <h1>Pinger Demo</h1>
    <h3>Manual check tekkis server uptime</h3>
  </div>
  <div class="paper container" style="margin-top:1rem;">
    <button class="btn-success" id="checkServerBtn">Check!</button>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Auth API (tauthapi.tekkis.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Pay API (api.tpay.com.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Auth Admin (tauth-staging.tekkis.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Verify Admin (merchant-staging.tverify.com.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Pay Portal (merchant-staging.tpay.com.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
    <div class="card" style="width: 100%;margin-top:1rem;">
      <div class="card-header">t-Pay Checkout (checkout-staging.tpay.com.my)</div>
      <div class="card-body">
        <h3 class="card-title">Server is <span class="upText text-success">UP!</span></h3>
      </div>
    </div>
  </div>
</body>

</html>