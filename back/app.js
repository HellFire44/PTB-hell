// Importation d'express
const express = require('express');

// Ajout des variable d'environnement (.env)
require('dotenv').config();

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

module.exports = app;