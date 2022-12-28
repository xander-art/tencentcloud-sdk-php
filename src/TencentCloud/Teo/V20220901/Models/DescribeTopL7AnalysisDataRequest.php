<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopL7AnalysisData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getMetricName() 获取查询的指标，取值有：
<li> l7Flow_outFlux_country：请求的国家；</li>
<li> l7Flow_outFlux_statusCode：请求的状态码；</li>
<li> l7Flow_outFlux_domain：请求域名；</li>
<li> l7Flow_outFlux_url：请求的URL; </li>
<li> l7Flow_outFlux_resourceType：请求的资源类型；</li>
<li> l7Flow_outFlux_sip：客户端的源IP；</li>
<li> l7Flow_outFlux_referers：refer信息；</li>
<li> l7Flow_outFlux_ua_device：设备类型; </li>
<li> l7Flow_outFlux_ua_browser：浏览器类型；</li>
<li> l7Flow_outFlux_us_os：操作系统类型。</li>
 * @method void setMetricName(string $MetricName) 设置查询的指标，取值有：
<li> l7Flow_outFlux_country：请求的国家；</li>
<li> l7Flow_outFlux_statusCode：请求的状态码；</li>
<li> l7Flow_outFlux_domain：请求域名；</li>
<li> l7Flow_outFlux_url：请求的URL; </li>
<li> l7Flow_outFlux_resourceType：请求的资源类型；</li>
<li> l7Flow_outFlux_sip：客户端的源IP；</li>
<li> l7Flow_outFlux_referers：refer信息；</li>
<li> l7Flow_outFlux_ua_device：设备类型; </li>
<li> l7Flow_outFlux_ua_browser：浏览器类型；</li>
<li> l7Flow_outFlux_us_os：操作系统类型。</li>
 * @method array getZoneIds() 获取站点集合，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合，不填默认选择全部站点。
 * @method integer getLimit() 获取查询前多少个数据，最大值为1000，不填默认默认为: 10， 表示查询前top10的数据。
 * @method void setLimit(integer $Limit) 设置查询前多少个数据，最大值为1000，不填默认默认为: 10， 表示查询前top10的数据。
 * @method array getFilters() 获取过滤条件，详细的过滤条件如下：
<li>country<br>   按照【<strong>国家/地区</strong>】进行过滤，国家/地区遵循<a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a>规范。<br>   类型：String<br>   必选：否</li>
<li>province<br>   按照【<strong>省份</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否</li>
<li>isp<br>   按照【<strong>运营商</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否<br>   可选项：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城带宽；<br>   0：其他运营商。</li>
<li>domain<br>   按照【<strong>子域名</strong>】进行过滤，子域名形如： test.example.com。<br>   类型：String<br>   必选：否</li>
<li>url<br>   按照【<strong>URL</strong>】进行过滤，此参数最长支持30天的查询范围，如果需要过滤多个值，多个值之间使用分号间隔，URL形如：/content,。<br>   类型：String<br>   必选：否</li>
<li>referer<br>   按照【<strong>Referer头信息</strong>】进行过滤, 此参数最长支持30天的查询范围，Referer形如：example.com。<br>   类型：String<br>   必选：否</li>   必选：否</li>
<li>resourceType<br>   按照【<strong>资源类型</strong>】进行过滤，此参数最长支持30天的的查询范围，资源类型形如：jpg，png。<br>   类型：String<br>   必选：否</li>
<li>protocol<br>   按照【<strong>HTTP协议</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   HTTP/1.0：HTTP 1.0；<br>   HTTP/1.1：HTTP 1.1；<br>   HTTP/2.0：HTTP 2.0；<br>   HTTP/3.0：HTTP 3.0；<br>   WebSocket：WebSocket。</li>
<li>statusCode<br>   按照【<strong>状态码</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   1XX：1xx类型的状态码；<br>   100：100状态码；<br>   101：101状态码；<br>   102：102状态码；<br>   2XX：2xx类型的状态码；<br>   200：200状态码；<br>   201：201状态码；<br>   202：202状态码；<br>   203：203状态码；<br>   204：204状态码；<br>   100：100状态码；<br>   206：206状态码；<br>   207：207状态码；<br>   3XX：3xx类型的状态码；<br>   300：300状态码；<br>   301：301状态码；<br>   302：302状态码；<br>   303：303状态码；<br>   304：304状态码；<br>   305：305状态码；<br>   307：307状态码；<br>   4XX：4xx类型的状态码；<br>   400：400状态码；<br>   401：401状态码；<br>   402：402状态码；<br>   403：403状态码；<br>   404：404状态码；<br>   405：405状态码；<br>   406：406状态码；<br>   407：407状态码；<br>   408：408状态码；<br>   409：409状态码；<br>   410：410状态码；<br>   411：411状态码；<br>   412：412状态码；<br>   412：413状态码；<br>   414：414状态码；<br>   415：415状态码；<br>   416：416状态码；<br>   417：417状态码；<br>   422：422状态码；<br>   423：423状态码；<br>   424：424状态码；<br>   426：426状态码；<br>   451：451状态码；<br>   5XX：5xx类型的状态码；<br>   500：500状态码；<br>   501：501状态码；<br>   502：502状态码；<br>   503：503状态码；<br>   504：504状态码；<br>   505：505状态码；<br>   506：506状态码；<br>   507：507状态码；<br>   510：510状态码；<br>   514：514状态码；<br>   544：544状态码。</li>
<li>browserType<br>   按照【<strong>浏览器类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：Bot攻击；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：BIDU浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UB浏览器。</li>
<li>deviceType<br>   按照【<strong>设备类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType<br>   按照【<strong>操作系统类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：Bot攻击；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion<br>   按照【<strong>TLS版本</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TLS1.0：TLS 1.0；<br>   TLS1.1：TLS 1.1；<br>   TLS1.2：TLS 1.2；<br>   TLS1.3：TLS 1.3。</li>
<li>ipVersion<br>   按照【<strong>IP版本</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   4：Ipv4；<br>   6：Ipv6。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件如下：
<li>country<br>   按照【<strong>国家/地区</strong>】进行过滤，国家/地区遵循<a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a>规范。<br>   类型：String<br>   必选：否</li>
<li>province<br>   按照【<strong>省份</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否</li>
<li>isp<br>   按照【<strong>运营商</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否<br>   可选项：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城带宽；<br>   0：其他运营商。</li>
<li>domain<br>   按照【<strong>子域名</strong>】进行过滤，子域名形如： test.example.com。<br>   类型：String<br>   必选：否</li>
<li>url<br>   按照【<strong>URL</strong>】进行过滤，此参数最长支持30天的查询范围，如果需要过滤多个值，多个值之间使用分号间隔，URL形如：/content,。<br>   类型：String<br>   必选：否</li>
<li>referer<br>   按照【<strong>Referer头信息</strong>】进行过滤, 此参数最长支持30天的查询范围，Referer形如：example.com。<br>   类型：String<br>   必选：否</li>   必选：否</li>
<li>resourceType<br>   按照【<strong>资源类型</strong>】进行过滤，此参数最长支持30天的的查询范围，资源类型形如：jpg，png。<br>   类型：String<br>   必选：否</li>
<li>protocol<br>   按照【<strong>HTTP协议</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   HTTP/1.0：HTTP 1.0；<br>   HTTP/1.1：HTTP 1.1；<br>   HTTP/2.0：HTTP 2.0；<br>   HTTP/3.0：HTTP 3.0；<br>   WebSocket：WebSocket。</li>
<li>statusCode<br>   按照【<strong>状态码</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   1XX：1xx类型的状态码；<br>   100：100状态码；<br>   101：101状态码；<br>   102：102状态码；<br>   2XX：2xx类型的状态码；<br>   200：200状态码；<br>   201：201状态码；<br>   202：202状态码；<br>   203：203状态码；<br>   204：204状态码；<br>   100：100状态码；<br>   206：206状态码；<br>   207：207状态码；<br>   3XX：3xx类型的状态码；<br>   300：300状态码；<br>   301：301状态码；<br>   302：302状态码；<br>   303：303状态码；<br>   304：304状态码；<br>   305：305状态码；<br>   307：307状态码；<br>   4XX：4xx类型的状态码；<br>   400：400状态码；<br>   401：401状态码；<br>   402：402状态码；<br>   403：403状态码；<br>   404：404状态码；<br>   405：405状态码；<br>   406：406状态码；<br>   407：407状态码；<br>   408：408状态码；<br>   409：409状态码；<br>   410：410状态码；<br>   411：411状态码；<br>   412：412状态码；<br>   412：413状态码；<br>   414：414状态码；<br>   415：415状态码；<br>   416：416状态码；<br>   417：417状态码；<br>   422：422状态码；<br>   423：423状态码；<br>   424：424状态码；<br>   426：426状态码；<br>   451：451状态码；<br>   5XX：5xx类型的状态码；<br>   500：500状态码；<br>   501：501状态码；<br>   502：502状态码；<br>   503：503状态码；<br>   504：504状态码；<br>   505：505状态码；<br>   506：506状态码；<br>   507：507状态码；<br>   510：510状态码；<br>   514：514状态码；<br>   544：544状态码。</li>
<li>browserType<br>   按照【<strong>浏览器类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：Bot攻击；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：BIDU浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UB浏览器。</li>
<li>deviceType<br>   按照【<strong>设备类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType<br>   按照【<strong>操作系统类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：Bot攻击；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion<br>   按照【<strong>TLS版本</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TLS1.0：TLS 1.0；<br>   TLS1.1：TLS 1.1；<br>   TLS1.2：TLS 1.2；<br>   TLS1.3：TLS 1.3。</li>
<li>ipVersion<br>   按照【<strong>IP版本</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   4：Ipv4；<br>   6：Ipv6。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 */
class DescribeTopL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 查询的指标，取值有：
<li> l7Flow_outFlux_country：请求的国家；</li>
<li> l7Flow_outFlux_statusCode：请求的状态码；</li>
<li> l7Flow_outFlux_domain：请求域名；</li>
<li> l7Flow_outFlux_url：请求的URL; </li>
<li> l7Flow_outFlux_resourceType：请求的资源类型；</li>
<li> l7Flow_outFlux_sip：客户端的源IP；</li>
<li> l7Flow_outFlux_referers：refer信息；</li>
<li> l7Flow_outFlux_ua_device：设备类型; </li>
<li> l7Flow_outFlux_ua_browser：浏览器类型；</li>
<li> l7Flow_outFlux_us_os：操作系统类型。</li>
     */
    public $MetricName;

    /**
     * @var array 站点集合，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var integer 查询前多少个数据，最大值为1000，不填默认默认为: 10， 表示查询前top10的数据。
     */
    public $Limit;

    /**
     * @var array 过滤条件，详细的过滤条件如下：
<li>country<br>   按照【<strong>国家/地区</strong>】进行过滤，国家/地区遵循<a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a>规范。<br>   类型：String<br>   必选：否</li>
<li>province<br>   按照【<strong>省份</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否</li>
<li>isp<br>   按照【<strong>运营商</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否<br>   可选项：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城带宽；<br>   0：其他运营商。</li>
<li>domain<br>   按照【<strong>子域名</strong>】进行过滤，子域名形如： test.example.com。<br>   类型：String<br>   必选：否</li>
<li>url<br>   按照【<strong>URL</strong>】进行过滤，此参数最长支持30天的查询范围，如果需要过滤多个值，多个值之间使用分号间隔，URL形如：/content,。<br>   类型：String<br>   必选：否</li>
<li>referer<br>   按照【<strong>Referer头信息</strong>】进行过滤, 此参数最长支持30天的查询范围，Referer形如：example.com。<br>   类型：String<br>   必选：否</li>   必选：否</li>
<li>resourceType<br>   按照【<strong>资源类型</strong>】进行过滤，此参数最长支持30天的的查询范围，资源类型形如：jpg，png。<br>   类型：String<br>   必选：否</li>
<li>protocol<br>   按照【<strong>HTTP协议</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   HTTP/1.0：HTTP 1.0；<br>   HTTP/1.1：HTTP 1.1；<br>   HTTP/2.0：HTTP 2.0；<br>   HTTP/3.0：HTTP 3.0；<br>   WebSocket：WebSocket。</li>
<li>statusCode<br>   按照【<strong>状态码</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   1XX：1xx类型的状态码；<br>   100：100状态码；<br>   101：101状态码；<br>   102：102状态码；<br>   2XX：2xx类型的状态码；<br>   200：200状态码；<br>   201：201状态码；<br>   202：202状态码；<br>   203：203状态码；<br>   204：204状态码；<br>   100：100状态码；<br>   206：206状态码；<br>   207：207状态码；<br>   3XX：3xx类型的状态码；<br>   300：300状态码；<br>   301：301状态码；<br>   302：302状态码；<br>   303：303状态码；<br>   304：304状态码；<br>   305：305状态码；<br>   307：307状态码；<br>   4XX：4xx类型的状态码；<br>   400：400状态码；<br>   401：401状态码；<br>   402：402状态码；<br>   403：403状态码；<br>   404：404状态码；<br>   405：405状态码；<br>   406：406状态码；<br>   407：407状态码；<br>   408：408状态码；<br>   409：409状态码；<br>   410：410状态码；<br>   411：411状态码；<br>   412：412状态码；<br>   412：413状态码；<br>   414：414状态码；<br>   415：415状态码；<br>   416：416状态码；<br>   417：417状态码；<br>   422：422状态码；<br>   423：423状态码；<br>   424：424状态码；<br>   426：426状态码；<br>   451：451状态码；<br>   5XX：5xx类型的状态码；<br>   500：500状态码；<br>   501：501状态码；<br>   502：502状态码；<br>   503：503状态码；<br>   504：504状态码；<br>   505：505状态码；<br>   506：506状态码；<br>   507：507状态码；<br>   510：510状态码；<br>   514：514状态码；<br>   544：544状态码。</li>
<li>browserType<br>   按照【<strong>浏览器类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：Bot攻击；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：BIDU浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UB浏览器。</li>
<li>deviceType<br>   按照【<strong>设备类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType<br>   按照【<strong>操作系统类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：Bot攻击；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion<br>   按照【<strong>TLS版本</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TLS1.0：TLS 1.0；<br>   TLS1.1：TLS 1.1；<br>   TLS1.2：TLS 1.2；<br>   TLS1.3：TLS 1.3。</li>
<li>ipVersion<br>   按照【<strong>IP版本</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   4：Ipv4；<br>   6：Ipv6。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
     */
    public $Filters;

    /**
     * @var string 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     */
    public $Interval;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param string $MetricName 查询的指标，取值有：
<li> l7Flow_outFlux_country：请求的国家；</li>
<li> l7Flow_outFlux_statusCode：请求的状态码；</li>
<li> l7Flow_outFlux_domain：请求域名；</li>
<li> l7Flow_outFlux_url：请求的URL; </li>
<li> l7Flow_outFlux_resourceType：请求的资源类型；</li>
<li> l7Flow_outFlux_sip：客户端的源IP；</li>
<li> l7Flow_outFlux_referers：refer信息；</li>
<li> l7Flow_outFlux_ua_device：设备类型; </li>
<li> l7Flow_outFlux_ua_browser：浏览器类型；</li>
<li> l7Flow_outFlux_us_os：操作系统类型。</li>
     * @param array $ZoneIds 站点集合，不填默认选择全部站点。
     * @param integer $Limit 查询前多少个数据，最大值为1000，不填默认默认为: 10， 表示查询前top10的数据。
     * @param array $Filters 过滤条件，详细的过滤条件如下：
<li>country<br>   按照【<strong>国家/地区</strong>】进行过滤，国家/地区遵循<a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a>规范。<br>   类型：String<br>   必选：否</li>
<li>province<br>   按照【<strong>省份</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否</li>
<li>isp<br>   按照【<strong>运营商</strong>】进行过滤，此参数只支持服务区域为中国大陆。<br>   类型：String<br>   必选：否<br>   可选项：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城带宽；<br>   0：其他运营商。</li>
<li>domain<br>   按照【<strong>子域名</strong>】进行过滤，子域名形如： test.example.com。<br>   类型：String<br>   必选：否</li>
<li>url<br>   按照【<strong>URL</strong>】进行过滤，此参数最长支持30天的查询范围，如果需要过滤多个值，多个值之间使用分号间隔，URL形如：/content,。<br>   类型：String<br>   必选：否</li>
<li>referer<br>   按照【<strong>Referer头信息</strong>】进行过滤, 此参数最长支持30天的查询范围，Referer形如：example.com。<br>   类型：String<br>   必选：否</li>   必选：否</li>
<li>resourceType<br>   按照【<strong>资源类型</strong>】进行过滤，此参数最长支持30天的的查询范围，资源类型形如：jpg，png。<br>   类型：String<br>   必选：否</li>
<li>protocol<br>   按照【<strong>HTTP协议</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   HTTP/1.0：HTTP 1.0；<br>   HTTP/1.1：HTTP 1.1；<br>   HTTP/2.0：HTTP 2.0；<br>   HTTP/3.0：HTTP 3.0；<br>   WebSocket：WebSocket。</li>
<li>statusCode<br>   按照【<strong>状态码</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   1XX：1xx类型的状态码；<br>   100：100状态码；<br>   101：101状态码；<br>   102：102状态码；<br>   2XX：2xx类型的状态码；<br>   200：200状态码；<br>   201：201状态码；<br>   202：202状态码；<br>   203：203状态码；<br>   204：204状态码；<br>   100：100状态码；<br>   206：206状态码；<br>   207：207状态码；<br>   3XX：3xx类型的状态码；<br>   300：300状态码；<br>   301：301状态码；<br>   302：302状态码；<br>   303：303状态码；<br>   304：304状态码；<br>   305：305状态码；<br>   307：307状态码；<br>   4XX：4xx类型的状态码；<br>   400：400状态码；<br>   401：401状态码；<br>   402：402状态码；<br>   403：403状态码；<br>   404：404状态码；<br>   405：405状态码；<br>   406：406状态码；<br>   407：407状态码；<br>   408：408状态码；<br>   409：409状态码；<br>   410：410状态码；<br>   411：411状态码；<br>   412：412状态码；<br>   412：413状态码；<br>   414：414状态码；<br>   415：415状态码；<br>   416：416状态码；<br>   417：417状态码；<br>   422：422状态码；<br>   423：423状态码；<br>   424：424状态码；<br>   426：426状态码；<br>   451：451状态码；<br>   5XX：5xx类型的状态码；<br>   500：500状态码；<br>   501：501状态码；<br>   502：502状态码；<br>   503：503状态码；<br>   504：504状态码；<br>   505：505状态码；<br>   506：506状态码；<br>   507：507状态码；<br>   510：510状态码；<br>   514：514状态码；<br>   544：544状态码。</li>
<li>browserType<br>   按照【<strong>浏览器类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：Bot攻击；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：BIDU浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UB浏览器。</li>
<li>deviceType<br>   按照【<strong>设备类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType<br>   按照【<strong>操作系统类型</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：Bot攻击；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion<br>   按照【<strong>TLS版本</strong>】进行过滤，此参数最长支持30天的查询范围。<br>   类型：String<br>   必选：否<br>   可选项：<br>   TLS1.0：TLS 1.0；<br>   TLS1.1：TLS 1.1；<br>   TLS1.2：TLS 1.2；<br>   TLS1.3：TLS 1.3。</li>
<li>ipVersion<br>   按照【<strong>IP版本</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   4：Ipv4；<br>   6：Ipv6。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
     * @param string $Interval 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
