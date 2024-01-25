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
 * RegisterDsEventListener请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getKey() 获取任务id
 * @method void setKey(string $Key) 设置任务id
 * @method string getType() 获取REST_API、KAFKA
 * @method void setType(string $Type) 设置REST_API、KAFKA
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method array getProperties() 获取属性信息
 * @method void setProperties(array $Properties) 设置属性信息
 * @method string getEventProjectId() 获取事件所属项目id
 * @method void setEventProjectId(string $EventProjectId) 设置事件所属项目id
 */
class RegisterDsEventListenerRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $Key;

    /**
     * @var string REST_API、KAFKA
     */
    public $Type;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var array 属性信息
     */
    public $Properties;

    /**
     * @var string 事件所属项目id
     */
    public $EventProjectId;

    /**
     * @param string $ProjectId 项目id
     * @param string $Key 任务id
     * @param string $Type REST_API、KAFKA
     * @param string $EventName 事件名称
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param array $Properties 属性信息
     * @param string $EventProjectId 事件所属项目id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("EventProjectId",$param) and $param["EventProjectId"] !== null) {
            $this->EventProjectId = $param["EventProjectId"];
        }
    }
}
