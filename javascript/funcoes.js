var hora,min, seg,mins,segs;	hora = 0;	min = 15;		seg = 01;	
let mensagem = document.querySelector(".mensagem") ;
// 	function relogio(){			
// 		if((hora > 0 || min > 0) || (seg > 0)){				
// 			if(seg == 0){					
// 				seg = 59;					
// 				min = min - 1;
// 					}
// 			else{					
// 				seg = seg - 1;				
// 			}	
// 			if(hora > 0 && min == 0 && seg == 00){
// 				hora = hora -1;
// 				min = 59;
// 				seg = 59;
// 			}		
// 			if(hora.toString().length == 1){					
// 				hora = "0" + hora;				
// 			}							
// 			if(min.toString().length == 1){					
// 				min = "0" + min;				
// 			}				
// 			if(seg.toString().length == 1){					
// 				seg = "0" + seg;				
// 			}				
// 			document.getElementById('spanRelogio').innerHTML = hora +":" + min + ":" + seg;				
// 			setTimeout('relogio()', 1000);			
// 		}			
// 		else{				
// 			document.getElementById('spanRelogio').innerHTML = "00:00:00";			
// 		}
// 	return mins,segs;
//     }

// mostra a mensagem
	function showMessage(){   
   		mensagem.style.display = "block";   
 	}
// esconde a mensagem
	function hideMessage(){
  		mensagem.style.display = "none"; 
	}
