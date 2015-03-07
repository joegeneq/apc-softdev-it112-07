<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'AMA Foundation',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
           // $menuItems = [
			//['label' => 'Home', 'url' => ['/site/index']],
            //    ['label' => 'About', 'url' => ['/site/about']],
            //    ['label' => 'Contact', 'url' => ['/site/contact']],
           // ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Home', 'url' => ['/site/index']];
				$menuItems[] = ['label' => 'About', 'url' => ['/site/about']];
				$menuItems[] = ['label' => 'Contact', 'url' => ['/site/contact']];
				$menuItems[] = ['label' => 'Gallery', 'url' => ['/site/gallery']];
				$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = ['label' => 'Alumni', 'url' => ['/alumni']];
                $menuItems[] = ['label' => 'Batch', 'url' => ['/batch']];
				$menuItems[] = ['label' => 'Donation', 'url' => ['/donation']];
				$menuItems[] = ['label' => 'Mission', 'url' => ['/mission']];
				$menuItems[] = ['label' => 'User', 'url' => ['/user']];
				$menuItems[] = ['label' => 'Logs', 'url' => ['/logs']];
				$menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; AMA Foundation <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
