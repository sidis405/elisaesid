(function() { 

/*-------------------------Home slider---------------*/

    tinymce.create('tinymce.plugins.homeslider', {  
        init : function(ed, url) {  
            ed.addButton('homeslider', {  
                title : 'Slider shortcode',  
                image : url+'/images/shortcode_slideshow.gif',  
                onclick : function() {  
                     ed.selection.setContent('[homeslider][/homeslider]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('homeslider', tinymce.plugins.homeslider);
	
/*-------------------------Home carousel---------------*/

    tinymce.create('tinymce.plugins.homecarousel', {  
        init : function(ed, url) {  
            ed.addButton('homecarousel', {  
                title : 'Carousel shortcode',  
                image : url+'/images/element_carousel.gif',  
                onclick : function() {  
                     ed.selection.setContent('[homecarousel title="Bridesmaids and Groomsmen"][/homecarousel]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('homecarousel', tinymce.plugins.homecarousel);
	
/*-------------------------LATEST POSTS---------------*/
	
    tinymce.create('tinymce.plugins.latestposts', {  
        init : function(ed, url) {  
            ed.addButton('latestposts', {  
                title : 'Latest posts from category',  
                image : url+'/images/latestposts.gif',  
                onclick : function() {  
                     ed.selection.setContent('[latestposts title="" posts="" category=""]' + ed.selection.getContent() + '[/latestposts]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('latestposts', tinymce.plugins.latestposts);
	/*-------------------------ALL POSTS---------------*/
	
    tinymce.create('tinymce.plugins.allposts', {  
        init : function(ed, url) {  
            ed.addButton('allposts', {  
                title : 'All posts from category',  
                image : url+'/images/allposts.gif',  
                onclick : function() {  
                     ed.selection.setContent('[allposts title="" category=""]' + ed.selection.getContent() + '[/allposts]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('allposts', tinymce.plugins.allposts);
/*-------------------------About couple---------------*/
	
    tinymce.create('tinymce.plugins.aboutcouple', {  
        init : function(ed, url) {  
            ed.addButton('aboutcouple', {  
                title : 'About couple shortcode',  
                image : url+'/images/sectionabout.gif',  
                onclick : function() {  
                     ed.selection.setContent('[aboutcouple title="" aboutimageurl="" readmorelink=""]' + ed.selection.getContent() + '[/aboutcouple]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('aboutcouple', tinymce.plugins.aboutcouple);
	
/*-------------------------Wedding Countdown---------------*/
	
    tinymce.create('tinymce.plugins.weddingcountdown', {  
        init : function(ed, url) {  
            ed.addButton('weddingcountdown', {  
                title : 'Countdown shortcode',  
                image : url+'/images/countdown.gif',  
                onclick : function() {  
                     ed.selection.setContent('[weddingcountdown title="" buttonurl="" buttontext="RSVP NOW"]' + ed.selection.getContent() + '[/weddingcountdown]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('weddingcountdown', tinymce.plugins.weddingcountdown);
	
/*-------------------------Section full width---------------*/
	
    tinymce.create('tinymce.plugins.fullcontent', {  
        init : function(ed, url) {  
            ed.addButton('fullcontent', {  
                title : 'Add a full width section',  
                image : url+'/images/sectionfull.gif',  
                onclick : function() {  
                     ed.selection.setContent('[fullcontent]' + ed.selection.getContent() + '[/fullcontent]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('fullcontent', tinymce.plugins.fullcontent);
/*-------------------------Section 1/2---------------*/
    tinymce.create('tinymce.plugins.halfcontent', {  
        init : function(ed, url) {  
            ed.addButton('halfcontent', {  
                title : 'Add a half width section',  
                image : url+'/images/sectionhalf.gif',  
                onclick : function() {  
                     ed.selection.setContent('[halfcontent]' + ed.selection.getContent() + '[/halfcontent]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('halfcontent', tinymce.plugins.halfcontent);	
/*-------------------------Section 2/3---------------*/
    tinymce.create('tinymce.plugins.twothirdscontent', {  
        init : function(ed, url) {  
            ed.addButton('twothirdscontent', {  
                title : 'Add a 2/3 width section',  
                image : url+'/images/section2third.gif',  
                onclick : function() {  
                     ed.selection.setContent('[twothirdscontent]' + ed.selection.getContent() + '[/twothirdscontent]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('twothirdscontent', tinymce.plugins.twothirdscontent);	

/*-------------------------1/3 Section---------------*/
	
    tinymce.create('tinymce.plugins.onethirdcontent', {  
        init : function(ed, url) {  
            ed.addButton('onethirdcontent', {  
                title : 'Add a 1/3 width section',  
                image : url+'/images/sectionthird.gif',  
                onclick : function() {  
                     ed.selection.setContent('[onethirdcontent]' + ed.selection.getContent() + '[/onethirdcontent]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('onethirdcontent', tinymce.plugins.onethirdcontent);
	
/*-------------------------Section 1/4---------------*/
	
    tinymce.create('tinymce.plugins.quartercontent', {  
        init : function(ed, url) {  
            ed.addButton('quartercontent', {  
                title : 'Add a 1/4 width section',  
                image : url+'/images/sectionfourth.gif',  
                onclick : function() {  
                     ed.selection.setContent('[quartercontent]' + ed.selection.getContent() + '[/quartercontent]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('quartercontent', tinymce.plugins.quartercontent);
	
	
/*-------------------------1/3 Section---------------*/
	
    tinymce.create('tinymce.plugins.readmore', {  
        init : function(ed, url) {  
            ed.addButton('readmore', {  
                title : 'Add a read more button',  
                image : url+'/images/readmore.gif',  
                onclick : function() {  
                     ed.selection.setContent('[readmore url=""]READ MORE' + ed.selection.getContent() + '[/readmore]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('readmore', tinymce.plugins.readmore);

/*-------------------------1/3 Section---------------*/
	
    tinymce.create('tinymce.plugins.sidebar', {  
        init : function(ed, url) {  
            ed.addButton('sidebar', {  
                title : 'Add blog default sidebar',  
                image : url+'/images/sidebar.gif',  
                onclick : function() {  
                     ed.selection.setContent('[get_sidebar]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('sidebar', tinymce.plugins.sidebar);
	
/*-------------------------Video Shortcode---------------*/

    tinymce.create('tinymce.plugins.videoiframe', {  
        init : function(ed, url) {  
            ed.addButton('videoiframe', {  
                title : 'Add a video from iframe',  
                image : url+'/images/videosection.gif',  
                onclick : function() {  
                     ed.selection.setContent('[videoiframe]' + ed.selection.getContent() + '[/videoiframe]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('videoiframe', tinymce.plugins.videoiframe);	
	

})();