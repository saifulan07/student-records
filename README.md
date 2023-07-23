Installation guideline

1. clone project

1.1 git clone https://github.com/saifulan07/student-records.git (https)

1.2  git clone git@github.com:saifulan07/student-records.git (ssh)

2. setup database connection at .env file.

3. run composer install

4. run php artisan key:generate

5. run php artisan migrate

6. run php artisan db:seed