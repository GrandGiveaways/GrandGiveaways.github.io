// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyAMXxjjvlDrdky2yEhqiEH3nGwZEC8Y2_k",
  authDomain: "grand-giveaways.firebaseapp.com",
  databaseURL: "https://grand-giveaways.firebaseio.com",
  projectId: "grand-giveaways",
  storageBucket: "grand-giveaways.appspot.com",
  messagingSenderId: "379194298530",
  appId: "1:379194298530:web:fffb22c1dfa431867a07fb",
  measurementId: "G-YXLCT22G1W"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

document.getElementById('emailformform').addEventListener('submit', submitForm);

var emailRef = firebase.database().ref('emails');

var cools = document.getElementById('emailformdiv');
cools.style.maxHeight = "150px";

function submitForm(e) {
  e.preventDefault();

  var email = getInputVal('email');

  if (email != "") {
    saveEmail(email);

    console.log(email);

    cools.style.maxHeight = null;
    cools.style.opacity = "0";
    cools.style.marginBottom = "0";

    document.getElementById('congrats').style.display = "block";
  }
}

function getInputVal(id) {
  return document.getElementById(id).value;
}

function saveEmail(email) {
  var newEmail = emailRef.push();
  newEmail.set({
    email: email
  });
}
