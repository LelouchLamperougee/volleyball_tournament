const button_description = document.getElementById('button-description')
const description = document.getElementById('description')

button_description.addEventListener('click', function (){
    if (description.classList.contains('hidden'))
        description.classList.remove('hidden')
})
