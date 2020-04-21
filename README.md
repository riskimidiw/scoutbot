# Installation

## docker-compose

- Update environtment variables in .env file
	```
	vim .env
	```
- Build Project
    ```
    docker-compose build
    ```
- Run project
    ```
    docker-compose up
    ```
- Run database migration in another terminal
    ```
    ./migrate.sh
    ```
- Open this in your browser
    ```
    localhost:8000
    ```

## manual

- Update environtment variables in .env file
	```
	vim .env
	```
- Load Env Variable
    ```
    export $(cat .env)
    ```
- Migrate database
    ```
    make migrate
    ```
- Open this in your browser
    ```
    localhost
    ```
