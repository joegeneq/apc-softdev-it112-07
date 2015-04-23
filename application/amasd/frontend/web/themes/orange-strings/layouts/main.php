<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>AMA Foundation</title>
<meta property='og:site_name' content=AMA Foundation />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
<div id="header-wrap">
  <div id="page">
    <table id="header">
      <tr>
        <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><br>Associate Missionaries of the Assumption Foundation</span></a></span><br></td>
		<td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social"></td>
            </tr>
          </table>
          <div class="search"></div>
        </td>
      </tr>
    </table>
      </div>
  </div>
</div>
<div id="topnav">
          <?php echo Menu::widget(array(
            'options' => array('class' => 'nav'),
            'items' => array(
              array('label' => 'Home', 'url' => array('/site/index')),
              array('label' => 'About', 'url' => array('/site/about')),
              //array('label' => 'Contact', 'url' => array('/site/contact')),
              array('label' => 'Gallery', 'url' => array('/site/contact')),
              array('label' => 'Login', 'url' => ('http://gnuhealth.ioss.com.ph/softdev2015/it112/07%20ama-ams_backend/')),
              //Yii::$app->user->isGuest ?
                //array('label' => 'Login', 'url' => array('/site/login')) :
                //array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
            ),
        )); ?> 
        <div style="clear:both"></div>
		</div>
<div id="main-wrap">
  <div id="page">
    <div id="main">
      <!--<div id="banner-bot">
        <div id="banner">
          <div id="banner-mid">
            <div id="banner-b">
              <div id="banner-r">
                <div id="banner-wrap">
                  <div class="wsite-header"></div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="content"><div id='wsite-content' class='wsite-not-footer'>
        <?php echo $content; ?>
</div>
</div>
    </div>
  </div>
</div>
<div id="footer-wrap">
  <div id="page">
    <div id="footer">&copy; SOFTDEV <?= date('Y') ?> | APC GROUP 07
</div>
  </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>