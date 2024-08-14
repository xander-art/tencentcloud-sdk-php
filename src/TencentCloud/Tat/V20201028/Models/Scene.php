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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景详情。
 *
 * @method string getSceneId() 获取场景 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneId(string $SceneId) 设置场景 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneName() 获取场景名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneName(string $SceneName) 设置场景名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取场景创建者。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedBy(string $CreatedBy) 设置场景创建者。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Scene extends AbstractModel
{
    /**
     * @var string 场景 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneId;

    /**
     * @var string 场景名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneName;

    /**
     * @var string 场景创建者。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedBy;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @param string $SceneId 场景 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneName 场景名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy 场景创建者。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
