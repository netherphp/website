function LocalExampleBusyDialog() {
/*//
this is a simple modal dialog which demonstrates the "loading" or "thinking"
state where you can have it on lockdown while a process or api request runs
in the background. it is a simple trick, all you do is add a hidden image,
a loader.gif for example, to the button bar. it will then swap the visiblity
of the buttons and image for you.
//*/

	var Modal, Dialog;
	
	Modal = new NUI.Overlay({
		Content: (Dialog = new NUI.Dialog({
			Title: 'Busy Dialog Example',
			Content: (			
				'When you click OK this dialog will pretend to be '+
				'working really hard and then vanish after 6 seconds.'
			),
			Buttons: [
				new NUI.Image({ URL:'/share/nui/dist/gfx/thinking.gif', Show:false }),
				new NUI.Button({ Label:'OK', Class:'NUI-Dialog-Accept' }),
				new NUI.Button({ Label:'Cancel', Class:'NUI-Dialog-Cancel' })
			],
			OnAccept: function(){
				Dialog.SetBusy(true);
				
				setTimeout(function(){
					// instead of a timeout you would be more likely to do
					// something like a jQuery.post() to get results from
					// an api. this is emulating a really really really slow
					// api request.
					
					Modal.Destroy();
				},6000);
				
				return;
			},
			OnCancel: function(){
				Modal.Destroy();
			}
		}))
	});
	
	return false;
}
