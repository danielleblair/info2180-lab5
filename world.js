window.onload = function(){
    searchCountry();
}

function searchCountry(){
    const controls1 = document.getElementById('controls');
    const lookupBtn = controls1.querySelector('#lookup');
    // console.log(controls1);
    // console.log(lookupBtn);
    
    
    lookupBtn.addEventListener("click", function(){
    var countryValue = document.getElementById("country").value;
    console.log(countryValue);

    fetch('world.php?country='+countryValue)
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
