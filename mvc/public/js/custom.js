function showBasket() {
    var bask = document.getElementById('basket_empty');
    bask.style.display = "block";
}

function hideBasket() {
    var bask = document.getElementById('basket_empty');
    bask.style.display = "";
}

var path = "http://first/mvc/";
function setPlusIcon() {
    var rm = document.getElementById("right_menu");
    var allDivs = rm.getElementsByClassName("rm_tree");
    for (var i = 0; i < allDivs.length; i++) {
        var div = allDivs[i].getElementsByTagName("div");
        var tree = allDivs[i].getElementsByTagName("img");
        if (tree.length > 0) {
            tree[1].src = path + "public/img/tree/folder.png";
            if (div.length == 0) {
                tree[0].src =  path + "public/img/tree/join.gif";
            } else {
                tree[0].src =  path + "public/img/tree/plus.gif";
            }
        }
    }

    if (allDivs[allDivs.length - 1]) {
        tree[0].src =  path + "public/img/tree/plusbottom.gif";
    }
    var allA = rm.getElementsByTagName("A");
    for (var i = 0; i < allA.length; i++) {
        allA[i].addEventListener("click", aClick, false);
    }
}
window.onload = setPlusIcon;

function aClick(e){
    e = e || event;
    var odjA = e.target || e.srcElement;
    var div = odjA.parentNode;
    var lastDiv = div.parentNode.getElementsByClassName("rm_tree");
    var divs = div.getElementsByTagName("div");
    var img = div.getElementsByTagName("img");
    if(divs.length == 0) {
        return true;
    }
    for(var i=0; i<divs.length; i++) {
        if (divs[i].style.display == "block") {
            divs[i].style.display = "";
            img[1].src =  path + "public/img/tree/folder.png";
            if(lastDiv[lastDiv.length-1]){
                img[0].src =  path + "public/img/tree/plusbottom.gif";
            } else {
                img[0].src =  path + "public/img/tree/plus.gif";
            }
        } else {
            divs[i].style.display = "block";
            img[1].src =  path + "public/img/tree/imgfolder.png";
            if(lastDiv[lastDiv.length-1]){
                img[0].src =  path + "public/img/tree/minusbottom.gif";
            } else {
                img[0].src =  path + "public/img/tree/minus.gif";
            }
        }
        try {
            e.preventDefault();
        } catch (x) {
            e.returnValue = false;
        }
    }
}