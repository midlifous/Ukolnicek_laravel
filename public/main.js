let number = 0;
function univerzalni(smile)
{
    //document.getElementById("emoji").innerHTML = smile;
    document.getElementById("rada").innerHTML += " " + smile;

}



function pridat()
{
    let text = document.getElementById("vstup").value;
    
    

    if (text.length>0) 
        {   
            univerzalni(text);
            alert("přidali jste vlastní text: "+text);
        } 
        else 
        {
            alert("není co přidat!!!");
        }
}

function smazat(cislo){
  number = cislo;
  document.getElementById("in" + cislo).className = "animace";
  let tlacitka = document.getElementsByTagName("button");
  for (let i = 0; i < tlacitka.length; i++) {
    tlacitka[i].disabled = true;
  }
  setTimeout(mazani, 5000);
  
}
function mazani(){
  let mazanaVec = document.getElementById("in" + number);
  mazanaVec.remove();
  let tlacitka = document.getElementsByTagName("button");
  for (let i = 0; i < tlacitka.length; i++) {
    tlacitka[i].disabled = false;
  }
}
