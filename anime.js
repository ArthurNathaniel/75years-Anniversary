
    document.addEventListener('DOMContentLoaded', function () {
        var picElements = document.querySelectorAll('.pic');

        var animations = [];

        picElements.forEach(function (pic, index) {
            var animation = anime({
                targets: pic,
                opacity: [0, 1],   
                translateY: ['20px', '0px'],  
                duration: 1000,    
                easing: 'easeInOutCubic',  
                autoplay: false,  
                delay: 500 * index, 
            });

            animations.push(animation);
        });

        animations.forEach(function (animation, index) {
            animation.play();
        });
    });

