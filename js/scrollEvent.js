const navbar = document.getElementById("navbar");
navbar.style.top = '-180px'


let screenTop = document.getElementById('screenTop')
let screenBottom = document.getElementById('screenBottom')
setTimeout(() => {
    screenTop.classList.add('page-enter')
    screenBottom.classList.add('page-enter')
    setTimeout(() => {
        navbar.style.top = '0px'
        setTimeout(() => {
            document.getElementById('feather').classList.add('showDiv')
            setTimeout(() => {
                document.getElementById('homeTitle').classList.add('showDiv')
                setTimeout(() => {
                    document.getElementById('bella').classList.add('showDiv')
                }, 200);
            }, 200);
        }, 200);
    }, 1000);
}, 500);

let lastScrollTop = 100;

const divTransitions = [
    'homeTitle',
    'bella',
    'feather',
    'congratsTitle',
    'congratsContent',
    'cardInfluencer1',
    'cardInfluencer2',
    'cardInfluencer3',
    'influenceTitle',
    'influenceSubTitle',
    'aboutPhoto1',
    'aboutPhoto2',
    'aboutPhoto3',
    'aboutTitle1',
    'aboutTitle2',
    'aboutTitle3',
    'aboutSubtitle1',
    'aboutSubtitle2',
    'aboutSubtitle3',
    'aboutContent1',
    'aboutContent2',
    'aboutContent3',
]
const mainPage = document.getElementsByTagName('main')[0];

const bella = document.getElementById('bella');


window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop <= 10) {
        navbar.classList.remove('bg-white')
        navbar.classList.remove('shadow-lg')
        navbar.classList.add('shadow-sm')
    }else{
        navbar.classList.add('bg-white')
        navbar.classList.add('shadow-lg')
        navbar.classList.remove('shadow-sm')
    }
    if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.style.top = "-180px";
    } else {
        // Scrolling up
        navbar.style.top = "0";

    }
    lastScrollTop = scrollTop <= 100 ? 100 : scrollTop; // For mobile or negative scrolling

    const windowHeight = window.innerHeight;
    const windowBottom = window.scrollY + (windowHeight - 200)
    const windowtop = window.scrollY + 200
    const mainPageRect = mainPage.getBoundingClientRect();


    for (let index = 0; index < divTransitions.length; index++) {
        const element = divTransitions[index];
        let itemToAnimate = document.getElementById(element);
        
        const itemToAnimateTop = itemToAnimate.getBoundingClientRect().top - mainPageRect.top
        const itemToAnimateBottom = itemToAnimateTop + itemToAnimate.getBoundingClientRect().height

        if((windowBottom + 100 )> itemToAnimateTop && (windowtop- 100 ) < itemToAnimateBottom){
        
            const itemToAnimateRect = itemToAnimate.getBoundingClientRect();
            const itemToAnimateTop = itemToAnimateRect.top - mainPageRect.top
            const itemToAnimateBottom = itemToAnimateTop + itemToAnimateRect.height
    
    
            if( windowBottom > itemToAnimateTop  &&  windowtop < itemToAnimateBottom){
                itemToAnimate.classList.add("showDiv")
            }else{ 
                itemToAnimate.classList.remove("showDiv")
                
            }
        }else{
            
        }
    }










    // const bellaTop = bella.getBoundingClientRect().top - mainPageRect.top
    // const bellaBottom = bellaTop + bella.getBoundingClientRect().height

    // if((windowBottom + 100 )> bellaTop && (windowtop- 100 ) < bellaBottom){
        
    //     const bellaRect = bella.children[0].getBoundingClientRect();
    //     const bellaTop = bellaRect.top - mainPageRect.top
    //     const bellaBottom = bellaTop + bellaRect.height


    //     if( windowBottom > bellaTop  &&  windowtop < bellaBottom){
    //         bella.classList.add("slide-right")
    //     }else{ 
    //         bella.classList.remove("slide-right")
            
    //     }
    // }else{
    //     console.log("outside");
    // }
});