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

// document.getElementById('loginForm').addEventListener('submit', submitForm);
//
// function submitForm(e) {
//   e.preventDefault();
//
  // var email = document.getElementById('emailValue').value;
  // var password = document.getElementById('passwordValue').value;
//
//   if (email != "" && password != "") {
//     addEntry(email, true);
//   }
// }

function register() {
  const email = document.getElementById('emailValue').value;
  const password = document.getElementById('passwordValue').value;

  if (email != "" && password != "") {
    window.alert("Email: "+email+"\nPassword: "+password);
  }
}

function login() {
  const email = document.getElementById('emailValue').value;
  const password = document.getElementById('passwordValue').value;

  if (email != "" && password != "") {
    window.alert("Email: "+email+"\nPassword: "+password);
  }
}
