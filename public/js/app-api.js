console.log('app-api.js');
window.addEventListener("load", init);


function init() {
    displayData(1);
}

function displayData($id){
    fetch("/api/" + $id).then(function(response){
        return response.json();
    }).then(function(data){
        console.log(data.extendedIngredients);
        buildHTML(data.extendedIngredients);
    }).catch(function(error){
        console.log(error);
    })
}

function buildHTML(entries)
{
    const list = document.querySelector('#recipe');
    entries.forEach(entry => {
        const child = document.createElement('li');
        child.innerText = entry.aisle;
        list.appendChild(child);
    })

    document.body.append(list);
}

