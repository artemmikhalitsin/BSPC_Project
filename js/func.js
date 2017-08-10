//Verifies if any of the inputs are empty
//If they are, highlights them
function checkEmptyFields() {
  var fields = document.getElementsByTagName("INPUT");
  var empty = 0;
  for(var i = 0; i < fields.length; i++){
    if(fields[i].value == ""){
      var field_name = fields[i].name;
      var labels = document.getElementsByTagName("LABEL");
      for(var j = 0; j < labels.length; j++)
      {
        if(labels[j].htmlFor == field_name)
        {
          labels[j].className += " text-danger";
        }
      }
      empty++;
    }
  }
  if(empty > 0)
  {
    return false;
  }
  return true;
}
