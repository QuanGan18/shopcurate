const dbRef = firebase.database().ref();
const detailsRef = dbRef.child('details');
detailsRef.on("child_added", function(snapshot, prevChildKey) {
var newPost = snapshot.val();
});

function send(){
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
detailsRef.push().set({
	firstname: firstname,
	lastname: lastname,
	email: email,
	password: password,
	});
}