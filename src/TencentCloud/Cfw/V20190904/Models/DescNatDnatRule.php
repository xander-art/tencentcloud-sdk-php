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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT防火墙Dnat规则列表
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpProtocol() 获取网络协议，可选值：TCP、UDP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，可选值：TCP、UDP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIpAddress() 获取弹性IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置弹性IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublicPort() 获取公网端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicPort(integer $PublicPort) 设置公网端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIpAddress() 获取内网地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置内网地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrivatePort() 获取内网端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivatePort(integer $PrivatePort) 设置内网端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取NAT防火墙转发规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置NAT防火墙转发规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsReferenced() 获取是否被关联引用，如被远程运维使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReferenced(integer $IsReferenced) 设置是否被关联引用，如被远程运维使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwInsId() 获取所属防火墙实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwInsId(string $FwInsId) 设置所属防火墙实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatGwId() 获取关联的nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGwId(string $NatGwId) 设置关联的nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescNatDnatRule extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 网络协议，可选值：TCP、UDP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpProtocol;

    /**
     * @var string 弹性IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddress;

    /**
     * @var integer 公网端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicPort;

    /**
     * @var string 内网地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIpAddress;

    /**
     * @var integer 内网端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivatePort;

    /**
     * @var string NAT防火墙转发规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 是否被关联引用，如被远程运维使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReferenced;

    /**
     * @var string 所属防火墙实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwInsId;

    /**
     * @var string 关联的nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGwId;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpProtocol 网络协议，可选值：TCP、UDP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIpAddress 弹性IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublicPort 公网端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIpAddress 内网地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PrivatePort 内网端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description NAT防火墙转发规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsReferenced 是否被关联引用，如被远程运维使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwInsId 所属防火墙实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatGwId 关联的nat网关Id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsReferenced",$param) and $param["IsReferenced"] !== null) {
            $this->IsReferenced = $param["IsReferenced"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("NatGwId",$param) and $param["NatGwId"] !== null) {
            $this->NatGwId = $param["NatGwId"];
        }
    }
}
