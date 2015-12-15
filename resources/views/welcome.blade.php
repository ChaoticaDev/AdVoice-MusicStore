<html ng-app="app">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				color: #333333;
				display: table;
				font-weight: 100;
				/*font-family: 'Lato';*/
			}
			.content-container{
				
				margin-top: 55px;
			}
			
			.container{
				margin-top: 65px;	
			}

			.google_logo{
				display: inline-block;
				margin-left: 0px;	
				margin-right: 20px;
				margin-top: 30px;
			}
			
			header{
				
				background: white;
				border-bottom: 1px solid #cccccc;	
				box-shadow: 0 0 20px #CCCCCC;
				display: block;
				height: 50px;
				left: 0px;
				position:fixed;
				top: 0px;
				width: 100%;
				z-index: 999 !important;
			}
			
			header>div{
				display: inline-block;
				height:30px; 
				margin-right: 10px;
				padding-bottom: 36px;
				margin-top: 10px;
				text-align:center;
				width: 100px;
			}
			
			header>div:hover{
				border-bottom: 3px solid #30C;	
				color: #30C;
				cursor: pointer;
			}
			
			.site_main_about{
				border: 0px solid;
				display: inline-block;	
				font-family: 'Lato';
				margin: 0px;
			}
			
			
			.site_main_about > h1 > strong > small > small{	
				font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
				
			}
			
			.site_main_about > h1{
				margin: 0px;	
				padding: 0px;	
			}
			
			.site_main_about > span{	
				font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
				font-size:+18;
				padding-left: 15px;
			}
			
			.site_main_about > div{	
				font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
				font-size:+18;
			}
			
			.store-container{
				background: #FFFFFF;
				display: none;
				height: 800px;
				left: 0px;
				padding: 10px;
				position: absolute;
				top: 0px;
				width: 100%;	
			}
			
			.track{
				border: 1px solid gray;	
				border-radius: 10px;
				height: 300px;
				margin: auto;
				margin-bottom: 10px;
				width: 90%;	
			}
			
			.track-artist{
				border-radius: 10px;
				margin: auto;
				text-align: center;
			}
			
			.track-artist > img, #artist-profile-image{
				border-radius: 7px;
				cursor: pointer;
				display: block;
				margin: auto;
				max-width: 60px;	
			}
			
			.track-card{
				border: 1px solid gray;	
				border-radius: 10px;
				height: 200px;
				margin: auto;
				width: 90%;	
			}
			
			.track-item {
				display: inline-block;
				padding: 10px;
				text-align: center;
			}
			
			.track-store-item{
				border-bottom: 1px solid #CCC;
				border-radius: 7px;
				height: 50px;
				-webkit-box-shadow: 0px -2px 3px rgba(50, 50, 50, 0.75), 3px 3px 5px 6px #ccc;
    			-moz-box-shadow: 0px -2px 3px rgba(50, 50, 50, 0.75), 3px 3px 5px 6px #ccc;
    			box-shadow: 0px -2px 3px rgba(50, 50, 50, 0.75);
				margin-top: 10px;
			}
			

		</style>
        

	<link href="css/app.css" rel="stylesheet">
	<link href="bootstrap-angular/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap-angular/css/bootstrap-theme.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.0/angular.js"></script>
    <script src="bootstrap-angular/js/bootstrap.js"></script>
    <script src="bootstrap-angular/js/mainapp.js"></script>
	</head>
	<body>
    	<header ng-controller="MenuController">
        	<div class="" name="Continue">
                <i class="fa fa-home" style="font-size:30px; vertical-align: middle;"></i>
                <span>{{Inspiring::menu_home()}}</span>
            </div>
        	<div class="" name="Continue">
                <i class="fa fa-heartbeat" style="font-size:30px; vertical-align: middle;"></i>
                <span>Continue</span>
            </div>
        	<div class="" name="Continue">
                <span>Continue</span>
                <i class="fa fa-heartbeat" style="font-size:30px; vertical-align: middle;"></i>
            </div>
            
            
            
            
        	<div class="" style="float: right; min-width: 225px;">
                <i class="fa fa-heartbeat" style="font-size:30px; vertical-align: middle;"></i>
                <div class="dropdown" style="display: inline-block;">
                  <span class="" data-toggle="dropdown">{{Inspiring::menu_username()}}
                  <span class="caret"></span></span>
                  <ul class="dropdown-menu" style="margin-left: -80px; margin-top: 15px; min-width: 225px;">
                    <li style="min-width: 225px;"><a href="#" ng-click="setupCanas();">My tracks</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                  </ul>
                </div>
            </div>
        </header>
        
		<div class="container">
			<div class="content">
				<div class="title">{{ Inspiring::powered_by_software() }}</div>
				<!--<div class="quote">{{ Inspiring::quote() }}</div>-->
			</div>
		</div>
        
        <div>
            <div class="container container-sm-height pagination-centered" style="border: 0px solid red; min-height: 200px;box-shadow: 0 0 200px #FFF;">
                <div class="col-md-3">
                
                    <img src="https://cdn3.iconfinder.com/data/icons/essentials-vol-1-1/512/Headphones-512.png" width="100%" class="google_logo" />
                </div>
                
                
                <div class="content-container col-md-9">
                    <div class="site_main_about col-md-12">
                        <h1><strong>{{ Inspiring::powered_by() }}&nbsp;<small><small>{{ Inspiring::with_google() }}</small></small></strong></h1>
                        <span>Now you have a voice -- even on the internet!</span>
                    </div>
                    
                    <div class="site_main_about col-md-12">
                        <h3><strong>{{ Inspiring::site_description() }}&nbsp;{{ Inspiring::by_ubersnip() }}</strong></h3>
                        <br />
                        
                        <span>The ultimate toolset for record-labels, musicians, and listeners who support 'Indie Music'.</span><br />
                        
                        <div>
                        <ul style="font-size: 16px;">
                            <li>
                                Sell music: and keep 100% royalties!
                            </li>
                            <li>
                                Leave voice comments!
                            </li>
                            <li>
                                Voice-enabled!&nbsp;<big><a href="#">Learn More&nbsp;<i class="fa fa-info"></i></a></big>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="background-color: #FFF; color: #000; height: 300px; margin-top: 15px; width: 100%; box-shadow: 0 0 200px #CCC;">
            	<div style="box-shadow: inset 0 10px 10px -7px rgba(0,0,0,0.3), inset 0 -60px 50px -7px rgba(0,0,0,0.2); height:inherit; width: 100%; ">
                	
                <div style="padding: 10px;">
                	<div class="dropdown" style="display: inline-block;">
                      <span class="" data-toggle="dropdown">Categories
                      <span class="caret"></span></span>
                      <ul class="dropdown-menu" style=" min-width: 225px;">
                        <li style="min-width: 225px;"><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>
                </div>
                
                <div style="overflow: hidden;">
                <div style="overflow: auto; height: 240px; width: 105%;">
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                    <div class="track-item col-md-2">
                        <div class="track-card">
                        	<img src="http://a3.mzstatic.com/us/r30/Music/v4/db/21/98/db219862-cb77-be42-9b08-b815a98e7786/cover170x170.jpeg" width="100%" height="200" />
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
            </div>
            
            <div class="col-md-12" style="background-color: #DFDFDF; padding-top: 20px; display: none;-webkit-box-shadow: 0 8px 6px 0px black, -moz-box-shadow: 0 8px 6px 0px black; box-shadow: 0 8px 6px 0px white;">
            	<div style="height: 250px; border: 1px solid red;">
            	<div class="track-item col-md-2">
                	<div class="track-card">
                    	TRACK_ITEM_____
                    </div>
                </div>
            	<div class="track-item col-md-2">
                	<div class="track">
                    	TRACK_ITEM_____
                    </div>
                </div>
            	<div class="track-item col-md-2">
                	<div class="track">
                    	Track item
                    </div>
                </div>
            	<div class="track-item col-md-2">
                	<div class="track">
                    	Track item
                    </div>
                </div>
            	<div class="track-item col-md-2">
                	<div class="track">
                    	Track item
                    </div>
                </div>
            	<div class="track-item col-md-2">
                	<div class="track">
                    	Track item
                    </div>
                </div>
            </div>
            </div>
            
            
            
            <div style="background-color: #F5F5F5; padding-top: 10px; width: 100%;">
            	<h1 style="margin: 5px; font-family: 'Lato';"><strong>Popular Artists</strong></h1>
            	<div class="track-item" style="">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            	<div class="track-item">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            	<div class="track-item">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            	<div class="track-item">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            	<div class="track-item">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            	<div class="track-item">
                	<div class="track-artist">
                    	<div class="dropdown" style="display: inline-block;">
                          <span class="" data-toggle="dropdown"><img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" id="artist-profile-image" />
                          <span class="caret"></span></span>
                          <ul class="dropdown-menu" style="margin-top: -150px; min-width: 225px;">
                            <li style="min-width: 225px;"><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                          </ul>
                        </div>
                    </div>
                    K-Bust
                </div>
            </div>
        </div>
        
        
        
        
        <div class="store-container">
        	<a href="javascript: $('.store-container').slideUp(1000);"><i class="fa fa-times-circle-o" style="font-size: 32px;"></i></a>
        	<strong>More tracks by K-Bust</strong><br />
            <div class="col-md-2">
        	<img src="https://pbs.twimg.com/profile_images/649259397366083584/ryr6V4JZ.jpg" width="100%" style="border-radius: 360px; display: inline-block; margin: 20px;" />
            </div>
            <div class="col-md-10" style="padding: 20px;">
            	<div class="col-md-12 track-store-item">
                	<p style="float: right;">
                    	Don't wanna try
                    </p>
                </div>
            	<div class="col-md-12 track-store-item">
                	<p style="float: right;">
                    	Don't hurt ne anymore
                    </p>
                </div>
            	<div class="col-md-12 track-store-item">
                	<p style="float: right;">
                    	I miss you
                    </p>
                </div>
            </div>
            
        </div>
	</body>
</html>
