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

namespace Deconf\AIWP\Google\Service\SearchConsole\Resource;

use Deconf\AIWP\Google\Service\SearchConsole\SitemapsListResponse;
use Deconf\AIWP\Google\Service\SearchConsole\WmxSitemap;

/**
 * The "sitemaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchconsoleService = new Deconf\AIWP\Google\Service\SearchConsole(...);
 *   $sitemaps = $searchconsoleService->sitemaps;
 *  </code>
 */
class Sitemaps extends \Deconf\AIWP\Google\Service\Resource
{
  /**
   * Deletes a sitemap from the Sitemaps report. Does not stop Google from
   * crawling this sitemap or the URLs that were previously crawled in the deleted
   * sitemap. (sitemaps.delete)
   *
   * @param string $siteUrl The site's URL, including protocol. For example:
   * `http://www.example.com/`.
   * @param string $feedpath The URL of the actual sitemap. For example:
   * `http://www.example.com/sitemap.xml`.
   * @param array $optParams Optional parameters.
   */
  public function delete($siteUrl, $feedpath, $optParams = [])
  {
    $params = ['siteUrl' => $siteUrl, 'feedpath' => $feedpath];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params]);
  }
  /**
   * Retrieves information about a specific sitemap. (sitemaps.get)
   *
   * @param string $siteUrl The site's URL, including protocol. For example:
   * `http://www.example.com/`.
   * @param string $feedpath The URL of the actual sitemap. For example:
   * `http://www.example.com/sitemap.xml`.
   * @param array $optParams Optional parameters.
   * @return WmxSitemap
   */
  public function get($siteUrl, $feedpath, $optParams = [])
  {
    $params = ['siteUrl' => $siteUrl, 'feedpath' => $feedpath];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], WmxSitemap::class);
  }
  /**
   * Lists the [sitemaps-entries](/webmaster-tools/v3/sitemaps) submitted for this
   * site, or included in the sitemap index file (if `sitemapIndex` is specified
   * in the request). (sitemaps.listSitemaps)
   *
   * @param string $siteUrl The site's URL, including protocol. For example:
   * `http://www.example.com/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sitemapIndex A URL of a site's sitemap index. For example:
   * `http://www.example.com/sitemapindex.xml`.
   * @return SitemapsListResponse
   */
  public function listSitemaps($siteUrl, $optParams = [])
  {
    $params = ['siteUrl' => $siteUrl];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], SitemapsListResponse::class);
  }
  /**
   * Submits a sitemap for a site. (sitemaps.submit)
   *
   * @param string $siteUrl The site's URL, including protocol. For example:
   * `http://www.example.com/`.
   * @param string $feedpath The URL of the actual sitemap. For example:
   * `http://www.example.com/sitemap.xml`.
   * @param array $optParams Optional parameters.
   */
  public function submit($siteUrl, $feedpath, $optParams = [])
  {
    $params = ['siteUrl' => $siteUrl, 'feedpath' => $feedpath];
    $params = array_merge($params, $optParams);
    return $this->call('submit', [$params]);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sitemaps::class, 'Google_Service_SearchConsole_Resource_Sitemaps');
