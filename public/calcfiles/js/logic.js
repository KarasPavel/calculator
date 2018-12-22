var g;
var dbg = 0;
var hello=1;
var zakaz_page = '';
function click_black(tgt){
    if ($(tgt.target).hasClass("cell") ){
        hidemod('');
    }
}


function gsa(a){
    var latt = $("#kolvoizd")[0];
    var fsqs1 = parseInt($("#kolvoizd")[0].value);

    if (fsqs1+a>0){
        latt.value = fsqs1+a;
    }
    setcena0();
}

function calc_top_b(a,b){

    if (a){
        $('.data').css("top",b+'px');
    } else {
        $('.data').css("top",b+'px');
    }

}

function jsh(a){
    if ($(document).scrollTop()>a){
        calc_top_b(true,0);
    } else {
        calc_top_b(false, a-$(document).scrollTop());
    }
}

window.onscroll = function() {
    if (window.innerWidth>800){
        jsh(85);
    } else {
        if (window.innerWidth<450){
            jsh(180);
        } else {
            jsh(140);
        }
    }
}


function getPosition(e) {
    var posx = 0;
    var posy = 0;

    if (!e) var e = window.event;

    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY;
    }
    else if (e.clientX || e.clientY) {
        posx = e.clientX + document.body.scrollLeft
            + document.documentElement.scrollLeft;
        posy = e.clientY + document.body.scrollTop
            + document.documentElement.scrollTop;
    }

    return {
        x: posx,
        y: posy
    }
}

function ID(a){
    var b = document.getElementById(a);
    return b;
}

function clocess(a,e){
    if ($(a.parentElement.parentElement).hasClass("up_block")){
        $(a.parentElement.parentElement).removeClass("up_block");
    } else {
        $(a.parentElement.parentElement).addClass("up_block");
    }
}

function getposss(e){
    if (Screen[1]=='1' | Screen[1]=='7'){
        $("#vspl")[0].style.left = e.clientX+35+'px';
        $("#vspl")[0].style.top = e.clientY-20+'px';
    }


}

var k;

window.onload = function(){
    //$(".clc").on("click",function(){showmod('Call')});
    $('#navblack').on("click",function(){closemenu();});
    $('#after').on("click",function(){next();});
    $('#before').on("click",function(){befr();});
    $('.menu_icon').on("click",function(){showmenu();});

    $('body').on("mousemove",function(){getposss(event);});
    $('.ring').on("click",function(){navckick(this);});
    $("#botnavpanel").css("opacity",1);
    $(".rdbpanel").find(".txtradio").on(function(){setcena0();});
    $(".Aphone").mask("9 (999) 999-9999");
    $(".black").on("click",function(){click_black(event);});
    resizes();
    scrool();
    //$.notify("Ok", "success");

    $(document).ready(function(){
        $('.slideshow-thumbs2').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',
            closeBtn: false,
            arrows: false,
            nextClick: true,
            helpers: {
                thumbs: {
                    width: 50,
                    height: 50
                }
            }
        });
    });

    setTimeout('$(".first_preloader").addClass("hide_preloader");', 1000);
}


var cl = "All";
function gal_goto(a){
    var idm = $(a).attr('goto');
    $('#_'+cl).removeClass('show_gblock'); cl = idm;
    $('#_'+cl).addClass('show_gblock');

    $('.sell').removeClass('sell');
    $(a).addClass('sell');
}


function vc(a,b){
    ID("text_title").style.opacity = 1;
    ID("text_title").style.visibility = "visible";

    ID("text_title").innerHTML = $(b).attr('inf');

    var cay = parseInt(getPosition(a).y - ID("items").offsetTop) -200;
    var cax = parseInt(getPosition(a).x - ID("items").offsetLeft) - 400;

    ID("text_title").style.top = cay + "px";
    ID("text_title").style.left = cax   + "px";
}

function vc3(a,b){
    var cay = parseInt(getPosition(a).y - ID("items").offsetTop) -200;
    var cax = parseInt(getPosition(a).x - ID("items").offsetLeft) - 400;

    ID("text_title").style.top = cay + "px";
    ID("text_title").style.left = cax   + "px";
}

function vc2(a,b){
    ID("text_title").style.opacity = 0;
    ID("text_title").style.visibility = "hidden";
}

function navckick(a){
    $(".select")[0].className = "ring";
    //a.className="ring select";

    var hfx =a.getAttribute('sh');
    $("#s"+hfx).addClass("select");
    goTo(hfx);
    closemenu();
}


window.onresize = function(){
    resizes();

}

function setWidth(){
    $(".b").css("width",$("#screen")[0].offsetWidth+'px'); //999
    $(".b").css("margin-left" ,-$("#screen")[0].offsetWidth/2+'px'); //999
}

function resizeWin(){
    $('#screen')[0].style.height = $('.center_block')[0].offsetHeight+150+'px';
}

function resizes(){
    ID("botnavpanel").style.width = ID("content").offsetWidth+'px';
    ID("botnavpanel").style.marginLeft = -ID("content").offsetWidth/2+'px';

    if ($("#items").length>0){
        var mheight = document.documentElement.clientHeight - 300;
        if (mheight<200){
            mheight=200;
        }
        var lkapp = Math.ceil(100/691*(mheight))/100;
        $(".bigLogo")[0].style.height = mheight+'px';
        $("#items")[0].style="transform: scale("+lkapp+")";
    }

    setWidth();

    odd = $(window).height();
    odd -= (odd/100)*20;
    $(".dialog_info").css('height',odd+'px');
    setTimeout("autoheught()", 500);

}
var odd = 0;

function autoheught(){
    if (Screen[1]=='3'){
        $('.d1')[0].style.height = '';
        $('.d2')[0].style.height = '';

        var b = $('.d1')[0];
        var b2 = $('.d2')[0];

        var h = b.clientHeight || b.offsetHeight;
        var h2 = b2.clientHeight || b2.offsetHeight;
        if (h>h2){
            $('.d1')[0].style.height = h+'px';
            $('.d2')[0].style.height = h+'px';
        } else {
            $('.d1')[0].style.height = h2+'px';
            $('.d2')[0].style.height = h2+'px';
        }
    }
}

function closemenu(){
    //ID("navblack").style.visibility = "hidden";
    //ID("navblack").style.opacity = "0";


    //$('nav')[0].style.right = "-50px";

    $('#navblack').addClass("hide_nav");

    $(".X")[0].className = "X Xcloce";
}

function showmenu(){
    //ID("navblack").style.visibility = "visible";
    //ID("navblack").style.opacity = "1";
    //$('nav')[0].style.right = "0px";
    $('#navblack').removeClass("hide_nav");
    $(".X")[0].className = "X";
}



function GTU(a){
    if (Screen[1]<a){
        for (var i = Screen[1]+1; i <= a; i++) {
            ID("box"+i).className = 'b bq';
        }
        Screen[2] = a;
        next();

    } else if (a<Screen[1]){
        for (var i = Screen[1]-1; i >= a; i--) {

            ID("box"+i).className = 'b bu';
        }

        Screen[0] = a;
        befr();
    }
}

function next(){
    if (Screen[1]<($('.b').length)){
        //BBBBBGG
        //dbg-=200;
        //document.body.style.backgroundPositionX = dbg+'px';

        if (Screen[0]!=0){
            ID("box"+Screen[0]).className = 'b bq';
        }
        ID("box"+Screen[2]).className = "b bu";

        ID("box"+Screen[1]).className = 'b bq';


        Screen[0]=Screen[2]-1;
        if (Screen[0]!=0){
            showme('fh')
            showme('before');
            ID("ft0").className = "nk2";
            $(".myroom_icon").addClass("hide");
            $(".ver001").removeClass('firstv2');
        }

        Screen[1]=Screen[2];
        if (Screen[1]<($('.b').length)){
            Screen[2]=Screen[1]+1;
        } else {
            Screen[2]=0;
        }




        //ID("box"+(Screen[1]-1)).className = 'b prev_block';
        ID("box"+Screen[0]).className = 'b prev_block';
        ID("box"+Screen[1]).className = 'b bu';
        ID("box"+Screen[1]).className = 'b center_block';
        if (Screen[2]!=0){
            ID("box"+Screen[2]).className = 'b next_block';
        } else {
            hide('after');
        }

        if (Screen[0]==6){
            $(".data").removeClass("calc_t_away");
        } else {
            $(".data").addClass("calc_t_away");
        }

        ID("box"+Screen[1]).innerHTML="<div class='Load'><div class='loaad'></div></div>";
        load_screen();


        $(".select")[0].className = "ring";
        ID('s'+Screen[1]).className="ring select";
        strel();
        scrool();
        history.pushState('11', null, urls[Screen[0]]);
    }
}

function befr(){

    if (Screen[0]!=0) {
        //BBBBBBBGGGGG
        //dbg+=200;
        //document.body.style.backgroundPositionX = dbg+'px';

        if (Screen[2]!=0){
            $("#box"+Screen[2]).addClass("bu");
        } else {
            showme('after');
        }

        $("#box"+Screen[1])[0].className = "b bu";

        Screen[0]=Screen[0]-1;
        Screen[1]=Screen[0]+1;
        Screen[2]=Screen[0]+2;


        if (Screen[0]==0) {
            hide('fh');
            hide('before');
            showme('after');
            ID("ft0").className = "";
            $(".myroom_icon").removeClass("hide");
            $(".ver001").addClass('firstv2');
        } else {
            $("#box"+Screen[0])[0].className = "b prev_block";
            showme('after');
        }

        ID("box"+Screen[1]).className = 'b bq';
        ID("box"+Screen[1]).className = 'b center_block';
        ID("box"+Screen[2]).className = 'b next_block';

        ID("box"+Screen[1]).innerHTML="<div class='Load'><div class='loaad'></div></div>";

        load_screen();

        if (Screen[0]==6){
            $(".data").removeClass("calc_t_away");
        } else {
            $(".data").addClass("calc_t_away");
        }



        $(".select")[0].className = "ring";
        ID('s'+Screen[1]).className="ring select";

        strel();
        scrool();
        history.pushState(null, null, urls[Screen[0]]);
    }
}

var pfs2ys = [0,0,0,0,0,0,0,0];

function kj21(){
    $.post("load_screen.php",{g:Screen[1]},function(data){  //alert(data);
        data = data.split("*|_|*");

        var k = data[0];
        ID("box"+data[2]).innerHTML=  k.substr(0,k.length-1);
        if (data[1]!="no"){

            if (pfs2ys[data[1]]!=1){
                $.getScript('https://v-t-x.ru/js/j'+data[1]+'.js');
                $.getScript('https://v-t-x.ru/js/menup.js');
            }

            resizes();

            setTimeout("resizeWin()", 500);
        }

    });
}


// function load_screen(){
//     toTop();
//     document.title = ttl_arr[Screen[0]];
//     $('meta[name="description"]').attr('content',sed_arr[Screen[0]]);
//     setTimeout("kj21()", 1000);
// }


var g1,g2;
function strel(){
    var klbtn = $('.hidden.bnttl');
    var klbtn2 = $('.show.bnttl');

    if ($('.prev_block')[0]){
        klbtn[0].innerHTML = $('.prev_block')[0].getAttribute('ttl');
        klbtn[0].className = "show bnttl";
        klbtn2[0].className = "hidden bnttl";
    }

    if ($('.next_block')[0]){
        klbtn[1].innerHTML = $('.next_block')[0].getAttribute('ttl');

        klbtn[1].className = "show bnttl";
        klbtn2[1].className = "hidden bnttl";
    }
}


function scrool(){
    var bhei = ID("box"+Screen[1]).offsetHeight;
    if (bhei>550) {
        ID("screen").style.height = bhei+100+"px";
    } else {
        ID("screen").style.height = "550px";
    }

}






function showme(a){
    var h = 'show ';
    for (var i = 1; i < ID(a).classList.length; i++) {
        h+=ID(a).classList[i];
    };
    ID(a).className = h;
}

function hide(a){
    var h = 'hidden ';
    for (var i = 1; i < ID(a).classList.length; i++) {
        h+=ID(a).classList[i];
    };
    ID(a).className = h;
}

function goTo(a){
    GTU(parseInt(a));
}

function cons(a){
    ID("cons").innerHTML += a+'<br>';
}





var CALC = [];
var CALC_info = [];
var wa = 1;

var tolsina = 0;
function c(a,b,c,d){  ////////////////////////
    CALC[a]=b;

    var The_block_info = "";
    var flo = 1;
    for (var i = 1; i < CALC.length; i++) {
        if (flo>a){
            CALC[i]=null;
        } else {
            The_block_info+=CALC[i];
        }
        flo++;
    }

    var ttll = '';
    $(c.parentElement).find(".u").removeClass("selecter selecter2");



    if ($(c).hasClass("box") ){
        $(c).addClass("selecter2");
        ttll = $(c).find(".ttls")[0].innerHTML;

    } else {
        $(c).addClass("selecter");
    }

    var kolap = $(".p");
    for (var i = kolap.length - 1; i >= 2; i--) {
        if (i-1==a){
            break;
        }
        kolap[i].className = "p hidden_block";
    };

    var next_block = ".u"+a+b;

    var ka = "";
    var at = "";

    if (a==1){
        $(c.parentElement.parentElement).addClass("up_block");
        addblock(next_block,2,d);

        ttll = c.innerHTML;
    }

    if (a==2){
        if (CALC[1]=='2'){
            ttll = c.innerHTML;
        }

        var ins = $("#i"+The_block_info)[0].innerHTML;
        $(c).parents(".p").addClass("up_block");



        $(c.parentElement).find(".box_info1")[0].innerHTML = ins;
        //} else {
        //	ttll = c.innerHTML;
        //}


        //CALC_info[i] = c.innerHTML;
        addblock(next_block,3,d);
    }

    if (a==3){
        var ins = $("#tolshina")[0].innerHTML;

        $(c).parents(".p").addClass("up_block");
        tolsina = c.innerHTML;
        ttll = c.innerHTML+' Ð¼Ð¼';

        $(c.parentElement.parentElement).find(".box_info1")[0].innerHTML = ins;
        addblock(".u31", 4, d);
    }

    if (a==4){
        var ins;
        if (b==2){
            ins = $("#i42")[0].innerHTML;
        } else if (b==4){
            ins = $("#i44")[0].innerHTML;
        } else {
            ins = $("#i41")[0].innerHTML;
        }

        $(c.parentElement).find(".box_info1")[0].innerHTML = ins;
        $($('.p')[5]).addClass("hidden_block");
    }

    if (a==5){
        ttll = c.innerHTML;
        var ins;
        if (tolsina==4 & CALC[5]=='3'){

            ins = $("#i54")[0].innerHTML;
        } else {
            ins = $("#i"+a+b)[0].innerHTML;
        }

        //alert(12);
        //if (CALC[5]!=3){
        //$(c).parents(".p").addClass("up_block");
        //}


        $(c.parentElement.parentElement).find(".box_info1")[0].innerHTML = ins;
        if (CALC[1]==1){
            if (CALC[3]==1){
                addblock('.u53',6,d);
            } else {
                addblock('.u51',6,d);
            }

        } else {
            addblock('.u52',6,d);
        }
        //yaCounter45979905.reachGoal('osn_priehali');
        addblock('.u61',7,false);
        setTimeout("resizeWin()", 400);
        setTimeout("resizeWin()", 4000);
    }

    wa = a;
    resizeWin();
    $(".hws").removeClass("up_block");
    df = c;
    $(c).parents(".p").find(".selstep")[0].innerHTML="["+ttll+"]";
    //$($(c.parents(".p"))[0].children[0]).find("calc_ttl")[0].innerHTML+=ttll;
    setcena0();

    CALC_info[i] = ttll;
}

var p0width = 0;
var p0height = 0;

function prebla5(){
    if ($("#wh08")[0].value!='' & $("#hg08")[0].value!=''){
        p0width = $("#wh08")[0].value/1000;
        p0height = $("#hg08")[0].value/1000;


        if (CALC[1]==1 & CALC[3]==1){
            addblock(".u444",5,false);
        } else {
            if (CALC[4]==1 | CALC[4]==4){
                addblock(".u41",5,false);
            } else {
                addblock(".u42",5,false);
            }

        }


        getcudro();
        setcena0();
    } else {
        $($('.p')[5]).addClass("hidden_block");
    }
}

function prebla3(){
    if ($("#rad08")[0].value!=''){
        p0width  = $("#rad08")[0].value/1000;
        p0height = $("#rad08")[0].value/1000;

        if (CALC[1]==1 & CALC[3]==1){
            addblock(".u444",5,false);
        } else {
            if (CALC[4]==1 | CALC[4]==4){
                addblock(".u41",5,false);
            } else {
                addblock(".u42",5,false);
            }
        }

        getcudro();
        setcena0();
    } else {
        $($('.p')[5]).addClass("hidden_block");
    }
}

var df;
function addblock(a,b,d){
    var block = $(a)[0].innerHTML;
    if (d){
        block = '<div class="box_info1">'+ block + $('.doppp')[0].innerHTML+'</div>';
    }
    var height =  $(a)[0].style.height;
    var hide = ($($(a)[0]).attr("dest")=="1");
    var title = $($(a)[0]).attr("title");
    var titleh =$($(a)[0]).attr("titleh");


    if (hide){
        $(".hidden_block").addClass("hidden_blockhhh");
    } else {
        $(".hidden_block").removeClass("hidden_blockhhh");
    }

    $($('.bus'+b)[0].parentElement).find(".calc_ttl")[0].innerHTML = title;

    $('.bus'+b)[0].parentElement.className = 'p';
    $('.bus'+b)[0].innerHTML = block;
    $('.bus'+b)[0].style.height = height;

    if (titleh!='0') {
        $(".hidden_block").find(".calc_ttl")[0].innerHTML = titleh;
        $(".hidden_block").find(".selstep")[0].innerHTML = '';
    }
}

function addbuttonsincalc(a,b){
    var ret="";
    for (var i = 0; i < a.length; i++) {
        ret+='<button class="v2">';
        ret+=a[i];
        ret+="</button>";
    };
    $('.'+b)[0].innerHTML=ret;
}

var bbb;
function showp(e,evnt){

    if (evnt.target.tagName!='polyline'){
        alert('11');
        if ($(e).hasClass("up_block")){
            e.className="p ";
        } else {
            e.className="p up_block";
        }
    } else {
        if ($(e).hasClass("up_block")){
            e.className="p ";
        } else {
            e.className="p up_block";
        }
    }
}


function getPolir(){
    var ret=0;
    if (tolsina=='3'){
        ret=polir[0];
    }

    if (tolsina=='4'){
        ret=polir[0];
    }

    if (tolsina=='5'){
        ret=polir[1];
    }

    if (tolsina=='6'){
        ret=polir[2];
    }
    if (tolsina=='8'){
        ret=polir[3];
    }

    if (tolsina=='10'){
        ret=polir[4];
    }

    if (tolsina=='12'){
        ret=polir[5];
    }

    if (tolsina=='15'){
        ret=polir[6];
    }
    if (tolsina=='19'){
        ret=polir[7];
    }
    return ret;
}







function getZakalka(){
    var ret=0;
    var vg = 0;

    switch (tolsina){
        case "3":  vg=0; break;
        case "4":  vg=1; break;
        case "5":  vg=2; break;
        case "6":  vg=3; break;
        case "8":  vg=4; break;
        case "10": vg=5; break;
        case "12": vg=6; break;
        case "15": vg=7; break;
        case "19": vg=8; break;
    }



    switch (CALC[2]){
        case 1: ret = zakalka1[vg]; break;
        case 2: ret = zakalka2[vg]; break;
        case 3: ret = zakalka3[vg]; break;
        case 4: ret = zakalka4[vg]; break;
        case 5: ret = zakalka5[vg]; break;
    }



    return ret;
}




function getfacet(){
    var tx = 0; var rt=0;

    if ($("#rdk1")[0].checked){ tx = 0; }
    if ($("#rdk2")[0].checked){ tx = 1; }
    if ($("#rdk3")[0].checked){ tx = 2; }
    if ($("#rdk4")[0].checked){ tx = 3; }
    if ($("#rdk5")[0].checked){ tx = 4; }

    if (tolsina==4){  rt = facet0[tx]; }
    if (tolsina==6){  rt = facet1[tx]; }
    if (tolsina==8){  rt = facet2[tx]; }
    if (tolsina==10){ rt = facet3[tx]; }
    if (tolsina==12){ rt = facet4[tx]; }
    if (tolsina==15){ rt = facet5[tx]; }
    if (tolsina==19){ rt = facet6[tx]; }


    return rt;

}


function CENA(){
    var td = parseInt(today);
    var ppa = 60*60*24;
    aday = 60*60*24;
    min = 60*60;

    var defaultprice = 0;
    if (CALC[1]==1){
        var material = CALC[2]+CALC[3];
        if (CALC[2]==1){ // ÐžÐ±Ñ‹Ñ‡Ð½Ð¾Ðµ ÑÑ‚ÐµÐºÐ»Ð¾
            defaultprice = f1prece111[CALC[3]-1];
        }
        if (CALC[2]==2){ // ÐžÐ¿Ñ‚Ð¸Ð²Ð°Ð¹Ñ‚
            defaultprice = f1prece121[CALC[3]-1];
        }
        if (CALC[2]==3){ // Ð‘Ñ€Ð¾Ð½Ð·Ð°
            defaultprice = f1prece131[CALC[3]-1];
        }
        if (CALC[2]==4){ // ÐœÐ°Ñ‚Ð¾Ð²Ð¾Ðµ
            defaultprice = f1prece141[CALC[3]-1];
        }
        if (CALC[2]==5){ // Ð¡ÐµÑ€Ð¾Ðµ
            defaultprice = f1prece151[CALC[3]-1];
        }
    }

    if (CALC[1]==2){
        var material = CALC[2]+CALC[3];

        if (CALC[2]==10){ // Ð¡ÐµÑ€ÐµÐ±Ñ€Ð¾
            defaultprice = f1prece21[CALC[3]-1];
        }
        if (CALC[2]==20){ // ÐºÐ»ÐµÑ€
            defaultprice = f1prece22[CALC[3]-1];
        }
        if (CALC[2]==30){ // Ð“Ñ€Ð°Ñ„Ð¸Ñ‚
            defaultprice = f1prece23[CALC[3]-1];
        }
        if (CALC[2]==40){ // Ð‘Ñ€Ð¾Ð½Ð·Ð°
            defaultprice = f1prece24[CALC[3]-1];
        }
        if (CALC[2]==50){ // Ð—Ð¾Ð»Ð¾Ñ‚Ð¾
            defaultprice = f1prece25[CALC[3]-1];
        }
        if (CALC[2]==60){ // Ð­ÐºÑÐºÐ»ÑŽÐ·Ð¸Ð²
            defaultprice = f1prece26[CALC[3]-1];
        }
    }

    if (defaultprice==undefined){
        defaultprice = 100;
    }

    defaultprice = ploshad*defaultprice;



    var coff = 1;

    if (CALC[4]==2){
        coff = 1.45;
    } else if (CALC[4]==3){
        coff = 1.55;
    } else if (CALC[4]==4){
        coff = 1.55;
    }


    if (CALC[5]==2){
        defaultprice += perimetr * (getPolir()*coff);
        if (CALC[4]==1){
            ppa += min*8;  //ÐºÐ²Ð°Ð´Ñ€Ð°Ñ‚ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==2){
            ppa += min*100;  //ÐºÑ€ÑƒÐ³ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==3){
            ppa += min*100;  //ÐºÑ€ÑƒÐ³ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==4){
            ppa += min*72;  //Ð¸Ð½Ð°Ñ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        //alert(getPolir() + ' - ' + perimetr);
    }

    if (CALC[5]==3){
        defaultprice += perimetr * getfacet();
        if (CALC[4]==1){
            ppa += min*12;  //ÐºÐ²Ð°Ð´Ñ€Ð°Ñ‚ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==2){
            ppa += min*130;  //ÐºÑ€ÑƒÐ³ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==3){
            ppa += min*130;  //ÐºÑ€ÑƒÐ³ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
        if (CALC[4]==4){
            ppa += min*75;  //Ð¸Ð½Ð°Ñ Ñ Ñ„Ð°Ñ†ÐµÑ‚Ð¾Ð¼
        }
    }

    if ($("#check24")[0].checked){
        defaultprice += ploshad * getZakalka();
        ppa += min*24;
    }

    if ($("#check25")[0].checked){
        defaultprice += $("#otverstia")[0].value * 200;
        ppa += (min * 2 * $("#otverstia")[0].value);
    }

    if ($("#check26")[0].checked){
        defaultprice += $("#skrgl")[0].value * 175;
        ppa += min*50;
    }




    if ($("#check27")[0].checked){  // Ð¿Ð¾ÐºÑ€Ð°ÑÐºÐ°
        defaultprice += ploshad * 2400;
        ppa += min*96;
    }

    if ($("#check28")[0].checked){  // ÑƒÑ„ Ð¿ÐµÑ‡Ð°Ñ‚ÑŒ
        defaultprice += ploshad * 3500;
        ppa += min*120;
    }

    if ($("#check29")[0].checked){ // Ð¿ÐµÑÐºÐ¾ÑÑ‚Ñ€ÑƒÐ¹
        if ($("#peskostr")[0].value == "1") {
            defaultprice += ploshad * 3100;
            ppa += min*264;
        } else {
            defaultprice += ploshad * 1000;
            ppa += min*64;
        }
    }



    defaultprice = defaultprice * parseInt($("#kolvoizd")[0].value);   // ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾

    if (defaultprice<300){
        defaultprice = 300;
    } else {
        defaultprice = parseInt(defaultprice.toFixed()); // ÐžÐºÑ€ÑƒÐ³Ð»ÐµÐ½Ð¸Ðµ Ð´Ð¾ 50
    }




    if ($("#check255")[0].checked){ // Ð¦ÐµÐ½Ð° Ð¼Ð¾Ð½Ñ‚Ð°Ð¶Ð°
        if (defaultprice/100*25 < 2000) {
            defaultprice+=2000;
        } else {
            defaultprice+=defaultprice/100*25;
        }
        ppa += min*48;
    }

    if ($("#check1").prop("checked")){
        defaultprice += (defaultprice/2);
        ppa=ppa/2;
    }





    if ($("#dos1")[0].checked){  // Ð´Ð¾ÑÑ‚Ð°Ð²ÐºÐ° Ñ†ÐµÐ½Ð°
        defaultprice += 800;
        ppa += min*8;
    }

    if ($("#dos2")[0].checked){ // Ð´Ð¾ÑÑ‚Ð°Ð²ÐºÐ°
        defaultprice += 1200;
        ppa += min*10;
    }

    if ($("#dos3")[0].checked){ // Ð´Ð¾ÑÑ‚Ð°Ð²ÐºÐ°
        defaultprice += 2500;
        ppa += min*24;
    }


    defaultprice = parseInt(defaultprice.toFixed());
    td+=ppa;

    lldaata(td);



    return defaultprice;
}



function lldaata(a){
    $.post("getData.php",
        {dt: a},
        function(data){
            var af = data.split('.');
            $("#day")[0].innerHTML=af[0];
            $("#month")[0].innerHTML=af[1];
            $("#yar")[0].innerHTML=af[2];
            $(".extra")[1].innerHTML='('+angtoru(af[3])+')';
        }
    );
}

function angtoru(a){
    var rt = '';
    switch (a){
        case "Monday": rt = "ÐŸÐ¾Ð½ÐµÐ´ÐµÐ»ÑŒÐ½Ð¸Ðº";	 break;
        case "Tuesday": rt = "Ð’Ñ‚Ð¾Ñ€Ð½Ð¸Ðº";	 break;
        case "Wednesday": rt = "Ð¡Ñ€ÐµÐ´Ð°";	 break;
        case "Thursday": rt = "Ð§ÐµÑ‚Ð²ÐµÑ€Ð³";	 break;
        case "Friday": rt = "ÐŸÑÑ‚Ð½Ð¸Ñ†Ð°";	 break;
        case "Saturday": rt = "Ð¡ÑƒÐ±Ð±Ð¾Ñ‚Ð°";	 break;
        case "Sunday": rt = "Ð’Ð¾ÑÐºÑ€ÐµÑÐµÐ½ÑŒÐµ";	 break;
    }
    return rt;
}

var perimetr = 0; //Ð’Ð°Ð¶Ð½Ð¾
var ploshad = 0; //Ð’Ð°Ð¶Ð½Ð¾
function getcudro(){
    perimetr = p0width+p0width + p0height+p0height;
    ploshad = p0width * p0height;
}



function setcena0() {
    $("#price")[0].innerHTML = CENA()+" Ñ€ÑƒÐ±.";
}

function showmod(a){
    $(".black").removeClass("black_show");
    $(".black").find(".win").removeClass("win_show");

    var modal = $("#"+a);
    $("#"+a).addClass("black_show");
    $("#"+a).find(".win").addClass("win_show");
}

function showmod2(a,b){
    showmod(a);
    $("#"+a).find("h2")[0].innerHTML=b;
}

var jjj;
function hidemod(a){
    var modal;
    if (a!=''){
        modal = $("#"+a);
    } else {
        modal = $(".black");
    }

    modal.removeClass("black_show");
    modal.find(".win").removeClass("win_show");


}


function cuser(a,b){
    if (b==1){
        document.cookie = "Name="+a.value+"; path=/";
    }
    if (b==2){
        document.cookie = "Phone="+a.value+"; path=/";
        phone = a.value;
    }
    if (b==3){
        document.cookie = "Mail="+a.value+"; path=/";
        mail = a.value;
    }
    if (b==4){
        document.cookie = "Address="+a.value+"; path=/";
    }
}


function showmessage(a){
    $("#message").find('h2')[0].innerHTML=a;
    $("#message").find('h3')[0].innerHTML='';
    showmod("message");
}


function showmessage2(a,b){
    $("#message").find('h2')[0].innerHTML=a;
    $("#message").find('h3')[0].innerHTML=b;
    $("#message").find('button')[0].innerHTML="Ð‘ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð°Ñ ÐºÐ¾Ð½ÑÑƒÐ»ÑŒÑ‚Ð°Ñ†Ð¸Ñ";
    showmod("message");
}


function showmessage2(a,b,c){
    $("#message").find('h2')[0].innerHTML=a;
    $("#message").find('h3')[0].innerHTML=b;

    if (c!=undefined){
        $("#message").find('button')[0].innerHTML=c;
    } else {
        $("#message").find('button')[0].innerHTML="Ð‘ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð°Ñ ÐºÐ¾Ð½ÑÑƒÐ»ÑŒÑ‚Ð°Ñ†Ð¸Ñ";
    }

    showmod("message");

}







function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function delete_cookie(cookie_name) {
    var cookie_date = new Date ( );  // Ð¢ÐµÐºÑƒÑ‰Ð°Ñ Ð´Ð°Ñ‚Ð° Ð¸ Ð²Ñ€ÐµÐ¼Ñ
    cookie_date.setTime ( cookie_date.getTime() - 1 );
    document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}








var zz = 1;

function z(a,b){
    var lok = b.parentElement;
    $(lok).find('.u').removeClass("selecter");
    $(b).addClass("selecter");
    /*
    if (a=='1'){
        $(lok.parentElement).find(".cena")[0].innerHTML = "Ð¡Ñ‚Ð¾Ð¸Ð¼Ð¾ÑÑ‚ÑŒ Ð²Ñ‹ÐµÐ·Ð´Ð° - 1000 Ñ€ÑƒÐ±.";
    } else if (a=='2'){
        $(lok.parentElement).find(".cena")[0].innerHTML = "Ð¡Ñ‚Ð¾Ð¸Ð¼Ð¾ÑÑ‚ÑŒ Ð²Ñ‹ÐµÐ·Ð´Ð° - 2500 Ñ€ÑƒÐ±.";
    }
*/
    zz = a;
}



var b_from = "Ð—Ð°ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð·Ð°Ð¼ÐµÑ€";
var b_block = "Ð‘Ð»Ð¾Ðº - ";
function Call(){
    var cphone = $("#clc_f_phone")[0].value;
    if (cphone!=""){
        $(".error_phone").addClass("hide_error");

        cname = $("#clc_f_name")[0].value;
        cadress = $("#clc_f_address")[0].value;
        if (zz==1){
            dataLayer.push({'event': 'zamerschik'});
        } else {
            dataLayer.push({'event': 'designer'});
        }
        var g = b_from+"<br>"+b_block+Screen[1]+'<br><br>';
        if (cname!=""){ g += 'Ð˜Ð¼Ñ: '+cname+'<br>'; }
        if (cphone!=""){ g += 'Ð¢ÐµÐ»ÐµÑ„Ð¾Ð½: '+cphone+'<br>'; }
        if (cadress!=""){ g += 'ÐÐ´Ñ€ÐµÑ: '+cadress+'<br>'; }

        g += 'Ð¡Ñ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°: ';
        if (zakaz_page==''){
            zakaz_page = document.location.href;
        }

        g += zakaz_page+'<br>';

        $.post("send.php",{g:g},function(data){

            //showmessage(data);
        });
        showmessage2("Ð—Ð°ÑÐ²ÐºÐ° Ð¿Ñ€Ð¸Ð½ÑÑ‚Ð°","ÐÐ°Ñˆ Ð¼ÐµÐ½ÐµÐ´Ð¶ÐµÑ€ ÑÐ²ÑÐ¶ÐµÑ‚ÑÑ Ñ Ð’Ð°Ð¼Ð¸<br> Ð² Ð±Ð»Ð¸Ð¶Ð°Ð¹ÑˆÐµÐµ Ð²Ñ€ÐµÐ¼Ñ","ÐŸÑ€Ð¾Ð´Ð¾Ð»Ð¶Ð¸Ñ‚ÑŒ");
    } else {
        $(".error_phone").removeClass("hide_error");
    }
}

var zakaz_page = "";

function spec(){
    var cphone = $("#clc_f_phone2")[0].value;
    if (cphone!=""){
        $(".error_phone2").addClass("hide_error");

        cname = $("#clc_f_name2")[0].value;
        cadress = $("#clc_f_address2")[0].value;

        var g = "Ð’Ñ‹Ð·Ð¾Ð² ÑÐ¿ÐµÑ†Ð¸Ð°Ð»Ð¸ÑÑ‚Ð°<br>"+b_from+"<br>"+b_block+Screen[1]+'<br><br>';
        if (cname!=""){ g += 'Ð˜Ð¼Ñ: '+cname+'<br>'; }
        if (cphone!=""){ g += 'Ð¢ÐµÐ»ÐµÑ„Ð¾Ð½: '+cphone+'<br>'; }
        if (cadress!=""){ g += 'ÐšÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¹: '+cadress+'<br>'; }



        $.post("send.php",{g:g},function(data){

            //showmessage(data);
        });

        showmessage2("Ð—Ð°ÑÐ²ÐºÐ° Ð¿Ñ€Ð¸Ð½ÑÑ‚Ð°","ÐÐ°Ñˆ Ð¼ÐµÐ½ÐµÐ´Ð¶ÐµÑ€ ÑÐ²ÑÐ¶ÐµÑ‚ÑÑ Ñ Ð’Ð°Ð¼Ð¸","ÐŸÑ€Ð¾Ð´Ð¾Ð»Ð¶Ð¸Ñ‚ÑŒ");
        dataLayer.push({'event': 'zvonok'});
    } else {
        $(".error_phone").removeClass("hide_error");
    }
}



function ORDER(){
    hidemod("korr");
    if (phone==''){
        showmod("userdata");
    } else if (mail==''){
        showmod("userdata");
    } else {
        showmessage2("ÐžÑ„Ð¾Ñ€Ð¼Ð»ÐµÐ½Ð¸Ðµ Ð·Ð°ÐºÐ°Ð·Ð°","ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð° Ð¿Ð¾Ð´Ð¾Ð¶Ð´Ð¸Ñ‚Ðµ", "Ð—Ð°Ð³Ñ€ÑƒÐ·ÐºÐ°");
        $.post("create_order.php", function(data){
            var lk = data.split(":");
            if (lk[0]=='log'){
                $("#log").find("input")[0].value = lk[1];
                showmod2('log',"Ð’Ð°Ñˆ Ð°ÐºÐºÐ°ÑƒÐ½Ñ‚ ÑƒÐ¶Ðµ ÐµÑÑ‚ÑŒ Ð² ÑÐ¸ÑÑ‚ÐµÐ¼Ðµ<br>Ð’Ð¾Ð¹Ð´Ð¸Ñ‚Ðµ Ð² Ð»Ð¸Ñ‡Ð½Ñ‹Ð¹ ÐºÐ°Ð±Ð¸Ð½ÐµÑ‚");
            }
            if (lk[0]=='ok'){
                delete_cookie("cx");
                delete_cookie("cxx");
                window.location.href = "order"+lk[1];
                showmessage2("Ð—Ð°ÐºÐ°Ð· Ð¾Ñ‚Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½","ÐœÐµÐ½ÐµÐ´Ð¶ÐµÑ€ Ð² Ð±Ð»Ð¸Ð¶Ð°Ð¹ÑˆÐµÐµ Ð²Ñ€ÐµÐ¼Ñ Ñ Ð’Ð°Ð¼Ð¸ ÑÐ²ÑÐ¶ÐµÑ‚ÑÑ","...");
            }
            if (lk[0]=='mes') {
                delete_cookie("cx");
                delete_cookie("cxx");
                showmessage(lk[1]);

            };
            //alert(data);
        });
    }
    dataLayer.push({'event': 'zakaz'});
}

function showvspl(e){
    var info = $(e).attr("wsp");
    $("#vspl")[0].innerHTML = info;
    $("#vspl").removeClass("hidevspl");
}

function showvspl2(e){

    $("#vspl")[0].innerHTML = e;
    $("#vspl").removeClass("hidevspl");
}


function hidespl(e){
    $("#vspl").addClass("hidevspl");
}


function sinfo(e){
    var ks = $(e).attr("sinfo");
    ks = ks.split("|");
    showmessage2(ks[0],ks[1]);
}


function moc(a, b, c){

    var The_block_info = "";
    var flo = 1;
    for (var i = 1; i < a; i++) {
        if (flo>a){
            CALC[i]=null;
        } else {
            The_block_info+=CALC[i];
        }
        flo++;
    }


    The_block_info+=b;


    if ($("#i"+The_block_info).length!=0){


        var ins = $("#i"+The_block_info)[0].innerHTML;


        if ($(c).hasClass("box")){
            var imm = $(c).find(".imagea").css('backgroundImage');
            ins = "<div class='prvimg' style='background-image: "+imm+"'></div>"+ins;

        }

        showvspl2(ins);
    }
}

function mx(){
    hidespl(0);
}


function okss(a){
    //var ing = $(a).find('option:selected').attr("goto");
    //alert(ing);
    gal_goto($(a).find('option:selected'));
}


function cicon(a){

    if (window.innerWidth<450){
        showmessage2($(a).find(".opis").attr("wininfo"),$(a).find(".opis")[0].innerHTML);
    }
}

function showfile(a){
    cacount = calc.split("|");

    $('#File').find('.all')[0].innerHTML='<iframe src="/loadfile.php?next=' + cacount.length + '&e='+a+'" style="width: 90%" frameborder="0"></iframe>';
    showmod("File");
}

function toTop(){
    $('body,html').animate({
        scrollTop: 0
    }, 1000);
}

var sellscxa = 0;
function select_gift(a){
    if (sellscxa==0){
        $('#gift'+a).addClass("selecter2");
        sellscxa=1;


        $.post('gift-53.php',{sel_gift: a},function(data){
            obj = JSON && JSON.parse(data) || $.parseJSON(data);

            $("#gift_info")[0].innerHTML = "<h3>"+obj['ttl']+'</h3><br>'+obj['dop'];


            for (var i = 1; i <= 5; i++) {
                $("#gift"+i).find(".imagea")[0].style.backgroundImage='url('+obj['img'+i]+')';
                $("#gift"+i).find(".ttls")[0].innerHTML = obj['btm'+i];
            };
            $("#gift_info").css("height", "128");
        });
    }
}
