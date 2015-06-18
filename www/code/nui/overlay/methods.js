Overlay.Close();
/*//
@return self
if you have not defined an OnClose function, then this will just call
Destroy on itself. if you do define define an OnClose then that callback
will need to handle the destruction of the widget.
//*/

Overlay.Destroy();
/*//
@return self
completely remove the widget from the DOM.
//*/

Overlay.Get();
/*//
@return jQuery
fetches the jQuery object for the widget. once you have that you can do
anything with it like you normally would with jQuery.
//*/

Overlay.Hide();
/*//
@return self
force the widget to hide itself.
//*/

Overlay.Show();
/*//
@return self
force the widget to show itself.
//*/
