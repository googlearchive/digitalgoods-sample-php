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
 * This class define a payload of a product for sale.
 */

class Payload {
  /**
  * @var string The target audience for JWT.
  */
  const AUDIENCE = "Google";
  /**
  * @var string The type of request.
  */
  const TYPE = "google/payments/inapp/item/v1";
  /**
  * @var integer The time when the purchase will expire (in seconds).
  */
  private $exp;
  /**
  * @var integer The time when JWT issued (in seconds).
  */
  private $iat;
  /**
  * @var array Requested  fields.
  */
  private $request = array();
  /**
  * @var string Name of product.
  */
  private $name;
  /**
  * @var string  Description of product.
  */
  private $description;
  /**
  * @var string Price in 2 decimal places.
  */
  private $price;
  /**
  * @var string Currency code.
  */
  private $currencyCode;
  /**
  * @var string Seller data.
  */
  private $sellerData;
  /**
  * @var array Payload.
  */
  public $payload = array();
  /**
  * Set JWT Issued time.
  * @param integer $issuedAt The time when the JWT was issued.
  */
  public function SetIssuedAt($issuedAt){
    $this->iat = $issuedAt;
  }
  /**
  * Set JWT expiration time.
  * @param integer $expiryTime The time when the purchase will expire.
  */
  public function SetExpiration($expiryTime) {
    $this->exp = $expiryTime;
  }
  /**
  * Add requested data into Request array.
  * @param string $fieldName Requested field name.
  * @param string $fieldValue Requested field value.
  */
  public function AddProperty($fieldName, $fieldValue) {
    $this->request[$fieldName] = $fieldValue;
  }
  /**
  * Create payload of the product.
  * @param string $sellerIdentifier Merchant Id.
  * @return array $this->payload Payload of the product.
  */
  public function CreatePayload($sellerIdentifier) {
    $this->payload['iss'] = $sellerIdentifier;
    $this->payload['aud'] = self::AUDIENCE;
    $this->payload['typ'] = self::TYPE;
    $this->payload['exp'] = $this->exp;
    $this->payload['iat'] = $this->iat;
    $this->payload['request'] = $this->request;
    return $this->payload;
  }
}
