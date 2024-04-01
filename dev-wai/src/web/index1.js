sessionStorage.setItem('lang','en')
function changeLang(){
  if(sessionStorage.getItem('lang')=='en'){
    sessionStorage.setItem('lang','pl');
    document.getElementById('lang').href = 'pl/main.html' ;
  }
  else if(sessionStorage.getItem('lang')=='pl'){
    sessionStorage.setItem('lang','en');
    document.getElementById('lang').href = 'index.html' ;
  }
}

function changePic(){

  document.getElementById('headerImage').style.backgroundImage="url('image2.jpg')";
  document.getElementById('headerText').style.color=('white');
}
