// Moongoose sa sert a gérer la BDD
const moongoose = require('mongoose');

// En gros sa sert à faire en sorte qu'il y ai que des truc unique dans la BDD quand défini
const uniqueValidator = require('mongoose-unique-validator');

const userSchema = new moongoose.Schema({
    email: {
        type: String,
        required: true,
        unique: true
    },
    password: {
        type: String,
        required: true
    },
    username: {
        type: String,
        required: true,
        unique: true
    },
});

userSchema.plugin(uniqueValidator);

// On exporte le Schema pour l'utiliser partout 
module.exports = moongoose.model('User', userSchema);