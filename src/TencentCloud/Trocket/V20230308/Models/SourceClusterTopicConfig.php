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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源集群主题配置
 *
 * @method string getTopicName() 获取主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicType() 获取主题类型，
5.x版本
UNSPECIFIED 未指定
NORMAL 普通消息
FIFO 顺序消息
DELAY 延迟消息
TRANSACTION 事务消息

4.x版本
Normal 普通消息
PartitionedOrder 分区顺序消息
Transaction 事务消息
DelayScheduled 延时消息

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicType(string $TopicType) 设置主题类型，
5.x版本
UNSPECIFIED 未指定
NORMAL 普通消息
FIFO 顺序消息
DELAY 延迟消息
TRANSACTION 事务消息

4.x版本
Normal 普通消息
PartitionedOrder 分区顺序消息
Transaction 事务消息
DelayScheduled 延时消息

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueueNum() 获取队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueNum(integer $QueueNum) 设置队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImported() 获取是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImported(boolean $Imported) 设置是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportStatus() 获取导入状态，
Unknown 未知，
AlreadyExists 已存在，
Success 成功，
Failure 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportStatus(string $ImportStatus) 设置导入状态，
Unknown 未知，
AlreadyExists 已存在，
Success 成功，
Failure 失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class SourceClusterTopicConfig extends AbstractModel
{
    /**
     * @var string 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 主题类型，
5.x版本
UNSPECIFIED 未指定
NORMAL 普通消息
FIFO 顺序消息
DELAY 延迟消息
TRANSACTION 事务消息

4.x版本
Normal 普通消息
PartitionedOrder 分区顺序消息
Transaction 事务消息
DelayScheduled 延时消息

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicType;

    /**
     * @var integer 队列数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueNum;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var boolean 是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Imported;

    /**
     * @var string 命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 导入状态，
Unknown 未知，
AlreadyExists 已存在，
Success 成功，
Failure 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportStatus;

    /**
     * @param string $TopicName 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicType 主题类型，
5.x版本
UNSPECIFIED 未指定
NORMAL 普通消息
FIFO 顺序消息
DELAY 延迟消息
TRANSACTION 事务消息

4.x版本
Normal 普通消息
PartitionedOrder 分区顺序消息
Transaction 事务消息
DelayScheduled 延时消息

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueueNum 队列数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Imported 是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportStatus 导入状态，
Unknown 未知，
AlreadyExists 已存在，
Success 成功，
Failure 失败
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Imported",$param) and $param["Imported"] !== null) {
            $this->Imported = $param["Imported"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImportStatus",$param) and $param["ImportStatus"] !== null) {
            $this->ImportStatus = $param["ImportStatus"];
        }
    }
}
