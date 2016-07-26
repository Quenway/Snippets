// Setting the cookie value
function setCookie(cookieName, cookieValue, expirationDays) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + expirationDays);
  cookie = cookieValue + "; expires=" + expirationDate.toUTCString();
  document.cookie = cookieName + "=" + cookieValue;
}

// Retrieving the cookie value
function getCookie(cookieName) {
var cookies = document.cookie.split(";");
  
  for(var i = 0; i < cookies.length; i++) {
    var cookies = cookies[i];
    var index = cookie.indexOf("=");
    var key = cookie.substr(0, index);
    var val = cookies.substr(index + 1);
    
    if(key == cookieName) {
    return val;
    }
  }
}

// Usage
setCookie('firstName', 'Glenn', 1);
var firstname = getCookie('firstName');
