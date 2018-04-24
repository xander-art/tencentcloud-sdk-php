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
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $requestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method integer getTotalCount() 获取符合查询条件的实例总数
 * @method void setTotalCount(integer $totalCount) 设置符合查询条件的实例总数
 * @method array getItems() 获取返回的实例信息
 * @method void setItems(array $items) 设置返回的实例信息
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $requestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeTables返回参数结构体
 */
class DescribeTablesResponse extends AbstractModel
{
    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $requestId;

    /**
     * @var integer 符合查询条件的实例总数
     */
    public $totalCount;

    /**
     * @var array 返回的实例信息
     */
    public $items;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $requestId;
    /**
     * @param string $requestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     * @param integer $totalCount 符合查询条件的实例总数
     * @param array $items 返回的实例信息
     * @param string $requestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->requestId = $param["RequestId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->totalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->items = $param["Items"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->requestId = $param["RequestId"];
        }
    }
}
