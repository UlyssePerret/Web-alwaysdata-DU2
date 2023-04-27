const APIRegion = "https://geo.api.gouv.fr/regions"
const APIDepartement = "https://geo.api.gouv.fr/regions/[codeRegion]/departements"
const APICommune = "https://geo.api.gouv.fr/departements/[codeDepartement]/communes"
const APIDataVille = "http://api.openweathermap.org/data/2.5/weather?q=Paris&appid=6c3b29817b5191f86aab6c5cd3df8a6a"
let paths = document.querySelectorAll('.map path')
let region = document.querySelector('#region')
let listeDepartement = document.querySelector("#liste-departement")

paths.forEach(path)

function path(item){

    item.addEventListener('click', function (e){

        region.innerHTML = item.id
        pathClique = e.target
        nomRegionPath = pathClique.id      
        window.location.href = "#select-page-anchor";
        mainFetch(nomRegionPath)
    })
}

function appendLI(arr){
    
    for(i=0;i<arr.length;i++){

        let li = document.createElement("li")
        li.innerHTML = arr[i]
        listeDepartement.appendChild(li)
    }
}

async function mainFetch(nomRegionPath){
    paths.forEach(path)
    const region = await fetch(APIRegion)
    .then(res => res.json())
    .then(json => json)

    for(i=0;i<region.length;i++){
        if(region[i].nom === nomRegionPath){
            x = region[i].code
        }
    }

    const codeRegion = await x
    const departements = await fetch(`https://geo.api.gouv.fr/regions/${codeRegion}/departements`)
    .then(res => res.json())
    .then(json => json)
    console.log(departements)
    let arrDepartements = []
    for(i=0;i<departements.length;i++){

        arrDepartements.push(departements[i].nom)

    }

    let removeRegion = document.getElementById("liste-departement")
    removeRegion.innerHTML = ""
    appendLI(arrDepartements)
    
}
