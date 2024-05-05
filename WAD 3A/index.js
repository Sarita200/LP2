const express = require('express');
const app = express();
const port = 3000 || ProcessingInstruction.env.PORT;

app.use(express.static('public'));

app.get('/', (req , res) => {
    res.sendFile("index.html");
});

app.listen(port, () => {
    console.log(`Server started on port ${port}`);
})