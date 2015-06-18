var Dialog = new NUI.Dialog({
	Container: 'body',
	/*//
	@type Selector String
	this is the selector you would pass to jQuery to select something from
	the DOM. this is the element that will house this widget.
	//*/
	
	Content: null,
	/*//
	@type NUI Widget | jQuery | DOM Object | HTML String
	this is what will be inside of the of the overlay. you can pass it a
	literal string of HTML, a DOM object, or a jQuery object where you
	dynamically build an object on the fly - select a pre-existing element
	from the DOM.
	//*/
	
	Class: null,
	/*//
	@type String
	the class or space separated list of classes you want to add to the
	widget for further features or styles.
	//*/
	
	Fixed: true,
	/*//
	@type Boolean
	if true the dialog will stay on screen even when the user scrolls the
	page. if false, then it will scroll along with the page.
	//*/
	
	Height: 'auto',
	/*//
	@type String
	how tall the dialog should be. it should be a valid string you would
	normally set in CSS such as "400px" or "50%".
	//*/
	
	Moveable: true,
	/*//
	@type Boolean
	if true you can drag the dialog around the screen by the title bar.
	if false, then not.
	//*/
	
	Position: null,
	/*//
	@type array
	by default the dialog will appear in the center of the screen, however
	passing a two element array [x,y] will spawn the dialog at that location
	instead.
	//*/
	
	Show: true,
	/*//
	@type Boolean
	if the widget should be displayed the moment it is created, or remain
	hidden for a special surprise later.
	//*/
	
	Width: 'auto',
	/*//
	@type String
	how wide the dialog should be. it should be a valid string you would
	normally set in CSS such as "400px" or "50%".
	//*/
	
	OnAccept: null,
	/*//
	@type Callable
	the function to execute when the dialog has been "accepted". if none has
	been defined then it will just call Destroy on itself.
	//*/
	
	OnCancel: null,
	/*//
	@type Callable
	the function to execute when the dialog has been "canceled" or closed. if
	none has been defined then it will just call Destroy on itself.
	//*/

});