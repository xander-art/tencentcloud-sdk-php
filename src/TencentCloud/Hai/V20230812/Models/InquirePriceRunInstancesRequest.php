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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRunInstances请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getBundleType() 获取算力套餐类型
 * @method void setBundleType(string $BundleType) 设置算力套餐类型
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method integer getInstanceCount() 获取购买实例数量。
 * @method void setInstanceCount(integer $InstanceCount) 设置购买实例数量。
 * @method string getInstanceName() 获取实例显示名称
 * @method void setInstanceName(string $InstanceName) 设置实例显示名称
 * @method string getClientToken() 获取幂等请求token
 * @method void setClientToken(string $ClientToken) 设置幂等请求token
 * @method boolean getDryRun() 获取DryRun为True就是只验接口连通性，默认为False
 * @method void setDryRun(boolean $DryRun) 设置DryRun为True就是只验接口连通性，默认为False
 */
class InquirePriceRunInstancesRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 算力套餐类型
     */
    public $BundleType;

    /**
     * @var SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     */
    public $SystemDisk;

    /**
     * @var integer 购买实例数量。
     */
    public $InstanceCount;

    /**
     * @var string 实例显示名称
     */
    public $InstanceName;

    /**
     * @var string 幂等请求token
     */
    public $ClientToken;

    /**
     * @var boolean DryRun为True就是只验接口连通性，默认为False
     */
    public $DryRun;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $BundleType 算力套餐类型
     * @param SystemDisk $SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     * @param integer $InstanceCount 购买实例数量。
     * @param string $InstanceName 实例显示名称
     * @param string $ClientToken 幂等请求token
     * @param boolean $DryRun DryRun为True就是只验接口连通性，默认为False
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
