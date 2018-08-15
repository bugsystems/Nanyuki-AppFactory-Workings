<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/style.css" type="text/css" media="screen" />
</head>

<body>
    <div id="wrapper">
   

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
            
            
            
            
            
            
            
            
            
            
            
            <!-- PUT YOUR IMAGES HERE -->
               
                <img src="nivo-slider/images/nemo.jpg" data-thumb="nivo-slider/images/nemo.jpg" alt="" title="Medical Expert system" />
                
                <img src="nivo-slider/images/nemo.jpg" data-thumb="nivo-slider/images/land.jpg" title="providing easy access to medical care" />
                <img src="nivo-slider/images/lavi.jpg" data-thumb="nivo-slider/images/lavi.jpg" title="Medical expert system" />
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="nivo-slider/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			controlNavThumbs:true,
			 prevText: 'Prev',
        nextText: 'Next'
		});
    });
    </script>
</body>
</html>