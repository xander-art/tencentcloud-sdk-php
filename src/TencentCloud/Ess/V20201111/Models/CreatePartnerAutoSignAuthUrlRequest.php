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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePartnerAutoSignAuthUrl请求参数结构体
 *
 * @method string getAuthorizedOrganizationId() 获取被授企业id
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置被授企业id
 * @method array getSealTypes() 获取指定印章类型，指定后只能选择该类型的印章进行授权支持以下印章类型：- OFFICIAL : 企业公章- CONTRACT : 合同专用章- FINANCE : 财务专用章- PERSONNEL : 人事专用章
 * @method void setSealTypes(array $SealTypes) 设置指定印章类型，指定后只能选择该类型的印章进行授权支持以下印章类型：- OFFICIAL : 企业公章- CONTRACT : 合同专用章- FINANCE : 财务专用章- PERSONNEL : 人事专用章
 * @method Agent getAgent() 获取代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 */
class CreatePartnerAutoSignAuthUrlRequest extends AbstractModel
{
    /**
     * @var string 被授企业id
     */
    public $AuthorizedOrganizationId;

    /**
     * @var array 指定印章类型，指定后只能选择该类型的印章进行授权支持以下印章类型：- OFFICIAL : 企业公章- CONTRACT : 合同专用章- FINANCE : 财务专用章- PERSONNEL : 人事专用章
     */
    public $SealTypes;

    /**
     * @var Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var UserInfo 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @param string $AuthorizedOrganizationId 被授企业id
     * @param array $SealTypes 指定印章类型，指定后只能选择该类型的印章进行授权支持以下印章类型：- OFFICIAL : 企业公章- CONTRACT : 合同专用章- FINANCE : 财务专用章- PERSONNEL : 人事专用章
     * @param Agent $Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param UserInfo $Operator 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
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
        if (array_key_exists("AuthorizedOrganizationId",$param) and $param["AuthorizedOrganizationId"] !== null) {
            $this->AuthorizedOrganizationId = $param["AuthorizedOrganizationId"];
        }

        if (array_key_exists("SealTypes",$param) and $param["SealTypes"] !== null) {
            $this->SealTypes = $param["SealTypes"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
