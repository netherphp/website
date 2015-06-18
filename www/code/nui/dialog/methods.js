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

Dialog.Show();
/*//
@return self
force the widget to show itself.
//*/
