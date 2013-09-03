<?php

/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 *
 * @author Rohit Panwar <panwar@google.com>
 *
 * The sample application that demonstrates Google Wallet for Digital Goods API.
 */

include_once 'generate_token.php';

echo <<< INDEX
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
  <title>Digital Goods Sample Application</title>
  <meta name='viewport' content='width=device-width, initial-scale=1,
  maximum-scale=1'>
  <script src="https://sandbox.google.com/checkout/inapp/lib/buy.js"></script>
  <script type='text/javascript'>
    function DemoButton(jwt_value) {
      runDemoButton = document.getElementById('runDemoButton');
      google.payments.inapp.buy({
        jwt: jwt_value,
        success: function() {console.log('success');},
        failure: function(result) {console.log(result.response.errorType);}
      });
      return false;
    }
  </script>
  <link href='css/style.css' rel='stylesheet' type='text/css' />
</head>
<body>
<div>
  <figure>
    <img src='images/cake.jpg' /> <br /> <br />
    <figcaption class='img-label'>
     A Virtual chocolate cake to fill your virtual tummy </figcaption>
  </figure>
  <button id='runDemoButton' value='buy' class='buy-button'
  onclick='DemoButton("$jwtToken");'><b>Purchase</b></button>
</div>
</body>
</html>
INDEX;
