	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url('/')?>"><img src="/assets/img/log.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php if (isset($homeact)){echo $homeact;} ?>"><a href="<?=base_url('/')?>">Home</a></li>  
                        <li class="<?php if (isset($beritaact)){echo $beritaact;} ?>"><a href="services.html">Berita</a></li>
                        <li><a href="services.html">Kegiatan</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Artikel <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Company</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">News</a></li> 
                                <li><a href="#">Investors</a></li>
                            </ul>
                        </li>
                        <li class="<?php if (isset($contactact)){echo $contactact;} ?>"><a href="<?=base_url('/pages/contact')?>">Contact</a></li>
                        <li class="<?php if (isset($aboutact)){echo $aboutact;} ?>"><a href="<?=base_url('/pages/about')?>">About Us</a></li>
                        <li><a href="services.html">Log In</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>