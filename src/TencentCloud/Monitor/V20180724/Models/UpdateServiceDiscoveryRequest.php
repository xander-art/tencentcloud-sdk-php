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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServiceDiscovery请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method string getKubeClusterId() 获取<li>类型是 TKE，为对应的腾讯云容器服务集群 ID</li>
 * @method void setKubeClusterId(string $KubeClusterId) 设置<li>类型是 TKE，为对应的腾讯云容器服务集群 ID</li>
 * @method integer getKubeType() 获取用户 Kubernetes 集群类型：
<li> 1 = 容器服务集群(TKE) </li>
 * @method void setKubeType(integer $KubeType) 设置用户 Kubernetes 集群类型：
<li> 1 = 容器服务集群(TKE) </li>
 * @method integer getType() 获取服务发现类型，取值如下：
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
 * @method void setType(integer $Type) 设置服务发现类型，取值如下：
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
 * @method string getYaml() 获取服务发现配置信息，YAML 格式

示例值：

```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: go-demo    # 填写一个唯一名称
  namespace: cm-prometheus  # namespace固定，不要修改
spec:
  endpoints:
  - interval: 30s
    # 填写service yaml中Prometheus Exporter对应的Port的Name
    port: 2112
    # 填写Prometheus Exporter对应的Path的值，不填默认/metrics
    path: /metrics
    relabelings:
    # ** 必须要有一个 label 为 application，这里假设 k8s 有一个 label 为 app，
    # 我们通过 relabel 的 replace 动作把它替换成了 application
    - action: replace
      sourceLabels:  [__meta_kubernetes_pod_label_app]
      targetLabel: application
  # 选择要监控service所在的namespace
  namespaceSelector:
    matchNames:
    - golang-demo
    # 填写要监控service的Label值，以定位目标service
  selector:
    matchLabels:
      app: golang-app-demo
```
 * @method void setYaml(string $Yaml) 设置服务发现配置信息，YAML 格式

示例值：

```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: go-demo    # 填写一个唯一名称
  namespace: cm-prometheus  # namespace固定，不要修改
spec:
  endpoints:
  - interval: 30s
    # 填写service yaml中Prometheus Exporter对应的Port的Name
    port: 2112
    # 填写Prometheus Exporter对应的Path的值，不填默认/metrics
    path: /metrics
    relabelings:
    # ** 必须要有一个 label 为 application，这里假设 k8s 有一个 label 为 app，
    # 我们通过 relabel 的 replace 动作把它替换成了 application
    - action: replace
      sourceLabels:  [__meta_kubernetes_pod_label_app]
      targetLabel: application
  # 选择要监控service所在的namespace
  namespaceSelector:
    matchNames:
    - golang-demo
    # 填写要监控service的Label值，以定位目标service
  selector:
    matchLabels:
      app: golang-app-demo
```
 */
class UpdateServiceDiscoveryRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var string <li>类型是 TKE，为对应的腾讯云容器服务集群 ID</li>
     */
    public $KubeClusterId;

    /**
     * @var integer 用户 Kubernetes 集群类型：
<li> 1 = 容器服务集群(TKE) </li>
     */
    public $KubeType;

    /**
     * @var integer 服务发现类型，取值如下：
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
     */
    public $Type;

    /**
     * @var string 服务发现配置信息，YAML 格式

示例值：

```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: go-demo    # 填写一个唯一名称
  namespace: cm-prometheus  # namespace固定，不要修改
spec:
  endpoints:
  - interval: 30s
    # 填写service yaml中Prometheus Exporter对应的Port的Name
    port: 2112
    # 填写Prometheus Exporter对应的Path的值，不填默认/metrics
    path: /metrics
    relabelings:
    # ** 必须要有一个 label 为 application，这里假设 k8s 有一个 label 为 app，
    # 我们通过 relabel 的 replace 动作把它替换成了 application
    - action: replace
      sourceLabels:  [__meta_kubernetes_pod_label_app]
      targetLabel: application
  # 选择要监控service所在的namespace
  namespaceSelector:
    matchNames:
    - golang-demo
    # 填写要监控service的Label值，以定位目标service
  selector:
    matchLabels:
      app: golang-app-demo
```
     */
    public $Yaml;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param string $KubeClusterId <li>类型是 TKE，为对应的腾讯云容器服务集群 ID</li>
     * @param integer $KubeType 用户 Kubernetes 集群类型：
<li> 1 = 容器服务集群(TKE) </li>
     * @param integer $Type 服务发现类型，取值如下：
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
     * @param string $Yaml 服务发现配置信息，YAML 格式

示例值：

```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: go-demo    # 填写一个唯一名称
  namespace: cm-prometheus  # namespace固定，不要修改
spec:
  endpoints:
  - interval: 30s
    # 填写service yaml中Prometheus Exporter对应的Port的Name
    port: 2112
    # 填写Prometheus Exporter对应的Path的值，不填默认/metrics
    path: /metrics
    relabelings:
    # ** 必须要有一个 label 为 application，这里假设 k8s 有一个 label 为 app，
    # 我们通过 relabel 的 replace 动作把它替换成了 application
    - action: replace
      sourceLabels:  [__meta_kubernetes_pod_label_app]
      targetLabel: application
  # 选择要监控service所在的namespace
  namespaceSelector:
    matchNames:
    - golang-demo
    # 填写要监控service的Label值，以定位目标service
  selector:
    matchLabels:
      app: golang-app-demo
```
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("KubeClusterId",$param) and $param["KubeClusterId"] !== null) {
            $this->KubeClusterId = $param["KubeClusterId"];
        }

        if (array_key_exists("KubeType",$param) and $param["KubeType"] !== null) {
            $this->KubeType = $param["KubeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}
