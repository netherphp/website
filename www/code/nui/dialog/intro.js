function Intro_ShowExampleDialog() {
/*//
here is a small example of a non-modal dialog that can be moved around the
screen. you can even spawn multiples to move independently.
//*/

	var Dialog = new NUI.Dialog({
		Content: (
			jQuery('<div />')
			.text('Drag me around by the title bar. Neat eh.')
		)
	});

	return false;
}
