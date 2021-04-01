



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
  //console.log(text);

  var title= document.getElementById('a1');
  var text = document.getElementById('a2');

console.log(text.value);



  document.getElementById('form').addEventListener('submit',function(event){
    if(title.value==="" && text.value==="c")
    {
    title.setAttribute('style',"box-shadow:0 0 15px yellow")
    text.setAttribute('style',"box-shadow:0 0 15px yellow")
    event.preventDefault();
    }
    else if(title.value==="")
  {
  title.setAttribute('style',"box-shadow:0 0 15px yellow");
      event.preventDefault();
  }
  else if(text.value==="c")
{
    text.setAttribute('style',"box-shadow:0 0 15px yellow")
    event.preventDefault();
}

})


}
