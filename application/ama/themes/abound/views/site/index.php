<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<div class="page-header">
  <h1><center>Associate Missionaries of the Assumption Foundation</center><small></small></h1>
</div>

<!--<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
	array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>-->

<!--<div class="row-fluid">
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="weekly-visit">8,4,6,5,9,10</li>
		<li class="stat-count"><span>$23,000</span><span>Weekly Sales</span></li>
		<li class="stat-percent"><span class="text-success stat-percent">20%</span></li>
	  </ul>
	</div>
  </div>
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="new-visits">2,4,9,1,5,7,6</li>
		<li class="stat-count"><span>$123,780</span><span>Monthly Sales</span></li>
		<li class="stat-percent"><span class="text-error stat-percent">-15%</span></li>
	  </ul>
	</div>
  </div>
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="unique-visits">200,300,500,200,300,500,1000</li>
		<li class="stat-count"><span>$12,456</span><span>Open Invoices</span></li>
		<li class="stat-percent"><span class="text-success stat-percent">10%</span></li>
	  </ul>
	</div>
  </div>
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="">1000,3000,6000,8000,3000,8000,10000</li>
		<li class="stat-count"><span>$25,000</span><span>Overdue</span></li>
		<li class="stat-percent"><span><span class="text-success stat-percent">20%</span></li>
	  </ul>
	</div>
  </div>
</div>-->

<div align="center"><?php
        $this->widget('ext.slider.slider', array(
            'container'=>'slideshow',
            'width'=>1300, 
            'height'=>240, 
            'timeout'=>6000,
            'infos'=>true,
            'constrainImage'=>true,
            'images'=>array('01.jpg','02.jpg','03.jpg','04.jpg'),
			'alts'=>array('First description','Second description','Third description','Four description'),
            'defaultUrl'=>Yii::app()->request->hostInfo
            )
        );
        ?></div>
		<br><br>
		
<div class="row-fluid">

    
	<div class="span9">
      <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-picture"></span><font size="4">What is AMA?</font>',
			'titleCssClass'=>''
		));
		?>
		<p><font size="2">In 1954, the Assumption Sisters founded the Associate Missionaries of the Assumption (AMA) as a way of answering the many appeals of the world. Young women and men committed themselves to work and live with Assumption 
		communities in Asia, Africa, the Americas, and Europe, sharing their vision of the Christian transformation of society and working to make it happen.<br><br>Today, the work continues. While at their volunteer sites, AMA's find new insight into God's gifts through service to others. 
		It is through their service that they come to understand more fully the rule of life of The Religious of the Assumption: "Love never remains idle: it makes us creative and impels us to heed all the appeals of the world and to find new ways of answering them."<br><br>
		The mission of AMA today, as it began over 50 years ago, remains the same and continues to enrich the lives of volunteers, religious, and those served.<br><br>
		Since its beginning, the AMA Volunteer Program, the central program of the foundation, has trained and fielded twenty (20) batches with 322 volunteers to forty-two institutions, schools, non-government organizations,most of which are affiliated with the Religious of the Assumption or the Catholic Church. Three hundred twenty two young professionals have served for one or two years as school teachers, youth formators, parish workers, social and community development workers in rural and urban localities around the country making their main apostolate the education and formation of the poor and young towards a community-based and community orientated leadership. The volunteers come from different educationa and socio-economic backgrounds but all have desire to serve.
<br><br>
To date, the AMA Volunteer Program has accepted more than 50 foreign volunteers for period to two weeks to 2 years. These volunteers have been of service while enriching their own lives and perpectives about the world. While the impact of the volunteers' service is most felt in the communities and organizations they serve, the training and formation they receive and experienced alaso contributed their growing commitment to GOD, country and neighbor even after their mission year has been completed.</font>
		<!--<div class="auto-update-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>-->
        
        <?php $this->endWidget(); ?>
        
	</div>
	<!--<div class="span3">
		<div class="summary">
          <ul>
          	<li>
          		<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                </span>
                <span class="summary-number">$78,245</span>
                <span class="summary-title"> Monthly Income</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices">
                </span>
                <span class="summary-number">125</span>
                <span class="summary-title"> Open Invoices</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<">
                </span>
                <span class="summary-number">53</span>
                <span class="summary-title"> Open Quotes</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                </span>
                <span class="summary-number">630</span>
                <span class="summary-title"> Recent Conversions</span></li>
        
          </ul>
        </div>

	</div>
</div>-->


<!--<div class="row-fluid">
	<div class="span6">
	  <?php $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'firstName', 'header'=>'First name'),
				array('name'=>'lastName', 'header'=>'Last name'),
				array('name'=>'language', 'header'=>'Language'),
				array('name'=>'usage', 'header'=>'Usage', 'type'=>'raw'),
				
			),
		)); ?>
	</div>--><!--/span-->
	<!--<div class="span6">
		 <?php $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'firstName', 'header'=>'First name'),
				array('name'=>'lastName', 'header'=>'Last name'),
				array('name'=>'language', 'header'=>'Language'),
				array('name'=>'usage', 'header'=>'Usage', 'type'=>'raw'),
				
			),
		)); ?>
        	
	</div>--><!--/span-->
</div><!--/row-->


	<!--<div class="span2">
    	<input class="knob" data-width="100" data-displayInput=false data-fgColor="#5EB95E" value="35">
    </div>
	<div class="span2">
     	<input class="knob" data-width="100" data-cursor=true data-fgColor="#B94A48" data-thickness=.3 value="29">
    </div>
	<div class="span2">
         <input class="knob" data-width="100" data-min="-100" data-fgColor="#F89406" data-displayPrevious=true value="44">     	
	</div><!--/span-->
</div><!--/row-->

          


<script>
            $(function() {

                $(".knob").knob({
                    /*change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : " + this.value);
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                , sa = this.startAngle          // Previous start angle
                                , sat = this.startAngle         // Start angle
                                , ea                            // Previous end angle
                                , eat = sat + a                 // End angle
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                && (sat = eat - 0.3)
                                && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.v);
                                this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>