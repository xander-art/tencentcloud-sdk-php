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
 * 云原生网关Upstream信息
 *
 * @method string getID() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTarget() 获取后端配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(array $Target) 设置后端配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongUpstreamPreview extends AbstractModel
{
    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 后端配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @param string $ID 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Target 后端配置
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = [];
            foreach ($param["Target"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Target, $obj);
            }
        }
    }
}
