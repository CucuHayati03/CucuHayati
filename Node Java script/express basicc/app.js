const express = require('express')
const app = express()
const port = 3000

app.set('views', './views') // specify the views directory
app.set('view engine', 'ejs') // register the template engine

app.get('/', (req, res) => {
res.render('index', {
    name: 'cucu Hayati',
    umur: 17
})
app.get('/:name', (req, res) => res.send(`Nama saya : ${req.params.name}`))

app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`))