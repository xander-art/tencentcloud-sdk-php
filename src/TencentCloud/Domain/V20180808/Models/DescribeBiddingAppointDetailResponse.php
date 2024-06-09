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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBiddingAppointDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getAppointNum() 获取预约人数
 * @method void setAppointNum(integer $AppointNum) 设置预约人数
 * @method string getAppointStartTime() 获取预约开始时间
 * @method void setAppointStartTime(string $AppointStartTime) 设置预约开始时间
 * @method string getAppointEndTime() 获取预约结束时间
 * @method void setAppointEndTime(string $AppointEndTime) 设置预约结束时间
 * @method string getRegTime() 获取 注册时间
 * @method void setRegTime(string $RegTime) 设置 注册时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getDeleteTime() 获取删除时间
 * @method void setDeleteTime(string $DeleteTime) 设置删除时间
 * @method integer getAppointPrice() 获取当前价格
 * @method void setAppointPrice(integer $AppointPrice) 设置当前价格
 * @method integer getAppointBondPrice() 获取预约保证金
 * @method void setAppointBondPrice(integer $AppointBondPrice) 设置预约保证金
 * @method integer getStatus() 获取 1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
 * @method void setStatus(integer $Status) 设置 1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
 * @method string getBiddingBondRefund() 获取预约保证金是否已经退回
yes：退回 no: 未退回
 * @method void setBiddingBondRefund(string $BiddingBondRefund) 设置预约保证金是否已经退回
yes：退回 no: 未退回
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBiddingAppointDetailResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 预约人数
     */
    public $AppointNum;

    /**
     * @var string 预约开始时间
     */
    public $AppointStartTime;

    /**
     * @var string 预约结束时间
     */
    public $AppointEndTime;

    /**
     * @var string  注册时间
     */
    public $RegTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 删除时间
     */
    public $DeleteTime;

    /**
     * @var integer 当前价格
     */
    public $AppointPrice;

    /**
     * @var integer 预约保证金
     */
    public $AppointBondPrice;

    /**
     * @var integer  1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
     */
    public $Status;

    /**
     * @var string 预约保证金是否已经退回
yes：退回 no: 未退回
     */
    public $BiddingBondRefund;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param integer $AppointNum 预约人数
     * @param string $AppointStartTime 预约开始时间
     * @param string $AppointEndTime 预约结束时间
     * @param string $RegTime  注册时间
     * @param string $ExpireTime 过期时间
     * @param string $DeleteTime 删除时间
     * @param integer $AppointPrice 当前价格
     * @param integer $AppointBondPrice 预约保证金
     * @param integer $Status  1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
     * @param string $BiddingBondRefund 预约保证金是否已经退回
yes：退回 no: 未退回
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppointNum",$param) and $param["AppointNum"] !== null) {
            $this->AppointNum = $param["AppointNum"];
        }

        if (array_key_exists("AppointStartTime",$param) and $param["AppointStartTime"] !== null) {
            $this->AppointStartTime = $param["AppointStartTime"];
        }

        if (array_key_exists("AppointEndTime",$param) and $param["AppointEndTime"] !== null) {
            $this->AppointEndTime = $param["AppointEndTime"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("AppointPrice",$param) and $param["AppointPrice"] !== null) {
            $this->AppointPrice = $param["AppointPrice"];
        }

        if (array_key_exists("AppointBondPrice",$param) and $param["AppointBondPrice"] !== null) {
            $this->AppointBondPrice = $param["AppointBondPrice"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BiddingBondRefund",$param) and $param["BiddingBondRefund"] !== null) {
            $this->BiddingBondRefund = $param["BiddingBondRefund"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
