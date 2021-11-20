# gestion-materiels

## User stories

Ce projet est l'interface Web de gestion du matériel pour PROMEO compiègne 
Les emprunts et restitution seront réaliser au travers d'un autre projet ==>

- L'utilisateur peux se connecter
- L'utilisateur n'a pas besoin de pouvoir créer un compte
- L'utilisateur peux ajouter du matériel
- L'utilisateur peux supprimer du matériel
- L'utilisateur peux modifier du materiel
- L'utilisateur peux lister le materiel


## Schemas relationnel

User
- user_id 
- login (email)
- password
- last_connection_date
- last_connection_ip

Materiel
- materiel_id
- denomination
- status_id (FK)

Status
- status_id 
- label

Emprunts