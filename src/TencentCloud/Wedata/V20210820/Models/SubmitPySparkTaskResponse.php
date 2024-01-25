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
 * SubmitPySparkTask返回参数结构体
 *
 * @method AdhocRecord getRecord() 获取任务提交记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecord(AdhocRecord $Record) 设置任务提交记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetails() 获取子任务记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置子任务记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SubmitPySparkTaskResponse extends AbstractModel
{
    /**
     * @var AdhocRecord 任务提交记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Record;

    /**
     * @var array 子任务记录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AdhocRecord $Record 任务提交记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Details 子任务记录列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = new AdhocRecord();
            $this->Record->deserialize($param["Record"]);
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new AdhocDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
