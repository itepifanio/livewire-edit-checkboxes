# Livewire edit with checkboxes

This POC is based on [this stackoverflow question](https://stackoverflow.com/questions/72138039/livewire-retrieve-data-from-a-relation-manytomany) and shows how to build an edit page with checkboxes selected.

## Running

First, update your `.env` and setup your database. Then run the migrate seed command:

`php artisan migrate:fresh --seed`

The seeder contains a single blog post and two tags. The post has only one tag associated that should pop up selected on the edit page.

After run your local server:

`php artisan serve`

Access the url `localhost:8000/posts/1` where 1 should be the `id` of the post created on the seed command step (remember to use a correct id for this url).