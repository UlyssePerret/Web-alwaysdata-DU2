var btn = document.getElementById('btn')
let resultatAPI;   
var description = document.getElementById('description');    
var hum = document.getElementById('humidity');    
var temp = document.getElementById('temp');    


btn.addEventListener('click', function(){

    var input = document.getElementById('input').value
    fetch(`http://api.openweathermap.org/data/2.5/weather?q=${input}&appid=6c3b29817b5191f86aab6c5cd3df8a6a&lang=fr&units=metric`)
    .then(res => res.json())
    .then(data => {
        
        resultatAPI = data;
        console.log(resultatAPI)

        temp.innerText = Math.round(data.main.temp) + "°C";
        hum.innerText = data.main.humidity + "%";
        description.innerText = data.weather[0].description;







    })

})









