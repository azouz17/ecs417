function clear(){


 var x= window.confirm('Are you sure you want to clear?')
  if(x==true)
  {
    document.getElementById('form').reset();
  }


}
document.getElementById("cl").addEventListener("click", clear);

function check()
{
  var title= document.getElementById('a1');
  var text = document.getElementById('a2');
  document.getElementById('form').addEventListener(getElementById('submit'),function(event){
    if(title.value==="" && text.value==="")
    {
    title.setAttribute('style',"box-shadow:0 0 12px red");
    text.setAttribute('style',"box-shadow:0 0 12px red");
    event.preventDefault();
    }
    else if(title.value==="")
  {
      title.setAttribute('style',"box-shadow:0 0 12px red");
      event.preventDefault();
  }
  else if(text.value==="")
{
    text.setAttribute('style',"box-shadow:0 0 12px red");
    event.preventDefault();
}

}
)
}
