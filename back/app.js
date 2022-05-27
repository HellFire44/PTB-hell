// Importation d'express
const express = require('express');

// Moongoose sa sert a gérer la BDD
const mongoose = require('mongoose');

// Importation de la route pour la connexion/inscription
const authRoute = require('./routes/auth');

// Ajout des variable d'environnement (.env)
require('dotenv').config();

// Connexion a la BDD
mongoose
    .connect(`${process.env.mongoLink}`, {
        useNewUrlParser: true,
        useUnifiedTopology: true
    })
    .then(() => console.log('Connexion à MongoDB réussie !'))
    .catch(() => console.log('Connexion à MongoDB échouée !'));

// Utilisation de express
const app = express();

// Interception de toute les requêtes JSON
app.use(express.json());

// Petite protection des familles
app.use((req, res, next) => {
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    res.setHeader('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept, Authorization, Access-Control-Allow-Credentials');
    res.setHeader('Access-Control-Allow-Credentials', true);
    next();
});

// Je défini l'url de la route pour la connexion/inscription
app.use('/api/auth', authRoute);

module.exports = app;