
const fs = require('fs');
const app = express();


app.use(express.json());
app.use(express.static('public'));

app.post('/save', (req, res) => {
    const { data } = req.body;
    fs.appendFile('database.txt', data + '\n', (err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Veri kaydedilemedi');
            return;
        }
        res.status(200).send('Veri kaydedildi');
    });
});

