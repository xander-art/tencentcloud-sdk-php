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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私网网关对象
 *
 * @method string getNatGatewayId() 获取私网网关`ID`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关`ID`。
 * @method string getNatGatewayName() 获取私网网关名称。
 * @method void setNatGatewayName(string $NatGatewayName) 设置私网网关名称。
 * @method string getVpcId() 获取私网网关关联`VPC`实例`ID`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私网网关关联`VPC`实例`ID`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取私网网关当前状态。
 * @method void setStatus(string $Status) 设置私网网关当前状态。
 * @method boolean getCrossDomain() 获取私网网关跨域标志。
 * @method void setCrossDomain(boolean $CrossDomain) 设置私网网关跨域标志。
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method array getTagSet() 获取标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrivateNatGateway extends AbstractModel
{
    /**
     * @var string 私网网关`ID`。
     */
    public $NatGatewayId;

    /**
     * @var string 私网网关名称。
     */
    public $NatGatewayName;

    /**
     * @var string 私网网关关联`VPC`实例`ID`。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 私网网关当前状态。
     */
    public $Status;

    /**
     * @var boolean 私网网关跨域标志。
     */
    public $CrossDomain;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $NatGatewayId 私网网关`ID`。
     * @param string $NatGatewayName 私网网关名称。
     * @param string $VpcId 私网网关关联`VPC`实例`ID`。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 私网网关当前状态。
     * @param boolean $CrossDomain 私网网关跨域标志。
     * @param string $CreatedTime 创建时间
     * @param array $TagSet 标签键值对。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CrossDomain",$param) and $param["CrossDomain"] !== null) {
            $this->CrossDomain = $param["CrossDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
