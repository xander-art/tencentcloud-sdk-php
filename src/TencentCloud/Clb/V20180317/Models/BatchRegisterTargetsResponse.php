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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchRegisterTargets返回参数结构体
 *
 * @method array getFailListenerIdSet() 获取绑定失败的监听器ID，如为空表示全部绑定成功。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailListenerIdSet(array $FailListenerIdSet) 设置绑定失败的监听器ID，如为空表示全部绑定成功。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取绑定失败错误原因信息。
 * @method void setMessage(string $Message) 设置绑定失败错误原因信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BatchRegisterTargetsResponse extends AbstractModel
{
    /**
     * @var array 绑定失败的监听器ID，如为空表示全部绑定成功。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailListenerIdSet;

    /**
     * @var string 绑定失败错误原因信息。
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FailListenerIdSet 绑定失败的监听器ID，如为空表示全部绑定成功。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 绑定失败错误原因信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FailListenerIdSet",$param) and $param["FailListenerIdSet"] !== null) {
            $this->FailListenerIdSet = $param["FailListenerIdSet"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
