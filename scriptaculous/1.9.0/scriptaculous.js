var Scriptaculous={Version:'1.9.0',require:function(a){try{document.write('<script type="text/javascript" src="'+a+'"><\/script>')}catch(e){var b=document.createElement('script');b.type='text/javascript';b.src=a;document.getElementsByTagName('head')[0].appendChild(b)}},REQUIRED_PROTOTYPE:'1.6.0.3',load:function(){function convertVersionString(a){var v=a.replace(/_.*|\./g,'');v=parseInt(v+'0'.times(4-v.length));return a.indexOf('_')>-1?v-1:v}if((typeof Prototype=='undefined')||(typeof Element=='undefined')||(typeof Element.Methods=='undefined')||(convertVersionString(Prototype.Version)<convertVersionString(Scriptaculous.REQUIRED_PROTOTYPE)))throw("script.aculo.us requires the Prototype JavaScript framework >= "+Scriptaculous.REQUIRED_PROTOTYPE);var c=/scriptaculous\.js(\?.*)?$/;$$('script[src]').findAll(function(s){return s.src.match(c)}).each(function(s){var b=s.src.replace(c,''),includes=s.src.match(/\?.*load=([a-z,]*)/);(includes?includes[1]:'builder,effects,dragdrop,controls,slider,sound').split(',').each(function(a){Scriptaculous.require(b+a+'.js')})})}};Scriptaculous.load();