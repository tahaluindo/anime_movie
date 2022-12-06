
function getdata(){
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '1658ff66aamsh699b709b3f58e9cp117eb4jsnef6fcb8655ea',
            'X-RapidAPI-Host': 'anime-db.p.rapidapi.com'
        }
    };
    fetch('https://anime-db.p.rapidapi.com/anime?page=1&size=10&search=Fullmetal&genres=Fantasy%2CDrama&sortBy=ranking&sortOrder=asc', options)
        .then(response => response.json())
        .then(response => console.log(response))
        .catch(err => console.error(err));
}
getdata()