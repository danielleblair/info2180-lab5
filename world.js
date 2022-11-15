window.onload = function(){
    searchCountry();

}

function searchCountry(){
    const controls1 = document.getElementById('controls');
    const lookupBtn1 = controls1.querySelector('#lookup-country');
    const lookupBtn2 = controls1.querySelector('#lookup-cities');
    
    lookupBtn1.addEventListener("click", function(){
    var countryValue = document.getElementById("country").value;

    fetch('world.php?country='+countryValue+'&lookup=countries')
        .then(response => response.text())
        .then(data => {
            let result1 = document.getElementById('result');
            result1.innerHTML = data;
        })
        .catch(error => {
            console.log(error);
        });
});


    lookupBtn2.addEventListener("click", function(){
        var countryValue = document.getElementById("country").value;
    
        fetch('world.php?country='+countryValue+'&lookup=cities')
            .then(response => response.text())
            .then(data => {
                let result1 = document.getElementById('result');
                result1.innerHTML = data;
            })
            .catch(error => {
                console.log(error);
            });
});

}

