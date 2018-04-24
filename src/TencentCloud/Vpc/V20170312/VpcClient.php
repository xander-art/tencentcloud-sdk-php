<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Vpc\V20170312;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vpc\V20170312\Models as Models;

/**
* @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) 本接口 (AllocateAddresses) 用于申请一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* EIP 是专为动态云计算设计的静态 IP 地址。借助 EIP，您可以快速将 EIP 重新映射到您的另一个实例上，从而屏蔽实例故障。
* 您的 EIP 与腾讯云账户相关联，而不是与某个实例相关联。在您选择显式释放该地址，或欠费超过七天之前，它会一直与您的腾讯云账户保持关联。
* 平台对用户每地域能申请的 EIP 最大配额有所限制，可参见 [EIP 产品简介](https://cloud.tencent.com/document/product/213/5733)，上述配额可通过 DescribeAddressQuota 接口获取。
* @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) 本接口（AssignPrivateIpAddresses）用于弹性网卡申请内网 IP。
* 一个弹性网卡支持绑定的IP地址是有限制的，更多资源限制信息详见<a href="https://cloud.tencent.com/document/product/215/6513">弹性网卡使用限制</a>。
* 可以指定内网IP地址申请，内网IP地址类型不能为主IP，主IP已存在，不能修改，内网IP必须要弹性网卡所在子网内，而且不能被占用。
* 在弹性网卡上申请一个到多个辅助内网IP，接口会在弹性网卡所在子网网段内返回指定数量的辅助内网IP。
* @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) 本接口 (AssociateAddress) 用于将[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）绑定到实例或弹性网卡的指定内网 IP 上。
* 将 EIP 绑定到实例上，其本质是将 EIP 绑定到实例上主网卡的主内网 IP 上。
* 将 EIP 绑定到主网卡的主内网IP上，绑定过程会把其上绑定的普通公网 IP 自动解绑并释放。
* 如果指定网卡的内网 IP 已经绑定了 EIP，则必须先解绑该 EIP，才能再绑定新的。
* EIP 如果欠费或被封堵，则不能被绑定。
* 只有状态为 UNBIND 的 EIP 才能够被绑定。
* @method Models\AttachClassicLinkVpcResponse AttachClassicLinkVpc(Models\AttachClassicLinkVpcRequest $req) 本接口(AttachClassicLinkVpc)用于私有网络和基础网络设备互通。
* 私有网络和基础网络设备必须在同一个地域。
* 私有网络和基础网络的区别详见vpc产品文档-<a href="https://cloud.tencent.com/document/product/215/535#2.-.E7.A7.81.E6.9C.89.E7.BD.91.E7.BB.9C.E4.B8.8E.E5.9F.BA.E7.A1.80.E7.BD.91.E7.BB.9C">私有网络与基础网络</a>。
* @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) 本接口（AttachNetworkInterface）用于弹性网卡绑定云主机。
* 一个云主机可以绑定多个弹性网卡，但只能绑定一个主网卡。更多限制信息详见<a href="https://cloud.tencent.com/document/product/215/6513">弹性网卡使用限制</a>。
* 一个弹性网卡只能同时绑定一个云主机。
* 只有运行中或者已关机状态的云主机才能绑定弹性网卡，查看云主机状态详见<a href="https://cloud.tencent.com/document/api/213/9452#instance_state">腾讯云主机信息</a>。
* 弹性网卡绑定的云主机必须是私有网络的，而且云主机所在可用区必须和弹性网卡子网的可用区相同。
* @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) 创建IP地址模版
* @method Models\CreateAddressTemplateGroupResponse CreateAddressTemplateGroup(Models\CreateAddressTemplateGroupRequest $req) 创建IP地址模版集合
* @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) 本接口（CreateNetworkInterface）用于创建弹性网卡。
* 创建弹性网卡时可以指定内网IP，并且可以指定一个主IP，指定的内网IP必须在弹性网卡所在子网内，而且不能被占用。
* 创建弹性网卡时可以指定需要申请的内网IP数量，系统会随机生成内网IP地址。
* 创建弹性网卡同时可以绑定已有安全组。
* @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) 本接口(CreateRouteTable)用于创建路由表。
* 创建了VPC后，系统会创建一个默认路由表，所有新建的子网都会关联到默认路由表。默认情况下您可以直接使用默认路由表来管理您的路由策略。当您的路由策略较多时，您可以调用创建路由表接口创建更多路由表管理您的路由策略。
* @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) 本接口(CreateRoutes)用于创建路由策略。
* 向指定路由表批量新增路由策略。
* @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) 本接口（CreateSecurityGroup）用于创建新的安全组（SecurityGroup）。
* 每个账户下每个地域的每个项目的<a href="https://cloud.tencent.com/document/product/213/500#2.-.E5.AE.89.E5.85.A8.E7.BB.84.E7.9A.84.E9.99.90.E5.88.B6">安全组数量限制</a>。
* 新建的安全组的入站和出站规则默认都是全部拒绝，在创建后通常您需要再调用CreateSecurityGroupPolicies将安全组的规则设置为需要的规则。
* @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) 本接口（CreateSecurityGroupPolicies）用于创建安全组规则（SecurityGroupPolicy）。

* Version安全组规则版本号，用户每次更新安全规则版本会自动加1，防止你更新的路由规则已过期，不填不考虑冲突。
* Protocol字段支持输入TCP, UDP, ICMP, GRE, ALL。
* CidrBlock字段允许输入符合cidr格式标准的任意字符串。(展开)在基础网络中，如果CidrBlock包含您的账户内的云服务器之外的设备在腾讯云的内网IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
* SecurityGroupId字段允许输入与待修改的安全组位于相同项目中的安全组ID，包括这个安全组ID本身，代表安全组下所有云服务器的内网IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个ID所关联的云服务器变化而变化，不需要重新修改。
* Port字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当Protocol字段是TCP或UDP时，Port字段才被接受。
* Action字段只允许输入ACCEPT或DROP。
* CidrBlock, SecurityGroupId, AddressTemplate三者是排他关系，不允许同时输入，Protocol + Port和ServiceTemplate二者是排他关系，不允许同时输入。
* 一次请求中只能创建单个方向的规则, 如果需要指定索引（PolicyIndex）参数, 多条规则的索引必须一致。
* @method Models\CreateServiceTemplateResponse CreateServiceTemplate(Models\CreateServiceTemplateRequest $req) 创建协议端口模板
* @method Models\CreateServiceTemplateGroupResponse CreateServiceTemplateGroup(Models\CreateServiceTemplateGroupRequest $req) 创建协议端口模板集合
* @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) 本接口(CreateSubnet)用于创建子网。
* 创建子网前必须创建好 VPC。
* 子网创建成功后，子网网段不能修改。子网网段必须在VPC网段内，可以和VPC网段相同（VPC有且只有一个子网时），建议子网网段在VPC网段内，预留网段给其他子网使用。
* 你可以创建的最小网段子网掩码为28（有16个IP地址），最大网段子网掩码为16（65,536个IP地址）。
* 同一个VPC内，多个子网的网段不能重叠。
* 子网创建后会自动关联到默认路由表。
* @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) 本接口(CreateVpc)用于创建私有网络(VPC)。
* 用户可以创建的最小网段子网掩码为28（有16个IP地址），最大网段子网掩码为16（65,536个IP地址）,如果规划VPC网段请参见VPC网段规划说明。
* 创建VPC时可同时把子网创建好，创建子网也请规划好子网网段及子网所在可用区，同一个VPC内子网网段不能重叠，不同可用区可以做跨可用区容灾，详见VPC可用区说明。
* 如果您同时创建了子网，系统会创建一个默认路由表，系统会把子网关联到这个默认路由表。
* 同一个地域能创建的VPC资源个数也是有限制的，详见 <a href="https://cloud.tencent.com/doc/product/215/537" title="VPC使用限制">VPC使用限制</a>,如果需要扩充请联系在线客服。
* @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) 删除IP地址模板
* @method Models\DeleteAddressTemplateGroupResponse DeleteAddressTemplateGroup(Models\DeleteAddressTemplateGroupRequest $req) 删除IP地址模板集合
* @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) 本接口（DeleteNetworkInterface）用于创建弹性网卡。
* 弹性网卡上绑定了云主机时，不能被删除。
* 删除指定弹性网卡，弹性网卡必须先和子机解绑才能删除。删除之后弹性网卡上所有内网IP都将被退还。
* @method Models\DeleteRouteTableResponse DeleteRouteTable(Models\DeleteRouteTableRequest $req) 删除路由表
* @method Models\DeleteRoutesResponse DeleteRoutes(Models\DeleteRoutesRequest $req) 本接口(DeleteRoutes)用于对某个路由表批量删除路由策略（Route）。
* @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) 本接口（DeleteSecurityGroup）用于删除安全组（SecurityGroup）。
* 只有当前账号下的安全组允许被删除。
* 安全组实例ID如果在其他安全组的规则中被引用，则无法直接删除。这种情况下，需要先进行规则修改，再删除安全组。
* 删除的安全组无法再找回，请谨慎调用。
* @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) 本接口（DeleteSecurityGroupPolicies）用于用于删除安全组规则（SecurityGroupPolicy）。
* SecurityGroupPolicySet.Version 用于指定要操作的安全组的版本。传入 Version 版本号若不等于当前安全组的最新版本，将返回失败；若不传 Version 则直接删除指定PolicyIndex的规则。
* @method Models\DeleteServiceTemplateResponse DeleteServiceTemplate(Models\DeleteServiceTemplateRequest $req) 删除协议端口模板
* @method Models\DeleteServiceTemplateGroupResponse DeleteServiceTemplateGroup(Models\DeleteServiceTemplateGroupRequest $req) 删除协议端口模板集合
* @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) 本接口（DeleteSubnet）用于用于删除子网(Subnet)。
* 删除子网前，请清理该子网下所有资源，包括云主机、负载均衡、云数据、noSql、弹性网卡等资源。
* @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) 本接口（DeleteVpc）用于删除私有网络。
* 删除前请确保 VPC 内已经没有相关资源，例如云主机、云数据库、NoSQL、VPN网关、专线网关、负载均衡、对等连接、与之互通的基础网络设备等。
* 删除私有网络是不可逆的操作，请谨慎处理。
* @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) 本接口 (DescribeAddressQuota) 用于查询您账户的[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）在当前地域的配额信息。配额详情可参见 [EIP 产品简介](https://cloud.tencent.com/document/product/213/5733)。
* @method Models\DescribeAddressTemplateGroupsResponse DescribeAddressTemplateGroups(Models\DescribeAddressTemplateGroupsRequest $req) 查询IP地址模板集合
* @method Models\DescribeAddressTemplatesResponse DescribeAddressTemplates(Models\DescribeAddressTemplatesRequest $req) 查询IP地址模板
* @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) 本接口 (DescribeAddresses) 用于查询一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）的详细信息。
* 如果参数为空，返回当前用户一定数量（Limit所指定的数量，默认为20）的 EIP。
* @method Models\DescribeClassicLinkInstancesResponse DescribeClassicLinkInstances(Models\DescribeClassicLinkInstancesRequest $req) 本接口(DescribeClassicLinkInstances)用于私有网络和基础网络设备互通。
* @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) 本接口（DescribeNetworkInterfaces）用于查询弹性网卡列表。
* @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req)  本接口（DescribeRouteTables）用于查询路由表。
* @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) 本接口（DescribeSecurityGroupPolicies）用于查询安全组规则。
* @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) 本接口（DescribeSecurityGroups）用于查询安全组。
* @method Models\DescribeServiceTemplateGroupsResponse DescribeServiceTemplateGroups(Models\DescribeServiceTemplateGroupsRequest $req) 查询协议端口模板集合
* @method Models\DescribeServiceTemplatesResponse DescribeServiceTemplates(Models\DescribeServiceTemplatesRequest $req) 查询协议端口模板
* @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) 本接口（DescribeSubnets）用于查询子网列表。
* @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) 本接口（DescribeVpcs）用于查询私有网络列表。
* @method Models\DetachClassicLinkVpcResponse DetachClassicLinkVpc(Models\DetachClassicLinkVpcRequest $req) 本接口(DetachClassicLinkVpc)用于删除私有网络和基础网络设备互通。
* @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) 本接口（DetachNetworkInterface）用于弹性网卡解绑云主机。
* @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) 本接口 (DisassociateAddress) 用于解绑[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 只有状态为 BIND 和 BIND_ENI 的 EIP 才能进行解绑定操作。
* EIP 如果被封堵，则不能进行解绑定操作。
* @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) 本接口（MigrateNetworkInterface）用于弹性网卡迁移。
* @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req)  本接口（MigratePrivateIpAddress）用于弹性网卡内网IP迁移。

* 该接口用于将一个内网IP从一个弹性网卡上迁移到另外一个弹性网卡，主IP地址不支持迁移。
* 迁移前后的弹性网卡必须在同一个子网内。
* @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) 本接口 (ModifyAddressAttribute) 用于修改[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）的名称。
* @method Models\ModifyAddressTemplateAttributeResponse ModifyAddressTemplateAttribute(Models\ModifyAddressTemplateAttributeRequest $req) 修改IP地址模板
* @method Models\ModifyAddressTemplateGroupAttributeResponse ModifyAddressTemplateGroupAttribute(Models\ModifyAddressTemplateGroupAttributeRequest $req) 修改IP地址模板集合
* @method Models\ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(Models\ModifyNetworkInterfaceAttributeRequest $req) 本接口（ModifyNetworkInterfaceAttribute）用于修改弹性网卡属性。
* @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) 本接口（ModifyPrivateIpAddressesAttribute）用于修改弹性网卡内网IP属性。
* @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) 本接口（ModifyRouteTableAttribute）用于修改路由表（RouteTable）属性。
* @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) 本接口（ModifySecurityGroupAttribute）用于修改安全组（SecurityGroupPolicy）属性。
* @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) 本接口（ModifySecurityGroupPolicies）用于重置安全组出站和入站规则（SecurityGroupPolicy）。

* 接口是先删除当前所有的出入站规则，然后再添加 Egress 和 Ingress 规则，不支持自定义索引 PolicyIndex 。
* 如果指定 SecurityGroupPolicySet.Version 为0, 表示清空所有规则，并忽略Egress和Ingress。
* Protocol字段支持输入TCP, UDP, ICMP, GRE, ALL。
* CidrBlock字段允许输入符合cidr格式标准的任意字符串。(展开)在基础网络中，如果CidrBlock包含您的账户内的云服务器之外的设备在腾讯云的内网IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
* SecurityGroupId字段允许输入与待修改的安全组位于相同项目中的安全组ID，包括这个安全组ID本身，代表安全组下所有云服务器的内网IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个ID所关联的云服务器变化而变化，不需要重新修改。
* Port字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当Protocol字段是TCP或UDP时，Port字段才被接受。
* Action字段只允许输入ACCEPT或DROP。
* CidrBlock, SecurityGroupId, AddressTemplate三者是排他关系，不允许同时输入，Protocol + Port和ServiceTemplate二者是排他关系，不允许同时输入。
* @method Models\ModifyServiceTemplateAttributeResponse ModifyServiceTemplateAttribute(Models\ModifyServiceTemplateAttributeRequest $req) 修改协议端口模板
* @method Models\ModifyServiceTemplateGroupAttributeResponse ModifyServiceTemplateGroupAttribute(Models\ModifyServiceTemplateGroupAttributeRequest $req) 本接口（ModifyServiceTemplateGroupAttribute）用于修改协议端口模板集合。
* @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) 本接口（ModifySubnetAttribute）用于修改子网属性。
* @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) 本接口（ModifyVpcAttribute）用于修改私有网络（VPC）的相关属性。
* @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) 本接口 (ReleaseAddresses) 用于释放一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 该操作不可逆，释放后 EIP 关联的 IP 地址将不再属于您的名下。
* 只有状态为 UNBIND 的 EIP 才能进行释放操作。
* @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) 本接口（ReplaceRouteTableAssociation)用于修改子网（Subnet）关联的路由表（RouteTable）。
* 一个子网只能关联一个路由表。
* @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) 本接口（ReplaceRoutes）根据路由策略ID（RouteId）修改指定的路由策略（Route），支持批量修改。
* @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) 本接口（ReplaceSecurityGroupPolicy）用于替换单条安全组规则（SecurityGroupPolicy）。
单个请求中只能替换单个方向的一条规则, 必须要指定索引（PolicyIndex）。
* @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) 本接口（ResetRoutes）用于对某个路由表名称和所有路由策略（Route）进行重新设置。
注意: 调用本接口是先删除当前路由表中所有路由策略, 再保存新提交的路由策略内容, 会引起网络中断。
* @method Models\TransformAddressResponse TransformAddress(Models\TransformAddressRequest $req) 本接口 (TransformAddress) 用于将实例的普通公网 IP 转换为[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 平台对用户每地域每日解绑 EIP 重新分配普通公网 IP 次数有所限制（可参见 [EIP 产品简介](/document/product/213/1941)）。上述配额可通过 [DescribeAddressQuota](https://cloud.tencent.com/document/api/213/1378) 接口获取。
* @method Models\UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(Models\UnassignPrivateIpAddressesRequest $req) 本接口（UnassignPrivateIpAddresses）用于弹性网卡退还内网 IP。
* 退还弹性网卡上的辅助内网IP，接口自动解关联弹性公网 IP。不能退还弹性网卡的主内网IP。
 */

class VpcClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "vpc.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2017-03-12";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("vpc")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
