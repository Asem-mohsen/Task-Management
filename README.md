A simple Laravel application for managing Projects and their associated Tasks.
Features include full CRUD for Projects and Tasks, and drag-and-drop task reordering with automatic priority updates.

✨ Features

Projects
Create, View, Edit Projects.

Tasks
-Create, View, Edit, and Delete tasks under a project.
-Assign tasks to a specific project.
-Tasks have priorities that automatically reorder.

Drag and Drop Reordering
-Reorder tasks inside a project easily by dragging them.
-Priorities are automatically updated.


How to Setup & Deploy
1. Clone the repository
    git clone https://github.com/Asem-mohsen/Task-Management.git
    cd project-folder-name

2. Install Dependencies
    composer install
    npm install && npm run dev

3. Set up Environment
    Copy .env.example to .env and configure your database connection:
    cp .env.example .env
    Edit .env and set:
    DB_DATABASE=your_database

4. Generate App Key
    php artisan key:generate

5. Run Migrations and Seeders
    This will create tables and populate dummy data for testing (users, projects, tasks):

    php artisan migrate --seed

    The seeders will create:
    3 sample projects
    5 tasks for each project
    Sample user(s)

6. Serve the Application
    php artisan serve