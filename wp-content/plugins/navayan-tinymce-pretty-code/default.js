(function () {
    try {
        tinymce.create('tinymce.plugins.nypcPlugin', {
            init: function(ed, url) {
                ed.addCommand('nypcCode',   function() { ed.formatter.toggle ('nypccode'); });
                ed.addCommand('nypcPretty', function() { ed.formatter.toggle ('nypcpretty'); });
        
                ed.addButton('nypc_code', {
                    title: 'Code (Alt+Shift+C)', 
                    cmd  : 'nypcCode'
                });
                ed.addButton('nypc_pretty', {
                    title: 'Google PrettyPrint (Alt+Shift+G)', 
                    cmd  : 'nypcPretty'
                });
        
                ed.addShortcut ('alt+shift+c', 'Code', 'nypcCode');
                ed.addShortcut ('alt+shift+g', 'Pretty', 'nypcPretty');
        
                ed.onInit.add (function () {
                    ed.formatter.register ('nypccode', {inline: 'code', remove: 'all'});
                    ed.formatter.register ('nypcpretty', {block : 'pre', remove: 'all', classes: 'prettyprint'});
                });
            }
        });
    
        tinymce.PluginManager.add('nypc_code', tinymce.plugins.nypcPlugin);
        tinymce.PluginManager.add('nypc_pretty', tinymce.plugins.nypcPlugin);
    } catch(e) {
        console.log(e);
    }
})();