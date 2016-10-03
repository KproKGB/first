function getXmlHttpRequest() {
	if (window.XMLHttpRequest) {
		try {
			return new XMLHttpRequest();
		} catch (e) {}
	} else if(window.ActiveXObject) {
		try {
			return new window.ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {}
		try {
			return new window.ActiveXObject("Microsoft.XMLHTTP");
		} catch (e) {}
	}
	return null;
}