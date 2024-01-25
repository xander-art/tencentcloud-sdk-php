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
 * CommitWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取项目编号
 * @method void setProjectId(string $ProjectId) 设置项目编号
 * @method string getWorkflowId() 获取工作流编号
 * @method void setWorkflowId(string $WorkflowId) 设置工作流编号
 * @method string getCommitDesc() 获取提交信息
 * @method void setCommitDesc(string $CommitDesc) 设置提交信息
 */
class CommitWorkflowRequest extends AbstractModel
{
    /**
     * @var string 项目编号
     */
    public $ProjectId;

    /**
     * @var string 工作流编号
     */
    public $WorkflowId;

    /**
     * @var string 提交信息
     */
    public $CommitDesc;

    /**
     * @param string $ProjectId 项目编号
     * @param string $WorkflowId 工作流编号
     * @param string $CommitDesc 提交信息
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("CommitDesc",$param) and $param["CommitDesc"] !== null) {
            $this->CommitDesc = $param["CommitDesc"];
        }
    }
}
