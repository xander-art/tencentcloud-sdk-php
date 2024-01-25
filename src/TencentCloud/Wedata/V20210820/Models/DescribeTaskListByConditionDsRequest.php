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
 * DescribeTaskListByConditionDs请求参数结构体
 *
 * @method integer getPageNum() 获取页数
 * @method void setPageNum(integer $PageNum) 设置页数
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method string getWorkflowId() 获取工作流Id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流Id
 * @method string getKeyword() 获取keyword
 * @method void setKeyword(string $Keyword) 设置keyword
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 */
class DescribeTaskListByConditionDsRequest extends AbstractModel
{
    /**
     * @var integer 页数
     */
    public $PageNum;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var string 工作流Id
     */
    public $WorkflowId;

    /**
     * @var string keyword
     */
    public $Keyword;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @param integer $PageNum 页数
     * @param integer $PageSize 页大小
     * @param string $WorkflowId 工作流Id
     * @param string $Keyword keyword
     * @param string $ProjectId 项目Id
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
