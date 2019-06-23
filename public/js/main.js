
var i = 0;
var classNames = ['one', 'two', 'three'];
setInterval(function (){
  var el =$('.fitness');
  el.removeClass(classNames[0]);
  classNames.unshift(classNames.splice(-1, 1)[0]);
  el.addClass(classNames[0]);
}, 10000);


var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var images = $('img#myImg');
var modalImg = document.getElementById("lic_modal");
var captionText = document.getElementById("caption");

images.each(function (i, image) {
  image.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}



