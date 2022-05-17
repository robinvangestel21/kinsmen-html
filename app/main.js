var foreground = document.querySelectorAll('.fg');

function hide(hbHeight){
    for (i = 0; i < foreground.length; i++){
        foreground[i].style.transition = 'transform 0.5s ease';
        foreground[i].style.transform = `translateY(0px)`;
    }
}
function show(hbHeight){
    for (i = 0; i < foreground.length; i++){
        foreground[i].style.transition = 'transform 0.5s ease';
        foreground[i].style.transform = `translateY(${hbHeight}px)`;
    }
}
function sliderHB(){
    var hbHeight = document.getElementById('hb').clientHeight;
    // hide hamburger menu
    if (foreground[0].style.transform == `translateY(${hbHeight}px)`){
        hide(hbHeight);
    // show hamburger menu
    } else {
        show(hbHeight);
    }
}


function checkWidth(){
    var hbHeight = document.getElementById('hb').clientHeight;
    if (window.innerWidth > 600){
        hide(hbHeight);
    }
}



function filter(){
    var p = document.querySelectorAll('#filter-link-container > a');
    if( document.getElementById('button-arrow').style.transform == 'rotate(0deg)' ){
        document.getElementById('button-arrow').style.transform = 'rotate(180deg)';
        for (i = p.length - 1; i > -1; i--){
            p.forEach(link => {
                link.style.opacity = 1;
                link.style.pointerEvents="auto";
                link.style.cursor="pointer";
            });
        };
    }else{
        document.getElementById('button-arrow').style.transform = 'rotate(0)';
        p.forEach(link => {
            link.style.opacity = 0;
            link.style.pointerEvents="none";
            link.style.cursor="default";
        });
    
    };
};

function clickedOnVimeoOverlay(index){
    let buttonId = 'vimeo-thumb-btn-' + index
    let iframeId = 'vimeo-player-' + index
    document.getElementById(buttonId).style.display = "none";
    var iframe = document.getElementById(iframeId);
    var player = new Vimeo.Player(iframe);
    player.play();
}