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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteShareUnitMembers请求参数结构体
 *
 * @method string getUnitId() 获取共享单元ID。
 * @method void setUnitId(string $UnitId) 设置共享单元ID。
 * @method string getArea() 获取共享单元地域。
 * @method void setArea(string $Area) 设置共享单元地域。
 * @method array getMembers() 获取成员列表。
 * @method void setMembers(array $Members) 设置成员列表。
 */
class DeleteShareUnitMembersRequest extends AbstractModel
{
    /**
     * @var string 共享单元ID。
     */
    public $UnitId;

    /**
     * @var string 共享单元地域。
     */
    public $Area;

    /**
     * @var array 成员列表。
     */
    public $Members;

    /**
     * @param string $UnitId 共享单元ID。
     * @param string $Area 共享单元地域。
     * @param array $Members 成员列表。
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new ShareMember();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
