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

namespace Deconf\AIWP\Google\Service\SearchConsole;

class ResourceIssue extends \Deconf\AIWP\Google\Model
{
  protected $blockedResourceType = BlockedResource::class;
  protected $blockedResourceDataType = '';

  /**
   * @param BlockedResource
   */
  public function setBlockedResource(BlockedResource $blockedResource)
  {
    $this->blockedResource = $blockedResource;
  }
  /**
   * @return BlockedResource
   */
  public function getBlockedResource()
  {
    return $this->blockedResource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceIssue::class, 'Google_Service_SearchConsole_ResourceIssue');
