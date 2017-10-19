<!-- load js scripts -->
<script>
    
    var PageLoader = function () {
        var PageLoader = this;
        // things to load until page is ready to show
        PageLoader.dependencies = ['css','fonts','jquery'];

        PageLoader.configFontLoader();
        PageLoader.loadJS();
    }

    PageLoader.prototype.loadJS = function() {
        var PageLoader = this;
        $script.path("<?php echo $kirby->urls()->assets() ?>/js/");
        // define scripts to load
        var lvl1 = ['vendor/jquery-2.2.3.min.js','vendor/velocity.min.js','vendor/webfontloader.js','vendor/picturefill.min.js'];
        var lvl2 = ['main.js', 'vendor/lazysizes.min.js','vendor/jquery.filterizr.min.js','vendor/lightbox.min.js'];
        // load scripts
        $script(lvl1,function () {
            PageLoader.hasLoaded('jquery');
            // load main js
            $script(lvl2);
            // start picturefill
            document.createElement( "picture" );
        });
    };

    PageLoader.prototype.configFontLoader = function() {
        var PageLoader = this;
        // https://github.com/typekit/webfontloader#readme
        WebFontConfig = {
            custom: {
                families: ['Brown-Pro:n4,i4'],
                urls: ['<?php echo $kirby->urls()->assets() ?>/fonts/stylesheet.css']
            },
            timeout: 2000,
            classes: false,
            active: function () {
                PageLoader.hasLoaded('fonts');
            }
        };
    };

    PageLoader.prototype.hasLoaded = function(dep) {
        var PageLoader = this;
        var index = PageLoader.dependencies.indexOf(dep);
        if (index > -1) {
            PageLoader.dependencies.splice(index, 1);
            if(PageLoader.dependencies.length == 0){
                PageLoader.depsLoaded();
            }
        }
    };

    PageLoader.prototype.cssLoaded = function() {
        var PageLoader = this;
        PageLoader.hasLoaded('css');
    };

    PageLoader.prototype.depsLoaded = function () {
        var PageLoader = this;
        console.info('Everything is loaded');
    }


    var pageLoader;
</script>
<!-- load js async-loader-->
<script async src="<?php echo $kirby->urls()->assets() ?>/js/vendor/javascript-asynchronous-loader.min.js" onload="pageLoader = new PageLoader();"></script>
<!-- load css async -->
<link rel="stylesheet" href="<?php echo $kirby->urls()->assets() ?>/css/main.css" media="all" onload="(function(){if(media!='all'){media='all'} pageLoader.cssLoaded()})();">
<noscript><link rel="stylesheet" href="assets/css/main.css"></noscript>