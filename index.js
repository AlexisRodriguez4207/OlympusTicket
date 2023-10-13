const express = require("express")
const app = express()
const path = require("path")

// Settings
app.set("port", 3000)

// Middlewares
app.use(express.static(path.join(__dirname, "public")))


//Routes
app.get("/", (req, res) => {
    res.send("Hello World")
})

app.listen(app.get("port"), () => {
    console.log("Server is running on port 3000")
})

