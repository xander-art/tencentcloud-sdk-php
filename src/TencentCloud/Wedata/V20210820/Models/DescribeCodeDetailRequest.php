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
 * DescribeCodeDetail请求参数结构体
 *
 * @method string getId() 获取文件或任务ID
 * @method void setId(string $Id) 设置文件或任务ID
 * @method string getName() 获取文件或任务名称
 * @method void setName(string $Name) 设置文件或任务名称
 * @method string getType() 获取文件或任务类型
 * @method void setType(string $Type) 设置文件或任务类型
 */
class DescribeCodeDetailRequest extends AbstractModel
{
    /**
     * @var string 文件或任务ID
     */
    public $Id;

    /**
     * @var string 文件或任务名称
     */
    public $Name;

    /**
     * @var string 文件或任务类型
     */
    public $Type;

    /**
     * @param string $Id 文件或任务ID
     * @param string $Name 文件或任务名称
     * @param string $Type 文件或任务类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
