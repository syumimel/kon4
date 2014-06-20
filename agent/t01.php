<!DOCTYPE html>
<html lang="ja" data-avail-langs="ja en" data-page="entry" data-admin-domain="http://blog.hatena.ne.jp" data-static-domain="http://hatenablog.com" data-blog="kesin.hatenablog.com" data-blogs-uri-base="http://kesin.hatenablog.com" data-globalheader-color="b" data-globalheader-type="pc" data-author="Kesin" data-version="de41de6dec1a8b612c3ef150b5fd8ef6" data-blog-comments-top-is-new="" data-brand="hatenablog" data-has-touch-view="1" itemscope="" itemtype="http://schema.org/Article"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/fb# article: http://ogp.me/fb/article#"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="./lib/notices.count.json"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7; IE=9; IE=10">
    <title>Webtest</title>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];

if (strpos($ua, 'Android')       !== false)printf('Android<br>');
if (strpos($ua, 'Mobile')        !== false)printf('Mobile<br>');
if (strpos($ua, 'iPhone')        !== false)printf('iPhone<br>');
if (strpos($ua, 'Windows Phone') !== false)printf('Windows Phone<br>');
if (strpos($ua, 'iPad')          !== false)printf('iPad<br>');



printf('<hr>');
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    // スマートフォンからアクセスされた場合
//    header("Location: smartphone/index.html");
printf('smartphone');
    
//    exit();

} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    // タブレットからアクセスされた場合
printf('tablet');
//    header("Location: tablet/index.html");
//    exit();

} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    // 携帯からアクセスされた場合
printf('mobile');
//    header("Location: mobile/index.html");
//    exit();

} else {
    // その他（PC）からアクセスされた場合
printf('pc');
//    header("Location: pc/index.html");
//    exit();
}
  $hello="Hello World";
  print ('<br>'.$hello);
?>
</html>
