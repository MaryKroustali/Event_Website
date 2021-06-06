function Calculate () {
	//get input values
	var people_str = document.getElementsByTagName('input')[0].value;
	var staff_str = document.getElementsByTagName('input')[1].value;
	var days_str = document.getElementsByTagName('input')[2].value;
	var result = document.getElementById('show');
	
	var staff_cost;
	var days_cost;
	var people_cost;

	//values to int
	people = parseInt(people_str);
	staff = parseInt(staff_str);
	days = parseInt(days_str);

	//if input fields null, alert
	if ( isNaN(people) || isNaN(staff) || isNaN(days) ) {
		result.innerHTML = 'Εισάγετε πλήθος συμμετεχόντων, πλήθος προσωπικού και ημέρες που θα διαρκέσει το συνεδριό σας!';
	}

	if (people <= 500) {
		//staff works 8 hours/day
		staff_cost = staff * 10 * 8 * days;
		days_cost = 500 * days;
		people_cost = people * 0.5;
	}
	else if ( (people > 500) && (people <= 1000) ){
		staff_cost = staff * 8 * 8 * days;
		days_cost = 400 * days;
		people_cost = people * 0.4;
	}
	else if ( (people > 1000) && (people <= 1500) ){
		staff_cost = staff * 6 * 8 * days;
		days_cost = 300 * days;
		people_cost = people * 0.3;
	}
	else if ( (people > 1500) && (people <= 2000) ){
		staff_cost = staff * 5 * 8 * days;
		days_cost = 200 * days;
		people_cost = people * 0.2;
	}
	else {
		staff_cost = staff * 4 * 8 * days;
		days_cost = 150 * days;
		people_cost = people * 1.5;
	}
    
	var total_cost = staff_cost + days_cost + people_cost;
	if ( !(isNaN(total_cost)) ){
		result.innerHTML = 'Κόστος συνεδρίου: ' + (total_cost) + '\u20AC';
	}

	//if values < 0, alert
	if ( (people <= 0) || (staff <= 0) || (days <= 0 ) ){
		result.innerHTML = 'Οι συμμετέχοντες, το προσωπικού και οι ημέρες πρέπει να είναι τιμές μεγαλύτερες του 0!';
	}
	//check if values are integers
	if ( (people_str.includes('.')) || staff_str.includes('.')) {
		result.innerHTML = 'Οι συμμετέχοντες και το προσωπικού πρέπει να είναι ακέραιες τιμές!';
	}
}
//function for required input fileds in contact form
function requiredContact() {
	var name = document.getElementsByTagName('input')[0].value;
	var email = document.getElementsByTagName('input')[1].value;
	var subject = document.getElementsByTagName('input')[2].value;
	var message = document.getElementsByTagName('textarea')[0].value;

	if ( (name == '') || (email == '') || (subject == '') || (message == '')) {
		window.alert('Συμπληρώστε όλα τα πεδία της φόρμας επικοινωνίας!');
	}
}
//function for required input fields in subscribe newsletter
function requiredNewsletter() {
	var username = document.getElementsByTagName('input')[0].value;
	var name = document.getElementsByTagName('input')[1].value;
	var email = document.getElementsByTagName('input')[2].value;

	if ( (username == '') || (name == '') || (email == '') ) {
		window.alert('Συμπληρώστε όλα τα πεδία της φόρμας εγγραφής!');
		location.reload();
	}
}