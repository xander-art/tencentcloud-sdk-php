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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容策略
 *
 * @method string getType() 获取类型，Pods或Percent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，Pods或Percent
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(integer $Value) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriodSeconds() 获取扩容周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置扩容周期
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScalerPolicy extends AbstractModel
{
    /**
     * @var string 类型，Pods或Percent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 扩容周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodSeconds;

    /**
     * @param string $Type 类型，Pods或Percent
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value 数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeriodSeconds 扩容周期
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }
    }
}
