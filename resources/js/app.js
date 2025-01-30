import './bootstrap';
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





