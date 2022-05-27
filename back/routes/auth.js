const express = require('express');
const router = express.Router();

// Importation du Controller de la route
const authController = require('../controllers/auth');

// Definition de la route

// l'url total c'est /api/auth/signup
router.post('/signup', authController.signup);

// l'url total c'est /api/auth/login
router.post('/login', authController.login);

module.exports = router;