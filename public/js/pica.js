


function pic2(){
    var cantidadNumeros = 9;
    var a=[];

    while(a.length < 4 ){
      var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
      var existe = false;
      for(var i=0;i<a.length;i++){
        if( a [i] == numeroAleatorio){
            existe = true;
            break;
        }
      }
      if(!existe){
        a[a.length] = numeroAleatorio;
      }
    
    }
    console.log(a);
    return a;
}

function mostrarp(){
    
  var num2=document.getElementById("panel").value.split('');
  var picas =0;
  var fijas=0;
  var filtro=[];
  var faltan=[];
  var str="";
  var bandera=true;

if(num2.length==4){
    for(var q=0;q<4;q++){
    
    for(var w=0;w<4;w++){
        if(q!=w){
          if(num[q]==num[w]){
        bandera=false;
    }  
        }
        
    
}
}
    
if (bandera){
    for(var f=0;f<num.length;f++){
    if(num[f]==num2[f]){
      fijas++;
      filtro.push(f);
        
    }else{
        console.log(typeof(num[f]));
        faltan.push(num2[f]);
    }
  }
  
document.getElementById("fijas").innerHTML=fijas;
    

for(var h=0;h<4;h++){
    
    if(filtro.includes(h)==false){
        if(num.includes(parseInt(num2[h]))){
            picas++;
        }
    }
}

document.getElementById("picas").innerHTML=picas;

if(fijas==4){
  alert("FELICIDADES, HAZ GANADO");
}

}else{
    alert("NO SE PUEDEN NUMEROS REPETIDOS");
}
}else{
    alert("POR FAVOR INGRESE 4 NUMEROS");
}

  
}


var num=pic2();
console.log(num);

