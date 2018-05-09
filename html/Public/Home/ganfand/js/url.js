/**
 * 
 */

function urlCoding(currentUrl){
	currentUrl=currentUrl.replace(/\?/g,'%3F');
	currentUrl=currentUrl.replace(/\&/g,'%26');
	currentUrl=currentUrl.replace(/\=/g,'%3D');
	return currentUrl;
}