const headerTag = document.querySelector("header")
const mainTag = document.querySelector("main")
const footerTag = document.querySelector("footer")
const hamburger = document.querySelector("#hamburger-btn")
const hamburgerLines = hamburger.querySelectorAll("div")

const kcLogoLight = document.querySelector(".kinsmen-logo-light")
const kcLogoDark = document.querySelector(".kinsmen-logo-dark")

const footerLogo = document.getElementById("kinsmen-icon-footer")
const polygonsFooterLogo = footerLogo.querySelectorAll("polygon")

const filterContainer = document.getElementById("filter-container")

filterContainer.style.display = "none";

var foreground = document.querySelectorAll('.fg');

const runScripts = () => {
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
}

runScripts()




barba.use(barbaCss)

barba.init({
    transitions: [
        {
            name: "fade",
            once(){
            },
            beforeEnter ({  current, next, trigger }) {
                runScripts()
                const headerLinks = document.querySelectorAll(".header-nav-desktop a")
                const href = next.url.path
                const splitString = href.split("/");
                headerLinks.forEach(link => {
                    if( link.getAttribute("href") === href ){
                        link.classList.add("active")
                    } else {
                        link.classList.remove("active")
                    }

                    if( link.getAttribute("href") == "/work" && splitString[1] == "category"){
                        link.classList.add("active")
                    }
                })

                if (splitString[1] == "category" || splitString[1] == "work"){
                    const filterContainerLinks = filterContainer.querySelectorAll("a")
                    filterContainerLinks.forEach(link => {
                        if (link.getAttribute("href") === href){
                            link.classList.add("selected")
                        } else {
                            link.classList.remove("selected")
                        }
                        
                    })
                }



                const hbHeight = document.getElementById('hb').clientHeight;
                hide(hbHeight);

                window.scrollTo({ //Let the page scroll to the top when going to another page
                    top: 0,
                    behavior: "smooth"
                })
            },
            enter ({ current, next, trigger }) {
                runScripts()
            }
        }
    ],

    views: [
        {
            namespace: 'work',
            beforeEnter(){
                filterContainer.style.display = "flex";
            },
            afterLeave(){
                filterContainer.style.display = "none";
            }
        }
    ]
})