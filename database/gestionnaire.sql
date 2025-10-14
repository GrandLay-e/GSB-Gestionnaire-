CREATE TABLE gestionnaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30),
    prenom VARCHAR(30),
    login VARCHAR(15) UNIQUE,
    mdp VARCHAR(15),
    cp VARCHAR(15),
    ville VARCHAR(30),
    date_embauche DATE
);
