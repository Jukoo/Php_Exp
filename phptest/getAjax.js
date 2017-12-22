
function Relaod (url,callback,async){
	const xhr = new XMLHttpRequest()
	xhr.open("GET",url,async);
	xhr.onreadystatechange = function (){
		if (this.readyState == this.DONE && this.status >=200 && this.status<=400){
			callback(xhr.responseText)
		}else {
			console.error("Sorry Cannot reach this link : " + this.status + this.statusText)
		}
	}
xhr.addEventListener('error',function(){
	alert('Internal Server Error(Bad Gate)')
})
	xhr.send()
}
