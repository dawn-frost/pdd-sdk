## 拼多多开放平台 PHP 版本的 SDK

- 环境要求：php 5.5 版本及以上，使用 composer 包管理工具
- 执行一下 composer install 安装命令
- 该 SDK 使用 composer 对 src 下面的代码进行命名空间自动导入，namespace 自动导入的规则是[psr4 规范](https://www.php-fig.org/psr/psr-4/)
- 该 SDK 共有 2 个文件夹，src 文件夹下面是 sdk 主功能文件夹。example 文件夹下面是所有接口的 demo，作为测试样例参考。

## src 文件夹下面文件功能说明

- PopAccessTokenClient 类
  - generate : 根据从授权后回调地址那里拿到的 code 值，然后去服务器获取 access_token 和 refresh_token 以及过期时间等值
  - refresh：由于 access_token 时效性是 24 小时，refresh_token 的时效性是 30 天，所以，当 acces_token 过期后，利用 refresh_token 进行重新获取 access_token
- PopHttpClient 类
  - syncInvoke : 把接口名称 type 以及各自接口对应的业务参数，access_token(如果需要授权)传给这个接口即可获取到对应接口的返回值。
- Api/Request
  - 这个文件夹下面存放所有接口的自定义请求 Request 类
- Common
  - 这个文件夹下面存放所有的公共功能类
- Token
  - 这个文件夹下面存放获取和刷新 token 相关接口的 request

## example 文件夹说明

- AccessToken.php 获取 access_token 的示例代码
- Config_sample.php 使用的时候文件重命名为 Config.php，替换文件里面的配置信息
- PddXXXX.php 针对某个特定的接口对应的示例代码

## 使用示例

### 用户授权

```php
$clientId = "your app clientId";
$clientSecret = "your app clientSecret";
$refreshToken = "your app refreshToken";
$code = "your code";


$accessTokenClient = new PopAccessTokenClient($clientId,$clientSecret);


// 生成AccessToken

$result = $accessTokenClient->generate($code);
$result = json_encode($result->getContent(),JSON_UNESCAPED_UNICODE);
echo $result;



// 刷新AccessToken

$result = $accessTokenClient->refresh($refreshToken);
$result = json_encode($result->getContent(),JSON_UNESCAPED_UNICODE);
echo $result;

```

### 访问接口（以获取商品详情接口为例）：

```php

$clientId = "your app clientId";
$clientSecret = "your app clientSecret";
$pid = "your pid";

//创建client客户端
$client = new PopHttpClient($clientId, $clientSecret);

//创建请求对象
$request = new PddDdkGoodsDetailRequest();
$request->setGoodsIdList(array(6730722720));
$request->setPid($pid);
$request->setCustomParameters('str');
$request->setZsDuoId(1111111);
$request->setPlanType(1);

//发起接口请求
try{
	$response = $client->syncInvoke($request);
} catch(DawnFrost\Pdd\PopHttpException $e){
	echo $e->getMessage();
	exit;
}

$content = $response->getContent();

//判断是否异常
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);

```
