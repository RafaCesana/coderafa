var Visible = true
function ToggleOpenCloseDiv(ElementID, iconID, iconBeforeOpen, iconAfterOpen, iconStyle) {
    var Element = document.getElementById(ElementID);
    var Icon = document.getElementById(iconID);
    
    if(Visible) {
        Element.style.display = "block";
        Icon.innerHTML = '<i style="'+iconStyle+'" class="'+iconAfterOpen+'"></i>'
        Visible = false
    }
    else {
        Element.style.display = "none";
        Icon.innerHTML = '<i style="'+iconStyle+'" class="'+iconBeforeOpen+'"></i>'
        Visible = true
    }
}

var WhiteMode = true
function ToggleColorTheme() {
    var Icon = document.getElementById('toggle-colortheme-icon');

    if(WhiteMode) {
        Icon.innerHTML = '<i style="font-size:24px;" class="fa-solid fa-toggle-on"></i>'
        document.body.classList.toggle('White');
        WhiteMode = false
    }
    else {
        Icon.innerHTML = '<i style="font-size:24px;" class="fa-solid fa-toggle-off"></i>'
        document.body.classList.remove('White');
        WhiteMode = true
    }
}


function ChangeCode(ClickedButtonID, ContainerIDsConcat) {

    var aContainerIDs = ContainerIDsConcat.split(',');

    for(var i=0 ; i<aContainerIDs.length ; i++) {

        var ButtonName = "button-"+aContainerIDs[i];

        if( ClickedButtonID==ButtonName ) {
            document.getElementById(ClickedButtonID).className = "filled";
            document.getElementById(aContainerIDs[i]).className = "Displayed-container";
        }
        else {
            document.getElementById(ButtonName).className = "unfilled";
            document.getElementById(aContainerIDs[i]).className = "NonDisplayed-container";
        }
    }
}