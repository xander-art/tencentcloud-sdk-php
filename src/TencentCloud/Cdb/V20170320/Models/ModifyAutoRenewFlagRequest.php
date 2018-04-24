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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取云数据库实例ID
 * @method void setInstanceIds(array $instanceIds) 设置云数据库实例ID
 * @method integer getAutoRenew() 获取自动续费标记，可取值的有：0-不自动续费，1-自动续费
 * @method void setAutoRenew(integer $autoRenew) 设置自动续费标记，可取值的有：0-不自动续费，1-自动续费
 */

/**
 *ModifyAutoRenewFlag请求参数结构体
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 云数据库实例ID
     */
    public $instanceIds;

    /**
     * @var integer 自动续费标记，可取值的有：0-不自动续费，1-自动续费
     */
    public $autoRenew;
    /**
     * @param array $instanceIds 云数据库实例ID
     * @param integer $autoRenew 自动续费标记，可取值的有：0-不自动续费，1-自动续费
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->instanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->autoRenew = $param["AutoRenew"];
        }
    }
}
