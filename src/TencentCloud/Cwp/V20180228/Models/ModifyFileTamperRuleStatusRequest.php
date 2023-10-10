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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFileTamperRuleStatus请求参数结构体
 *
 * @method integer getStatus() 获取0: 启用1: 关闭2：删除
 * @method void setStatus(integer $Status) 设置0: 启用1: 关闭2：删除
 * @method array getIds() 获取对应事件id
 * @method void setIds(array $Ids) 设置对应事件id
 * @method integer getRuleCategory() 获取是否是系统规则 0=系统规则 1=用户自定义规则，系统规则Status 不支持删除
 * @method void setRuleCategory(integer $RuleCategory) 设置是否是系统规则 0=系统规则 1=用户自定义规则，系统规则Status 不支持删除
 */
class ModifyFileTamperRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 0: 启用1: 关闭2：删除
     */
    public $Status;

    /**
     * @var array 对应事件id
     */
    public $Ids;

    /**
     * @var integer 是否是系统规则 0=系统规则 1=用户自定义规则，系统规则Status 不支持删除
     */
    public $RuleCategory;

    /**
     * @param integer $Status 0: 启用1: 关闭2：删除
     * @param array $Ids 对应事件id
     * @param integer $RuleCategory 是否是系统规则 0=系统规则 1=用户自定义规则，系统规则Status 不支持删除
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }
    }
}
