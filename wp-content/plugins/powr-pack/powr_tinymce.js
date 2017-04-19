tinymce.PluginManager.add('powr', function(editor, url) {
    function uniqueLabel(){
        return 'xxxxxxxx_'.replace(/[x]/g, function(c) {
            var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
            return v.toString(16);
        }) + new Date().getTime();
    }
    editor.addButton('powr', {
        title : 'POWr Plugin',
        tooltip: 'Insert POWr Plugin',
        //image : 'powr-icon.png',
        icon: 'icon powr-icon',
        type: 'menubutton',
        onclick : function(e) {
			var app_name = e.target.innerText.replace(/^\s+|\s+$/g, '');
			var app_shortcode = app_name.toLowerCase().replace(/ /g, '-');
			if( app_shortcode && !e.target.classList.contains('mce-menu-item-expand') && !e.target.parentElement.classList.contains('mce-menu-item-expand')){
		        var c = '[powr-'+app_shortcode+' id='+uniqueLabel()+']'; //For just shortcode
				//Set the content in the editor
				editor.selection.setContent(c);
			}
        },
        menu: [
          {text: 'Form Builder'},
          {text: 'Social Feed'},
          {text: 'Popup'}
        ]
    });
});
