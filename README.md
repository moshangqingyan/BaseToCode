# basetocode
解析图片中的验证码
# 调用方式
# 1.添加扩展包
composer require wx-king-fly/basetocode
# 2.在config/app.php中注册服务
King\BaseToCode\BasetocodeServiceProvider::class,
# 3.发布文件配置
php artisan vendor:publish --provider="King\BaseToCode\BasetocodeServiceProvider"
