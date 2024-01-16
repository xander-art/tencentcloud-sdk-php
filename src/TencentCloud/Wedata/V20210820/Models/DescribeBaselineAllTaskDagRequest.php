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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineAllTaskDag请求参数结构体
 *
 * @method string getBaselineId() 获取基线id
 * @method void setBaselineId(string $BaselineId) 设置基线id
 * @method string getProjectId() 获取1
 * @method void setProjectId(string $ProjectId) 设置1
 * @method string getBaselineTaskId() 获取1
 * @method void setBaselineTaskId(string $BaselineTaskId) 设置1
 */
class DescribeBaselineAllTaskDagRequest extends AbstractModel
{
    /**
     * @var string 基线id
     */
    public $BaselineId;

    /**
     * @var string 1
     */
    public $ProjectId;

    /**
     * @var string 1
     */
    public $BaselineTaskId;

    /**
     * @param string $BaselineId 基线id
     * @param string $ProjectId 1
     * @param string $BaselineTaskId 1
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
        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BaselineTaskId",$param) and $param["BaselineTaskId"] !== null) {
            $this->BaselineTaskId = $param["BaselineTaskId"];
        }
    }
}
