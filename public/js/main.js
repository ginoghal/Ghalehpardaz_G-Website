var menu = document.getElementById("menu");
var closeIcon = document.getElementById("closeIcon");

menu.addEventListener("click", handleMenuClick);

function handleMenuClick(event) {
  if (event.target instanceof HTMLAnchorElement) {
    closeIcon.checked = false;
  }
}

{
  var i = 0; //starting images
  var images = [];
  var time = 3000;

  images[0] = "public/images/boxingring.jpg";
  images[1] = "public/images/BasketballNetCinema4D.jpg";
  images[2] = "public/images/pokeball2.jpg";
  images[3] = "public/images/SoccerNet.jpg";
  images[4] = "public/images/CanFlag.jpg";
  images[5] = "public/images/MapleLeafsMug2.jpg";

  function slide() {
    document.cinema4d.src = images[i];

    if (i < images.length - 1) {
      i++;
    } else {
      i = 0;
    }

    setTimeout("slide()", time);
  }

  window.onload = slide;
}
