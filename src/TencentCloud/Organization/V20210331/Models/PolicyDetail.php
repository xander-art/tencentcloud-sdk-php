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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略详情
 *
 * @method integer getPolicyId() 获取策略ID。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID。
 * @method string getPolicyName() 获取策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyDetail extends AbstractModel
{
    /**
     * @var integer 策略ID。
     */
    public $PolicyId;

    /**
     * @var string 策略名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @param integer $PolicyId 策略ID。
     * @param string $PolicyName 策略名称。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
