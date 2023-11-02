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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateBatchCancelFlowUrl返回参数结构体
 *
 * @method string getBatchCancelFlowUrl() 获取批量撤销合同的URL链接, 需要在手机端打开, 有效期24小时
 * @method void setBatchCancelFlowUrl(string $BatchCancelFlowUrl) 设置批量撤销合同的URL链接, 需要在手机端打开, 有效期24小时
 * @method array getFailMessages() 获取与入参的FlowIds数组一致,   成功生成到撤销链接中,则为"",   不能撤销合同则为失败原因
 * @method void setFailMessages(array $FailMessages) 设置与入参的FlowIds数组一致,   成功生成到撤销链接中,则为"",   不能撤销合同则为失败原因
 * @method string getUrlExpireOn() 获取签署撤销链接的过期时间(格式为:年-月-日 时:分:秒), 默认是生成链接的24小时后失效


 * @method void setUrlExpireOn(string $UrlExpireOn) 设置签署撤销链接的过期时间(格式为:年-月-日 时:分:秒), 默认是生成链接的24小时后失效


 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelCreateBatchCancelFlowUrlResponse extends AbstractModel
{
    /**
     * @var string 批量撤销合同的URL链接, 需要在手机端打开, 有效期24小时
     */
    public $BatchCancelFlowUrl;

    /**
     * @var array 与入参的FlowIds数组一致,   成功生成到撤销链接中,则为"",   不能撤销合同则为失败原因
     */
    public $FailMessages;

    /**
     * @var string 签署撤销链接的过期时间(格式为:年-月-日 时:分:秒), 默认是生成链接的24小时后失效


     */
    public $UrlExpireOn;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BatchCancelFlowUrl 批量撤销合同的URL链接, 需要在手机端打开, 有效期24小时
     * @param array $FailMessages 与入参的FlowIds数组一致,   成功生成到撤销链接中,则为"",   不能撤销合同则为失败原因
     * @param string $UrlExpireOn 签署撤销链接的过期时间(格式为:年-月-日 时:分:秒), 默认是生成链接的24小时后失效


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
        if (array_key_exists("BatchCancelFlowUrl",$param) and $param["BatchCancelFlowUrl"] !== null) {
            $this->BatchCancelFlowUrl = $param["BatchCancelFlowUrl"];
        }

        if (array_key_exists("FailMessages",$param) and $param["FailMessages"] !== null) {
            $this->FailMessages = $param["FailMessages"];
        }

        if (array_key_exists("UrlExpireOn",$param) and $param["UrlExpireOn"] !== null) {
            $this->UrlExpireOn = $param["UrlExpireOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
