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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchOperateResultDs
 *
 * @method boolean getResult() 获取result
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(boolean $Result) 设置result
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorId() 获取errorId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorId(string $ErrorId) 设置errorId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDesc() 获取errorDesc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置errorDesc
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchOperateResultDs extends AbstractModel
{
    /**
     * @var boolean result
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string errorId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorId;

    /**
     * @var string errorDesc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @param boolean $Result result
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorId errorId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDesc errorDesc
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorId",$param) and $param["ErrorId"] !== null) {
            $this->ErrorId = $param["ErrorId"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }
    }
}
