
    function myFunction(){
        var links = document.getElementById("mobile-links");
        links.classList.toggle('isactive');
    }

        var myVideo = document.getElementById('myVideo');
        var inter = setInterval(function(){
            var y = window.pageYOffset;
            console.log(y);
            y > 1000 ? myVideo.play(): myVideo.pause();
            myVideo.addEventListener('ended', function(){
                clearInterval(inter);
            });
        }, 200);
