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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (Component) 用于描述控件属性。

在通过文件发起合同时，对应的component有三种定位方式
1. 绝对定位方式
2. 表单域(FIELD)定位方式
3. 关键字(KEYWORD)定位方式，使用关键字定位时，请确保PDF原始文件内是关键字以文字形式保存在PDF文件中，不支持对图片内文字进行关键字查找
可以参考官网说明
https://cloud.tencent.com/document/product/1323/78346#component-.E4.B8.89.E7.A7.8D.E5.AE.9A.E4.BD.8D.E6.96.B9.E5.BC.8F.E8.AF.B4.E6.98.8E
 *
 * @method string getComponentType() 获取**如果是Component填写控件类型，则可选的字段为**：

<ul><li> <b>TEXT</b> : 普通文本控件，输入文本字符串；</li>
<li> <b>MULTI_LINE_TEXT</b> : 多行文本控件，输入文本字符串；</li>
<li> <b>CHECK_BOX</b> : 勾选框控件，若选中填写ComponentValue 填写 true或者 false 字符串；</li>
<li> <b>FILL_IMAGE</b> : 图片控件，ComponentValue 填写图片的资源 ID；</li>
<li> <b>DYNAMIC_TABLE</b> : 动态表格控件；</li>
<li> <b>ATTACHMENT</b> : 附件控件,ComponentValue 填写附件图片的资源 ID列表，以逗号分隔；</li>
<li> <b>SELECTOR</b> : 选择器控件，ComponentValue填写选择的字符串内容；</li>
<li> <b>DATE</b> : 日期控件；默认是格式化为xxxx年xx月xx日字符串；</li>
<li> <b>DISTRICT</b> : 省市区行政区控件，ComponentValue填写省市区行政区字符串内容；</li></ul>

**如果是SignComponent签署控件类型，则可选的字段为**

<ul><li> <b>SIGN_SEAL</b> : 签署印章控件；</li>
<li> <b>SIGN_DATE</b> : 签署日期控件；</li>
<li> <b>SIGN_SIGNATURE</b> : 用户签名控件；</li>
<li> <b>SIGN_PERSONAL_SEAL</b> : 个人签署印章控件（使用文件发起暂不支持此类型）；</li>
<li> <b>SIGN_PAGING_SEAL</b> : 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight</li>
<li> <b>SIGN_OPINION</b> : 签署意见控件，用户需要根据配置的签署意见内容，完成对意见内容的确认；</li>
<li> <b>SIGN_LEGAL_PERSON_SEAL</b> : 企业法定代表人控件。</li></ul>
注：` 表单域的控件不能作为印章和签名控件`
 * @method void setComponentType(string $ComponentType) 设置**如果是Component填写控件类型，则可选的字段为**：

<ul><li> <b>TEXT</b> : 普通文本控件，输入文本字符串；</li>
<li> <b>MULTI_LINE_TEXT</b> : 多行文本控件，输入文本字符串；</li>
<li> <b>CHECK_BOX</b> : 勾选框控件，若选中填写ComponentValue 填写 true或者 false 字符串；</li>
<li> <b>FILL_IMAGE</b> : 图片控件，ComponentValue 填写图片的资源 ID；</li>
<li> <b>DYNAMIC_TABLE</b> : 动态表格控件；</li>
<li> <b>ATTACHMENT</b> : 附件控件,ComponentValue 填写附件图片的资源 ID列表，以逗号分隔；</li>
<li> <b>SELECTOR</b> : 选择器控件，ComponentValue填写选择的字符串内容；</li>
<li> <b>DATE</b> : 日期控件；默认是格式化为xxxx年xx月xx日字符串；</li>
<li> <b>DISTRICT</b> : 省市区行政区控件，ComponentValue填写省市区行政区字符串内容；</li></ul>

**如果是SignComponent签署控件类型，则可选的字段为**

<ul><li> <b>SIGN_SEAL</b> : 签署印章控件；</li>
<li> <b>SIGN_DATE</b> : 签署日期控件；</li>
<li> <b>SIGN_SIGNATURE</b> : 用户签名控件；</li>
<li> <b>SIGN_PERSONAL_SEAL</b> : 个人签署印章控件（使用文件发起暂不支持此类型）；</li>
<li> <b>SIGN_PAGING_SEAL</b> : 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight</li>
<li> <b>SIGN_OPINION</b> : 签署意见控件，用户需要根据配置的签署意见内容，完成对意见内容的确认；</li>
<li> <b>SIGN_LEGAL_PERSON_SEAL</b> : 企业法定代表人控件。</li></ul>
注：` 表单域的控件不能作为印章和签名控件`
 * @method float getComponentHeight() 获取**在绝对定位方式和关键字定位方式下**，指定控件的高度， 控件高度是指控件在PDF文件中的高度，单位为pt（点）。

 * @method void setComponentHeight(float $ComponentHeight) 设置**在绝对定位方式和关键字定位方式下**，指定控件的高度， 控件高度是指控件在PDF文件中的高度，单位为pt（点）。

 * @method float getComponentWidth() 获取**在绝对定位方式和关键字定位方式下**，指定控件宽度，控件宽度是指控件在PDF文件中的宽度，单位为pt（点）。

 * @method void setComponentWidth(float $ComponentWidth) 设置**在绝对定位方式和关键字定位方式下**，指定控件宽度，控件宽度是指控件在PDF文件中的宽度，单位为pt（点）。

 * @method integer getComponentPage() 获取**在绝对定位方式方式下**，指定控件所在PDF文件上的页码

注：
1. 页码编号是从<font color="red">1</font>开始编号的。
2.  <font color="red">页面编号不能超过PDF文件的页码总数</font>。如果指定的页码超过了PDF文件的页码总数，在填写和签署时会出现错误，导致无法正常进行操作。
 * @method void setComponentPage(integer $ComponentPage) 设置**在绝对定位方式方式下**，指定控件所在PDF文件上的页码

注：
1. 页码编号是从<font color="red">1</font>开始编号的。
2.  <font color="red">页面编号不能超过PDF文件的页码总数</font>。如果指定的页码超过了PDF文件的页码总数，在填写和签署时会出现错误，导致无法正常进行操作。
 * @method float getComponentPosX() 获取**在绝对定位方式和关键字定位方式下**，可以指定控件横向位置的位置，单位为pt（点）。
 * @method void setComponentPosX(float $ComponentPosX) 设置**在绝对定位方式和关键字定位方式下**，可以指定控件横向位置的位置，单位为pt（点）。
 * @method float getComponentPosY() 获取**在绝对定位方式和关键字定位方式下**，可以指定控件纵向位置的位置，单位为pt（点）。
 * @method void setComponentPosY(float $ComponentPosY) 设置**在绝对定位方式和关键字定位方式下**，可以指定控件纵向位置的位置，单位为pt（点）。
 * @method integer getFileIndex() 获取<font color="red">【暂未使用】</font>控件所属文件的序号（取值为：0-N）。 目前单文件的情况下，值一直为0
 * @method void setFileIndex(integer $FileIndex) 设置<font color="red">【暂未使用】</font>控件所属文件的序号（取值为：0-N）。 目前单文件的情况下，值一直为0
 * @method string getGenerateMode() 获取控件生成的方式：
<ul><li> <b>NORMAL</b> : 绝对定位控件</li>
<li> <b>FIELD</b> : 表单域</li>
<li> <b>KEYWORD</b> : 关键字（设置关键字时，请确保PDF原始文件内是关键字以文字形式保存在PDF文件中，不支持对图片内文字进行关键字查找）</li></ul>
 * @method void setGenerateMode(string $GenerateMode) 设置控件生成的方式：
<ul><li> <b>NORMAL</b> : 绝对定位控件</li>
<li> <b>FIELD</b> : 表单域</li>
<li> <b>KEYWORD</b> : 关键字（设置关键字时，请确保PDF原始文件内是关键字以文字形式保存在PDF文件中，不支持对图片内文字进行关键字查找）</li></ul>
 * @method string getComponentId() 获取控件唯一ID。

**在绝对定位方式方式下**，ComponentId为控件的ID，长度不能超过30，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在关键字定位方式下**，ComponentId不仅为控件的ID，也是关键字整词。此方式下可以通过"^"来决定是否使用关键字整词匹配能力。

例：

- 如传入的关键字<font color="red">"^甲方签署^"</font >，则会在PDF文件中有且仅有"甲方签署"关键字的地方（<font color="red">前后不能有其他字符</font >）进行对应操作。
- 如传入的关键字为<font color="red">"甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前后可以有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"^甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前面不能有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"甲方签署^</font >"，则PDF文件中每个出现关键字的位置（<font color="red">后面不能有其他字符</font >）都会执行相应操作。


注：`控件ID可以在一个PDF中不可重复`

 * @method void setComponentId(string $ComponentId) 设置控件唯一ID。

**在绝对定位方式方式下**，ComponentId为控件的ID，长度不能超过30，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在关键字定位方式下**，ComponentId不仅为控件的ID，也是关键字整词。此方式下可以通过"^"来决定是否使用关键字整词匹配能力。

例：

- 如传入的关键字<font color="red">"^甲方签署^"</font >，则会在PDF文件中有且仅有"甲方签署"关键字的地方（<font color="red">前后不能有其他字符</font >）进行对应操作。
- 如传入的关键字为<font color="red">"甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前后可以有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"^甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前面不能有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"甲方签署^</font >"，则PDF文件中每个出现关键字的位置（<font color="red">后面不能有其他字符</font >）都会执行相应操作。


注：`控件ID可以在一个PDF中不可重复`

 * @method string getComponentName() 获取**在绝对定位方式方式下**，ComponentName为控件名，长度不能超过20，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在表单域定位方式下**，ComponentName不仅为控件名，也是表单域名称。

注：`控件名可以在一个PDF中可以重复`

 * @method void setComponentName(string $ComponentName) 设置**在绝对定位方式方式下**，ComponentName为控件名，长度不能超过20，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在表单域定位方式下**，ComponentName不仅为控件名，也是表单域名称。

注：`控件名可以在一个PDF中可以重复`

 * @method boolean getComponentRequired() 获取如果是<b>填写控件</b>，ComponentRequired表示在填写页面此控件是否必填
<ul><li>false（默认）：可以不填写</li>
<li>true ：必须填写此填写控件</li></ul>
如果是<b>签署控件</b>，签批控件中签署意见等可以不填写， 其他签署控件不受此字段影响
 * @method void setComponentRequired(boolean $ComponentRequired) 设置如果是<b>填写控件</b>，ComponentRequired表示在填写页面此控件是否必填
<ul><li>false（默认）：可以不填写</li>
<li>true ：必须填写此填写控件</li></ul>
如果是<b>签署控件</b>，签批控件中签署意见等可以不填写， 其他签署控件不受此字段影响
 * @method string getComponentRecipientId() 获取**在通过接口拉取控件信息场景下**，为出参参数，此控件归属的参与方的角色ID角色（即RecipientId），**发起合同时候不要填写此字段留空即可**
 * @method void setComponentRecipientId(string $ComponentRecipientId) 设置**在通过接口拉取控件信息场景下**，为出参参数，此控件归属的参与方的角色ID角色（即RecipientId），**发起合同时候不要填写此字段留空即可**
 * @method string getComponentExtra() 获取**在所有的定位方式下**，控件的扩展参数，为<font color="red">JSON格式</font>，不同类型的控件会有部分非通用参数。

<font color="red">ComponentType为TEXT、MULTI_LINE_TEXT时</font>，支持以下参数：
<ul><li> <b>Font</b>：目前只支持黑体、宋体</li>
<li> <b>FontSize</b>： 范围12 :72</li>
<li> <b>FontAlign</b>： Left/Right/Center，左对齐/居中/右对齐</li>
<li> <b>FontColor</b>：字符串类型，格式为RGB颜色数字</li></ul>
<b>参数样例</b>：`{"FontColor":"255,0,0","FontSize":12}`

<font color="red">ComponentType为FILL_IMAGE时</font>，支持以下参数：
<ul><li> <b>NotMakeImageCenter</b>：bool。是否设置图片居中。false：居中（默认）。 true : 不居中</li>
<li> <b>FillMethod</b> : int. 填充方式。0-铺满（默认）；1-等比例缩放</li></ul>

<font color="red">ComponentType为SIGN_SIGNATURE类型时</font>，可以**ComponentTypeLimit**参数控制签署方式
<ul><li> <b>HANDWRITE</b> : 手写签名</li>
<li> <b>OCR_ESIGN</b> : AI智能识别手写签名</li>
<li> <b>ESIGN</b> : 个人印章类型</li>
<li> <b>SYSTEM_ESIGN</b> : 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）</li>
<li> <b>IMG_ESIGN</b> : 图片印章(该类型支持用户在签署将上传的PNG格式的图片作为签名)</li></ul>
<b>参考样例</b>：`{"ComponentTypeLimit": ["SYSTEM_ESIGN"]}`
印章的对应关系参考下图
![image](https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg)

<font color="red">ComponentType为SIGN_DATE时</font>，支持以下参数：
<ul><li> <b>Font</b> :字符串类型目前只支持"黑体"、"宋体"，如果不填默认为"黑体"</li>
<li> <b>FontSize</b> : 数字类型，范围6-72，默认值为12</li>
<li> <b>FontAlign</b> : 字符串类型，可取Left/Right/Center，对应左对齐/居中/右对齐</li>
<li> <b>Format</b> : 字符串类型，日期格式，必须是以下五种之一 “yyyy m d”，”yyyy年m月d日”，”yyyy/m/d”，”yyyy-m-d”，”yyyy.m.d”。</li>
<li> <b>Gaps</b> : 字符串类型，仅在Format为“yyyy m d”时起作用，格式为用逗号分开的两个整数，例如”2,2”，两个数字分别是日期格式的前后两个空隙中的空格个数</li></ul>
如果extra参数为空，默认为”yyyy年m月d日”格式的居中日期
特别地，如果extra中Format字段为空或无法被识别，则extra参数会被当作默认值处理（Font，FontSize，Gaps和FontAlign都不会起效）
<b>参数样例</b>： ` "{"Format":"yyyy m d","FontSize":12,"Gaps":"2,2", "FontAlign":"Right"}"`

<font color="red">ComponentType为SIGN_SEAL类型时</font>，支持以下参数：
<ul><li> <b>PageRanges</b> :PageRange的数组，通过PageRanges属性设置该印章在PDF所有页面上盖章（适用于标书在所有页面盖章的情况）</li></ul>
<b>参数样例</b>：` "{"PageRange":[{"BeginPage":1,"EndPage":-1}]}"`


<font color="red">关键字模式下支持关键字找不到的情况下不进行报错的设置</font>
<ul><li> <b>IgnoreKeywordError</b> :1-关键字查找不到时不进行报错</li></ul>
场景说明：如果使用关键字进行定位，但是指定的PDF文件中又没有设置的关键字时，发起合同会进行关键字是否存在的校验，如果关键字不存在，会进行报错返回。如果不希望进行报错，可以设置"IgnoreKeywordError"来忽略错误。请注意，如果关键字签署控件对应的签署方在整个PDF文件中一个签署控件都没有，还是会触发报错逻辑。
<b>参数样例</b>：` "{"IgnoreKeywordError":1}"`
 * @method void setComponentExtra(string $ComponentExtra) 设置**在所有的定位方式下**，控件的扩展参数，为<font color="red">JSON格式</font>，不同类型的控件会有部分非通用参数。

<font color="red">ComponentType为TEXT、MULTI_LINE_TEXT时</font>，支持以下参数：
<ul><li> <b>Font</b>：目前只支持黑体、宋体</li>
<li> <b>FontSize</b>： 范围12 :72</li>
<li> <b>FontAlign</b>： Left/Right/Center，左对齐/居中/右对齐</li>
<li> <b>FontColor</b>：字符串类型，格式为RGB颜色数字</li></ul>
<b>参数样例</b>：`{"FontColor":"255,0,0","FontSize":12}`

<font color="red">ComponentType为FILL_IMAGE时</font>，支持以下参数：
<ul><li> <b>NotMakeImageCenter</b>：bool。是否设置图片居中。false：居中（默认）。 true : 不居中</li>
<li> <b>FillMethod</b> : int. 填充方式。0-铺满（默认）；1-等比例缩放</li></ul>

<font color="red">ComponentType为SIGN_SIGNATURE类型时</font>，可以**ComponentTypeLimit**参数控制签署方式
<ul><li> <b>HANDWRITE</b> : 手写签名</li>
<li> <b>OCR_ESIGN</b> : AI智能识别手写签名</li>
<li> <b>ESIGN</b> : 个人印章类型</li>
<li> <b>SYSTEM_ESIGN</b> : 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）</li>
<li> <b>IMG_ESIGN</b> : 图片印章(该类型支持用户在签署将上传的PNG格式的图片作为签名)</li></ul>
<b>参考样例</b>：`{"ComponentTypeLimit": ["SYSTEM_ESIGN"]}`
印章的对应关系参考下图
![image](https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg)

<font color="red">ComponentType为SIGN_DATE时</font>，支持以下参数：
<ul><li> <b>Font</b> :字符串类型目前只支持"黑体"、"宋体"，如果不填默认为"黑体"</li>
<li> <b>FontSize</b> : 数字类型，范围6-72，默认值为12</li>
<li> <b>FontAlign</b> : 字符串类型，可取Left/Right/Center，对应左对齐/居中/右对齐</li>
<li> <b>Format</b> : 字符串类型，日期格式，必须是以下五种之一 “yyyy m d”，”yyyy年m月d日”，”yyyy/m/d”，”yyyy-m-d”，”yyyy.m.d”。</li>
<li> <b>Gaps</b> : 字符串类型，仅在Format为“yyyy m d”时起作用，格式为用逗号分开的两个整数，例如”2,2”，两个数字分别是日期格式的前后两个空隙中的空格个数</li></ul>
如果extra参数为空，默认为”yyyy年m月d日”格式的居中日期
特别地，如果extra中Format字段为空或无法被识别，则extra参数会被当作默认值处理（Font，FontSize，Gaps和FontAlign都不会起效）
<b>参数样例</b>： ` "{"Format":"yyyy m d","FontSize":12,"Gaps":"2,2", "FontAlign":"Right"}"`

<font color="red">ComponentType为SIGN_SEAL类型时</font>，支持以下参数：
<ul><li> <b>PageRanges</b> :PageRange的数组，通过PageRanges属性设置该印章在PDF所有页面上盖章（适用于标书在所有页面盖章的情况）</li></ul>
<b>参数样例</b>：` "{"PageRange":[{"BeginPage":1,"EndPage":-1}]}"`


<font color="red">关键字模式下支持关键字找不到的情况下不进行报错的设置</font>
<ul><li> <b>IgnoreKeywordError</b> :1-关键字查找不到时不进行报错</li></ul>
场景说明：如果使用关键字进行定位，但是指定的PDF文件中又没有设置的关键字时，发起合同会进行关键字是否存在的校验，如果关键字不存在，会进行报错返回。如果不希望进行报错，可以设置"IgnoreKeywordError"来忽略错误。请注意，如果关键字签署控件对应的签署方在整个PDF文件中一个签署控件都没有，还是会触发报错逻辑。
<b>参数样例</b>：` "{"IgnoreKeywordError":1}"`
 * @method boolean getIsFormType() 获取**在通过接口拉取控件信息场景下**，为出参参数，此控件是否通过表单域定位方式生成，默认false-不是，**发起合同时候不要填写此字段留空即可**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFormType(boolean $IsFormType) 设置**在通过接口拉取控件信息场景下**，为出参参数，此控件是否通过表单域定位方式生成，默认false-不是，**发起合同时候不要填写此字段留空即可**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentValue() 获取控件填充vaule，ComponentType和传入值类型对应关系：
<ul><li> <b>TEXT</b> : 文本内容</li>
<li> <b>MULTI_LINE_TEXT</b> : 文本内容</li>
<li> <b>CHECK_BOX</b> : true/false</li>
<li> <b>FILL_IMAGE、ATTACHMENT</b> : 附件的FileId，需要通过UploadFiles接口上传获取</li>
<li> <b>SELECTOR</b> : 选项值</li>
<li> <b>DYNAMIC_TABLE</b>  - 传入json格式的表格内容，详见说明：[数据表格](https://qian.tencent.com/developers/company/dynamic_table)</li>
<li> <b>DATE</b> : 默认是格式化为xxxx年xx月xx日</li>
<li> <b>SIGN_SEAL</b> : 印章ID，于控制台查询获取</li>
<li> <b>SIGN_PAGING_SEAL</b> : 可以指定印章ID，于控制台查询获取</li></ul>


<b>控件值约束说明</b>：
<table> <thead> <tr> <th>特殊控件</th> <th>填写约束</th> </tr> </thead> <tbody> <tr> <td>企业全称控件</td> <td>企业名称中文字符中文括号</td> </tr> <tr> <td>统一社会信用代码控件</td> <td>企业注册的统一社会信用代码</td> </tr> <tr> <td>法人名称控件</td> <td>最大50个字符，2到25个汉字或者1到50个字母</td> </tr> <tr> <td>签署意见控件</td> <td>签署意见最大长度为50字符</td> </tr> <tr> <td>签署人手机号控件</td> <td>国内手机号 13,14,15,16,17,18,19号段长度11位</td> </tr> <tr> <td>签署人身份证控件</td> <td>合法的身份证号码检查</td> </tr> <tr> <td>控件名称</td> <td>控件名称最大长度为20字符，不支持表情</td> </tr> <tr> <td>单行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>多行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>勾选框控件</td> <td>选择填字符串true，不选填字符串false</td> </tr> <tr> <td>选择器控件</td> <td>同单行文本控件约束，填写选择值中的字符串</td> </tr> <tr> <td>数字控件</td> <td>请输入有效的数字(可带小数点)</td> </tr> <tr> <td>日期控件</td> <td>格式：yyyy年mm月dd日</td> </tr> <tr> <td>附件控件</td> <td>JPG或PNG图片，上传数量限制，1到6个，最大6个附件，填写上传的资源ID</td> </tr> <tr> <td>图片控件</td> <td>JPG或PNG图片，填写上传的图片资源ID</td> </tr> <tr> <td>邮箱控件</td> <td>有效的邮箱地址, w3c标准</td> </tr> <tr> <td>地址控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>省市区控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>性别控件</td> <td>选择值中的字符串</td> </tr> <tr> <td>学历控件</td> <td>选择值中的字符串</td> </tr> </tbody> </table>
注：   `部分特殊控件需要在控制台配置模板形式创建`
 * @method void setComponentValue(string $ComponentValue) 设置控件填充vaule，ComponentType和传入值类型对应关系：
<ul><li> <b>TEXT</b> : 文本内容</li>
<li> <b>MULTI_LINE_TEXT</b> : 文本内容</li>
<li> <b>CHECK_BOX</b> : true/false</li>
<li> <b>FILL_IMAGE、ATTACHMENT</b> : 附件的FileId，需要通过UploadFiles接口上传获取</li>
<li> <b>SELECTOR</b> : 选项值</li>
<li> <b>DYNAMIC_TABLE</b>  - 传入json格式的表格内容，详见说明：[数据表格](https://qian.tencent.com/developers/company/dynamic_table)</li>
<li> <b>DATE</b> : 默认是格式化为xxxx年xx月xx日</li>
<li> <b>SIGN_SEAL</b> : 印章ID，于控制台查询获取</li>
<li> <b>SIGN_PAGING_SEAL</b> : 可以指定印章ID，于控制台查询获取</li></ul>


<b>控件值约束说明</b>：
<table> <thead> <tr> <th>特殊控件</th> <th>填写约束</th> </tr> </thead> <tbody> <tr> <td>企业全称控件</td> <td>企业名称中文字符中文括号</td> </tr> <tr> <td>统一社会信用代码控件</td> <td>企业注册的统一社会信用代码</td> </tr> <tr> <td>法人名称控件</td> <td>最大50个字符，2到25个汉字或者1到50个字母</td> </tr> <tr> <td>签署意见控件</td> <td>签署意见最大长度为50字符</td> </tr> <tr> <td>签署人手机号控件</td> <td>国内手机号 13,14,15,16,17,18,19号段长度11位</td> </tr> <tr> <td>签署人身份证控件</td> <td>合法的身份证号码检查</td> </tr> <tr> <td>控件名称</td> <td>控件名称最大长度为20字符，不支持表情</td> </tr> <tr> <td>单行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>多行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>勾选框控件</td> <td>选择填字符串true，不选填字符串false</td> </tr> <tr> <td>选择器控件</td> <td>同单行文本控件约束，填写选择值中的字符串</td> </tr> <tr> <td>数字控件</td> <td>请输入有效的数字(可带小数点)</td> </tr> <tr> <td>日期控件</td> <td>格式：yyyy年mm月dd日</td> </tr> <tr> <td>附件控件</td> <td>JPG或PNG图片，上传数量限制，1到6个，最大6个附件，填写上传的资源ID</td> </tr> <tr> <td>图片控件</td> <td>JPG或PNG图片，填写上传的图片资源ID</td> </tr> <tr> <td>邮箱控件</td> <td>有效的邮箱地址, w3c标准</td> </tr> <tr> <td>地址控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>省市区控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>性别控件</td> <td>选择值中的字符串</td> </tr> <tr> <td>学历控件</td> <td>选择值中的字符串</td> </tr> </tbody> </table>
注：   `部分特殊控件需要在控制台配置模板形式创建`
 * @method float getOffsetX() 获取**如果控件是关键字定位方式**，可以对关键字定位出来的区域进行横坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏左或偏右，可以通过调整横坐标方向的参数来使控件位置更加准确。
注意： `向左调整设置为负数， 向右调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetX(float $OffsetX) 设置**如果控件是关键字定位方式**，可以对关键字定位出来的区域进行横坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏左或偏右，可以通过调整横坐标方向的参数来使控件位置更加准确。
注意： `向左调整设置为负数， 向右调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOffsetY() 获取**如果控件是关键字定位方式**，可以对关键字定位出来的区域进行纵坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏上或偏下，可以通过调整纵坐标方向的参数来使控件位置更加准确。
注意： `向上调整设置为负数， 向下调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetY(float $OffsetY) 设置**如果控件是关键字定位方式**，可以对关键字定位出来的区域进行纵坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏上或偏下，可以通过调整纵坐标方向的参数来使控件位置更加准确。
注意： `向上调整设置为负数， 向下调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeywordOrder() 获取**如果控件是关键字定位方式**，指定关键字排序规则时，可以选择Positive或Reverse两种排序方式。
<ul><li> <b>Positive</b> :表示正序，即根据关键字在PDF文件内的顺序进行排列</li>
<li> <b>Reverse</b> :表示倒序，即根据关键字在PDF文件内的反序进行排列</li></ul>

在指定KeywordIndexes时，如果使用Positive排序方式，0代表在PDF内查找内容时，查找到的第一个关键字；如果使用Reverse排序方式，0代表在PDF内查找内容时，查找到的最后一个关键字。
 * @method void setKeywordOrder(string $KeywordOrder) 设置**如果控件是关键字定位方式**，指定关键字排序规则时，可以选择Positive或Reverse两种排序方式。
<ul><li> <b>Positive</b> :表示正序，即根据关键字在PDF文件内的顺序进行排列</li>
<li> <b>Reverse</b> :表示倒序，即根据关键字在PDF文件内的反序进行排列</li></ul>

在指定KeywordIndexes时，如果使用Positive排序方式，0代表在PDF内查找内容时，查找到的第一个关键字；如果使用Reverse排序方式，0代表在PDF内查找内容时，查找到的最后一个关键字。
 * @method integer getKeywordPage() 获取**如果控件是关键字定位方式**，在KeywordPage中指定关键字页码时，将只会在该页码中查找关键字，非该页码的关键字将不会查询出来。如果不设置查找所有页面中的关键字。
 * @method void setKeywordPage(integer $KeywordPage) 设置**如果控件是关键字定位方式**，在KeywordPage中指定关键字页码时，将只会在该页码中查找关键字，非该页码的关键字将不会查询出来。如果不设置查找所有页面中的关键字。
 * @method string getRelativeLocation() 获取**如果控件是关键字定位方式**，关键字生成的区域的对齐方式， 可以设置下面的值
<ul><li> <b>Middle</b> :居中</li>
<li> <b>Below</b> :正下方</li>
<li> <b>Right</b> :正右方</li>
<li> <b>LowerRight</b> :右上角</li>
<li> <b>UpperRight</b> :右下角。</li></ul>
示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
 * @method void setRelativeLocation(string $RelativeLocation) 设置**如果控件是关键字定位方式**，关键字生成的区域的对齐方式， 可以设置下面的值
<ul><li> <b>Middle</b> :居中</li>
<li> <b>Below</b> :正下方</li>
<li> <b>Right</b> :正右方</li>
<li> <b>LowerRight</b> :右上角</li>
<li> <b>UpperRight</b> :右下角。</li></ul>
示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
 * @method array getKeywordIndexes() 获取**如果控件是关键字定位方式**，关键字索引是指在PDF文件中存在多个相同的关键字时，通过索引指定使用哪一个关键字作为最后的结果。可以通过指定多个索引来同时使用多个关键字。例如，[0,2]表示使用PDF文件内第1个和第3个关键字位置作为最后的结果。

注意：关键字索引是从0开始计数的
 * @method void setKeywordIndexes(array $KeywordIndexes) 设置**如果控件是关键字定位方式**，关键字索引是指在PDF文件中存在多个相同的关键字时，通过索引指定使用哪一个关键字作为最后的结果。可以通过指定多个索引来同时使用多个关键字。例如，[0,2]表示使用PDF文件内第1个和第3个关键字位置作为最后的结果。

注意：关键字索引是从0开始计数的
 * @method boolean getLockComponentValue() 获取**web嵌入发起合同场景下**， 是否锁定填写和签署控件值不允许嵌入页面进行编辑
<ul><li>false（默认）：不锁定控件值，允许在页面编辑控件值</li>
<li>true：锁定控件值，在页面编辑控件值</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockComponentValue(boolean $LockComponentValue) 设置**web嵌入发起合同场景下**， 是否锁定填写和签署控件值不允许嵌入页面进行编辑
<ul><li>false（默认）：不锁定控件值，允许在页面编辑控件值</li>
<li>true：锁定控件值，在页面编辑控件值</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getForbidMoveAndDelete() 获取**web嵌入发起合同场景下**，是否禁止移动和删除填写和签署控件
<ul><li> <b>false（默认）</b> :不禁止移动和删除控件</li>
<li> <b>true</b> : 可以移动和删除控件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForbidMoveAndDelete(boolean $ForbidMoveAndDelete) 设置**web嵌入发起合同场景下**，是否禁止移动和删除填写和签署控件
<ul><li> <b>false（默认）</b> :不禁止移动和删除控件</li>
<li> <b>true</b> : 可以移动和删除控件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComponentDateFontSize() 获取<font color="red">【暂未使用】</font>日期签署控件的字号，默认为 12
 * @method void setComponentDateFontSize(integer $ComponentDateFontSize) 设置<font color="red">【暂未使用】</font>日期签署控件的字号，默认为 12
 * @method string getChannelComponentId() 获取<font color="red">【暂未使用】</font>第三方应用集成平台模板控件 ID 标识
 * @method void setChannelComponentId(string $ChannelComponentId) 设置<font color="red">【暂未使用】</font>第三方应用集成平台模板控件 ID 标识
 * @method integer getChannelComponentSource() 获取<font color="red">【暂未使用】</font>第三方应用集成中子客企业控件来源。
<ul><li> <b>0</b> :平台指定；</li>
<li> <b>1</b> :用户自定义</li></ul>
 * @method void setChannelComponentSource(integer $ChannelComponentSource) 设置<font color="red">【暂未使用】</font>第三方应用集成中子客企业控件来源。
<ul><li> <b>0</b> :平台指定；</li>
<li> <b>1</b> :用户自定义</li></ul>
 */
class Component extends AbstractModel
{
    /**
     * @var string **如果是Component填写控件类型，则可选的字段为**：

<ul><li> <b>TEXT</b> : 普通文本控件，输入文本字符串；</li>
<li> <b>MULTI_LINE_TEXT</b> : 多行文本控件，输入文本字符串；</li>
<li> <b>CHECK_BOX</b> : 勾选框控件，若选中填写ComponentValue 填写 true或者 false 字符串；</li>
<li> <b>FILL_IMAGE</b> : 图片控件，ComponentValue 填写图片的资源 ID；</li>
<li> <b>DYNAMIC_TABLE</b> : 动态表格控件；</li>
<li> <b>ATTACHMENT</b> : 附件控件,ComponentValue 填写附件图片的资源 ID列表，以逗号分隔；</li>
<li> <b>SELECTOR</b> : 选择器控件，ComponentValue填写选择的字符串内容；</li>
<li> <b>DATE</b> : 日期控件；默认是格式化为xxxx年xx月xx日字符串；</li>
<li> <b>DISTRICT</b> : 省市区行政区控件，ComponentValue填写省市区行政区字符串内容；</li></ul>

**如果是SignComponent签署控件类型，则可选的字段为**

<ul><li> <b>SIGN_SEAL</b> : 签署印章控件；</li>
<li> <b>SIGN_DATE</b> : 签署日期控件；</li>
<li> <b>SIGN_SIGNATURE</b> : 用户签名控件；</li>
<li> <b>SIGN_PERSONAL_SEAL</b> : 个人签署印章控件（使用文件发起暂不支持此类型）；</li>
<li> <b>SIGN_PAGING_SEAL</b> : 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight</li>
<li> <b>SIGN_OPINION</b> : 签署意见控件，用户需要根据配置的签署意见内容，完成对意见内容的确认；</li>
<li> <b>SIGN_LEGAL_PERSON_SEAL</b> : 企业法定代表人控件。</li></ul>
注：` 表单域的控件不能作为印章和签名控件`
     */
    public $ComponentType;

    /**
     * @var float **在绝对定位方式和关键字定位方式下**，指定控件的高度， 控件高度是指控件在PDF文件中的高度，单位为pt（点）。

     */
    public $ComponentHeight;

    /**
     * @var float **在绝对定位方式和关键字定位方式下**，指定控件宽度，控件宽度是指控件在PDF文件中的宽度，单位为pt（点）。

     */
    public $ComponentWidth;

    /**
     * @var integer **在绝对定位方式方式下**，指定控件所在PDF文件上的页码

注：
1. 页码编号是从<font color="red">1</font>开始编号的。
2.  <font color="red">页面编号不能超过PDF文件的页码总数</font>。如果指定的页码超过了PDF文件的页码总数，在填写和签署时会出现错误，导致无法正常进行操作。
     */
    public $ComponentPage;

    /**
     * @var float **在绝对定位方式和关键字定位方式下**，可以指定控件横向位置的位置，单位为pt（点）。
     */
    public $ComponentPosX;

    /**
     * @var float **在绝对定位方式和关键字定位方式下**，可以指定控件纵向位置的位置，单位为pt（点）。
     */
    public $ComponentPosY;

    /**
     * @var integer <font color="red">【暂未使用】</font>控件所属文件的序号（取值为：0-N）。 目前单文件的情况下，值一直为0
     */
    public $FileIndex;

    /**
     * @var string 控件生成的方式：
<ul><li> <b>NORMAL</b> : 绝对定位控件</li>
<li> <b>FIELD</b> : 表单域</li>
<li> <b>KEYWORD</b> : 关键字（设置关键字时，请确保PDF原始文件内是关键字以文字形式保存在PDF文件中，不支持对图片内文字进行关键字查找）</li></ul>
     */
    public $GenerateMode;

    /**
     * @var string 控件唯一ID。

**在绝对定位方式方式下**，ComponentId为控件的ID，长度不能超过30，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在关键字定位方式下**，ComponentId不仅为控件的ID，也是关键字整词。此方式下可以通过"^"来决定是否使用关键字整词匹配能力。

例：

- 如传入的关键字<font color="red">"^甲方签署^"</font >，则会在PDF文件中有且仅有"甲方签署"关键字的地方（<font color="red">前后不能有其他字符</font >）进行对应操作。
- 如传入的关键字为<font color="red">"甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前后可以有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"^甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前面不能有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"甲方签署^</font >"，则PDF文件中每个出现关键字的位置（<font color="red">后面不能有其他字符</font >）都会执行相应操作。


注：`控件ID可以在一个PDF中不可重复`

     */
    public $ComponentId;

    /**
     * @var string **在绝对定位方式方式下**，ComponentName为控件名，长度不能超过20，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在表单域定位方式下**，ComponentName不仅为控件名，也是表单域名称。

注：`控件名可以在一个PDF中可以重复`

     */
    public $ComponentName;

    /**
     * @var boolean 如果是<b>填写控件</b>，ComponentRequired表示在填写页面此控件是否必填
<ul><li>false（默认）：可以不填写</li>
<li>true ：必须填写此填写控件</li></ul>
如果是<b>签署控件</b>，签批控件中签署意见等可以不填写， 其他签署控件不受此字段影响
     */
    public $ComponentRequired;

    /**
     * @var string **在通过接口拉取控件信息场景下**，为出参参数，此控件归属的参与方的角色ID角色（即RecipientId），**发起合同时候不要填写此字段留空即可**
     */
    public $ComponentRecipientId;

    /**
     * @var string **在所有的定位方式下**，控件的扩展参数，为<font color="red">JSON格式</font>，不同类型的控件会有部分非通用参数。

<font color="red">ComponentType为TEXT、MULTI_LINE_TEXT时</font>，支持以下参数：
<ul><li> <b>Font</b>：目前只支持黑体、宋体</li>
<li> <b>FontSize</b>： 范围12 :72</li>
<li> <b>FontAlign</b>： Left/Right/Center，左对齐/居中/右对齐</li>
<li> <b>FontColor</b>：字符串类型，格式为RGB颜色数字</li></ul>
<b>参数样例</b>：`{"FontColor":"255,0,0","FontSize":12}`

<font color="red">ComponentType为FILL_IMAGE时</font>，支持以下参数：
<ul><li> <b>NotMakeImageCenter</b>：bool。是否设置图片居中。false：居中（默认）。 true : 不居中</li>
<li> <b>FillMethod</b> : int. 填充方式。0-铺满（默认）；1-等比例缩放</li></ul>

<font color="red">ComponentType为SIGN_SIGNATURE类型时</font>，可以**ComponentTypeLimit**参数控制签署方式
<ul><li> <b>HANDWRITE</b> : 手写签名</li>
<li> <b>OCR_ESIGN</b> : AI智能识别手写签名</li>
<li> <b>ESIGN</b> : 个人印章类型</li>
<li> <b>SYSTEM_ESIGN</b> : 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）</li>
<li> <b>IMG_ESIGN</b> : 图片印章(该类型支持用户在签署将上传的PNG格式的图片作为签名)</li></ul>
<b>参考样例</b>：`{"ComponentTypeLimit": ["SYSTEM_ESIGN"]}`
印章的对应关系参考下图
![image](https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg)

<font color="red">ComponentType为SIGN_DATE时</font>，支持以下参数：
<ul><li> <b>Font</b> :字符串类型目前只支持"黑体"、"宋体"，如果不填默认为"黑体"</li>
<li> <b>FontSize</b> : 数字类型，范围6-72，默认值为12</li>
<li> <b>FontAlign</b> : 字符串类型，可取Left/Right/Center，对应左对齐/居中/右对齐</li>
<li> <b>Format</b> : 字符串类型，日期格式，必须是以下五种之一 “yyyy m d”，”yyyy年m月d日”，”yyyy/m/d”，”yyyy-m-d”，”yyyy.m.d”。</li>
<li> <b>Gaps</b> : 字符串类型，仅在Format为“yyyy m d”时起作用，格式为用逗号分开的两个整数，例如”2,2”，两个数字分别是日期格式的前后两个空隙中的空格个数</li></ul>
如果extra参数为空，默认为”yyyy年m月d日”格式的居中日期
特别地，如果extra中Format字段为空或无法被识别，则extra参数会被当作默认值处理（Font，FontSize，Gaps和FontAlign都不会起效）
<b>参数样例</b>： ` "{"Format":"yyyy m d","FontSize":12,"Gaps":"2,2", "FontAlign":"Right"}"`

<font color="red">ComponentType为SIGN_SEAL类型时</font>，支持以下参数：
<ul><li> <b>PageRanges</b> :PageRange的数组，通过PageRanges属性设置该印章在PDF所有页面上盖章（适用于标书在所有页面盖章的情况）</li></ul>
<b>参数样例</b>：` "{"PageRange":[{"BeginPage":1,"EndPage":-1}]}"`


<font color="red">关键字模式下支持关键字找不到的情况下不进行报错的设置</font>
<ul><li> <b>IgnoreKeywordError</b> :1-关键字查找不到时不进行报错</li></ul>
场景说明：如果使用关键字进行定位，但是指定的PDF文件中又没有设置的关键字时，发起合同会进行关键字是否存在的校验，如果关键字不存在，会进行报错返回。如果不希望进行报错，可以设置"IgnoreKeywordError"来忽略错误。请注意，如果关键字签署控件对应的签署方在整个PDF文件中一个签署控件都没有，还是会触发报错逻辑。
<b>参数样例</b>：` "{"IgnoreKeywordError":1}"`
     */
    public $ComponentExtra;

    /**
     * @var boolean **在通过接口拉取控件信息场景下**，为出参参数，此控件是否通过表单域定位方式生成，默认false-不是，**发起合同时候不要填写此字段留空即可**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFormType;

    /**
     * @var string 控件填充vaule，ComponentType和传入值类型对应关系：
<ul><li> <b>TEXT</b> : 文本内容</li>
<li> <b>MULTI_LINE_TEXT</b> : 文本内容</li>
<li> <b>CHECK_BOX</b> : true/false</li>
<li> <b>FILL_IMAGE、ATTACHMENT</b> : 附件的FileId，需要通过UploadFiles接口上传获取</li>
<li> <b>SELECTOR</b> : 选项值</li>
<li> <b>DYNAMIC_TABLE</b>  - 传入json格式的表格内容，详见说明：[数据表格](https://qian.tencent.com/developers/company/dynamic_table)</li>
<li> <b>DATE</b> : 默认是格式化为xxxx年xx月xx日</li>
<li> <b>SIGN_SEAL</b> : 印章ID，于控制台查询获取</li>
<li> <b>SIGN_PAGING_SEAL</b> : 可以指定印章ID，于控制台查询获取</li></ul>


<b>控件值约束说明</b>：
<table> <thead> <tr> <th>特殊控件</th> <th>填写约束</th> </tr> </thead> <tbody> <tr> <td>企业全称控件</td> <td>企业名称中文字符中文括号</td> </tr> <tr> <td>统一社会信用代码控件</td> <td>企业注册的统一社会信用代码</td> </tr> <tr> <td>法人名称控件</td> <td>最大50个字符，2到25个汉字或者1到50个字母</td> </tr> <tr> <td>签署意见控件</td> <td>签署意见最大长度为50字符</td> </tr> <tr> <td>签署人手机号控件</td> <td>国内手机号 13,14,15,16,17,18,19号段长度11位</td> </tr> <tr> <td>签署人身份证控件</td> <td>合法的身份证号码检查</td> </tr> <tr> <td>控件名称</td> <td>控件名称最大长度为20字符，不支持表情</td> </tr> <tr> <td>单行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>多行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>勾选框控件</td> <td>选择填字符串true，不选填字符串false</td> </tr> <tr> <td>选择器控件</td> <td>同单行文本控件约束，填写选择值中的字符串</td> </tr> <tr> <td>数字控件</td> <td>请输入有效的数字(可带小数点)</td> </tr> <tr> <td>日期控件</td> <td>格式：yyyy年mm月dd日</td> </tr> <tr> <td>附件控件</td> <td>JPG或PNG图片，上传数量限制，1到6个，最大6个附件，填写上传的资源ID</td> </tr> <tr> <td>图片控件</td> <td>JPG或PNG图片，填写上传的图片资源ID</td> </tr> <tr> <td>邮箱控件</td> <td>有效的邮箱地址, w3c标准</td> </tr> <tr> <td>地址控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>省市区控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>性别控件</td> <td>选择值中的字符串</td> </tr> <tr> <td>学历控件</td> <td>选择值中的字符串</td> </tr> </tbody> </table>
注：   `部分特殊控件需要在控制台配置模板形式创建`
     */
    public $ComponentValue;

    /**
     * @var float **如果控件是关键字定位方式**，可以对关键字定位出来的区域进行横坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏左或偏右，可以通过调整横坐标方向的参数来使控件位置更加准确。
注意： `向左调整设置为负数， 向右调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetX;

    /**
     * @var float **如果控件是关键字定位方式**，可以对关键字定位出来的区域进行纵坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏上或偏下，可以通过调整纵坐标方向的参数来使控件位置更加准确。
注意： `向上调整设置为负数， 向下调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetY;

    /**
     * @var string **如果控件是关键字定位方式**，指定关键字排序规则时，可以选择Positive或Reverse两种排序方式。
<ul><li> <b>Positive</b> :表示正序，即根据关键字在PDF文件内的顺序进行排列</li>
<li> <b>Reverse</b> :表示倒序，即根据关键字在PDF文件内的反序进行排列</li></ul>

在指定KeywordIndexes时，如果使用Positive排序方式，0代表在PDF内查找内容时，查找到的第一个关键字；如果使用Reverse排序方式，0代表在PDF内查找内容时，查找到的最后一个关键字。
     */
    public $KeywordOrder;

    /**
     * @var integer **如果控件是关键字定位方式**，在KeywordPage中指定关键字页码时，将只会在该页码中查找关键字，非该页码的关键字将不会查询出来。如果不设置查找所有页面中的关键字。
     */
    public $KeywordPage;

    /**
     * @var string **如果控件是关键字定位方式**，关键字生成的区域的对齐方式， 可以设置下面的值
<ul><li> <b>Middle</b> :居中</li>
<li> <b>Below</b> :正下方</li>
<li> <b>Right</b> :正右方</li>
<li> <b>LowerRight</b> :右上角</li>
<li> <b>UpperRight</b> :右下角。</li></ul>
示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
     */
    public $RelativeLocation;

    /**
     * @var array **如果控件是关键字定位方式**，关键字索引是指在PDF文件中存在多个相同的关键字时，通过索引指定使用哪一个关键字作为最后的结果。可以通过指定多个索引来同时使用多个关键字。例如，[0,2]表示使用PDF文件内第1个和第3个关键字位置作为最后的结果。

注意：关键字索引是从0开始计数的
     */
    public $KeywordIndexes;

    /**
     * @var boolean **web嵌入发起合同场景下**， 是否锁定填写和签署控件值不允许嵌入页面进行编辑
<ul><li>false（默认）：不锁定控件值，允许在页面编辑控件值</li>
<li>true：锁定控件值，在页面编辑控件值</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockComponentValue;

    /**
     * @var boolean **web嵌入发起合同场景下**，是否禁止移动和删除填写和签署控件
<ul><li> <b>false（默认）</b> :不禁止移动和删除控件</li>
<li> <b>true</b> : 可以移动和删除控件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForbidMoveAndDelete;

    /**
     * @var integer <font color="red">【暂未使用】</font>日期签署控件的字号，默认为 12
     */
    public $ComponentDateFontSize;

    /**
     * @var string <font color="red">【暂未使用】</font>第三方应用集成平台模板控件 ID 标识
     */
    public $ChannelComponentId;

    /**
     * @var integer <font color="red">【暂未使用】</font>第三方应用集成中子客企业控件来源。
<ul><li> <b>0</b> :平台指定；</li>
<li> <b>1</b> :用户自定义</li></ul>
     */
    public $ChannelComponentSource;

    /**
     * @param string $ComponentType **如果是Component填写控件类型，则可选的字段为**：

<ul><li> <b>TEXT</b> : 普通文本控件，输入文本字符串；</li>
<li> <b>MULTI_LINE_TEXT</b> : 多行文本控件，输入文本字符串；</li>
<li> <b>CHECK_BOX</b> : 勾选框控件，若选中填写ComponentValue 填写 true或者 false 字符串；</li>
<li> <b>FILL_IMAGE</b> : 图片控件，ComponentValue 填写图片的资源 ID；</li>
<li> <b>DYNAMIC_TABLE</b> : 动态表格控件；</li>
<li> <b>ATTACHMENT</b> : 附件控件,ComponentValue 填写附件图片的资源 ID列表，以逗号分隔；</li>
<li> <b>SELECTOR</b> : 选择器控件，ComponentValue填写选择的字符串内容；</li>
<li> <b>DATE</b> : 日期控件；默认是格式化为xxxx年xx月xx日字符串；</li>
<li> <b>DISTRICT</b> : 省市区行政区控件，ComponentValue填写省市区行政区字符串内容；</li></ul>

**如果是SignComponent签署控件类型，则可选的字段为**

<ul><li> <b>SIGN_SEAL</b> : 签署印章控件；</li>
<li> <b>SIGN_DATE</b> : 签署日期控件；</li>
<li> <b>SIGN_SIGNATURE</b> : 用户签名控件；</li>
<li> <b>SIGN_PERSONAL_SEAL</b> : 个人签署印章控件（使用文件发起暂不支持此类型）；</li>
<li> <b>SIGN_PAGING_SEAL</b> : 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight</li>
<li> <b>SIGN_OPINION</b> : 签署意见控件，用户需要根据配置的签署意见内容，完成对意见内容的确认；</li>
<li> <b>SIGN_LEGAL_PERSON_SEAL</b> : 企业法定代表人控件。</li></ul>
注：` 表单域的控件不能作为印章和签名控件`
     * @param float $ComponentHeight **在绝对定位方式和关键字定位方式下**，指定控件的高度， 控件高度是指控件在PDF文件中的高度，单位为pt（点）。

     * @param float $ComponentWidth **在绝对定位方式和关键字定位方式下**，指定控件宽度，控件宽度是指控件在PDF文件中的宽度，单位为pt（点）。

     * @param integer $ComponentPage **在绝对定位方式方式下**，指定控件所在PDF文件上的页码

注：
1. 页码编号是从<font color="red">1</font>开始编号的。
2.  <font color="red">页面编号不能超过PDF文件的页码总数</font>。如果指定的页码超过了PDF文件的页码总数，在填写和签署时会出现错误，导致无法正常进行操作。
     * @param float $ComponentPosX **在绝对定位方式和关键字定位方式下**，可以指定控件横向位置的位置，单位为pt（点）。
     * @param float $ComponentPosY **在绝对定位方式和关键字定位方式下**，可以指定控件纵向位置的位置，单位为pt（点）。
     * @param integer $FileIndex <font color="red">【暂未使用】</font>控件所属文件的序号（取值为：0-N）。 目前单文件的情况下，值一直为0
     * @param string $GenerateMode 控件生成的方式：
<ul><li> <b>NORMAL</b> : 绝对定位控件</li>
<li> <b>FIELD</b> : 表单域</li>
<li> <b>KEYWORD</b> : 关键字（设置关键字时，请确保PDF原始文件内是关键字以文字形式保存在PDF文件中，不支持对图片内文字进行关键字查找）</li></ul>
     * @param string $ComponentId 控件唯一ID。

**在绝对定位方式方式下**，ComponentId为控件的ID，长度不能超过30，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在关键字定位方式下**，ComponentId不仅为控件的ID，也是关键字整词。此方式下可以通过"^"来决定是否使用关键字整词匹配能力。

例：

- 如传入的关键字<font color="red">"^甲方签署^"</font >，则会在PDF文件中有且仅有"甲方签署"关键字的地方（<font color="red">前后不能有其他字符</font >）进行对应操作。
- 如传入的关键字为<font color="red">"甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前后可以有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"^甲方签署</font >"，则PDF文件中每个出现关键字的位置（<font color="red">前面不能有其他字符</font >）都会执行相应操作。
- 如传入的关键字为<font color="red">"甲方签署^</font >"，则PDF文件中每个出现关键字的位置（<font color="red">后面不能有其他字符</font >）都会执行相应操作。


注：`控件ID可以在一个PDF中不可重复`

     * @param string $ComponentName **在绝对定位方式方式下**，ComponentName为控件名，长度不能超过20，只能由中文、字母、数字和下划线组成，可以在后续的操作中使用该名称来引用控件。

**在表单域定位方式下**，ComponentName不仅为控件名，也是表单域名称。

注：`控件名可以在一个PDF中可以重复`

     * @param boolean $ComponentRequired 如果是<b>填写控件</b>，ComponentRequired表示在填写页面此控件是否必填
<ul><li>false（默认）：可以不填写</li>
<li>true ：必须填写此填写控件</li></ul>
如果是<b>签署控件</b>，签批控件中签署意见等可以不填写， 其他签署控件不受此字段影响
     * @param string $ComponentRecipientId **在通过接口拉取控件信息场景下**，为出参参数，此控件归属的参与方的角色ID角色（即RecipientId），**发起合同时候不要填写此字段留空即可**
     * @param string $ComponentExtra **在所有的定位方式下**，控件的扩展参数，为<font color="red">JSON格式</font>，不同类型的控件会有部分非通用参数。

<font color="red">ComponentType为TEXT、MULTI_LINE_TEXT时</font>，支持以下参数：
<ul><li> <b>Font</b>：目前只支持黑体、宋体</li>
<li> <b>FontSize</b>： 范围12 :72</li>
<li> <b>FontAlign</b>： Left/Right/Center，左对齐/居中/右对齐</li>
<li> <b>FontColor</b>：字符串类型，格式为RGB颜色数字</li></ul>
<b>参数样例</b>：`{"FontColor":"255,0,0","FontSize":12}`

<font color="red">ComponentType为FILL_IMAGE时</font>，支持以下参数：
<ul><li> <b>NotMakeImageCenter</b>：bool。是否设置图片居中。false：居中（默认）。 true : 不居中</li>
<li> <b>FillMethod</b> : int. 填充方式。0-铺满（默认）；1-等比例缩放</li></ul>

<font color="red">ComponentType为SIGN_SIGNATURE类型时</font>，可以**ComponentTypeLimit**参数控制签署方式
<ul><li> <b>HANDWRITE</b> : 手写签名</li>
<li> <b>OCR_ESIGN</b> : AI智能识别手写签名</li>
<li> <b>ESIGN</b> : 个人印章类型</li>
<li> <b>SYSTEM_ESIGN</b> : 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）</li>
<li> <b>IMG_ESIGN</b> : 图片印章(该类型支持用户在签署将上传的PNG格式的图片作为签名)</li></ul>
<b>参考样例</b>：`{"ComponentTypeLimit": ["SYSTEM_ESIGN"]}`
印章的对应关系参考下图
![image](https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg)

<font color="red">ComponentType为SIGN_DATE时</font>，支持以下参数：
<ul><li> <b>Font</b> :字符串类型目前只支持"黑体"、"宋体"，如果不填默认为"黑体"</li>
<li> <b>FontSize</b> : 数字类型，范围6-72，默认值为12</li>
<li> <b>FontAlign</b> : 字符串类型，可取Left/Right/Center，对应左对齐/居中/右对齐</li>
<li> <b>Format</b> : 字符串类型，日期格式，必须是以下五种之一 “yyyy m d”，”yyyy年m月d日”，”yyyy/m/d”，”yyyy-m-d”，”yyyy.m.d”。</li>
<li> <b>Gaps</b> : 字符串类型，仅在Format为“yyyy m d”时起作用，格式为用逗号分开的两个整数，例如”2,2”，两个数字分别是日期格式的前后两个空隙中的空格个数</li></ul>
如果extra参数为空，默认为”yyyy年m月d日”格式的居中日期
特别地，如果extra中Format字段为空或无法被识别，则extra参数会被当作默认值处理（Font，FontSize，Gaps和FontAlign都不会起效）
<b>参数样例</b>： ` "{"Format":"yyyy m d","FontSize":12,"Gaps":"2,2", "FontAlign":"Right"}"`

<font color="red">ComponentType为SIGN_SEAL类型时</font>，支持以下参数：
<ul><li> <b>PageRanges</b> :PageRange的数组，通过PageRanges属性设置该印章在PDF所有页面上盖章（适用于标书在所有页面盖章的情况）</li></ul>
<b>参数样例</b>：` "{"PageRange":[{"BeginPage":1,"EndPage":-1}]}"`


<font color="red">关键字模式下支持关键字找不到的情况下不进行报错的设置</font>
<ul><li> <b>IgnoreKeywordError</b> :1-关键字查找不到时不进行报错</li></ul>
场景说明：如果使用关键字进行定位，但是指定的PDF文件中又没有设置的关键字时，发起合同会进行关键字是否存在的校验，如果关键字不存在，会进行报错返回。如果不希望进行报错，可以设置"IgnoreKeywordError"来忽略错误。请注意，如果关键字签署控件对应的签署方在整个PDF文件中一个签署控件都没有，还是会触发报错逻辑。
<b>参数样例</b>：` "{"IgnoreKeywordError":1}"`
     * @param boolean $IsFormType **在通过接口拉取控件信息场景下**，为出参参数，此控件是否通过表单域定位方式生成，默认false-不是，**发起合同时候不要填写此字段留空即可**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentValue 控件填充vaule，ComponentType和传入值类型对应关系：
<ul><li> <b>TEXT</b> : 文本内容</li>
<li> <b>MULTI_LINE_TEXT</b> : 文本内容</li>
<li> <b>CHECK_BOX</b> : true/false</li>
<li> <b>FILL_IMAGE、ATTACHMENT</b> : 附件的FileId，需要通过UploadFiles接口上传获取</li>
<li> <b>SELECTOR</b> : 选项值</li>
<li> <b>DYNAMIC_TABLE</b>  - 传入json格式的表格内容，详见说明：[数据表格](https://qian.tencent.com/developers/company/dynamic_table)</li>
<li> <b>DATE</b> : 默认是格式化为xxxx年xx月xx日</li>
<li> <b>SIGN_SEAL</b> : 印章ID，于控制台查询获取</li>
<li> <b>SIGN_PAGING_SEAL</b> : 可以指定印章ID，于控制台查询获取</li></ul>


<b>控件值约束说明</b>：
<table> <thead> <tr> <th>特殊控件</th> <th>填写约束</th> </tr> </thead> <tbody> <tr> <td>企业全称控件</td> <td>企业名称中文字符中文括号</td> </tr> <tr> <td>统一社会信用代码控件</td> <td>企业注册的统一社会信用代码</td> </tr> <tr> <td>法人名称控件</td> <td>最大50个字符，2到25个汉字或者1到50个字母</td> </tr> <tr> <td>签署意见控件</td> <td>签署意见最大长度为50字符</td> </tr> <tr> <td>签署人手机号控件</td> <td>国内手机号 13,14,15,16,17,18,19号段长度11位</td> </tr> <tr> <td>签署人身份证控件</td> <td>合法的身份证号码检查</td> </tr> <tr> <td>控件名称</td> <td>控件名称最大长度为20字符，不支持表情</td> </tr> <tr> <td>单行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>多行文本控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>勾选框控件</td> <td>选择填字符串true，不选填字符串false</td> </tr> <tr> <td>选择器控件</td> <td>同单行文本控件约束，填写选择值中的字符串</td> </tr> <tr> <td>数字控件</td> <td>请输入有效的数字(可带小数点)</td> </tr> <tr> <td>日期控件</td> <td>格式：yyyy年mm月dd日</td> </tr> <tr> <td>附件控件</td> <td>JPG或PNG图片，上传数量限制，1到6个，最大6个附件，填写上传的资源ID</td> </tr> <tr> <td>图片控件</td> <td>JPG或PNG图片，填写上传的图片资源ID</td> </tr> <tr> <td>邮箱控件</td> <td>有效的邮箱地址, w3c标准</td> </tr> <tr> <td>地址控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>省市区控件</td> <td>只允许输入中文，英文，数字，中英文标点符号，不支持表情</td> </tr> <tr> <td>性别控件</td> <td>选择值中的字符串</td> </tr> <tr> <td>学历控件</td> <td>选择值中的字符串</td> </tr> </tbody> </table>
注：   `部分特殊控件需要在控制台配置模板形式创建`
     * @param float $OffsetX **如果控件是关键字定位方式**，可以对关键字定位出来的区域进行横坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏左或偏右，可以通过调整横坐标方向的参数来使控件位置更加准确。
注意： `向左调整设置为负数， 向右调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OffsetY **如果控件是关键字定位方式**，可以对关键字定位出来的区域进行纵坐标方向的调整，单位为pt（点）。例如，如果关键字定位出来的区域偏上或偏下，可以通过调整纵坐标方向的参数来使控件位置更加准确。
注意： `向上调整设置为负数， 向下调整设置成正数`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeywordOrder **如果控件是关键字定位方式**，指定关键字排序规则时，可以选择Positive或Reverse两种排序方式。
<ul><li> <b>Positive</b> :表示正序，即根据关键字在PDF文件内的顺序进行排列</li>
<li> <b>Reverse</b> :表示倒序，即根据关键字在PDF文件内的反序进行排列</li></ul>

在指定KeywordIndexes时，如果使用Positive排序方式，0代表在PDF内查找内容时，查找到的第一个关键字；如果使用Reverse排序方式，0代表在PDF内查找内容时，查找到的最后一个关键字。
     * @param integer $KeywordPage **如果控件是关键字定位方式**，在KeywordPage中指定关键字页码时，将只会在该页码中查找关键字，非该页码的关键字将不会查询出来。如果不设置查找所有页面中的关键字。
     * @param string $RelativeLocation **如果控件是关键字定位方式**，关键字生成的区域的对齐方式， 可以设置下面的值
<ul><li> <b>Middle</b> :居中</li>
<li> <b>Below</b> :正下方</li>
<li> <b>Right</b> :正右方</li>
<li> <b>LowerRight</b> :右上角</li>
<li> <b>UpperRight</b> :右下角。</li></ul>
示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
     * @param array $KeywordIndexes **如果控件是关键字定位方式**，关键字索引是指在PDF文件中存在多个相同的关键字时，通过索引指定使用哪一个关键字作为最后的结果。可以通过指定多个索引来同时使用多个关键字。例如，[0,2]表示使用PDF文件内第1个和第3个关键字位置作为最后的结果。

注意：关键字索引是从0开始计数的
     * @param boolean $LockComponentValue **web嵌入发起合同场景下**， 是否锁定填写和签署控件值不允许嵌入页面进行编辑
<ul><li>false（默认）：不锁定控件值，允许在页面编辑控件值</li>
<li>true：锁定控件值，在页面编辑控件值</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ForbidMoveAndDelete **web嵌入发起合同场景下**，是否禁止移动和删除填写和签署控件
<ul><li> <b>false（默认）</b> :不禁止移动和删除控件</li>
<li> <b>true</b> : 可以移动和删除控件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComponentDateFontSize <font color="red">【暂未使用】</font>日期签署控件的字号，默认为 12
     * @param string $ChannelComponentId <font color="red">【暂未使用】</font>第三方应用集成平台模板控件 ID 标识
     * @param integer $ChannelComponentSource <font color="red">【暂未使用】</font>第三方应用集成中子客企业控件来源。
<ul><li> <b>0</b> :平台指定；</li>
<li> <b>1</b> :用户自定义</li></ul>
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
        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentHeight",$param) and $param["ComponentHeight"] !== null) {
            $this->ComponentHeight = $param["ComponentHeight"];
        }

        if (array_key_exists("ComponentWidth",$param) and $param["ComponentWidth"] !== null) {
            $this->ComponentWidth = $param["ComponentWidth"];
        }

        if (array_key_exists("ComponentPage",$param) and $param["ComponentPage"] !== null) {
            $this->ComponentPage = $param["ComponentPage"];
        }

        if (array_key_exists("ComponentPosX",$param) and $param["ComponentPosX"] !== null) {
            $this->ComponentPosX = $param["ComponentPosX"];
        }

        if (array_key_exists("ComponentPosY",$param) and $param["ComponentPosY"] !== null) {
            $this->ComponentPosY = $param["ComponentPosY"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("GenerateMode",$param) and $param["GenerateMode"] !== null) {
            $this->GenerateMode = $param["GenerateMode"];
        }

        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentRequired",$param) and $param["ComponentRequired"] !== null) {
            $this->ComponentRequired = $param["ComponentRequired"];
        }

        if (array_key_exists("ComponentRecipientId",$param) and $param["ComponentRecipientId"] !== null) {
            $this->ComponentRecipientId = $param["ComponentRecipientId"];
        }

        if (array_key_exists("ComponentExtra",$param) and $param["ComponentExtra"] !== null) {
            $this->ComponentExtra = $param["ComponentExtra"];
        }

        if (array_key_exists("IsFormType",$param) and $param["IsFormType"] !== null) {
            $this->IsFormType = $param["IsFormType"];
        }

        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }

        if (array_key_exists("OffsetX",$param) and $param["OffsetX"] !== null) {
            $this->OffsetX = $param["OffsetX"];
        }

        if (array_key_exists("OffsetY",$param) and $param["OffsetY"] !== null) {
            $this->OffsetY = $param["OffsetY"];
        }

        if (array_key_exists("KeywordOrder",$param) and $param["KeywordOrder"] !== null) {
            $this->KeywordOrder = $param["KeywordOrder"];
        }

        if (array_key_exists("KeywordPage",$param) and $param["KeywordPage"] !== null) {
            $this->KeywordPage = $param["KeywordPage"];
        }

        if (array_key_exists("RelativeLocation",$param) and $param["RelativeLocation"] !== null) {
            $this->RelativeLocation = $param["RelativeLocation"];
        }

        if (array_key_exists("KeywordIndexes",$param) and $param["KeywordIndexes"] !== null) {
            $this->KeywordIndexes = $param["KeywordIndexes"];
        }

        if (array_key_exists("LockComponentValue",$param) and $param["LockComponentValue"] !== null) {
            $this->LockComponentValue = $param["LockComponentValue"];
        }

        if (array_key_exists("ForbidMoveAndDelete",$param) and $param["ForbidMoveAndDelete"] !== null) {
            $this->ForbidMoveAndDelete = $param["ForbidMoveAndDelete"];
        }

        if (array_key_exists("ComponentDateFontSize",$param) and $param["ComponentDateFontSize"] !== null) {
            $this->ComponentDateFontSize = $param["ComponentDateFontSize"];
        }

        if (array_key_exists("ChannelComponentId",$param) and $param["ChannelComponentId"] !== null) {
            $this->ChannelComponentId = $param["ChannelComponentId"];
        }

        if (array_key_exists("ChannelComponentSource",$param) and $param["ChannelComponentSource"] !== null) {
            $this->ChannelComponentSource = $param["ChannelComponentSource"];
        }
    }
}
