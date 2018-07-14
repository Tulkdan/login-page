document.getElementById('btnForm').addEventListener('click', () => {
	document.getElementById('myForm').submit();
});

document.getElementById('pass').addEventListener('keypress', (e) => {
	let key = e.which || e.keyCode;
	if (key === 13) {
		document.getElementById('myForm').submit();
	}
})