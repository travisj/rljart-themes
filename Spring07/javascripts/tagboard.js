var getForm =
{
	success: function(o)
	{
		document.getElementById('form_holder').innerHTML = o.responseText;
	},
	failure: function(o)
	{
		alert(o.statusText);
	},
	click: function(url)
	{
		var cObj = YAHOO.util.Connect.asyncRequest('GET',url,getFormCallback,null);
	}
	
}

var getFormCallback =
{
	success: getForm.success,
	failure: getForm.failure
}