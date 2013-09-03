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
 * This code is generating JWT of a product.
 */

/**
 * JWT class to encode/decode payload into JWT format.
 */
include_once 'lib/JWT.php';
/**
 * Get merchant account information.
 */
include_once 'seller_info.php';
/**
 * Get payload of the product.
 */
include_once 'payload.php';

$sellerIdentifier = SellerInfo::$issuerId;
$sellerSecretKey = SellerInfo::$secretKey;

$payload = new Payload();
$payload->SetIssuedAt(time());
$payload->SetExpiration(time()+3600);
$payload->AddProperty('name', 'Piece of Cake');
$payload->AddProperty('description',
    'Virtual chocolate cake to fill your virtual tummy');
$payload->AddProperty('price', '10.50');
$payload->AddProperty('currencyCode', 'USD');
$payload->AddProperty('sellerData',
    'user_id:1224245,offer_code:3098576987,affiliate:aksdfbovu9j');
// Creating payload of the product.
$Token = $payload->CreatePayload($sellerIdentifier);
// Encoding payload into JWT format.
$jwtToken = JWT::encode($Token, $sellerSecretKey);
