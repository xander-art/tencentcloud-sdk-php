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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvName() 获取计算环境名称
 * @method void setEnvName(string $EnvName) 设置计算环境名称
 * @method string getEnvDescription() 获取计算环境描述
 * @method void setEnvDescription(string $EnvDescription) 设置计算环境描述
 * @method string getEnvType() 获取计算环境管理类型
 * @method void setEnvType(string $EnvType) 设置计算环境管理类型
 * @method EnvData getEnvData() 获取计算环境具体参数
 * @method void setEnvData(EnvData $EnvData) 设置计算环境具体参数
 * @method integer getDesiredComputeNodeCount() 获取计算节点期望个数
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置计算节点期望个数
 * @method array getMountDataDisks() 获取数据盘挂载选项
 * @method void setMountDataDisks(array $MountDataDisks) 设置数据盘挂载选项
 * @method array getAuthentications() 获取授权信息
 * @method void setAuthentications(array $Authentications) 设置授权信息
 * @method array getInputMappings() 获取输入映射信息
 * @method void setInputMappings(array $InputMappings) 设置输入映射信息
 * @method AgentRunningMode getAgentRunningMode() 获取agent运行模式，适用于Windows系统
 * @method void setAgentRunningMode(AgentRunningMode $AgentRunningMode) 设置agent运行模式，适用于Windows系统
 * @method Notification getNotifications() 获取通知信息
 * @method void setNotifications(Notification $Notifications) 设置通知信息
 */

/**
 *计算环境
 */
class NamedComputeEnv extends AbstractModel
{
    /**
     * @var string 计算环境名称
     */
    public $EnvName;

    /**
     * @var string 计算环境描述
     */
    public $EnvDescription;

    /**
     * @var string 计算环境管理类型
     */
    public $EnvType;

    /**
     * @var EnvData 计算环境具体参数
     */
    public $EnvData;

    /**
     * @var integer 计算节点期望个数
     */
    public $DesiredComputeNodeCount;

    /**
     * @var array 数据盘挂载选项
     */
    public $MountDataDisks;

    /**
     * @var array 授权信息
     */
    public $Authentications;

    /**
     * @var array 输入映射信息
     */
    public $InputMappings;

    /**
     * @var AgentRunningMode agent运行模式，适用于Windows系统
     */
    public $AgentRunningMode;

    /**
     * @var Notification 通知信息
     */
    public $Notifications;
    /**
     * @param string $EnvName 计算环境名称
     * @param string $EnvDescription 计算环境描述
     * @param string $EnvType 计算环境管理类型
     * @param EnvData $EnvData 计算环境具体参数
     * @param integer $DesiredComputeNodeCount 计算节点期望个数
     * @param array $MountDataDisks 数据盘挂载选项
     * @param array $Authentications 授权信息
     * @param array $InputMappings 输入映射信息
     * @param AgentRunningMode $AgentRunningMode agent运行模式，适用于Windows系统
     * @param Notification $Notifications 通知信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("AgentRunningMode",$param) and $param["AgentRunningMode"] !== null) {
            $this->AgentRunningMode = new AgentRunningMode();
            $this->AgentRunningMode->deserialize($param["AgentRunningMode"]);
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = new Notification();
            $this->Notifications->deserialize($param["Notifications"]);
        }
    }
}
