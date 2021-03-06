<?php
/**
 * autoCropImage - 图片自动缩放程序
 * 将图片自动缩放成指定大小，减少图片体积，从而加快下载速度，降低下载时间和成本。

 * 参考资料 autoCropImage 开源项目 https://github.com/mingfunwong/autoCropImage

 * 使用说明
 * http://localhost/images/pic.jpg_50x100.jpg
 * http://localhost/images/pic.jpg_50x100m2.jpg
 * http://localhost/images/pic.jpg_50x100v2014.jpg
 * http://localhost/images/pic.jpg_50x100m2v2014.jpg

 * 使用说明
 * 方式一：50x100 缩放成 50x100 大小
 * 方式二：50x100m2 方式一并且使用mode 2
 * 方式三：50x100v2014 方式一并且指定缓存版本2014
 * 方式四：50x100m2v2014 方式一，使用mode 2并且指定缓存版本2014

 * 缩放模式说明
 * mode 1 : 强制裁剪，生成图片严格按照需要，不足放大，超过裁剪，图片始终铺满。
 * mode 2 : 和1类似，但不足的时候 不放大 会产生补白，可以用png消除。
 * mode 3 : 只缩放，不裁剪，保留全部图片信息，会产生补白。
 * mode 4 : 只缩放，不裁剪，保留全部图片信息，此时的参数只是限制了生成的图片的最大宽高，不产生补白。
 * mode 5 : 生成的图比例严格按照需要的比例，宽和高不超过给定的参数。
 */

Route::get('thumb', "\\yimao\\autoCropImage\\AutoCropImageController@index");
