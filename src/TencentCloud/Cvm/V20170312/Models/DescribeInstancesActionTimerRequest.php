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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesActionTimer请求参数结构体
 *
 * @method array getActionTimerIds() 获取定时任务ID列表。
 * @method void setActionTimerIds(array $ActionTimerIds) 设置定时任务ID列表。
 * @method array getInstanceIds() 获取按照一个或者多个实例ID查询。
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例ID查询。
 * @method string getTimerAction() 获取定时任务执行时间，格式如：2018-05-01 19:00:00，必须大于当前时间5分钟。
 * @method void setTimerAction(string $TimerAction) 设置定时任务执行时间，格式如：2018-05-01 19:00:00，必须大于当前时间5分钟。
 * @method string getEndActionTime() 获取执行时间的结束范围，用于条件筛选，格式如2018-05-01 19:00:00。
 * @method void setEndActionTime(string $EndActionTime) 设置执行时间的结束范围，用于条件筛选，格式如2018-05-01 19:00:00。
 * @method string getStartActionTime() 获取执行时间的开始范围，用于条件筛选，格式如2018-05-01 19:00:00。
 * @method void setStartActionTime(string $StartActionTime) 设置执行时间的开始范围，用于条件筛选，格式如2018-05-01 19:00:00。
 * @method array getStatusList() 获取定时任务状态列表。<br><li>UNDO：未执行<br><li>DOING：正在执行<br><li>DONE：执行完成。
 * @method void setStatusList(array $StatusList) 设置定时任务状态列表。<br><li>UNDO：未执行<br><li>DOING：正在执行<br><li>DONE：执行完成。
 */
class DescribeInstancesActionTimerRequest extends AbstractModel
{
    /**
     * @var array 定时任务ID列表。
     */
    public $ActionTimerIds;

    /**
     * @var array 按照一个或者多个实例ID查询。
     */
    public $InstanceIds;

    /**
     * @var string 定时任务执行时间，格式如：2018-05-01 19:00:00，必须大于当前时间5分钟。
     */
    public $TimerAction;

    /**
     * @var string 执行时间的结束范围，用于条件筛选，格式如2018-05-01 19:00:00。
     */
    public $EndActionTime;

    /**
     * @var string 执行时间的开始范围，用于条件筛选，格式如2018-05-01 19:00:00。
     */
    public $StartActionTime;

    /**
     * @var array 定时任务状态列表。<br><li>UNDO：未执行<br><li>DOING：正在执行<br><li>DONE：执行完成。
     */
    public $StatusList;

    /**
     * @param array $ActionTimerIds 定时任务ID列表。
     * @param array $InstanceIds 按照一个或者多个实例ID查询。
     * @param string $TimerAction 定时任务执行时间，格式如：2018-05-01 19:00:00，必须大于当前时间5分钟。
     * @param string $EndActionTime 执行时间的结束范围，用于条件筛选，格式如2018-05-01 19:00:00。
     * @param string $StartActionTime 执行时间的开始范围，用于条件筛选，格式如2018-05-01 19:00:00。
     * @param array $StatusList 定时任务状态列表。<br><li>UNDO：未执行<br><li>DOING：正在执行<br><li>DONE：执行完成。
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
        if (array_key_exists("ActionTimerIds",$param) and $param["ActionTimerIds"] !== null) {
            $this->ActionTimerIds = $param["ActionTimerIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("TimerAction",$param) and $param["TimerAction"] !== null) {
            $this->TimerAction = $param["TimerAction"];
        }

        if (array_key_exists("EndActionTime",$param) and $param["EndActionTime"] !== null) {
            $this->EndActionTime = $param["EndActionTime"];
        }

        if (array_key_exists("StartActionTime",$param) and $param["StartActionTime"] !== null) {
            $this->StartActionTime = $param["StartActionTime"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
