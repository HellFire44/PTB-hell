const express = require('express');
const router = express.Router();

// Importation du Controller de la route
const authController = require('../controllers/auth');

// Definition de la route
router.post('/signup', authController.signup);
router.post('/login', authController.login);

module.exports = router;