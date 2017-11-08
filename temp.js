    var demo = document.getElementById("demo");    

    function moms(pris,momssats){
        var prisInklMoms = pris * (momssats/100+1)
        return prisInklMoms.toFixed(2);
    }
    demo.innerHTML = moms(100,12);

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

    function klocka() {
        var d = new Date();
        var demo = document.getElementById("demo");
        demo.innerHTML = d.toLocaleTimeString();    
    }
    setInterval(klocka ,1000);