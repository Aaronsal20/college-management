function DoCallback(data)
{
  if(window.XMLHttpRequest)
  {
    req = new XMLHttpRequest();
    req.onreadystatechange = processReqChange;
    req.open('POST',url,true);
    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    req.send(data);
  }
  else if(window.ActiveXObject)
  {
    req = new ActiveXObject('Microsoft.XMLHTTP')
    if (req){
      req.onreadystatechange = processReqChange;
      req.open('POST',url,true);
      req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      req.send(data);
    }
  }
}

function processReqChange(){

  if(req.readyState == 4){
    if(req.status == 200)
    {
      eval(what);
    }
    else
      {
        alert('There was a problem getting XML data:'+ req.responseText);
      }
    }
}  
