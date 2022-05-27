exports.signup = (req, res, next) => {
    // On hash le mot de passe
    bcrypt.hash(req.body.password, 10)
        // Si tout est OK on continue
        .then(hash => {
            // Ensuite on créer l'utilisateur en BDD
            const user = new User({
                email: req.body.email,
                password: hash,
                username: req.body.username
            });
            user.save()
                // Si tout est OK on retourne un message de succès
                .then(() => res.status(201).json({
                    message: 'Utilisateur créé !'
                }))
                // Sinon on retourne un message d'erreur
                .catch(error => res.status(400).json({
                    error
                }));
        })
        // sinon on retourne un message d'erreur
        .catch(error => res.status(500).json({
            error
        }));
};

exports.login = (req, res, next) => {
    // On récupère l'utilisateur en BDD
    User.findOne({
            username: req.body.username
        })
        // Si il existe on continue
        .then(user => {
            // On vérifie que le mot de passe est correct
            if (!user || !bcrypt.compareSync(req.body.password, user.password)) {
                // Sinon on retourne un message d'erreur
                return res.status(401).json({
                    error: 'Utilisateur ou mot de passe incorrect !'
                });
            }
            // On créer un token
            const token = jwt.sign({
                email: user.email,
                userId: user._id,
                username: user.username
            }, `${process.env.secretKey}`, {
                // La session de l'utilisateur va durer 1h ensuite il devra se reconnecter
                expiresIn: '1h'
            });
            // On retourne le token
            res.status(200).json({
                token,
                userId: user._id
            });
        })
        // Sinon on retourne un message d'erreur
        .catch(error => res.status(401).json({
            error
        }));
}