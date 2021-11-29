document.getElementById('categorieActu').addEventListener('change', function (){
    console.log(document.getElementById('categorieActu').value)
})


$.ajax(
    {
        url: '/actualites/ajaxRequest'
    }
).then(function (response){
    console.log(response)
})
