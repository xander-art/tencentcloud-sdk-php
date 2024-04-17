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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageAIServiceTasks请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceType() 获取云存 AI 服务类型。可选值：PackageDetect
 * @method void setServiceType(string $ServiceType) 设置云存 AI 服务类型。可选值：PackageDetect
 * @method integer getLimit() 获取分页拉取数量
 * @method void setLimit(integer $Limit) 设置分页拉取数量
 * @method integer getOffset() 获取分页拉取偏移
 * @method void setOffset(integer $Offset) 设置分页拉取偏移
 * @method integer getStatus() 获取任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；不传则查询全部状态的任务）
 * @method void setStatus(integer $Status) 设置任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；不传则查询全部状态的任务）
 */
class DescribeCloudStorageAIServiceTasksRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 云存 AI 服务类型。可选值：PackageDetect
     */
    public $ServiceType;

    /**
     * @var integer 分页拉取数量
     */
    public $Limit;

    /**
     * @var integer 分页拉取偏移
     */
    public $Offset;

    /**
     * @var integer 任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；不传则查询全部状态的任务）
     */
    public $Status;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceType 云存 AI 服务类型。可选值：PackageDetect
     * @param integer $Limit 分页拉取数量
     * @param integer $Offset 分页拉取偏移
     * @param integer $Status 任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；不传则查询全部状态的任务）
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
