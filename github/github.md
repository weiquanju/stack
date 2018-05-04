##如何从github导出项目的一个文件夹？
&copy; by weiquanju
以将阿里云sdk中的aliyun-php-sdk-domain文件夹导出为栗，其github:
>   https://github.com/aliyun/aliyun-openapi-php-sdk/tree/master/aliyun-php-sdk-domain

使用工具
>svn

将阿里云sdk github地址中的`tree/master`修改为`trunk`，如下：
>https://github.com/aliyun/aliyun-openapi-php-sdk/trunk/aliyun-php-sdk-domain

将修改后的地址做为SVN checkout的`url of respository`(仓库url地址)，选择一个空文件夹，点击右键选择`SVN Checkout`导出即可。