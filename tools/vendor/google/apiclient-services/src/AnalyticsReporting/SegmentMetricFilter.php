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
 * Modified by __root__ on 18-June-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Deconf\AIWP\Google\Service\AnalyticsReporting;

class SegmentMetricFilter extends \Deconf\AIWP\Google\Model
{
  /**
   * @var string
   */
  public $comparisonValue;
  /**
   * @var string
   */
  public $maxComparisonValue;
  /**
   * @var string
   */
  public $metricName;
  /**
   * @var string
   */
  public $operator;
  /**
   * @var string
   */
  public $scope;

  /**
   * @param string
   */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /**
   * @return string
   */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
  /**
   * @param string
   */
  public function setMaxComparisonValue($maxComparisonValue)
  {
    $this->maxComparisonValue = $maxComparisonValue;
  }
  /**
   * @return string
   */
  public function getMaxComparisonValue()
  {
    return $this->maxComparisonValue;
  }
  /**
   * @param string
   */
  public function setMetricName($metricName)
  {
    $this->metricName = $metricName;
  }
  /**
   * @return string
   */
  public function getMetricName()
  {
    return $this->metricName;
  }
  /**
   * @param string
   */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /**
   * @return string
   */
  public function getOperator()
  {
    return $this->operator;
  }
  /**
   * @param string
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string
   */
  public function getScope()
  {
    return $this->scope;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SegmentMetricFilter::class, 'Google_Service_AnalyticsReporting_SegmentMetricFilter');
