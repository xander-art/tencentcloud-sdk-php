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
 * ListTasks请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getPrincipalId() 获取CAM 用户同步的身份 ID。取值：  当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
 * @method void setPrincipalId(string $PrincipalId) 设置CAM 用户同步的身份 ID。取值：  当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
 * @method string getNextToken() 获取查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
 * @method void setNextToken(string $NextToken) 设置查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
 * @method integer getMaxResults() 获取每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method void setMaxResults(integer $MaxResults) 设置每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method string getPrincipalType() 获取CAM 用户同步的身份类型。取值：  User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method void setPrincipalType(string $PrincipalType) 设置CAM 用户同步的身份类型。取值：  User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method integer getTargetUin() 获取同步的集团账号目标账号的UIN。
 * @method void setTargetUin(integer $TargetUin) 设置同步的集团账号目标账号的UIN。
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method string getRoleConfigurationId() 获取权限配置ID。
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置ID。
 * @method string getStatus() 获取InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
 * @method void setStatus(string $Status) 设置InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
 * @method string getTaskType() 获取任务类型。
 * @method void setTaskType(string $TaskType) 设置任务类型。
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string CAM 用户同步的身份 ID。取值：  当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
     */
    public $PrincipalId;

    /**
     * @var string 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
     */
    public $NextToken;

    /**
     * @var integer 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     */
    public $MaxResults;

    /**
     * @var string CAM 用户同步的身份类型。取值：  User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     */
    public $PrincipalType;

    /**
     * @var integer 同步的集团账号目标账号的UIN。
     */
    public $TargetUin;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     */
    public $TargetType;

    /**
     * @var string 权限配置ID。
     */
    public $RoleConfigurationId;

    /**
     * @var string InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
     */
    public $Status;

    /**
     * @var string 任务类型。
     */
    public $TaskType;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $PrincipalId CAM 用户同步的身份 ID。取值：  当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
     * @param string $NextToken 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
     * @param integer $MaxResults 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     * @param string $PrincipalType CAM 用户同步的身份类型。取值：  User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     * @param integer $TargetUin 同步的集团账号目标账号的UIN。
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     * @param string $RoleConfigurationId 权限配置ID。
     * @param string $Status InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
     * @param string $TaskType 任务类型。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
