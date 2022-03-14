var hora,min, seg,mins,segs;	hora = 0;	min = 15;		seg = 01;	
	function relogio(){			
		if((hora > 0 || min > 0) || (seg > 0)){				
			if(seg == 0){					
				seg = 59;					
				min = min - 1;
					}
			else{					
				seg = seg - 1;				
			}	
			if(hora > 0 && min == 0 && seg == 00){
				hora = hora -1;
				min = 59;
				seg = 59;
			}		
			if(hora.toString().length == 1){					
				hora = "0" + hora;				
			}							
			if(min.toString().length == 1){					
				min = "0" + min;				
			}				
			if(seg.toString().length == 1){					
				seg = "0" + seg;				
			}				
			document.getElementById('spanRelogio').innerHTML = hora +":" + min + ":" + seg;				
			setTimeout('relogio()', 1000);			
		}			
		else{				
			document.getElementById('spanRelogio').innerHTML = "00:00:00";			
		}
	return mins,segs;
    }

	var purecookieTitle="Cookies.",purecookieDesc="Este site utiliza cookies para o seu correto funcionamento. Ao utilizar o site voce concorda com o seu uso.",purecookieLink='<a href="https://www.cssscript.com/privacy-policy/" target="_blank">Saber mais?</a>',purecookieButton="Aceitar";function pureFadeIn(e,o){var i=document.getElementById(e);i.style.opacity=0,i.style.display=o||"block",function e(){var o=parseFloat(i.style.opacity);(o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))}()}function pureFadeOut(e){var o=document.getElementById(e);o.style.opacity=1,function e(){(o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)}()}function setCookie(e,o,i){var t="";if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()}document.cookie=e+"="+(o||"")+t+"; path=/"}function getCookie(e){for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return null}function eraseCookie(e){document.cookie=e+"=; Max-Age=-99999999;"}function cookieConsent(){getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};
