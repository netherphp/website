function LocalIntroNormalDialog() {
/*//
create a pop-in dialog which can be moved around the page. you can even open
multiple of them if you want and move them all around indpendently.
//*/

	var Dialog;
	
	Dialog = new NUI.Dialog({
		Title: 'Introduction Dialog...',
		Content: 'This is a quick dialog that can float around the page.',
		Buttons: [
			new NUI.Button({ Label:'Close', Class:'NUI-Dialog-Cancel' })
		],
		OnCancel: function(){
			Dialog.Destroy();
			return;
		}
	});
	
	return false;
}