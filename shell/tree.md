# tree命令

###### 如何使用tree命令生成目录树文本？请使用tree命令!

```shell
#  tree -I "node_modules*|hello*" -d > tree.txt
```

### 参数讲解

`-I` 要忽略的正则匹配规则

`-d` 生成树时，仅包含目录

- 若需包含文件，去掉此参数即可
- 若要包含所有目录或文件，加入`-a`参数

`>` 输出重定向命令，本命令中是将`tree`运行结果输出到`tree.txt`

### 运行结果示例：

``` text
.
├── build
├── config
├── src
│   ├── assets
│   │   ├── css
│   │   ├── data
│   │   ├── icon
│   │   │   └── svg
│   │   └── img
│   │       └── pic
│   ├── components
│   │   ├── BaseAmap
│   │   ├── BaseButton
│   │   ├── BaseDialog
│   │   ├── BaseLayout
│   │   │   ├── BaseSlider
│   │   │   ├── HeaderNav
│   │   │   ├── HeaderTop
│   │   │   └── Index
│   │   ├── BasePagination
│   │   ├── BasePopover
│   │   ├── BaseRadio
│   │   ├── BaseSelect
│   │   ├── BaseStep
│   │   ├── BaseSwitch
│   │   ├── BaseTabs
│   │   ├── Breadcrumb
│   │   ├── CheckBox
│   │   ├── LocalBlock
│   │   ├── OverLayout
│   │   ├── SearchInput
│   │   ├── SelectBtn
│   │   ├── SvgIcon
│   │   ├── TableList
│   │   ├── TodoTip
│   │   └── UploadImg
│   ├── https
│   │   └── api
│   ├── pages
│   │   ├── businessCenter
│   │   │   ├── MerchantConfiguration
│   │   │   │   ├── SMSManagement
│   │   │   │   │   └── index
│   │   │   │   ├── index
│   │   │   │   ├── pictureLibrary
│   │   │   │   │   ├── components
│   │   │   │   │   └── homePage
│   │   │   │   ├── precisionMarketingGroup
│   │   │   │   │   └── index
│   │   │   │   └── storeCategory
│   │   │   │       └── index
│   │   │   ├── index
│   │   │   ├── separateAccountSet
│   │   │   │   ├── distributionRules
│   │   │   │   │   └── index
│   │   │   │   ├── index
│   │   │   │   ├── separateAccount
│   │   │   │   │   └── index
│   │   │   │   └── subLedgerReceiver
│   │   │   │       └── index
│   │   │   └── subBusinessCenter
│   │   │       ├── index
│   │   │       ├── merchantManagement
│   │   │       │   ├── addBrand
│   │   │       │   ├── brandAllocation
│   │   │       │   │   └── components
│   │   │       │   │       ├── appletConfig
│   │   │       │   │       ├── brandInfor
│   │   │       │   │       └── subscriptionConfig
│   │   │       │   ├── divisionBrandGroup
│   │   │       │   ├── homePage
│   │   │       │   ├── index
│   │   │       │   └── storeManage
│   │   │       │       ├── addStore
│   │   │       │       ├── components
│   │   │       │       │   └── storeBrandInfo
│   │   │       │       ├── homePage
│   │   │       │       ├── index
│   │   │       │       └── storeEdit
│   │   │       └── serviceProvider
│   │   │           └── index
│   │   ├── home
│   │   │   └── index
│   │   └── login
│   ├── router
│   │   └── modules
│   ├── store
│   │   └── modules
│   │       ├── businessCenter
│   │       └── common
│   └── utils
└── static
    └── json

93 directories
```

