<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact"><br><br><br><center>
	<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 5000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);

echo Html::a(Html::img('http://s8.postimg.org/9ic486f5x/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg'), 'http://s3.postimg.org/6oenlmif7/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('http://s8.postimg.org/6a7mv4sw5/384876_10150531055963648_603624510_n_jpg_oh_d093.jpg'), 'http://s27.postimg.org/5jqtjaceb/384876_10150531055963648_603624510_n_jpg_oh_d093.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('http://s8.postimg.org/z52vf6tl1/1233958_848490698546633_3016807585951860722_n.jpg'), 'http://s7.postimg.org/5itaee92j/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('http://s8.postimg.org/q8s3b92yt/10952406_848492895213080_5409749355284340337_n.jpg'), 'http://s7.postimg.org/5itaee92j/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
//echo Html::a(Html::img('http://s8.postimg.org/q8s3b92yt/10952406_848492895213080_5409749355284340337_n.jpg'), 'http://s7.postimg.org/5itaee92j/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('http://s8.postimg.org/ev0ymb32d/11042967_864211116974591_6366400695888370137_n.jpg'), 'http://s7.postimg.org/5itaee92j/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('http://s8.postimg.org/x1sg7its5/image1.jpg'), 'http://s7.postimg.org/5itaee92j/309727_470604293001944_1166744305_n_jpg_oh_e6dfd.jpg', ['rel' => 'fancybox']);
?>
    
