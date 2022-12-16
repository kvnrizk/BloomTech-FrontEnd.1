
    function myFunction(){
        var links = document.getElementById("mobile-links");
        links.classList.toggle('isactive');
    }

    window.onload=function myVideo(){
    

        var myVideo = document.getElementById('myVideo');
        var inter = setInterval(function(){
            var y = window.pageYOffset;
            console.log(y);
            y > 1000 ? myVideo.play(): myVideo.pause();
            myVideo.addEventListener('ended', function(){
                clearInterval(inter);
            });
        }, 200);
    }
        function initMap(){
            var  location = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: location
            });
        }