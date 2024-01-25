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
 * DescribeAllParamDs请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method array getOriginalParams() 获取脚本中的参数
 * @method void setOriginalParams(array $OriginalParams) 设置脚本中的参数
 */
class DescribeAllParamDsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var array 脚本中的参数
     */
    public $OriginalParams;

    /**
     * @param string $ProjectId 项目id
     * @param string $TaskId 任务id
     * @param string $WorkflowId 工作流id
     * @param array $OriginalParams 脚本中的参数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OriginalParams",$param) and $param["OriginalParams"] !== null) {
            $this->OriginalParams = $param["OriginalParams"];
        }
    }
}
