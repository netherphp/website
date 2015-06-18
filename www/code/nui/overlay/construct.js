var Overlay = new NUI.Overlay({
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
	
	Show: true,
	/*//
	@type Boolean
	if the widget should be displayed the moment it is created, or remain
	hidden for a special surprise later.
	//*/
	
	HandleResize: true,
	/*//
	@type Boolean
	if the widget should attempt to reposition things inside of it when the
	browser window is rescaled. by default this will keep things centered
	no matter how much the user fusses with the window.
	//*/
	
	OnClose: null,
	/*//
	@type Callable
	the function that is to be executed when the widget is told to close.
	by default nothing will happen unless you code it to do something.
	this way you could do some ajax time wasting thing and keep it up until
	you are good to go.
	//*/
});