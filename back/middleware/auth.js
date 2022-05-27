const jwt = require('jsonwebtoken');

module.exports = (req, res, next) => {
    try {
        const token = req.body.token || req.query.token || req.headers["x-access-token"];
        const decodedToken = jwt.verify(token, `${process.env.secretKey}`);
        const userId = decodedToken.userId;
        if (req.body.userId && req.body.userId !== userId) {
            throw `ID de l'utilisateur invalide`;
        } else {
            next();
        }
    } catch (error) {
        res.status(401).json({
            error: error | 'Reqûete non authentifiée'
        });
    }
};