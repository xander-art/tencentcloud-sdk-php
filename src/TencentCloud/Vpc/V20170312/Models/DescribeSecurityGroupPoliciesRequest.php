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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSecurityGroupId() 获取安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
 */

/**
 *DescribeSecurityGroupPolicies请求参数结构体
 */
class DescribeSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
     */
    public $SecurityGroupId;
    /**
     * @param string $SecurityGroupId 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
