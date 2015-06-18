function Intro_ShowExampleOverlay() {
/*//
this is a cheeky little example that shows an overlay with on-the-fly created
content which will close the overlay when clicked.
//*/

	var Overlay = new NUI.Overlay({
		Content: (
			jQuery('<div />')
			.addClass('NUI-Overlay-Close NUI-PositionAbsolute')
			.css({'background':'#fff','color':'#000','padding':'10px'})
			.text('You have been shown. Click me to close.')
		)
	});

	return false;
}
