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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 交换RO组信息
 *
 * @method RollbackRoGroupInfo getSrcRoGroupInfo() 获取源RO组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcRoGroupInfo(RollbackRoGroupInfo $SrcRoGroupInfo) 设置源RO组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method RollbackRoGroupInfo getDstRoGroupInfo() 获取目标RO组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstRoGroupInfo(RollbackRoGroupInfo $DstRoGroupInfo) 设置目标RO组信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExchangeRoGroupInfo extends AbstractModel
{
    /**
     * @var RollbackRoGroupInfo 源RO组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcRoGroupInfo;

    /**
     * @var RollbackRoGroupInfo 目标RO组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstRoGroupInfo;

    /**
     * @param RollbackRoGroupInfo $SrcRoGroupInfo 源RO组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param RollbackRoGroupInfo $DstRoGroupInfo 目标RO组信息
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
        if (array_key_exists("SrcRoGroupInfo",$param) and $param["SrcRoGroupInfo"] !== null) {
            $this->SrcRoGroupInfo = new RollbackRoGroupInfo();
            $this->SrcRoGroupInfo->deserialize($param["SrcRoGroupInfo"]);
        }

        if (array_key_exists("DstRoGroupInfo",$param) and $param["DstRoGroupInfo"] !== null) {
            $this->DstRoGroupInfo = new RollbackRoGroupInfo();
            $this->DstRoGroupInfo->deserialize($param["DstRoGroupInfo"]);
        }
    }
}
