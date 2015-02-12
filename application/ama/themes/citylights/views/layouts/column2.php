<?php $this->beginContent('//layouts/main'); ?>
<div class="art-layout-cell art-sidebar1">
    <div class="art-block">
        <div class="art-block-body">
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">
                    <!-- block-content -->
                    <div>
                        <ul>
                            <li><a href="/ama/index.php?r=site/index" class="visited"><b>Home</a></b></font></li>
                            <li><a href="/ama/index.php?r=site/page&view=about" class="visited"><b>About</font></b></a></li>
                            <li><a href="/ama/index.php?r=user" class="visited"><b>User</font></b></a></li>
                            <li><a href="/ama/index.php?r=alumni" class="visited"><b>Alumni</font></b></a></li>
                            <li><a href="/ama/index.php?r=volunteer" class="visited"><b>Volunteer</font></b></a></li>
                            <li><a href="/ama/index.php?r=batch" class="visited"><b>Batch</font></b></a></li>
                            <li><a href="/ama/index.php?r=cash" class="visited"><b>Cash</font></b></a></li>
                            <li><a href="/ama/index.php?r=cheque" class="visited"><b>Cheque</font></b></a></li>
                            <li><a href="/ama/index.php?r=paypal" class="visited"><b>Paypal</font></b></a></li>
                            <li><a href="/ama/index.php?r=missionarea" class="visited"><b>Mission Area</font></b></a></li>
                            <li><a href="/ama/index.php?r=missionassign" class="visited"><b>Mission Assignment</font></b></a></li>
                        </ul>

                        <p><b>Jun 14, 2008</b><br />
                            Aliquam sit amet felis. Mauris semper,
                            velit semper laoreet dictum, quam
                            diam dictum urna, nec placerat elit
                            nisl in quam. Etiam augue pede,
                            molestie eget, rhoncus at, convallis
                            ut, eros. Aliquam pharetra.<br />
                            <a href="javascript:void(0)">Read more...</a></p>

                        <p><b>Aug 24, 2008</b><br />
                            Aliquam sit amet felis. Mauris semper,
                            velit semper laoreet dictum, quam
                            diam dictum urna, nec placerat elit
                            nisl in quam. Etiam augue pede,
                            molestie eget, rhoncus at, convallis
                            ut, eros. Aliquam pharetra.<br />
                            <a href="javascript:void(0)">Read more...</a></p>
                    </div>
                    <!-- /block-content -->

                    <div class="cleared"></div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="art-block">
        <div class="art-block-body">
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">
                    <!-- block-content -->
                    <div>
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/contact.jpg" alt="an image" style="margin: 0 auto;display:block;width:95%" />
                        <br />
                        <b>Company Co.</b><br />
                        Las Vegas, NV 12345<br />
                        Email: <a href="mailto:info@company.com">info@company.com</a><br />
                        <br />
                        Phone: (123) 456-7890 <br />
                        Fax: (123) 456-7890
                    </div>
                    <!-- /block-content -->

                    <div class="cleared"></div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="art-layout-cell art-content">
    <div class="art-post">
        <div class="art-post-tl"></div>
        <div class="art-post-tr"></div>
        <div class="art-post-bl"></div>
        <div class="art-post-br"></div>
        <div class="art-post-tc"></div>
        <div class="art-post-bc"></div>
        <div class="art-post-cl"></div>
        <div class="art-post-cr"></div>
        <div class="art-post-cc"></div>
        <div class="art-post-body">
            <div class="art-post-inner art-article">
                <div class="art-postcontent">
                    <!-- article-content -->
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
