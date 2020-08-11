function openCity(evt, cityName) {
  // Declare all variables
  var i, desc2, tablinks;

  // Get all elements with class="desc2" and hide them
  desc2 = document.getElementsByClassName("desc2");
  for (i = 0; i < desc2.length; i++) {
    desc2[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementsByClassName('tablinks')[0].click();
