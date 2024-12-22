const express = require('express');
const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.post('/submit', (req, res) => {
    const { nationality, cpf, ssn, passport } = req.body;

    if (nationality === 'brasileiro' && !cpf) {
        return res.status(400).json({ error: 'CPF é obrigatório para brasileiros.' });
    }

    if (nationality === 'americano' && !ssn) {
        return res.status(400).json({ error: 'SSN é obrigatório para americanos.' });
    }

    if (nationality === 'japones' && !passport) {
        return res.status(400).json({ error: 'Passaporte é obrigatório para japoneses.' });
    }

    return res.json({ message: 'Dados enviados com sucesso!', data: req.body });
});

app.listen(3000, () => {
    console.log('Servidor rodando em http://localhost:3000');
});
