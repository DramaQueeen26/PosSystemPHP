$(document).ready(function(){

    /*AQUÍ COMIENZO YO*/

    $('#photo').on('change', function(){

       var img = $('#photo').prop('files')[0];

       console.log(img);

       if($('#photo').val() == ''){
            $('.img').attr('src', '../../assets/images/users/anonymous.png');
        }

       if(img['type'] != 'image/jpg' && img['type'] != 'image/jpeg' && img['type'] != 'image/png'){

            $('#photo').val('');
			$('.img').attr('src', '../../assets/images/users/anonymous.png');

            swal({
               title: 'Error al subir la imagen',
               text: 'El formato solo puede ser .png, .jpg o .jpeg',
               type: 'error'
            });

       }else if(img['size'] > 3000000){
            
			$('#photo').val('');
			$('.img').attr('src', '../../assets/images/users/anonymous.png');
			
            swal({
               title: 'Error al subir la imagen',
               text: 'El tamaño no puede ser mayor a 3MB',
               type: 'error'
            });

       }else{

			var data = new FileReader;
			data.readAsDataURL(img);

			$(data).on('load', function(e){

				var route = e.target.result;
				$('.img').attr('src', route);

			});

       }
    });

});

(function($){"use strict"; $(window).on("load",function(e){$("#global-loader").fadeOut("slow");}) 
$(document).on("click","a[data-theme]",function(){$("head link#theme").attr("href",$(this).data("theme"));$(this).toggleClass('active').siblings().removeClass('active');}); $(document).on("click",".fullscreen-button",function toggleFullScreen(){$('.fullscreen-button').addClass('fullscreen-button');if((document.fullScreenElement!==undefined&&document.fullScreenElement===null)||(document.msFullscreenElement!==undefined&&document.msFullscreenElement===null)||(document.mozFullScreen!==undefined&&!document.mozFullScreen)||(document.webkitIsFullScreen!==undefined&&!document.webkitIsFullScreen)){if(document.documentElement.requestFullScreen){document.documentElement.requestFullScreen();}else if(document.documentElement.mozRequestFullScreen){document.documentElement.mozRequestFullScreen();}else if(document.documentElement.webkitRequestFullScreen){document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);}else if(document.documentElement.msRequestFullscreen){document.documentElement.msRequestFullscreen();}}else{$('html').removeClass('fullscreen-button');if(document.cancelFullScreen){document.cancelFullScreen();}else if(document.mozCancelFullScreen){document.mozCancelFullScreen();}else if(document.webkitCancelFullScreen){document.webkitCancelFullScreen();}else if(document.msExitFullscreen){document.msExitFullscreen();}}}) 
$(window).on("scroll",function(e){if($(this).scrollTop()>0){$('#back-to-top').fadeIn('slow');}else{$('#back-to-top').fadeOut('slow');}});$(document).on("click","#back-to-top",function(e){$("html, body").animate({scrollTop:0},0);return false;}); $(".cover-image").each(function(){var attr=$(this).attr('data-bs-image-src');if(typeof attr!==typeof undefined&&attr!==false){$(this).css('background','url('+attr+') center center');}}); $(function(){$('.add').on('click',function(){var $qty=$(this).closest('div').find('.qty');var currentVal=parseInt($qty.val());if(!isNaN(currentVal)){$qty.val(currentVal+1);}});$('.minus').on('click',function(){var $qty=$(this).closest('div').find('.qty');var currentVal=parseInt($qty.val());if(!isNaN(currentVal)&&currentVal>0){$qty.val(currentVal-1);}});}); if($('.chart-circle').length){$('.chart-circle').each(function(){let $this=$(this);$this.circleProgress({fill:{color:$this.attr('data-bs-color')},size:$this.height(),startAngle:-Math.PI/4*2,emptyFill:'#edf0f5',lineCap:'round'});});}
 
$('.modal-effect').on('click',function(e){e.preventDefault();var effect=$(this).attr('data-bs-effect');$('#modaldemo8').addClass(effect);}); $('#modaldemo8').on('hidden.bs.modal',function(e){$(this).removeClass(function(index,className){return(className.match(/(^|\s)effect-\S+/g)||[]).join(' ');});}); const DIV_CARD='div.card'; var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList=tooltipTriggerList.map(function(tooltipTriggerEl){return new bootstrap.Tooltip(tooltipTriggerEl)}) 
var popoverTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList=popoverTriggerList.map(function(popoverTriggerEl){return new bootstrap.Popover(popoverTriggerEl)}) 
$(document).on('click',function(e){$('[data-toggle="popover"],[data-original-title]').each(function(){
 if(!$(this).is(e.target)&&$(this).has(e.target).length===0&&$('.popover').has(e.target).length===0){(($(this).popover('hide').data('bs.popover')||{}).inState||{}).click=false
}});}); var toastElList=[].slice.call(document.querySelectorAll('.toast'))
var toastList=toastElList.map(function(toastEl){return new bootstrap.Toast(toastEl)})
$(document).on("click",'#liveToastBtn',function(){$('.toast').toast('show');}) 
$(document).on('click','[data-bs-toggle="card-remove"]',function(e){let $card=$(this).closest(DIV_CARD);$card.remove();e.preventDefault();return false;}); $(document).on('click','[data-bs-toggle="card-collapse"]',function(e){let $card=$(this).closest(DIV_CARD);$card.toggleClass('card-collapsed');e.preventDefault();return false;}); $(document).on('click','[data-bs-toggle="card-fullscreen"]',function(e){let $card=$(this).closest(DIV_CARD);$card.toggleClass('card-fullscreen').removeClass('card-collapsed');e.preventDefault();return false;}); $(document).on('change','.file-browserinput',function(){var input=$(this),numFiles=input.get(0).files?input.get(0).files.length:1,label=input.val().replace(/\\/g,'/').replace(/.*\//,'');input.trigger('fileselect',[numFiles,label]);});
 $('.file-browserinput').on('fileselect',function(event,numFiles,label){var input=$(this).parents('.input-group').find(':text'),log=numFiles>1?numFiles+' files selected':label;if(input.length){input.val(log);}else{if(log)alert(log);}}); $(document).on("click",'[data-bs-toggle="collapse"]',function(){$(this).toggleClass('active').siblings().removeClass('active');}); $(".clickable-row").on('click',function(){window.location=$(this).data("href");});$(document).on("click",'.layout-setting',function(){if(document){$('body').toggleClass('dark-mode');$('body').removeClass('transparent-mode');}else{$('body').removeClass('dark-mode');$('body').removeClass('transparent-mode');$('body').addClass('light-mode');}});let bodyRtl=$('body').hasClass('rtl');if(bodyRtl){$('body').addClass('rtl');$("html[lang=en]").attr("dir","rtl");$('body').removeClass('ltr');localStorage.setItem("rtl","True");$("head link#style").attr("href",$(this));(document.getElementById("style").setAttribute("href","../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));var carousel=$('.owl-carousel');$.each(carousel,function(index,element){ var carouselData=$(element).data('owl.carousel');carouselData.settings.rtl=true; carouselData.options.rtl=true;$(element).trigger('refresh.owl.carousel');});}
let bodyhorizontal=$('body').hasClass('horizontal');if(bodyhorizontal){$('body').addClass('horizontal');$(".main-content").addClass("hor-content");$(".main-content").removeClass("app-content");$(".main-container").addClass("container");$(".main-container").removeClass("container-fluid");$(".app-header").addClass("hor-header");$(".hor-header").removeClass("app-header");$(".app-sidebar").addClass("horizontal-main")
$(".main-sidemenu").addClass("container")
$('body').removeClass('sidebar-mini');$('body').removeClass('sidenav-toggled');$('body').removeClass('horizontal-hover');$('body').removeClass('default-menu');$('body').removeClass('icontext-menu');$('body').removeClass('icon-overlay');$('body').removeClass('closed-leftmenu');$('body').removeClass('hover-submenu');$('body').removeClass('hover-submenu1');localStorage.setItem("horizantal","True");$('#slide-left').removeClass('d-none');$('#slide-right').removeClass('d-none');if(document.querySelector('.horizontal').firstElementChild.classList.contains('login-img')!==true){document.querySelector('.horizontal .side-menu').style.flexWrap='nowrap'
checkHoriMenu();responsive();}}})(jQuery);function replay(){"use strict";let replayButtom=document.querySelectorAll('.reply a') 
let Div=document.createElement('div')
Div.setAttribute('class',"comment mt-5 d-grid") 
let textArea=document.createElement('textarea')
textArea.setAttribute('class',"form-control")
textArea.setAttribute('rows',"5")
textArea.innerText="Your Comment"; let cancelButton=document.createElement('button');cancelButton.setAttribute('class',"btn btn-danger");cancelButton.innerText="Cancel";let buttonDiv=document.createElement('div')
buttonDiv.setAttribute('class',"btn-list ms-auto mt-2") 
let submitButton=document.createElement('button');submitButton.setAttribute('class',"btn btn-success ms-3");submitButton.innerText="Submit"; Div.append(textArea)
Div.append(buttonDiv);buttonDiv.append(cancelButton);buttonDiv.append(submitButton);replayButtom.forEach((element,index)=>{element.addEventListener('click',()=>{let replay=$(element).parent()
replay.append(Div)
cancelButton.addEventListener('click',()=>{Div.remove()})})})}
replay()
$('.off-canvas').on('click',function(){$('body').addClass('overflow-y-scroll');$('body').addClass('pe-0');});let body=document.querySelector("body");window.addEventListener('resize',()=>{if(window.innerWidth<992){body.classList.remove('hover-submenu');body.classList.remove('closed-leftmenu');body.classList.remove('hover-submenu1');body.classList.remove('icontext-menu');}})
if(window.innerWidth<992){body.classList.remove('hover-submenu');body.classList.remove('hover-submenu1');body.classList.remove('icontext-menu');body.classList.remove('closed-leftmenu');}

