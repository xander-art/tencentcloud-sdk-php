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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSchemeUrl返回参数结构体
 *
 * @method string getSchemeUrl() 获取小程序链接地址，有效期90天。如果EndPoint是App，得到的链接Path如’weixin://dl/business/?t= *TICKET*‘，用于客户APP、小程序直接拉起电子签小程序；其他EndPoint得到的https链接如'https://essurl.cn/xxx'，点击链接会打开一个H5页面，然后拉起电子签小程序。
 * @method void setSchemeUrl(string $SchemeUrl) 设置小程序链接地址，有效期90天。如果EndPoint是App，得到的链接Path如’weixin://dl/business/?t= *TICKET*‘，用于客户APP、小程序直接拉起电子签小程序；其他EndPoint得到的https链接如'https://essurl.cn/xxx'，点击链接会打开一个H5页面，然后拉起电子签小程序。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSchemeUrlResponse extends AbstractModel
{
    /**
     * @var string 小程序链接地址，有效期90天。如果EndPoint是App，得到的链接Path如’weixin://dl/business/?t= *TICKET*‘，用于客户APP、小程序直接拉起电子签小程序；其他EndPoint得到的https链接如'https://essurl.cn/xxx'，点击链接会打开一个H5页面，然后拉起电子签小程序。
     */
    public $SchemeUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SchemeUrl 小程序链接地址，有效期90天。如果EndPoint是App，得到的链接Path如’weixin://dl/business/?t= *TICKET*‘，用于客户APP、小程序直接拉起电子签小程序；其他EndPoint得到的https链接如'https://essurl.cn/xxx'，点击链接会打开一个H5页面，然后拉起电子签小程序。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SchemeUrl",$param) and $param["SchemeUrl"] !== null) {
            $this->SchemeUrl = $param["SchemeUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
