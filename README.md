
Rytis Klimavicius

-----Project creation-----
#to be added

-----Steps required to pull a project and configure on local------
1. git clone {projectURL} --Clone GitHub repository. 
2. composer install --Install composer dependencies from project dir. (laravel itself + other dependencies). it checks composer.json file.
3. npm install --Install npm dependencies (vue.js, bootstrap,lodash and laravel mix). Essentially these are JS or Node packages. Packages are listed in packages.json and it should be submitted to git repo. 
4. copy .env.example .env --create a copy of .env file
5. php artisan key:generate --create app encryption key. Laravel requires encryption key which is used to encode various elements like cookies, password and more. 
6. php artisan migrate:fresh --create a fresh database using database migration files.
Optional 7. php artisan db:Seed --fills database with starter/dummy data.

-----Push/Pull to repo----
git status --view files that are ready to commit
git add fileName --adds the files in the local repo and stages them for commit
git commit -m "updating readme file v3" --commits the tracked changes and prepares them to be pushed.
git 



-----Other Git Commands-----


---Git commands---

Git clone {projectURL} --clones an existing repository
Git init --initialise local repository as git repository

git add . -- Adds the files in the local repository and stages them for commit. To unstage a file, use 'git reset HEAD YOUR-FILE'.
git commit -m "First commit" --commits the tracked changes and prepares them to be pushed.

git remote add origin {remote repository url} --sets the new remote
git remote -v --verifies the new remote url

git push origin master --pushes everything to 'master'

git branch --check which branch your on




