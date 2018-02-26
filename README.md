# fecshop_theme_rosegal
fecshop theme rosegal

```
composer require --prefer-dist fecshop/theme_rosegal
```

或者

```
"fecshop/theme_rosegal": "~1.0.1"
```

安装
----

1.添加配置文件


将 `@vendor/fecshop/theme_rosegal/config/fecshop_theme_rosegal.php` 文件复制到
`@common/config/fecshop_third_extensions/fecshop_theme_rosegal.php`


2.store添加模板配置

在@appfront/config/fecshop_local_services/Store.php 文件中的 `thirdThemeDir` 添加模板路径

```
'@fecshop/theme/rosegal/appfront/theme/rosegal',
```

添加完成的样子为：

```
'thirdThemeDir'    => [
    '@fecshop/theme/rosegal/appfront/theme/rosegal',
],
```

如果appfront下面所有的store都想使用该模板，那么，您需要在每一个store配置中的
'thirdThemeDir'添加模板路径配置

当然，您可以每个`store`使用不同的模板，
如果您本地模板路径下有文件，那么您需要将store的配置参数`localThemeDir`对应的
值，修改成一个新的文件路径（因为本地的模板路径下的模板文件优先级高，
会覆盖第三方模板的模板文件，因此，您可以设置一个新的本地模板路径）


3.添加完成后，就可以访问了









