# base de données
## Lignes de commande utilisées

 - **creation de fichier de migration de table: post et like**
   - `php artisan make:migration _create_posts_table `
   - `php artisan make:migration _create_likes_table `
- **creation des model Post et like**
  - `php artisan make:model Post`
  - `php artisan make:model Like`
- **migration de fichier  vire  la data base**
  - `php artisan migrate`
## MLD 
  - post (id,nom,content,Date_de_création,Date_de_modification,Référence)
  - like (id,nom,user,Date_de_création,Date_de_modification,Référence)