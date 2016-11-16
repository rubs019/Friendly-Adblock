/**
 * Created by rubz_johnson on 14/11/16.
 */
var initPop = function(){
  //  var bgColor = document.getElementById('chosen-value').value;
  //  var titleColor = document.getElementById('chosen-value1').value;
  //  var contentColor = document.getElementById('chosen-value2').value;
//
  //  document.getElementById('popup').style.backgroundColor = '#' + bgColor
  //  document.getElementById('pop-title').style.color = '#' + titleColor
  //  document.getElementById('pop-content').style.color = '#' + contentColor

    return true;
}
function setBgColor(picker) {
    document.getElementById('popup').style.backgroundColor = '#' + picker.toString()
}
function setTitleColor(picker) {
    document.getElementById('pop-title').style.color = '#' + picker.toString()
}
function setTextColor(picker) {
    document.getElementById('pop-content').style.color = '#' + picker.toString()
}