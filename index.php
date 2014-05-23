<!DOCTYPE html>
<html>
<head lang="en">
<jdoc:include type="head" />
    <meta charset="UTF-8">
    <title>Nexus Medicus 2014</title>


    <!--СТИЛИ-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400,600,700,300&subset=latin,cyrillic'>
    <link rel='stylesheet' type='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/text/css'>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/new-style.css"/>

    <!--END СТИЛИ-->

    <!--JS-->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/prefixfree.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/events.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scroll.js"></script>

    
    <!--END JS-->

</head>
<body>
<a id="gotop" href="#" onclick="top.goTop(); return false;"> <span class="glyphicon glyphicon-arrow-up"></span> Наверх</a>
<div class="bottom-shadow">
    <div class="container">
        <section class="row ">
            <header class="col-md-12">
                <div class="lang">
					<jdoc:include type="modules"  name="language" />
                </div>
                <h1 class="pull-left">Nexus Medicus</h1>
                <jdoc:include type="modules"  name="menu" />

            </header>
        </section>
    </div>
</div>
<section class="carusel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carusel-item item active">

                            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/carusel/carusel-item-1.jpg" alt=""/>

                            <div class="item-txt">
                                <div class = "years"><jdoc:include type="modules"  name="years" /></div>

                                <div class = "course"><jdoc:include type="modules"  name="course" /></div>

                                <div class = "nexus"><jdoc:include type="modules"  name="nexus" /></div>
                            </div>

 
                        </div>
                        <div class="carusel-item item">
								<jdoc:include type="modules"  name="news" />
                        </div>
						<div class="carusel-item item">
                                 <jdoc:include type="modules"  name="news_1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class='wrapper'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <jdoc:include type="component" />
                <div class="separator"></div>
            </div>
        </div>
    </div>
</div>
<section class="footer">
    <footer class="container">
        <div class="row">
            <div class="col-md-12">
                <jdoc:include type="modules"  name="menu_footer" />
            </div>
        </div>
    </footer>
</section>


<!--MODALS-->


<!-- Modal -->


<div class="next-page"></div>





</body>
</html>
