<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About Us';
$this->breadcrumbs=array(
	'About Us',
);
?>
<div class="page-header">
  <h1>About Us <small></small></h1>
</div>

<div class="row-fluid">
	<div class="span6">
	  <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Who we are?',
			'titleCssClass'=>''
		));
		?>
        <font size="2">The Associate Missionaries of the Assumption is a community of young volunteers who are committed to transforming society through joyful service deeply rooted in faith and prayer.</font>
        <!--<div class="visitors-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>-->
        
        <?php $this->endWidget(); ?>
	</div><!--/span-->
    <div class="span6">
    	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span> What do we do?',
			'titleCssClass'=>''
		));
		?>
        <font size="2">The alumni community continues to be a support group, has provided human & material resources to the program. They oversee implementation & sustainability of the organization.
        <!--<div class="pieStats" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>-->
        
        <?php $this->endWidget(); ?>
    </div>
	
<!--<div class="row-fluid">
  <div class="span9">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-user'></i>Objectives",
		));
		
	?>
  		<!--<div class="auto-update-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>-->
		<!--<p><font size="2">Develop, enhance and sustain the commitment of young people to community service through formation programs.    
Create opportunities for young professionals to experience direct community service to poor communities by rendering volunteer work in schools, parishes, NGO’s and church organizations.
<br><br>
Assist schools, parishes, NGOs and church organizations by providing them with volunteers to assist in the formation and education of the poor and the young.</font></p>
	<?php $this->endWidget();?>
  </div>-->
  
  <!--<div class="span3">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tag'></i> Account Stats",
		));
		
	?>
    <div style="text-align:center;">
        <p style="margin-bottom:20px;">
            <strong>Open Invoices - $24,270</strong><br />
            <span class="pie"></span>
        </p>
        <p style="margin-bottom:20px;">
            <strong>Overdue Invoices - $45,690</strong><br />
            <span class="dynamicbar">Loading..</span>
        </p>
        <p style="margin-bottom:20px;">
            <strong>Converted Quotes - $165,320</strong><br />
            <span class="inlinesparkline">1,4,4,7,5,9,10</span>
        </p>
        <p style="margin-bottom:20px;">
            <strong>Monthly Income - $245,000</strong><br />
        	<span class="dynamicsparkline">Loading..</span>
        </p>
	</div>-->	
	
	<div class="row-fluid">
  <div class="span9">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-user'></i> Objectives",
		));
		
	?>
  		<!--<div class="auto-update-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>-->
		<p><font size="2">From 2005-2006, the AVP will recruit 20 volunteers who will be fielded in 10 communities/non-government organizations (NGOs) serving those partner communities for 11 months. 
<br><br>
In the service of its partner communities/beneficiaries, the AMA Volunteer Program seeks to: 
<br><br>
<ul>
<li> Assists schools, NGOs and church organizations by providing them with young professional volunteers as of their personnel.</li>
<li> Give quality service to the areas where they serve.</li>
<li> Support areas who cannot afford the pay of professionals workers but need help in the areas of education and community development.</li>
</ul>

As part of the fomation of young people who commut a year of service, the AMA Volunteer Program aims to: 
<br><br>
<ul><li>Create opputunities for young professionals to experience direct community service bby rendering volunteer work in schools, parishes, NGOs and church organizations</li>
<li>Develop enhance and sustain the commitment of young professionals community service through a strengthened formation program.</li>
<li>Instill in the young professionals the value of service.</li></font></p>
	<?php $this->endWidget();?>
  </div>

        
    <?php $this->endWidget();?>
  </div>
</div>

<!--<div class="row-fluid">
  <!--<div class="span12">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-user'></i> Total Visitors",
		));
		
	?>
    	<div class="visitors-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
    <?php $this->endWidget();?>
  </div>
</div>-->

<!--<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-repeat'></i> Bar chart",
		));
		
	?>
  		<div class="horizontal-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>-->
 <!-- <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-share'></i> Returning Visitors",
		));
		
	?>
    	<div class="lines-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
    <?php $this->endWidget();?>
  </div>
</div>-->

<!--<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-pencil'></i> Data Usage",
		));
		
	?>
  		<div class="stacked-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>-->
  <!--<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-arrow-down'></i> Data Usage Monthly",
		));
		
	?>
    	<div class="order-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
    <?php $this->endWidget();?>
  </div>
</div>-->

<!--<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Pie Charts",
		));
		
	?>
  		<div class="simple-pie" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>-->
 <!--<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-adjust'></i> Location Chart",
		));
		
	?>
    	<div class="simple-donut" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
    <?php $this->endWidget();?>
  </div>-->
</div>

<!--<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-check'></i> Other chart",
		));
		
	?>
  		<div class="simple-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>-->
  <!--<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-info-sign'></i> Pie chart",
		));
		
	?>
    	<div class="pieStats" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
    <?php $this->endWidget();?>
  </div>-->
</div>