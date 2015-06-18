function LocalIntroModalDialog() {
/*//
create a pop-in dialog which can be moved around the page, inside of a
translucent overlay that prevents access to the page underneath until
it is delt with.
//*/

	var Modal, Dialog;
	
	Modal = new NUI.Overlay({
		Content: (Dialog = new NUI.Dialog({
			Title: 'Modal Introduction Dialog...',
			Content: 'This is a modal dialog that demands attention.',
			Buttons: [
				new NUI.Button({ Label:'Close', Class:'NUI-Dialog-Cancel' })
			],
			OnCancel: function(){
				Modal.Destroy();
				return;
			}
		}))
	});
	
	return false;
}