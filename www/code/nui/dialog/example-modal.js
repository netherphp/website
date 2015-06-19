function LocalExampleModalDialog() {
/*//
a simple modal dialog which requires the user to interact with it.
it works by packing a dialog into an overlay. we will also pack
two buttons in it, one with an accept action and one with a cancel
action.
//*/

	var Modal, Dialog;
	
	Modal = new NUI.Overlay({
		Content: (Dialog = new NUI.Dialog({
			Title: 'Modal Dialog Example',
			Content: 'This is a modal dialog.',
			Buttons: [
				new NUI.Button({ Label:'OK', Class:'NUI-Dialog-Accept' }),
				new NUI.Button({ Label:'Cancel', Class:'NUI-Dialog-Cancel' })
			],
			OnAccept: function(){
				alert('You clicked OK.');
				Modal.Destroy();
			},
			OnCancel: function(){
				alert('You clicked Cancel.');
				Modal.Destroy();
			}
		}))
	});
	
	return false;
}
