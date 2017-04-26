

function toggleTeam(id){
	 this.id = id;
	var toggle = document.getElementById(this.id);
	if (toggle.style.display === 'none') {
		        toggle.style.display = 'block';
		    } else {
		        toggle.style.display = 'none';
		    }

		    // alert("team is working on button");
}

function toggleRelease(){
	var toggle = document.getElementById('releases');
	if (toggle.style.display === 'none') {
		        toggle.style.display = 'block';
		    } else {
		        toggle.style.display = 'none';
		    }

		    // alert("team is working on button");
}