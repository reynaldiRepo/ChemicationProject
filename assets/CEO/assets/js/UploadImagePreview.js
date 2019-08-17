function preview_image(event,i) {
 var reader = new FileReader();
 
 reader.onload = function()
 {
  var output = document.getElementsByClassName("picture-src");
  output[i].src = reader.result;
  console.log(output[i].src);
    
 }
 reader.readAsDataURL(event.target.files[0]);
};