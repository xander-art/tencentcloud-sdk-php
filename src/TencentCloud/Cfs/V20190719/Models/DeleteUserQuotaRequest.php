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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method string getUserType() 获取指定配额类型，包括Uid、Gid、Dir
 * @method void setUserType(string $UserType) 设置指定配额类型，包括Uid、Gid、Dir
 * @method string getUserId() 获取UID/GID信息
 * @method void setUserId(string $UserId) 设置UID/GID信息
 * @method string getDirectoryPath() 获取设置目录配额的目录的绝对路径
 * @method void setDirectoryPath(string $DirectoryPath) 设置设置目录配额的目录的绝对路径
 */
class DeleteUserQuotaRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var string 指定配额类型，包括Uid、Gid、Dir
     */
    public $UserType;

    /**
     * @var string UID/GID信息
     */
    public $UserId;

    /**
     * @var string 设置目录配额的目录的绝对路径
     */
    public $DirectoryPath;

    /**
     * @param string $FileSystemId 文件系统 ID
     * @param string $UserType 指定配额类型，包括Uid、Gid、Dir
     * @param string $UserId UID/GID信息
     * @param string $DirectoryPath 设置目录配额的目录的绝对路径
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }
    }
}
