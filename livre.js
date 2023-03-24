

const cards = document.querySelector('.list')

function displayChars(data) {
    data.forEach(char => {
        console.log(char)
        if (char.volumeInfo.title.length > 0) {
            // affiche les livre qui ont uniquement des images !
            if (char.volumeInfo.imageLinks) { 
            let card = document.createElement('li')
            card.className = 'card'
            
            card.innerHTML = `
                            <img class='img'src="${char.volumeInfo.imageLinks.smallThumbnail}"></img>
                            <h2 class='name'>${char.volumeInfo.title}</h2>   
                            <h3 class='auteur'>${char.volumeInfo.authors}</h3>
                            <button class='btn-list'>Ajouter à la liste</button>`
            cards.appendChild(card)

            const addToListBtn = card.querySelector('.btn-list')
            addToListBtn.addEventListener('click', () => {
                const book = new Book(char.volumeInfo.title, char.volumeInfo.authors)
                MyList.addToList(book)
            })
            }   
        }
    })
}

// fonction asynchrone de récupération des persos
// Connexion à toutes les pages de https://api.disneyapi.dev/characters
async function getChars(value) {
    cards.innerHTML = ''
    try {
            const response = await axios.get(`https://www.googleapis.com/books/v1/volumes?q=${value}&limit=40`)
            const { data } = await response
            console.log(data.items)

        
        displayChars(data.items)

    } catch (err) {
        console.log(err)
    }
}

const submit = document.querySelector('.submit');
const input = document.querySelector('.search-input');

submit.addEventListener("click", async ()=>{
    getChars(input.value) 
})

window.addEventListener('DOMContentLoaded', () => {
    const app = new App
    app.init()
})
    


class book {
    constructor(book, ul) {
        this.name = book.name
        this.auteur = book.auteur
        this.img = book.img 
        this.Status = book.Status
        this.List = ul
    }

    render() {
        const li = document.createElement('li')
        const h3 = document.createElement('h3')
        const img = document.createElement('img')
        const h4 = document.createElement('h4')

        const addBtn = document.createElement('button')
        const delBtn = document.createElement('button')
        addBtn.textContent = 'Ajouter'
        delBtn.textContent = 'Supprimer'

        delBtn.classList.add('del-btn')

        h3.textContent = this.name 
        img.src = this.img 
        h4.textContent = this.auteur  

        li.append(img, h3, h4)
        this.List.appendChild(li)

        if (this.Status != 'in-list') {
            li.appendChild(addBtn)
            addBtn.addEventListener('click', () => {MyList.addToList(this)})
        } else {
            li.appendChild(delBtn)
            delBtn.addEventListener('click', () => {MyList.removeFromList(this)})
        }
    }
}



class MyList {
    static myList = []

    static addToList(book) {
        book.Status = 'in-list'
        this.myList.push(book)
    }

    static removeFromList(item) {
        let newList = this.myList.filter(book => book.name !== item.name)
        this.myList = newList
        App.displayResults(newList)
    }
}






class App {
    init() {
        const listBtn = document.querySelector('.btn-list')
        
        // Écouteurs d'événements
        submit.addEventListener('click', () => {
            API.getData(input.value)
        })

        listBtn.addEventListener('click', () => {
            App.displayResults(MyList.myList)
        })
    }

    static displayResults(books) {
        const ul = document.querySelector('ul')

        ul.innerHTML = ""
    
        books.map((book) => {
            const newbook = new book(book, ul)
            newbook.render()
        })
    }
}

