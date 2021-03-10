//TypeWriter() calls the typewriter effect
// ES6 Class
class TypeWriter {
    constructor(txtElement, words, wait = 3000) {
        this.txtElement = txtElement;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;
    }

    type() {
        // Current index of word
        const current = this.wordIndex % this.words.length;
        // Get full text of current word
        const fullTxt = this.words[current];

        // Check if deleting
        if(this.isDeleting) {
            // Remove char
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            // Add char
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        // Insert txt into element
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
    
        // Initial Type Speed
        let typeSpeed = 50;
    
        if(this.isDeleting) {
            typeSpeed /= 2;
        }

        // If word is complete
        if(!this.isDeleting && this.txt === fullTxt) {
            // Make pause at end
            typeSpeed = this.wait;
            // Set delete to true
            this.isDeleting = true;
        } else if(this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 500;
        }

        setTimeout(() => this.type(), typeSpeed);
    }
} 
// Init App
function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);
}

//showcase() runs animation in the showcase section on button click
function showcase(){
    //check to see if showcase image has pulse
    var state = document.getElementById("showcase_img");
    if (state.classList.contains('pulse')) {
        //and if so, remove it
        state.classList.remove('pulse');
        //get the logo to pulse
        document.getElementById('logo').classList.add('pulse');
        //change to color
        document.getElementById("body").style.transition = "all 2s"; //2 sec trans time
        document.getElementById("body").style['filter'] = 'none';
        //show link panel
        document.getElementById("showcase_link_panel").style.transition = "all 2s"; //2 sec trans time
        document.getElementById("showcase_link_panel").style['left'] = '0%';
        //show services
        //service card transition time = 2s
        document.getElementById("front_end_card").style.transition = "all 0.5s"; //2 sec trans time
        document.getElementById("back_end_card").style.transition = "all 0.5s"; //2 sec trans time
        //bring in the services cards 2/4s after click
        setTimeout(function() {
            document.getElementById("front_end_card").style['right'] = '0%';
            //document.getElementById("back_end_card").style['left'] = '0%';
        }, 4000);
        setTimeout(function() {
            //document.getElementById("front_end_card").style['right'] = '0%';
            document.getElementById("back_end_card").style['left'] = '0%';
        }, 6000);
        //bring in the portfolio cards
        document.getElementById("portfolio").style.transition = "all 0.5s"; //2 sec trans time
        //bring in the portfolio cards 8s after click
        setTimeout(function() {
            document.getElementById("portfolio").style['left'] = '0%';
            //document.getElementById("back_end_card").style['left'] = '0%';
        }, 8000);
        //initiate typewriter 2s after image click
        setTimeout(function() {
            init();
        }, 2000);
        //chevron animation
        var chevCount = 0;
        document.getElementById("chev_0").style.transition = "all 0.5s"; //2 sec trans time
        document.getElementById("chev_1").style.transition = "all 0.5s"; //2 sec trans time
        document.getElementById("chev_2").style.transition = "all 0.5s"; //2 sec trans time
        document.getElementById("chev_3").style.transition = "all 0.5s"; //2 sec trans time
        setInterval(function(){ 
            switch (chevCount) {
                case 0:
                    document.getElementById("chev_0").style['opacity'] = '1';
                    document.getElementById("chev_1").style['opacity'] = '0';
                    document.getElementById("chev_2").style['opacity'] = '0';
                    document.getElementById("chev_3").style['opacity'] = '0';
                    chevCount = 1;
                    break;
                case 1:
                    document.getElementById("chev_0").style['opacity'] = '0';
                    document.getElementById("chev_1").style['opacity'] = '1';
                    document.getElementById("chev_2").style['opacity'] = '0';
                    document.getElementById("chev_3").style['opacity'] = '0';
                    chevCount = 2;
                    break;
                case 2:
                    document.getElementById("chev_0").style['opacity'] = '0';
                    document.getElementById("chev_1").style['opacity'] = '0';
                    document.getElementById("chev_2").style['opacity'] = '1';
                    document.getElementById("chev_3").style['opacity'] = '0';
                    chevCount = 3;
                    break;
                case 3:
                    document.getElementById("chev_0").style['opacity'] = '0';
                    document.getElementById("chev_1").style['opacity'] = '0';
                    document.getElementById("chev_2").style['opacity'] = '0';
                    document.getElementById("chev_3").style['opacity'] = '1';
                    chevCount = 0;
                    break;
                default:
                    break;
            }
        }, 1000);
    }
}
    