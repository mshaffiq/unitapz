<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {

    var userAgent = navigator.userAgent.toLowerCase();
    if (userAgent.indexOf("iphone") > -1 || userAgent.indexOf("android") > -1) {
      $("#serverCheckCard").show();
    } else {
      window.location.href = "<?php echo base_url("restrict") ?>";
    }

    $("#pingServerBtn").click(function() {
      $(".upText").html("...");
      $.ajax({
        url: 'ajaxController/ajaxPingServer',
        type: 'POST',
        success: function(apiData) {
          var apiObj = $.parseJSON(apiData);
          $.each(apiObj, function(index, value) {
            var textId = index.replace(/\./g, '');
            if (value == "success") {
              $("#" + textId).html("UP!");
              $("#" + textId).removeClass("text-warning").removeClass("text-danger").addClass("text-success");
            } else if (value == "failed") {
              $("#" + textId).html("DOWN!");
              $("#" + textId).removeClass("text-warning").removeClass("text-success").addClass("text-danger");
            }
          });
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });

    $("#curlServerBtn").click(function() {
      $(".upText").html("...");
      $.ajax({
        url: 'ajaxController/ajaxCurlServer',
        type: 'POST',
        success: function(apiData) {
          var apiObj = $.parseJSON(apiData);
          $.each(apiObj, function(index, value) {
            var textId = index.replace(/\./g, '');
            if (value == "success") {
              $("#" + textId).html("UP!");
              $("#" + textId).removeClass("text-warning").removeClass("text-danger").addClass("text-success");
            } else if (value == "failed") {
              $("#" + textId).html("DOWN!");
              $("#" + textId).removeClass("text-warning").removeClass("text-success").addClass("text-danger");
            }
          });
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome to Pinger</title>

  <link rel="stylesheet" href="<?php echo base_url("assets/papercss/css/paper.min.css") ?>">
</head>

<body>
  <div class="paper container" style="width:100%;">
    <h1>Pinger Demo</h1>
    <h2>Manual check tekkis server uptime</h2>
  </div>
  <div id="serverCheckCard" class="paper container" style="width:100%;margin-top:1rem;display:none;">
    <button class="btn-success" id="pingServerBtn" style="margin-bottom:1rem;">
      <h2 style="margin:auto;">Check Ping!</h2>
    </button>
    <button class="btn-success" id="curlServerBtn" style="margin-bottom:1rem;">
      <h2 style="margin:auto;">Check Curl!</h2>
    </button>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Auth API<BR>(tauthapi.tekkis.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="tauthapitekkismy">UNKNOWN!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Pay API<BR>(api.tpay.com.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="apitpaycommy">UNKNOWN!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Auth Admin<BR>(tauth-staging.tekkis.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="tauth-stagingtekkismy">UNKNOWN!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Verify Admin<BR>(merchant-staging.tverify.com.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="merchant-stagingtverifycommy">UNKNOWN!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Pay Portal<BR>(merchant-staging.tpay.com.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="merchant-stagingtpaycommy">UNKNOWN!</span></h3>
      </div>
    </div>
    <div class="card" style="width:100%;margin-top:2rem;">
      <div class="card-header">
        <h2 style="margin:auto;">t-Pay Checkout<BR>(checkout-staging.tpay.com.my)</h2>
      </div>
      <div class="card-body">
        <h2 class="card-title">Server is <span class="upText text-warning" id="checkout-stagingtpaycommy">UNKNOWN!</span></h3>
      </div>
    </div>
  </div>
</body>

</html>