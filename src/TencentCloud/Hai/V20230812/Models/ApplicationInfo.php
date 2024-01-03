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
 * 应用信息
 *
 * @method string getApplicationId() 获取应用id

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用id

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取应用描述

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置应用描述

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigEnvironment() 获取应用的环境配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigEnvironment(string $ConfigEnvironment) 设置应用的环境配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinSystemDiskSize() 获取系统盘大小下限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinSystemDiskSize(integer $MinSystemDiskSize) 设置系统盘大小下限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型，目前该项取值可以为PRIVATE_APPLICATION或者PUBLIC_APPLICATION
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型，目前该项取值可以为PRIVATE_APPLICATION或者PUBLIC_APPLICATION
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationState() 获取应用状态：CREATING-创建中；ONLINE -正常在线；DELETING -删除中；ARREARS - 欠费隔离
示例值：ONLINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationState(string $ApplicationState) 设置应用状态：CREATING-创建中；ONLINE -正常在线；DELETING -删除中；ARREARS - 欠费隔离
示例值：ONLINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取应用创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置应用创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApplicationSize() 获取应用大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationSize(integer $ApplicationSize) 设置应用大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationInfo extends AbstractModel
{
    /**
     * @var string 应用id

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 应用描述

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 应用的环境配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigEnvironment;

    /**
     * @var integer 系统盘大小下限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinSystemDiskSize;

    /**
     * @var string 应用类型，目前该项取值可以为PRIVATE_APPLICATION或者PUBLIC_APPLICATION
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 应用状态：CREATING-创建中；ONLINE -正常在线；DELETING -删除中；ARREARS - 欠费隔离
示例值：ONLINE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationState;

    /**
     * @var string 应用创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 应用大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationSize;

    /**
     * @param string $ApplicationId 应用id

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 应用描述

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigEnvironment 应用的环境配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinSystemDiskSize 系统盘大小下限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型，目前该项取值可以为PRIVATE_APPLICATION或者PUBLIC_APPLICATION
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationState 应用状态：CREATING-创建中；ONLINE -正常在线；DELETING -删除中；ARREARS - 欠费隔离
示例值：ONLINE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 应用创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApplicationSize 应用大小
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfigEnvironment",$param) and $param["ConfigEnvironment"] !== null) {
            $this->ConfigEnvironment = $param["ConfigEnvironment"];
        }

        if (array_key_exists("MinSystemDiskSize",$param) and $param["MinSystemDiskSize"] !== null) {
            $this->MinSystemDiskSize = $param["MinSystemDiskSize"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ApplicationState",$param) and $param["ApplicationState"] !== null) {
            $this->ApplicationState = $param["ApplicationState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApplicationSize",$param) and $param["ApplicationSize"] !== null) {
            $this->ApplicationSize = $param["ApplicationSize"];
        }
    }
}
