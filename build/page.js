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

var storedEmail = null;

var fileName = window.location.pathname.substring(window.location.pathname.lastIndexOf("/") + 1).replace(/\.[^/.]+$/, "");
var emailRef = firebase.database().ref('giveaways/' + fileName);

var cools = document.getElementById('emailformdiv');
cools.style.maxHeight = "150px";

function submitForm(e) {
  e.preventDefault();

  var email = document.getElementById('email').value;

  if (email != "") {
    addEntry(email, true);
    storedEmail = email;

    cools.style.maxHeight = null;
    cools.style.opacity = "0";
    cools.style.marginBottom = "0";
    cools.remove();

    document.getElementById('Congrats. Follow Us on Social Media in order to Gain 2 additional ENTRIES EACH!!').style.display = "block";
  }
}

function addEntry(email, isByEmail) {

  emailRef.orderByChild('email').equalTo(email).once('value').then(function(snapshot) {
    const data = snapshot.val() || null;

    if (data) {
      var key = Object.keys(snapshot.val())[0];
      var entries = snapshot.child(key + '/entries').val();

      window.alert(entries);

      if (isByEmail) {
        if (entries <= 9) {
          window.alert('You have already entered your email. Please share on social media for extra entries. Each share is 2 additional entries.');
        }
        setEntries(11 - entries);
      } else {
        if (entries <= 9) {
          firebase.database().ref('giveaways/' + fileName + '/' + key + '/entries').set(entries + 2);
        }
        setEntries(9 - entries);
      }

      if (entries > 9) {
        window.alert('You have completed your entries.');
        setEntries(0);
      }
    } else {
      var newEmail = emailRef.push();
      var emailData = {
        email: email,
        entries: 1
      };
      newEmail.set(emailData);

      setEntries(9);
    }
  });

}

function moreEntries(id) {
  if (storedEmail) {
    addEntry(storedEmail, false);

    var element = document.getElementById(id);
    element.parentNode.removeChild(element);
  } else {
    window.alert('Please enter you email first.');
  }
}

function setEntries(number) {
  document.getElementById('numberOfEntries').innerHTML = number;
}
