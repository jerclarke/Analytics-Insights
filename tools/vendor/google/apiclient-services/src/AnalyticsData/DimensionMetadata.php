<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * Modified by __root__ on 31-May-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Deconf\AIWP\Google\Service\AnalyticsData;

class DimensionMetadata extends \Deconf\AIWP\Google\Collection
{
  protected $collection_key = 'deprecatedApiNames';
  /**
   * @var string
   */
  public $apiName;
  /**
   * @var string
   */
  public $category;
  /**
   * @var bool
   */
  public $customDefinition;
  /**
   * @var string[]
   */
  public $deprecatedApiNames;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $uiName;

  /**
   * @param string
   */
  public function setApiName($apiName)
  {
    $this->apiName = $apiName;
  }
  /**
   * @return string
   */
  public function getApiName()
  {
    return $this->apiName;
  }
  /**
   * @param string
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param bool
   */
  public function setCustomDefinition($customDefinition)
  {
    $this->customDefinition = $customDefinition;
  }
  /**
   * @return bool
   */
  public function getCustomDefinition()
  {
    return $this->customDefinition;
  }
  /**
   * @param string[]
   */
  public function setDeprecatedApiNames($deprecatedApiNames)
  {
    $this->deprecatedApiNames = $deprecatedApiNames;
  }
  /**
   * @return string[]
   */
  public function getDeprecatedApiNames()
  {
    return $this->deprecatedApiNames;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setUiName($uiName)
  {
    $this->uiName = $uiName;
  }
  /**
   * @return string
   */
  public function getUiName()
  {
    return $this->uiName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DimensionMetadata::class, 'Google_Service_AnalyticsData_DimensionMetadata');
