



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



  if(title.value==="")
  {
  title.setAttribute('style',"box-shadow:0 0 15px yellow");
  console.log("title area empty")
  event.preventDefault();
  }
  else{
    title.setAttribute('style',"border: solid 0.5px black");

    //console.log(text.value);
  }

  if(text.value==="")
  {
  text.setAttribute('style',"box-shadow:0 0 15px yellow");
  console.log("text area empty")
  event.preventDefault();
  }
  else{
    text.setAttribute('style',"border: solid 0.5px black");

  }
}
