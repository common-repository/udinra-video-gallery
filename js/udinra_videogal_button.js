(function () {
    'use strict';

    tinymce.PluginManager.add('udinra_videogal_subscribe', function (editor, url) {
        editor.addButton('udinra_videogal_subscribe', {
            title: 'Udinra Video Gallery Button',
            image: url + '/../image/videogal.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra Video Gallery',
                    body: [
						{
                            type: 'listbox',
                            name: 'provider',
                            label: 'Video Provider',
                            values: [
                                {text: 'YouTube', value: 'youtube'},
								{text: 'Vimeo', value: 'vimeo'}
                            ]
                        },						
						{
                            type: 'listbox',
                            name: 'type',
                            label: 'Gallery Type',
                            values: [
                                {text: 'Film Strip', value: 'filmstrip'},
								{text: 'SlideShow', value: 'slideshow'}
							]
                        },	
						{
                            type: 'textbox',
							size: 40,
                            name: 'source1',
                            label: 'Enter the Video ID'
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'source2',
                            label: 'Enter the Video ID'
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'source3',
                            label: 'Enter the Video ID'
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'source4',
                            label: 'Enter the Video ID'
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'source5',
                            label: 'Enter the Video ID'
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'source6',
                            label: 'Enter the Video ID'
                        }
                   ],
                    onsubmit: function (e) {
                        editor.insertContent('[udinra_videogal type="' + e.data.type
												+ '" provider="' + e.data.provider
												+ '" source1="' + e.data.source1 
												+ '" source2="' + e.data.source2 
												+ '" source3="' + e.data.source3 
												+ '" source4="' + e.data.source4 
												+ '" source5="' + e.data.source5 
												+ '" source6="' + e.data.source6 
												+ '" ]' );
                    }
                });
            }
        });
    });
})();


