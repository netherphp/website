Dialog.Accept();
/*//
@return self
if you have defined an OnAccept callback then it will be executed. else it will
just call Destroy on itself. if you define your own callback then that will
need to handle the destruction of the dialog.
//*/

Dialog.Cancel();
/*//
@return self
if you have defined an OnCancel callback then it will be executed. else it will
just call Destroy on itself. if you define your own callback then that will
need to handle the destruction of the dialog.
//*/

Dialog.Destroy();
/*//
@return self
completely remove the widget from the DOM.
//*/

Dialog.Get();
/*//
@return jQuery
fetches the jQuery object for the widget. once you have that you can do
anything with it like you normally would with jQuery.
//*/

Dialog.Hide();
/*//
@return self
force the widget to hide itself.
//*/

Dialog.SetLoading(state);
/*//
@argv Boolean State
@return self
tell the dialog to tweak its display to suggest that it has to wait for
something to complete. all it really does is swap the buttons with any
images you added to the button area - so like a loader.gif thing. nice for
when you have to wait on an async api call or something.
//*/

Dialog.Show();
/*//
@return self
force the widget to show itself.
//*/
