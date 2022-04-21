## Setup Guide
1. Run `composer install` to install all composer's dependencies
2. Run `npm install` to install all node's dependencies
3. Duplicate **.env.example** and rename this file to **.env**
4. If no error occured, run `php artisan key:generate` to generate the **API_KEY** in the **.env** file
5. Run `npm run dev` to generate all necessary js and css into the public folded
6. Finally, Run `php artisan serve` to kick start the project
