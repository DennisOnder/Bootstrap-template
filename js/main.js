function scrollPage(e) {
  if (e == undefined || e == "") return;

  var element = document.getElementById(e);
  element.scrollIntoView({behavior: "smooth"});
}
