
// Zadanie1

let liczba1E = document.querySelector('#liczba1')
let liczba2E = document.querySelector('#liczba2')
let btnE = document.querySelector('button')
let wynikE = document.getElementById('wynik')



btnE.addEventListener('click', (event) => {
    let liczba1 = liczba1E.valueAsNumber
    let liczba2 = liczba2E.valueAsNumber
    wynikE.innerHTML = `suma liczb to: ${liczba1 + liczba2}, a iloczyn to ${liczba1 * liczba2}`
})

// Zadanie2


let h2E = document.querySelector('h2')
h2E.addEventListener('click', (event) => {
    h2E.innerHTML = `Wojciech Walkowiak`
    h2E.style.color = 'red'
})


// Zadanie3

let krotkieE = document.getElementById('krotkie')
let srednieE = document.getElementById('srednie')
let poldlugieE = document.getElementById('poldlugie')
let dlugieE = document.getElementById('dlugie')
let wlosyBtn = document.getElementById('wlosy')
let rezultatE = document.getElementById('wynikWlosy')

wlosyBtn.addEventListener('click', (event) => {
    if(krotkieE.checked){
        rezultatE.innerHTML = `Cena strzyżenia: 25 zł.`
    }
    else if (srednieE.checked){
        rezultatE.innerHTML = `Cena strzyżenia: 30 zł.`
    }
    else if (poldlugieE.checked){
        rezultatE.innerHTML = `Cena strzyżenia: 40 zł.`
    }
    else if (dlugieE.checked){
        rezultatE.innerHTML = `Cena strzyżenia: 50 zł.`
    }
    else{
        rezultatE.innerHTML = `Wybierz dlugosc wlosow`
    }
})