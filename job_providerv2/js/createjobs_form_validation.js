
		
		const form = document.getElementById('form');
		const jobname = document.getElementById('jobname');
		const compname = document.getElementById('compname');
		const jobdet = document.getElementById('jobdet');
		const email = document.getElementById('email');
		const salary = document.getElementById('salary');
		const password2 = document.getElementById('password2');

		form.addEventListener('submit', (event) => {
		//event.preventDefault();
	
		checkInputs();
		form.submit();
			});

	function checkInputs() {
	// trim to remove the whitespaces
	const jobnameValue = jobname.value.trim();
	const compnameValue = compname.value.trim();
	const jobdetValue = jobdet.value.trim();
	const emailValue = email.value.trim();
	const salaryValue = salary.value.trim();
	
	
	if(jobnameValue === '') {
		setErrorFor(jobname, 'jobname cannot be blank');
	} else {
		setSuccessFor(jobname);
	}
	
	if(compnameValue === '') {
		setErrorFor(compname, 'company name cannot be blank');
	} else {
		setSuccessFor(compname);
	}
	
	if(jobdetValue === '') {
		setErrorFor(jobdet, 'Job Details cannot be blank');
	} else {
		setSuccessFor(jobdet);
	}
	
	
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(salaryValue === '') {
		setErrorFor(salary, 'salary cannot be blank');
	} else {
		setSuccessFor(salary);
	}
	
}

	function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
	}

	function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
	}
	
	function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
	}

