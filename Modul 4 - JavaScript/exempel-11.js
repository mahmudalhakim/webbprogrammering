    var demo = document.getElementById("demo");    

    function rektangelArea(b,h){
        return b*h;
    }
    demo.innerHTML = rektangelArea(2,6);

    function rektangelOmkrets(b,h){
        return 2*b+2*h;
    }
    demo.innerHTML = rektangelOmkrets(2,6);

    function kvadratArea(s){
        return s*s;
    }
    demo.innerHTML = kvadratArea(5);

    function kvadratOmkrets(s){
        return 4*s;
    }
    demo.innerHTML = kvadratOmkrets(5);

    


