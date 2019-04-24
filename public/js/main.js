
var i = 0;
var classNames = ['one', 'two', 'three'];
setInterval(function (){
  var el =$('.fitness');
  el.removeClass(classNames[0]);
  classNames.unshift(classNames.splice(-1, 1)[0]);
  el.addClass(classNames[0]);
}, 10000);
