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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodesInfo返回参数结构体
 *
 * @method array getBeNodes() 获取Be节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeNodes(array $BeNodes) 设置Be节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFeNodes() 获取Fe节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeNodes(array $FeNodes) 设置Fe节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeMaster() 获取Fe master节点
 * @method void setFeMaster(string $FeMaster) 设置Fe master节点
 * @method array getBeNodeInfos() 获取Be节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeNodeInfos(array $BeNodeInfos) 设置Be节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFeNodeInfos() 获取Fe节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeNodeInfos(array $FeNodeInfos) 设置Fe节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceNodesInfoResponse extends AbstractModel
{
    /**
     * @var array Be节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeNodes;

    /**
     * @var array Fe节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeNodes;

    /**
     * @var string Fe master节点
     */
    public $FeMaster;

    /**
     * @var array Be节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeNodeInfos;

    /**
     * @var array Fe节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeNodeInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BeNodes Be节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FeNodes Fe节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeMaster Fe master节点
     * @param array $BeNodeInfos Be节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FeNodeInfos Fe节点信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BeNodes",$param) and $param["BeNodes"] !== null) {
            $this->BeNodes = $param["BeNodes"];
        }

        if (array_key_exists("FeNodes",$param) and $param["FeNodes"] !== null) {
            $this->FeNodes = $param["FeNodes"];
        }

        if (array_key_exists("FeMaster",$param) and $param["FeMaster"] !== null) {
            $this->FeMaster = $param["FeMaster"];
        }

        if (array_key_exists("BeNodeInfos",$param) and $param["BeNodeInfos"] !== null) {
            $this->BeNodeInfos = [];
            foreach ($param["BeNodeInfos"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->BeNodeInfos, $obj);
            }
        }

        if (array_key_exists("FeNodeInfos",$param) and $param["FeNodeInfos"] !== null) {
            $this->FeNodeInfos = [];
            foreach ($param["FeNodeInfos"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->FeNodeInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
